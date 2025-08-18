<?php

namespace App\Livewire\Settings;

use App\Livewire\Admin\Dashboard;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout("components.layouts.admin")]
class Profile extends Component
{

    use WithFileUploads;

    public string $lname = '';

    public string $othernames = '';

    public string $phone;

   #[Validate( ['required','image','max:2048'])]
    public $photo;

    public string $photo_path = "";

    /**
     * Mount the component.
     */
    public function mount(): void
    {
        $this->othernames = Auth::user()->othernames;
        $this->lname = Auth::user()->lname;
        $this->phone = Auth::user()->phone;
        $this->photo_path = Auth::user()->photo ?? "";
    }

    /**
     * Update the profile information for the currently authenticated user.
     */
    public function updateProfileInformation(): void
    {
        $user = Auth::user();

        if($this->photo){
            $this->photo_path = $this->photo->storePublicly('users', ['disk' => 'public']);
        }

        $validated = $this->validate([
            'lname' => ['required', 'string', 'max:255'],
            'othernames' => ['required', 'string', 'max:255'],
            'phone' => [
                'required',
                'string',
                'max:11',
                Rule::unique(User::class)->ignore($user->id),
            ],
        ]);

        $validated['photo_path'] = $this->photo_path;

        $user->fill($validated);

        if ($user->isDirty('phone')) {
            $user->email_verified_at = null;
        }



        $user->save();

        $this->dispatch('profile-updated', name: $user->othernames." ".$user->lname);
    }

    /**
     * Send an email verification notification to the current user.
     */
    public function resendVerificationNotification(): void
    {
        $user = Auth::user();

        if ($user->hasVerifiedEmail()) {
            $this->redirectIntended(default: route('dashboard', absolute: false));

            return;
        }

        $user->sendEmailVerificationNotification();

        Session::flash('status', 'verification-link-sent');
    }
}
