<?php

namespace App\Livewire\Admin\Section;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithFileUploads;

class BlogForm extends Component
{
    use WithFileUploads;

    public $title;
    public $image;
    public $category;
    public $content;

    public function updateAccountDetail()
    {
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
    public function render()
    {
        return view('livewire.admin.section.blog-form');
    }
}
