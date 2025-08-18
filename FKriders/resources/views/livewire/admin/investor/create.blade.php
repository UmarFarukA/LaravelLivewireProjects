<flux:modal name="manage-investor" class="md:w-full">
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">Manage Investor Investment</flux:heading>
            <flux:text class="mt-2">Add Investor investments</flux:text>
        </div>

        <flux:select wire:model='user_id' label="Select User">
            <flux:select.option value="">--Select User--</flux:select.option>
            @foreach ($users as $user)
                <flux:select.option value="{{ $user->id }}">{{ $user->othernames }} {{ $user->lname}}</flux:select.option>
            @endforeach
        </flux:select>

        <flux:input
            label="Amount to Invest"
            type="number"
            wire:model='amount_invested'
        />

        <flux:input
            label="Duration"
            type="number"
            wire:model='duration'
        />

        <div class="flex">
            <flux:spacer />

            <flux:button type="submit" variant="primary" wire:click='save'>Save</flux:button>
        </div>
    </div>
</flux:modal>

