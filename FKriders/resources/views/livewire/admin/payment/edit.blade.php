<flux:modal name="edit-payment" class="md:w-full">
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">Update Payment</flux:heading>
            <flux:text class="mt-2">Update details details of user</flux:text>
        </div>

        <flux:input label="Amount"  wire:model='amount' wire:model='amount' />

        <flux:input label="Week Number" wire:model='week_number' />

        <flux:select wire:model="payment_status" label="Category Tricycle">
            <flux:select.option value="">--Select Status--</flux:select.option>
            <flux:select.option value="0">Pending</flux:select.option>
            <flux:select.option value="1">Verified</flux:select.option>
            <flux:select.option value="2">Failed</flux:select.option>
        </flux:select>

        <div class="flex">
            <flux:spacer />

            <flux:button variant="primary" wire:click='update'>Update</flux:button>
        </div>
    </div>
</flux:modal>

