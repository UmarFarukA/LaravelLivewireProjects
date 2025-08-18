<flux:modal name="manage-investor-payment" class="md:w-full">
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">Manage Investor Payment</flux:heading>
            <flux:text class="mt-2">Update investor's payment</flux:text>
        </div>

        <flux:select wire:model.live='selectedUserId' wire:on='updatedSelectedUserId' label="Selected User">
            <flux:select.option value="">--Select User--</flux:select.option>
            @foreach ($users as $user)
                <flux:select.option value="{{ $user->id }}">{{ $user->othernames }} {{ $user->lname}}</flux:select.option>
            @endforeach
        </flux:select>

        @if ($user_details)

            <flux:input
                label="Amount Invested"
                disabled
                wire:model='amount_invested'
                disabled
            />

            <flux:input
                label="Total Amount Paid to Investor"
                disabled
                wire:model='amount_paid'
            />

            <flux:input
                label="Total Amount to be Paid"
                required
                wire:model='amount_due'
            />

            <flux:input
                type="text"
                disabled
                label="Payment for"
                wire:model='payment_number'
            />
        @endif

        <div class="flex">
            <flux:spacer />

            <flux:button type="submit" variant="primary" wire:click='store'>Save</flux:button>
        </div>
    </div>
</flux:modal>

