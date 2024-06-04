<?php

namespace App\Livewire\Admin\Section;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function logout(){
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
    return redirect('user-login');
    }
    public function render()
    {
        return view('livewire.admin.section.logout');
    }
}
