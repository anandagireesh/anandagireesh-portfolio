<?php

namespace App\Livewire\Admin\Pages;

use App\Models\Blog;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddBlog extends Component
{
    use WithFileUploads;

    public $title;
    public $image;
    public $category;
    public $content;
    public $breadTitle='';

    public function updateAccountDetail()
    {
        dd("hi");
        dd($this->all());
        // $this->validate();

        $imagePath = $this->image->store('images', 'public');

        Blog::create([
            'title' => $this->title,
            'image' => $imagePath,
            'category' => $this->category,
            'content' => $this->content,
        ]);

        session()->flash('message', 'Blog post successfully created.');

        $this->reset();
    }


    public function mount()
    {
        $this->breadTitle = 'Add Blogs';
    }

    #[Layout('components.layouts.admin')]
    public function render()
    {
        return view('livewire.admin.pages.add-blog');
    }
}
