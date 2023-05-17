<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Modal extends Component
{
    public $show = false;
    public $obj;

    protected $listeners = [
        'show' => 'show'
    ];

    public function show($obj)
    {
        $this->obj = json_decode($obj, true);

        $this->show = true;
    }

}
