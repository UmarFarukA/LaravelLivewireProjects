@props(['name'])

<div>
    <textarea wire:model.blur='{{ $name }}'
        {{ $attributes->merge(['class' => 'mb-1 block p-2.5 w-full text-sm text-stone-700 bg-gray-50 rounded-lg border focus:ring-green-700 focus:border-green-700 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-700 dark:focus:border-green-700']) }}></textarea>
    @error($name)
        <span class="text-red-500 ml-2 text-xs">{{ $message }}</span>
    @enderror
</div>
