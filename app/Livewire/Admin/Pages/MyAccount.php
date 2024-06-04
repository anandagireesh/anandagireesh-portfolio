<?php

namespace App\Livewire\Admin\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;

class MyAccount extends Component
{
    public $breadTitle='';

    public function mount()
    {
        $this->breadTitle = 'My Account';
    }

    #[Layout('components.layouts.admin')]
    public function render()
    {
        return view('livewire.admin.pages.my-account');
    }
}
