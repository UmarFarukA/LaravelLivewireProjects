<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Flux\Flux;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\On;
use Livewire\Component;

class ChangePassword extends Component
{
    public $id;

    public string $current_password = "";

    public string $password;

    public string $password_confirmation;

    public string $passwordError;

    #[On("update-password")]
    public function password_update(int $user_id)
    {
        $this->id = $user_id;

        Flux::modal("update-password-modal")->show();

    }

    public function update_password()
    {

        $this->validate([
            "current_password" => ["required", "string"],
            "password" => ["required","string", "confirmed", Rules\Password::defaults()],
        ]);

        $user = User::find($this->id);

        if($user){

            // dd(Hash::check($this->current_password, $user->password));

            if(Hash::check($this->current_password, $user->password)){

                $user->password = Hash::make($this->password);

                $user->save();

                session()->flash("success","Password Updated Successfully");

                Flux::modal("update-password")->close();

                $this->redirect(route("users.index"), navigate:true);
            }

            // return back()->withErrors(["current_password" => "Current Password is Invalid"]);
            $this->passwordError = "";

            $this->reset("current_password", "password", "password_confirmation");
        }

    }
    public function render()
    {
        return view('livewire.admin.users.change-password');
    }
}
