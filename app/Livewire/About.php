<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('About')]
class About extends Component
{
    public function render()
    {
        sleep(5);

        return view('livewire.about');
    }
}
