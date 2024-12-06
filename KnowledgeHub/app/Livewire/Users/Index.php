<?php

namespace App\Livewire\Users;

use App\Livewire\AdminComponent;
use App\Livewire\Forms\UserForm;
use App\Models\User;
use Livewire\Attributes\Computed;

class Index extends AdminComponent
{
    public UserForm $form;

    public $search = "";
    public $limit = 5;

    public function save()
    {
        $this->form->store();

        unset($this->users);

        $this->redirect("/dashboard/users", navigate: true);
    }

    public function showEditModal()
    {
        $this->dispatch('show-form');
    }

    #[Computed()]
    public function users()
    {
        $searchTerm = "%" . $this->search . "%";

        return User::whereAny(['name', 'email', 'role'], "LIKE", $searchTerm)
            ->latest()
            ->paginate($this->limit);
    }

    public function render()
    {
        return view('livewire.users.index');
    }
}
