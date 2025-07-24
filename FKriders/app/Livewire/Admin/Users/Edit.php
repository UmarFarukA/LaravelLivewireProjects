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

    public string $fname = '';

    public string $lname = '';

    public string $mname = '';

    public string $email = '';

    public string $phone = '';

    #[On("edit-user")]
    public function edit(int $id)
    {
        $user = User::find($id);

        $this->id = $id;

        $this->fname = $user->fname;
        $this->lname = $user->lname;
        $this->mname = $user->mname;
        $this->email = $user->email;
        $this->phone = $user->phone;

        Flux::modal('edit-user')->show();

    }

    public function update()
    {
        $this->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'mname' => ['string', 'max:255'],
            'email' => [
                    'required',
                    'string',
                    'lowercase',
                    'email',
                    'max:255',
                    Rule::unique('users', 'email')->ignore($this->id)
            ],
            'phone' => 'required|string|min:11|max:11',
        ]);

        $user = User::find($this->id);

        $user->fname = $this->fname;
        $user->lname = $this->lname;
        $user->mname = $this->mname;
        $user->email = $this->email;
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
