<section class="w-full">
    @include('partials.settings-heading')

    <x-settings.layout :heading="__('Profile')" :subheading="__('Update your name and email address')">
        <form wire:submit="updateProfileInformation" class="my-6 w-full space-y-6">
            <flux:input wire:model="lname" :label="__('Last Name')" type="text" required autofocus autocomplete="lname" />
            <flux:input wire:model="othernames" :label="__('Othernames')" type="text" required autocomplete="othernames" />

            <div>
                <flux:input wire:model="phone" :label="__('Phone Number')" type="number" required autocomplete="email" />

                @if (auth()->user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail &&! auth()->user()->hasVerifiedEmail())
                    <div>
                        <flux:text class="mt-4">
                            {{ __('Your email address is unverified.') }}

                            <flux:link class="text-sm cursor-pointer" wire:click.prevent="resendVerificationNotification">
                                {{ __('Click here to re-send the verification email.') }}
                            </flux:link>
                        </flux:text>

                        @if (session('status') === 'verification-link-sent')
                            <flux:text class="mt-2 font-medium !dark:text-green-400 !text-green-600">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </flux:text>
                        @endif
                    </div>
                @endif
            </div>

            <div class="grid  md:grid-cols-2 ">

                <flux:input type="file" wire:model='photo' :label="__('Upload Photo')"/>

                <div>
                    @if ($photo)
                        <img src="{{$photo->temporaryUrl()}}" alt="User Photo" class="w-1/2 rounded-md">
                    @elseif ($photo_path)
                        <img src="{{Storage::url($photo_path)}}" alt="Photo" class="w-1/2 rounded-md">
                    @endif
                </div>
            </div>

            <div class="flex items-center gap-4">
                <div class="flex items-center justify-end">
                    <flux:button
                        variant="primary"
                        type="submit"
                        class="w-full"
                    >
                        {{ __('Save') }}
                    </flux:button>
                </div>

                <x-action-message class="me-3" on="profile-updated">
                    {{ __('Saved.') }}
                </x-action-message>
            </div>
        </form>

        {{-- <livewire:settings.delete-user-form /> --}}
    </x-settings.layout>
</section>
