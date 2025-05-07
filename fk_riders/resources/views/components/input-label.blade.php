@props(['name'])

<label for="{{ $name }}"
    class="block mb-2 text-sm md:text-lg font-medium text-primary-default">{{ $slot }}</label>
