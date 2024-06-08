<?php

namespace App\Livewire\Layout\Table;

use Livewire\Component;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
class Index extends Component
{

    public $modelName;
    public $columns = [];
    public $selected_columns = [];

    public function mount(String $modelName) {
        $this->modelName = "\\App\\Models\\" . $modelName;

        // Get table columns
        $columns = Schema::getColumnListing((new $this->modelName)->getTable());
        $this->columns = array_filter($columns, function($column) {
            return !in_array($column, ['id', 'created_at', 'updated_at' , 'permissions' , 'log' , 'settings']);
        });
        $this->selected_columns = collect(array_filter($this->columns, function($column) {
            return !in_array($column, ['flag']);
        }));
    }

    public function toggleColumn($column) {
        if (in_array($column, $this->selected_columns)) {
            // Remove column from selected
            $key = array_search($column, $this->selected_columns);
            unset($this->selected_columns[$key]);
        } else {
            // Add column to selected
            $this->selected_columns[] = $column;
        }

        $this->selected_columns = array_values($this->selected_columns);
    }

    public function render()
    {
        // Get all records
        $records = $this->modelName::paginate(10);

        return view('livewire.layout.table.index', ['records' => $records]);
    }
}
