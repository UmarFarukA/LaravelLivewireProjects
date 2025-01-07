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
use Masmerise\Toaster\Toaster;

// use Livewire\Component;

class Index extends AdminComponent
{
    use WithFileUploads;

    public $name = '';

    public $email = '';

    public $phone;

    public $photo;

    public $photo_path;

    public $currentPassword = "";
    public $password = "";
    public $password_confirmation = "";

    // public $wrongPassword;


    public function rules()
    {
        return [
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email,' . Auth::user()->id,
            'phone' => 'required|min:11|max:14'
        ];
    }

    public function mount()
    {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
        $this->phone = Auth::user()->phone;
        $this->photo_path = Auth::user()->photo_path;
    }

    public function updateDetails()
    {
        $this->validate();

        $user = User::find(Auth::user()->id);

        $user->name = $this->name;
        $user->email = $this->email;
        $user->phone = $this->phone;

        $user->save();

        Toaster::success($user->name + " details updated");
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
            Toaster::success("Password successfully updated.");
        }

        // $this->wrongPassword = "Current Password is invalid";
        Toaster::error("Current Password is invalid.");
    }

    public function uploadPhoto()
    {
        $this->validate([
            'photo' => 'required|image|max:1024'
        ]);

        $user = User::find(Auth::user()->id);

        if ($this->photo) {

            $this->photo_path = $this->photo->store('users_photos', 'public');

            $user->photo_path = $this->photo_path;

            $user->save();

            Toaster::success("User Photo uploaded successfully.");

            $this->reset('photo');
        }
    }


    public function render()
    {
        cache()->forget('users-list');
        return view('livewire.settings.index');
    }
}