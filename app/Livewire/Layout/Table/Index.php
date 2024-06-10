<?php

namespace App\Livewire\Layout\Table;

use Livewire\Component;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $modelName;
    public $columns = [];
    public $selected_columns = [];
    public $generalSearch;
    public function mount(String $modelName) {
        $this->modelName = "\\App\\Models\\" . $modelName;

        // Get table columns
        $columns = Schema::getColumnListing((new $this->modelName)->getTable());
        $this->columns = array_filter($columns, function($column) {
            return !in_array($column, ['id', 'created_at', 'updated_at' , 'permissions' , 'log' , 'settings']);
        });
        $this->selected_columns = array_fill_keys($this->columns, true);
    }

    public function updateColumn($columnKey) {
        $this->selected_columns[$columnKey] = !$this->selected_columns[$columnKey];
    }
    public function updatedGeneralSearch() {
        $this->resetPage();
    }

    public function render()
    {
        $query= new $this->modelName;
        $query = $query::query();
        foreach ($this->columns as $column){
            $query->orWhere($column, 'LIKE', '%' . $this->generalSearch . '%');
        }
        $records =$query->paginate(10);

        return view('livewire.layout.table.index', ['records' => $records]);
    }
}
