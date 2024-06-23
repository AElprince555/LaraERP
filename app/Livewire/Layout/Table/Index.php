<?php

namespace App\Livewire\Layout\Table;

use App\Models\Application;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Component;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $app;
    public $columns = [];
    public $selected_columns = [];
    public $applicationModule;
    public $generalSearch;
    #[NoReturn]
    public function mount(String $app): void
    {
        $this->app = "\\App\\Models\\" . $app;
        $app = new $this->app();
        $this->applicationModule = Application::find($app->application());
        $showColumns = $this->applicationModule->settings['show'];
        $collection = collect($showColumns);
        $sorting = $collection->sortBy(function ($value , $key) {
            return array_search($key , $this->applicationModule->settings['sorting']);
        });
        $this->selected_columns = $sorting;
    }

    public function updateColumn($columnKey) {
        $this->selected_columns[$columnKey] = !$this->selected_columns[$columnKey];
    }
    public function updatedGeneralSearch(): void
    {
        $this->resetPage();
    }

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $query= new $this->app;
        $query = $query::query();
        foreach ($this->columns as $column){
            $query->orWhere($column, 'LIKE', '%' . $this->generalSearch . '%');
        }
        $records =$query->orderBy('created_at' , 'desc')->paginate(10);

        return view('livewire.layout.table.index', ['records' => $records]);
    }
}
