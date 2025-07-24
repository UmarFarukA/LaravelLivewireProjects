<flux:modal name="edit-user" class="md:w-full">
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">Edit User</flux:heading>
            <flux:text class="mt-2">Update details of the User</flux:text>
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
            type="email"
            label="Email"
            wire:model='email'
            placeholder='Email'
        />

        <flux:input
            type="text"
            label="Phone Number"
            wire:model='phone'
            placeholder='Phone Number'
        />

        <div class="flex">
            <flux:spacer />

            <flux:button type="submit" variant="primary" wire:click='update'>Update</flux:button>
        </div>
    </div>
</flux:modal>
