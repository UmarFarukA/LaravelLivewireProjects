<flux:modal name="assign-tricycle" class="md:w-full">
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">Assign Tricycle</flux:heading>
            <flux:text class="mt-2">Use the details below to assign tricycle to a user</flux:text>
        </div>

        <flux:select wire:model="user_id" label="Users">
            <flux:select.option value="">--select user --</flux:select.option>
            @foreach ($users as $user )
                <flux:select.option value="{{ $user->id }}">{{ $user->fname }} {{ $user->lname }}</flux:select.option>
            @endforeach
        </flux:select>

        <flux:select wire:model="tricycle_id" label="Tricycles">
            <flux:select.option value="">--select tricycle --</flux:select.option>
            @foreach ($tricycles as $tricycle )
                <flux:select.option value="{{ $tricycle->id }}">{{ $tricycle->model_number }} -- {{ $tricycle->brand->name }}</flux:select.option>
            @endforeach
        </flux:select>

        <flux:input
            type="number"
            label="Duration"
            placeholder="Duration in Weeks"
            wire:model='duration'
        />

        <div class="flex">
            <flux:spacer />

            <flux:button type="submit" variant="primary" wire:click='save'>Save</flux:button>
        </div>
    </div>
</flux:modal>
