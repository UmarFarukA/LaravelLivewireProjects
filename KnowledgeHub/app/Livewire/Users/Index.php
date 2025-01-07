<?php

namespace App\Livewire\Users;

use App\Livewire\AdminComponent;
use App\Livewire\Forms\UserForm;
use App\Models\User;
use Livewire\Attributes\Computed;
use Masmerise\Toaster\Toaster;

class Index extends AdminComponent
{
    public UserForm $form;

    public $search = "";
    public $limit = 5;

    public function save()
    {
        $this->form->store();

        Toaster::success("New User created successfully");

        $this->redirect("/dashboard/users", navigate: true);

        unset($this->users);
    }

    public function showEditModal()
    {
        $this->dispatch('show-form');
    }

    #[Computed(cache: true, key: 'users-list')]
    public function users()
    {
        $searchTerm = "%" . $this->search . "%";

        return User::whereAny(['name', 'email', 'role'], "LIKE", $searchTerm)
            ->latest()
            ->paginate($this->limit);
    }

    public function destroy(User $user)
    {
        $user->delete();

        unset($this->users);

        Toaster::success("User deleted successfully");
    }

    public function render()
    {
        cache()->forget(key: 'users-list');

        return view('livewire.users.index');
    }
}