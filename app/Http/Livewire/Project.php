<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Livewire\Modal;
use App\Models\Project as ProjectModel;

class Project extends Modal
{
    public $project;

    public function render()
    {
        return view('livewire.project');
    }

}
