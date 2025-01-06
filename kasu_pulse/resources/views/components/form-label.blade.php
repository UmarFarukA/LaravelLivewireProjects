@props(['name'])
<label for="$name"
    {{ $attributes->merge(['class' => 'text-lg font-semibold text-emerald-700']) }}>{{ $slot }}</label>
