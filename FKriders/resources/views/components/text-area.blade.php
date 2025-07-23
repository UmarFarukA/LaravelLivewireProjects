@props(['name'])

<div>
    <textarea wire:model.blur='{{ $name }}'
        {{ $attributes->merge(['class' => 'mb-1 block p-2.5 w-full text-sm text-stone-700 rounded-lg border focus:ring-primary-default focus:border-primary-default dark:bg-gray-50 dark:border-gray-600 dark:placeholder-gray-400 dark:text-stone-800 dark:focus:ring-primary-default dark:focus:border-primary-default']) }}></textarea>
    @error($name)
        <span class="text-red-500 ml-2 text-xs">{{ $message }}</span>
    @enderror
</div>
