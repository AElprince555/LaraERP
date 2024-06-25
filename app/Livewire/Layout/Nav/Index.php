<?php

namespace App\Livewire\Layout\Nav;

use App\Livewire\Actions\Logout;
use Livewire\Component;

class Index extends Component
{
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
    public function render()
    {
        return view('livewire.layout.nav.index');
    }
}
