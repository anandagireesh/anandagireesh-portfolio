<?php

namespace App\Livewire\Admin\Navigation;

use Livewire\Component;

class Breadcrumb extends Component
{
    public $breadTitle;

    public function mount($breadTitle = null)
    {
        $this->breadTitle = $breadTitle;
    }
    public function render()
    {
        return view('livewire.admin.navigation.breadcrumb');
    }
}
