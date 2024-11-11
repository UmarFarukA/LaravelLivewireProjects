<div class="flex my-4 mx-2">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <button class="bg-green-500 px-3 py-1 text-green-100" wire:click='decrement'>-</button>
    <div class="font-bold mx-3">{{ $count }}</div>
    <button class="bg-green-500 px-3 py-1 text-green-100" wire:click='increment'>+</button>
</div>
