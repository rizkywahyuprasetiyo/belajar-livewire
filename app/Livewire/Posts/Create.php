<?php

namespace App\Livewire\Posts;

use App\Livewire\Forms\PostForm;
use Livewire\Component;

class Create extends Component
{
    public PostForm $form;

    public function simpan()
    {
        $this->form->simpan();
        flash('Data postingan berhasil di buat.', 'alert-success');
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}
