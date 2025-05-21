<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-header />

{{-- Navigation --}}
<x-navigation />


<body>
    {{ $slot }}
</body>

<x-footer />

</html>
