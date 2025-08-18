<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Flux\Flux;
use Illuminate\Validation\Rule;
use Livewire\Attributes\On;
use Livewire\Component;

use Illuminate\Validation\Rules;

class Edit extends Component
{
    public int $id;

    public string $othernames = '';

    public string $lname = '';

    public int $role_id;

    // public string $email = '';

    public string $phone = '';

    #[On("edit-user")]
    public function edit(int $id)
    {
        $user = User::find($id);

        $this->id = $id;

        $this->othernames = $user->othernames;
        $this->lname = $user->lname;
        $this->role_id = $user->role_id;
        $this->phone = $user->phone;

        Flux::modal('edit-user')->show();

    }

    public function update()
    {
        $this->validate([
            'othernames' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'phone' => ['required','string','min:11','max:11',
                        Rule::unique('users', 'email')->ignore($this->id)
                    ],
        ]);

        $user = User::find($this->id);

        $user->othernames = $this->othernames;
        $user->lname = $this->lname;
        $user->role_id = $this->role_id;
        $user->phone = $this->phone;

        $user->save();

        session()->flash('success','User details updated successfully');

        Flux::modal('edit-user')->close();

        $this->redirect(route('users.index'), navigate:true);
    }
    public function render()
    {
        return view('livewire.admin.users.edit');
    }
}
