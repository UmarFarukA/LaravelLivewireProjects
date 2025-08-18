<?php

namespace App\Livewire\Admin\Users;

use App\Livewire\Admin\Dashboard;
use App\Models\User;
use Flux\Flux;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;

// use Livewire\Component;

class Index extends Dashboard
{

    public $user_id;

    public $search = "";

    /**
     * Handle fetching registered users.
     */
    #[Computed]
    public function users()
    {
        $searchTerm = "%".$this->search."%";

        $query = User::query()->where("role_id", "!=", 1);

        if($this->search)
        {
            $query->whereAny(["othernames", "lname", 'phone'], "like", $searchTerm);
        }
        return $query->latest()->paginate(10, pageName:"users-page");
    }

    public function edit($id)
    {
        $this->dispatch('edit-user', $id);
    }

    public function delete($id)
    {
        $this->user_id = $id;

        Flux::modal('delete-user')->show();
    }

    #[On("delete-user")]
    public function destroy($id)
    {
        User::find($id)->delete();

        session()->flash("success","User deleted Successfully");

        Flux::modal("delete-user")->close();

        $this->redirect(route("users.index"), navigate:true);
    }

    public function change_password($id)
    {
        $this->dispatch('update-password', $id);
    }

    public function render()
    {
        return view('livewire.admin.users.index');
    }
}
