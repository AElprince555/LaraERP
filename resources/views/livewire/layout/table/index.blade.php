<div class="w-full px-6  overflow-x-auto">
    <details class="mb-8">
        <summary>Select Columns</summary>
        <div class="p-4 space-y-2">
            @foreach($columns as $key => $column)
                <div wire:key="{{$key}}">
                    <input
                        type='checkbox'
                        name="selectedColumns"
                        wire:change="toggleColumn({{$column}})"
                        id='{{$column}}'
                        class="rounded"
                        :checked="{{$selected_columns->contains($column)}}"
                    />
                    <label for='{{$column}}'>{{$column}}</label>
                </div>
            @endforeach
        </div>
    </details>
    @foreach($selected_columns as $columna)
        {{$columna}} <br>
    @endforeach
{{--
    <div class="flex justify-center max-w-7xl mx-auto overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 shadow-sm rounded-lg overflow-hidden">
            <thead class="bg-gray-50">
            <tr>
                @foreach($selected_columns as $key => $column)
                    <th
                        wire:key="$key"
                        scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                    >
                        {{ ucwords(str_replace("_", " ", $column)) }}
                    </th>
                @endforeach
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach($records as $record)
                <tr wire:key="$record->id">
                    @foreach($selected_columns as $column)
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">{{ $record->$column }}</div>
                        </td>
                    @endforeach
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-20">
        {{ $records->links() }}
    </div>--}}

</div>
