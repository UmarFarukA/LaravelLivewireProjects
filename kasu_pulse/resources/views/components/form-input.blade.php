@props(['name'])

<input id="$name" required
    {{ $attributes->merge(['class' => 'rounded-md px-2 py-3 mb-2 text-stone-700 bg-gray-100 border-none focus:ring  focus:ring-emerald-700']) }} />
