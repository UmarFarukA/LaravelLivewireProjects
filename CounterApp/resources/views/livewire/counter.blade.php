<div class="flex">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <button class="bg-green-500 text-green-100" wire:click='decrement'>-</button>
    <p class="font-bold">{{ $count }}</p>
    <button class="bg-green-500 text-green-100" wire:click='increment'>+</button>
</div>
