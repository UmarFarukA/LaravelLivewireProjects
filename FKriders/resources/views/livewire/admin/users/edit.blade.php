<flux:modal name="edit-user" class="md:w-full">
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">Edit User</flux:heading>
            <flux:text class="mt-2">Update details of the User</flux:text>
        </div>

        <flux:input
            label="Last Name"
            placeholder="Last Name"
            wire:model='lname'
        />

        <flux:input
            label="Othernames"
            placeholder="othernames"
            wire:model='othernames'
        />

        <flux:input
            type="number"
            label="Phone"
            wire:model='phone'
            placeholder='Phone Number'
        />

        <flux:select wire:model='role_id'>
            <flux:select.option value="">--Select Role--</flux:select.option>
            <flux:select.option value="1">Admin</flux:select.option>
            <flux:select.option value="2">Customer/Drive</flux:select.option>
            <flux:select.option value="3">Investor</flux:select.option>
        </flux:select>

        <div class="flex">
            <flux:spacer />

            <flux:button type="submit" variant="primary" wire:click='update'>Update</flux:button>
        </div>
    </div>
</flux:modal>
