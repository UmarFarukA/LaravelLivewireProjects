@php
    $default = [
        'method' => 'GET',
        'action' => '#',
    ];
@endphp

<form {{ $attributes($default) }}>
    {{ $slot }}
</form>
