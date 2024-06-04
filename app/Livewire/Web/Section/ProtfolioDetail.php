<?php

namespace App\Livewire\Web\Section;

use Livewire\Component;

class ProtfolioDetail extends Component
{
    public $projectDetail;
    public $id;
 
    public function mount($id)
    {
        dd($id);
        $this->id = $id;
        // $id = 1;
        $projectDescription['name'] ='';
        $projectDescription['description'] ='';
        $projectDescription['backend'] ='';
        $projectDescription['frontend'] ='';
        $projectDescription['database'] ='';
        $projectDescription['repo'] ='';

        switch ($this->id) {
            case 1:
                $projectDescription['name'] ='Dating App';
                $projectDescription['description'] ='tet dating app';
                $projectDescription['backend'] ='Golang';
                $projectDescription['frontend'] ='Swift for ios app and angular for web';
                $projectDescription['database'] ='Mysql';
                $projectDescription['repo'] ='GitLab';
                
                break;
            
            default:
                # code...
                break;
        }


        $this->projectDetail = $projectDescription;
    }

    public function render()
    {
        return view('livewire.web.section.protfolio-detail');
    }
}