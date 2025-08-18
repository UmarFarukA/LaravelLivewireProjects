<flux:modal name="edit-investor-payment" class="md:w-full">
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">Edit Investor Payment</flux:heading>
            <flux:text class="mt-2">Update investor's payment</flux:text>
        </div>

        <flux:input label="Total Amount to be Paid" required wire:model='amount_due' />

        <div class="flex">
            <flux:spacer />

            <flux:button type="submit" variant="primary" wire:click='store'>Save</flux:button>
        </div>
    </div>
</flux:modal>
