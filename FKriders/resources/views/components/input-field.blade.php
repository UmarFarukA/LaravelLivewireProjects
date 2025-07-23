@props(['name'])

<div>
    <input wire:model.blur="{{ $name }}"
        {{ $attributes->merge(['class' => 'bg-gray-50 text-stone-800 text-sm rounded-lg block w-full p-2.5  dark:text-stone-800 border focus:ring-primary-default focus:border-primary-default']) }}
        required />

    @error($name)
        <span class="text-red-400 ml-2 text-sm">{{ $message }}</span>
    @enderror
</div>
