@props(['id', 'type' => 'text'])

<input type="{{ $type }}"
    {{ $attributes->merge(['class' => 'px-3 py-2 rounded-md w-full border-none bg-gray-100 focus:bg-white focus:ring-1 focus:ring-emerald-700']) }}
    id="{{ $id }}">
