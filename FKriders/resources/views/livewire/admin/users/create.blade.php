<flux:modal name="create-user" class="md:w-full">
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">Create User</flux:heading>
            <flux:text class="mt-2">Provide appropriate details of the User</flux:text>
        </div>

        <flux:input
            label="First Name"
            placeholder="First Name"
            wire:model='fname'
        />

        <flux:input
            label="Middle Name"
            placeholder="Middle Name"
            wire:model='mname'
        />

        <flux:input
            label="Last Name"
            placeholder="Last Name"
            wire:model='lname'
        />

        <flux:input
            type="number"
            label="Phone"
            wire:model='phone'
            placeholder='Phone Number'
        />

        <flux:input
            type="email"
            label="Email"
            wire:model='email'
            placeholder='Email'
        />

        <flux:input
            type="password"
            label="Password"
            placeholder="***********"
            wire:model='password'
        />

        <flux:input
            type="password"
            label="Password Confirmation"
            placeholder="************"
            wire:model='password_confirmation'
        />

        <div class="flex">
            <flux:spacer />

            <flux:button type="submit" variant="primary" wire:click='store'>Save</flux:button>
        </div>
    </div>
</flux:modal>
