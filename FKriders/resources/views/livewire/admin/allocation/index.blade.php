<div>
    <flux:heading size="xl" level="1">{{ __('Tricycle Allocation') }}</flux:heading>
    <flux:subheading size="lg" class="mb-6">
        {{ __('Manage the allocation of tricycles to users.') }}
    </flux:subheading>
    <flux:separator variant="subtle" />

    <x-notification />
    <livewire:admin.allocation.create />

    <div class="mt-12 flex justify-between items-center">
        <flux:modal.trigger name="assign-tricycle">
            <flux:button variant="primary">Assign</flux:button>
        </flux:modal.trigger>

        <div class="w-2/4">
            <flux:input wire:model.live.debounce.500ms="search" type="search" required />
        </div>
    </div>
</div>

