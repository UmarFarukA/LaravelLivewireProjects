@props('message_type')

@if ($message_type == 'error')
    $class = "message bg-red-100 p-3 my-3"
@elseif ($message_type == 'success')
    $class = "message bg-green-100 p-3 my-3"
@endif

<div class="{{ $class }}">
    {{ $slot }}
</div>
