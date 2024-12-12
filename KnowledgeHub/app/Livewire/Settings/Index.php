<?php

namespace App\Livewire\Settings;

use App\Models\User;
use App\Livewire\AdminComponent;
use App\Livewire\Forms\UserForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

// use Livewire\Component;

class Index extends AdminComponent
{
    use WithFileUploads;

    public $name = '';

    public $email = '';

    public $photo;

    public $currentPassword = "";
    public $password = "";
    public $password_confirmation = "";

    public $wrongPassword;


    public function rules()
    {
        return [
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email,' . Auth::user()->id
        ];
    }

    public function mount()
    {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
        $this->photo = Auth::user()->photo;
    }

    public function updateDetails()
    {
        $this->validate();

        $user = User::find(Auth::user()->id);

        $user->name = $this->name;
        $user->email = $this->email;

        $user->save();
    }

    public function updatePassword()
    {

        $this->validate([
            'currentPassword' => 'required|min:8|string',
            'password' => 'required|confirmed|min:8|string',
            'password_confirmation' => 'required'
        ]);

        $user = User::find(Auth::user()->id);

        $newHashPassword = Hash::make($this->password);

        if (Hash::check($this->currentPassword, $user->password)) {
            $user->password = $newHashPassword;
            $user->save();
        }

        $this->wrongPassword = "Current Password is invalid";
    }

    public function uploadPhoto()
    {
        $this->validate([
            'photo' => 'required|image|max:1024'
        ]);

        $user = User::find(Auth::user()->id);

        $extension = $this->photo->getClientOriginalExtension();

        $this->photo->storeAs(path: 'photos', name: $user->email . "_" . $user->id . "." . $extension);

        $user->photo = $user->email . "_" . $user->id . "." . $extension;

        $user->save();
    }


    public function render()
    {
        cache()->forget('users-list');
        return view('livewire.settings.index');
    }
}
