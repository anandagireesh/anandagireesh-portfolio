<?php

namespace App\Livewire\Admin\Navigation;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;

class Topbar extends Component
{
    public $name;
    public $role;

    public $profilePic;

    #[On('refresh-about-me')]
    public function updateList()
    {
        $this->name = Auth::user()->name;
        $this->role = Auth::user()->role;
        $this->profilePic = Auth::user()->profile_pic;
    }

    public function mount()
    {
        $this->name = Auth::user()->name;
        $this->role = Auth::user()->role;
        $this->profilePic = Auth::user()->profile_pic;
    }
    public function render()
    {
        return view('livewire.admin.navigation.topbar');
    }
}
