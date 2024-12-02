@props(['name'])

<div>
    <input wire:model.blur="{{ $name }}"
        {{ $attributes->merge(['class' => 'bg-gray-50 border  text-stone-800 text-sm rounded-lg block w-full p-2.5  dark:text-white focus:ring-green-700 focus:border-green-700 mb-2']) }}
        required />

    @error($name)
        <span class="text-red-400 ml-2 text-sm">{{ $message }}</span>
    @enderror
</div>
