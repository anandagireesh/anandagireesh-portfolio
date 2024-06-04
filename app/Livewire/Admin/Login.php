<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;


class Login extends Component
{

    #[Title('My Profile | Admin Login')]

    #[Validate('required|email')]
    public $email='';

    #[Validate('required')]
    public $password='';

    public $rememberMe = false;

    public function userLogin(){
        $this->validate();
        $credentials = [
            'email' => $this->email,
            'password' => $this->password
        ];
        $remember = $this->rememberMe;

        if (Auth::attempt($credentials,$remember)) {
            session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'success' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    #[Layout('components.layouts.login')]
    public function render()
    {
        return view('livewire.admin.login');
    }
}
