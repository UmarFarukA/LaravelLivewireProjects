@props([
    'title' => '',
    'subtitle' => ''
])

<div>
    <flux:heading size="xl" level="1">{{ __($title) }}</flux:heading>
    <flux:subheading size="lg" class="mb-6">
        {{ __($subtitle) }}
    </flux:subheading>
    <flux:separator variant="subtle" />

    <x-notification />

    {{ $slot }}

    <div class="mt-12 flex flex-col gap-2 md:flex-row md:justify-between md:items-center">
        <flux:modal.trigger name="manage-payment">
            <x-link class="cursor-pointer">Manage Payment</x-link>
        </flux:modal.trigger>

        <div class="md:w-2/4">
            <flux:input wire:model.live.debounce.500ms="search" type="search" required />
        </div>
    </div>
</div>
