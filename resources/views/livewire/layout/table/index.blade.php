<div class="w-full px-6  overflow-x-auto">
    <details
        class="mb-8"
        @click.self="this.open = true"
        x-data="{ open: true }"
        x-bind:open="true"
    >
        <summary>Select Columns</summary>
        <div class="p-4 grid grid-cols-4 gap-4">
            @foreach($selected_columns as $key => $column)
                <div wire:key="{{$key}}">
                    <input
                        type='checkbox'
                        name="selectedColumns"
                        wire:model.live.debounce="selected_columns.{{$key}}"
                        wire:click.prevent='updateColumn("{{$key}}")'
                        id='{{$key}}'
                        class="rounded"
                    />
                    <label for='{{$key}}'>{{$key}}</label>
                </div>
            @endforeach
        </div>
    </details>

    <div class="flex justify-between mb-2">
        <input
            type="search"
            wire:model.blur="generalSearch"
            placeholder="Search"
            class="form-control"
        >
        <button
            type="button"
            class="bg-gray-800 text-white font-semibold py-2 px-4 rounded"
            x-data=""
            x-on:click.prevent="$dispatch('open-modal', 'add-modal')"
        >
            Add New
        </button>
    </div>
    <livewire:layout.table.add-modal/>
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
                            wire:key="$key"
                            scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                        >
                            {{ ucwords(str_replace("_", " ", $key)) }}
                        </th>
                    @endif
                @endforeach
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">actions</th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach($records as $record)
                <tr wire:key="$record->id">
                    <td class="px-6 py-4 whitespace-nowrap">{{ ($records ->currentpage()-1) * $records ->perpage() + $loop->index + 1 }}</td>
                    @foreach($selected_columns as $key=>$column)
                        @if($column)
                            <td class="px-6 py-4 whitespace-nowrap">
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
                                <x-menu.items>
                                    <x-menu.close>
                                        <x-menu.item>Delete</x-menu.item>
                                    </x-menu.close>
                                    <x-menu.close>
                                        <x-menu.item>Update</x-menu.item>
                                    </x-menu.close>
                                </x-menu.items>
                            </x-menu>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div
            wire:loading
            wire:target="generalSearch"
            class="opacity-50 bg-white absolute inset-0 "
        >

        </div>
        <div
            wire:loading.flex
            wire:target="generalSearch"
            class="flex justify-center items-center absolute inset-0 "
        >
            <x-icon.spinner size="8"/>
        </div>
    </div>
    <div class="mt-20">
        {{ $records->links() }}
    </div>

</div>
