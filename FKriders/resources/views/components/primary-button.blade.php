<button
    {{ $attributes->merge(['class' => 'px-3 py-2 text-sm md:text-lg font-medium bg-sky-500 text-white rounded-md hover:bg-sky-600'
]) }}>
    {{ $slot }}
</button>
