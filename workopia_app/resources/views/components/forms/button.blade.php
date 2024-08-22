<button
    {{ $attributes->merge(['class' => 'w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded focus:outline-none']) }}>
    {{ $slot }}
</button>
