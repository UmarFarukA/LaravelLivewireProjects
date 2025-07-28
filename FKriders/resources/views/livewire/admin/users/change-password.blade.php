<flux:modal name="update-password-modal" class="md:w-96">
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">Update Password</flux:heading>
            <flux:text class="mt-2">Update user password</flux:text>
        </div>

        @if (isset($passwordError))
            <p class="p-2 rounded-md bg-red-600 text-red-50 text-center">
                {{ $passwordError }}
            </p>
        @endif

        <flux:input type="password" wire:model='current_password' label="Current Password" placeholder="***********" wire:model='current_password' />

        <flux:input type="password" wire:model='password' label="New Password" placeholder="***********" />

        <flux:input type="password" wire:model='password_confirmation' label="Confirm Password" placeholder="***********"/>

        <div class="flex">
            <flux:spacer />
            <flux:button type="submit" variant="primary" wire:click='update_password'>Save changes</flux:button>
        </div>
    </div>
</flux:modal>
