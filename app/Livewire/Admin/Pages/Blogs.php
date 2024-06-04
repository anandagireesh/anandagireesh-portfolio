<?php

namespace App\Livewire\Admin\Pages;

use App\Models\Blog;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class Blogs extends Component
{


    public $breadTitle='';


    public function mount()
    {
        $this->breadTitle = 'Blogs';
    }

    #[Layout('components.layouts.admin')]
    public function render()
    {
        return view('livewire.admin.pages.blogs');
    }
}
