<?php

namespace App\Livewire\Admin\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{
    #[Layout('components.layouts.admin')]
    public function render()
    {
        return view('livewire.admin.pages.dashboard');
    }
}
