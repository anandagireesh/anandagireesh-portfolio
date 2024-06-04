<?php

namespace App\Livewire\Web\Section;

use Livewire\Component;
use Storage;

class About extends Component
{
    public function download()
    {
        return Storage::download('folder/file');Storage::disk(asset('assets/resume/Anand.pdf'))->download( 
             'Anand.pdf'
        );
    }
    public function render()
    {
        return view('livewire.web.section.about');
    }
}
