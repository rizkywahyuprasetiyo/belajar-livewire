<?php

namespace App\Livewire\Posts;

use App\Models\User;
use Livewire\Component;
use App\Livewire\Forms\PostForm;

class Create extends Component
{
    public PostForm $form;

    public function simpan()
    {
        $this->form->simpan();
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}
