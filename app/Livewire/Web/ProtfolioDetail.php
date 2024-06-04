<?php

namespace App\Livewire\Web;

use Livewire\Component;

class ProtfolioDetail extends Component
{
    public function render()
    {
        return view('livewire.web.protfolio-detail')->layout('components.layouts.project');
    }
}
