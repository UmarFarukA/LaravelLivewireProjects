@props(['name'])

<select name={{ $name }}
    {{ $attributes->merge(['class' => 'w-full px-4 py-2 border rounded focus:outline-none']) }}>
    {{ $slot }}
</select>
