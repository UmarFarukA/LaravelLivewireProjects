<flux:modal name="edit_allocation" class="md:w-full">
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">Edit Tricycle Allocation</flux:heading>
            <flux:text class="mt-2">Update the allocation of tricycle to a user</flux:text>
        </div>

        <flux:input
            label="User"
            value="{{ $current_user}}"
            disabled
        />

        <flux:input
            label="Tricycle"
            value="{{ $tricycle}}"
            disabled
        />

        <flux:input
            type="number"
            label="Duration"
            placeholder="Duration in Weeks"
            wire:model='duration'
        />

        <flux:select wire:model="allocated" label="Status">
            <flux:select.option value="1">Allocated</flux:select.option>
            <flux:select.option value="0">De-allocate</flux:select.option>
        </flux:select>

        <div class="flex">
            <flux:spacer />

            <flux:button type="submit" variant="primary" wire:click='save'>Update</flux:button>
        </div>
    </div>
</flux:modal>

