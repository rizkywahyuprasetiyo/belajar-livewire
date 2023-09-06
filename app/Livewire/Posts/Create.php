<?php

namespace App\Livewire\Posts;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Create extends Component
{
    #[Rule(['required', 'string', 'max:191'])]
    public string $title = '';

    #[Rule(['required', 'string'])]
    public string $body = '';

    public function simpan(User $user)
    {
        $user = $user->first();

        $data = $this->validate();

        $user->posts()->create($data);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}
