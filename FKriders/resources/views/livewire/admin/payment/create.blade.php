<flux:modal name="manage-payment" class="md:w-full">
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">Manage User Payment</flux:heading>
            <flux:text class="mt-2">Update user's payment</flux:text>
        </div>

        <flux:select wire:model.live='selectedUserId' wire:on='updatedSelectedUserId' label="Selected User">
            <flux:select.option value="">--Select User--</flux:select.option>
            @foreach ($users as $user)
                <flux:select.option value="{{ $user->id }}">{{ $user->fname }} {{ $user->lname}}</flux:select.option>
            @endforeach
        </flux:select>

        @if ($user_details)
            <flux:input
                label="Tricycle"
                disabled
                value="{{ $model_number }}"
            />

            <flux:input
                label="Total Cost"
                disable
                wire:model='cost'
                disabled
            />

            <flux:input
                label="Total Amount Paid"
                disabled
                wire:model='amount_paid'
            />

            <flux:input
                type="number"
                label="Amount due for payment"
                wire:model='amount'
                placeholder='Enter amount to pay'
            />

            <flux:input
                type="number"
                label="Payment for Week?"
                wire:model='week_number'
            />
        @endif

        <div class="flex">
            <flux:spacer />

            <flux:button type="submit" variant="primary" wire:click='store'>Save</flux:button>
        </div>
    </div>
</flux:modal>
