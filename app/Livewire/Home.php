<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        sleep(2);
        return view('livewire.home');
    }
}
