<?php

namespace App\Livewire\Web;

use Livewire\Component;
use Livewire\Attributes\Title;

class Home extends Component
{
    #[Title('My Protfolio')] 
    public function render()
    {
        return view('livewire.web.home');
    }
}
