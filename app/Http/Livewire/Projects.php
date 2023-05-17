<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project as ProjectModel;

class Projects extends Component
{
    public $projects, $project;
    public $openModal = 0;

    public function render()
    {
        $this->projects = ProjectModel::where('user_id', 1)->get();
        return view('livewire.projects');
    }

}
