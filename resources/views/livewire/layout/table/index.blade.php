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
    <input type="search" wire:model.blur="generalSearch"  placeholder="Search" class="form-control">
    <div class="flex justify-center max-w-7xl mx-auto overflow-x-auto">
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
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-20">
        {{ $records->links() }}
    </div>

</div>
