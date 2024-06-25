<div class="w-full px-6  overflow-x-auto">
    <div
        class="my-2"
        x-data="{ open: false }"
    >
        <x-primary-button
            @click="open = !open"
        >Toggle Columns
        </x-primary-button>

        <div
            x-show="open"
            class="mt-2"
        >
            @foreach($selected_columns as $key=>$column)
                <div wire:key="{{$key}}">
                    <input
                        type='checkbox'
                        name="selectedColumns"
                        wire:model.live.debounce="selected_columns.{{$key}}"
                        wire:click.prevent='updateColumn("{{$key}}")'
                        id='{{$key}}'
                        class="rounded"
                    />
                    <label
                        for='{{$key}}'
                    >{{$key}}</label>
                </div>
            @endforeach
        </div>
    </div>
    <div class="flex justify-center max-w-7xl mx-auto overflow-x-auto relative">
        <table class="min-w-full divide-y divide-gray-200 shadow-sm rounded-lg overflow-hidden">
            <thead class="bg-gray-50">
            <tr>
                <th
                    scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                >#
                </th>
                @foreach($selected_columns as $key => $column)
                    @if($column)
                        <th
                            wire:key="{{$key}}"
                            scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                        >
                            {{ucwords($applicationModule->settings['display'][$key])}}
                        </th>
                    @endif
                @endforeach
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">actions</th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach($records as $record)
                <tr wire:key="{{$record->id}}">
                    <td class="px-6 py-4 whitespace-nowrap">{{ ($records ->currentpage()-1) * $records ->perpage() + $loop->index + 1 }}</td>
                    @foreach($selected_columns as $key=>$column)
                        @if($column)
                            <td
                                class="px-6 py-4 whitespace-nowrap"
                                wire:key="{{$key}}"
                            >
                                <div class="text-sm text-gray-500">{{ $record->$key }}</div>
                            </td>
                        @endif
                    @endforeach
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center justify-center text-center">
                            <x-menu>
                                <x-menu.button class="rounded hover:bg-gray-100">
                                    <x-icon.ellipsis-vertical/>
                                </x-menu.button>
                                <x-menu.items >
                                    <x-menu.close >
                                        <x-menu.item >
                                            @livewire($delete , ['id'=>$record->id ] , key($record->id))
                                        </x-menu.item>
                                    </x-menu.close>
                                    <x-menu.close>
                                        <x-menu.item >
                                            @livewire($edit , ['id'=>$record->id] , key($record->id))
                                        </x-menu.item>
                                    </x-menu.close>
                                </x-menu.items>
                            </x-menu>
                        </div>
                    </td>
                    @livewire($form , ['id'=>$record->id] , key($record->id))
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="mx-5">
        {{ $records->links() }}
    </div>

</div>
