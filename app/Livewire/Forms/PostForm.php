<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{
    #[Rule(['required', 'string', 'max:191'])]
    public string $title = '';

    #[Rule(['required', 'string'])]
    public string $body = '';

    public function simpan(): void
    {
        $user = User::first();

        $user->posts()->create(
            $this->validate()
        );

        $this->reset();
    }
}
