<?php

namespace App\Livewire\Admin\Section;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class AboutMe extends Component
{
    public $name;
    public $role;
    public $phone;
    public $email;
    public $bio;
    public $facebook;
    public $twitter;
    public $linkedin;
    public $instagram;
    public $website;

    #[On('refresh-about-me')]
    public function updateList()
    {
        $this->name = Auth::user()->name;
        $this->role = Auth::user()->role;
        $this->phone = AUTH::user()->phone;
        $this->email = Auth::user()->email;
        $this->bio = Auth::user()->bio;
        $this->facebook = Auth::user()->facebook;
        $this->twitter = Auth::user()->twitter;
        $this->linkedin = Auth::user()->linkedin;
        $this->instagram = Auth::user()->instagram;
        $this->website = Auth::user()->website;
    }

    public function mount()
    {
        $this->name = Auth::user()->name;
        $this->role = Auth::user()->role;
        $this->phone = AUTH::user()->phone;
        $this->email = Auth::user()->email;
        $this->bio = Auth::user()->bio;
        $this->facebook = Auth::user()->facebook;
        $this->twitter = Auth::user()->twitter;
        $this->linkedin = Auth::user()->linkedin;
        $this->instagram = Auth::user()->instagram;
        $this->website = Auth::user()->website;
    }
    public function render()
    {
        return view('livewire.admin.section.about-me')->with('name',Auth::user()->name)->with('role',Auth::user()->role)->with('phone',Auth::user()->phone)->with('email',Auth::user()->email)->with('bio',Auth::user()->bio);
    }
}
