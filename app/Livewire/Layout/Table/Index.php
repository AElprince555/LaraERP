<?php

namespace App\Livewire\Layout\Table;

use App\Models\Application;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
use function Pest\Laravel\castAsJson;

class Index extends Component
{
    use WithPagination;

    public $app;
    public $columns = [];
    public $selected_columns = [];
    public $applicationModule;
    public $generalSearch;
    public $delete;
    public $edit;
    public $form;

    #[NoReturn]
    public function mount(string $app): void
    {
        $this->app = "\\App\\Models\\" . $app;
        $app = new $this->app;
        $this->applicationModule = Application::find($app->application());
        $this->delete = $this->applicationModule->methods->where('short', 'delete')->first()->view;
        $this->edit = $this->applicationModule->methods->where('short', 'update')->first()->view;
        $this->form = $this->applicationModule->methods->where('short', 'form')->first()->view;
        $showColumns = $this->applicationModule->settings['show'];
        $collection = collect($showColumns);
        if ($this->applicationModule->settings['sorting']) {
            $sorting = $collection->sortBy(function ($value, $key) {
                return array_search($key, $this->applicationModule->settings['sorting']);
            });
            $this->selected_columns = $sorting;
        }
        else{$this->selected_columns = $collection;}
    }

    #[On('record-created')]
    #[On('record-deleted')]
    #[On('record-updated')]
    public function recordUpdate()
    {
        $this->render();
    }

    public function updateColumn($columnKey): void
    {
        $this->selected_columns[$columnKey] = !$this->selected_columns[$columnKey];
    }

    public function updatedGeneralSearch(): void
    {
        $this->resetPage();
    }

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $query = new $this->app;
        $query = $query::query();
        foreach ($this->columns as $column) {
            $query->orWhere($column, 'LIKE', '%' . $this->generalSearch . '%');
        }
        $records = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('livewire.layout.table.index', ['records' => $records]);
    }
}
