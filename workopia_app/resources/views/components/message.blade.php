@props(['message_type']);

@php

    if ($message_type == 'error') {
        $class = 'message bg-red-100 p-3 my-3';
    } elseif ($message_type == 'success') {
        $class = 'message bg-green-100 p-3 my-3';
    }
@endphp

<div class="{{ $class }}">
    {{ $slot }}
</div>
