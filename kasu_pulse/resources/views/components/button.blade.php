<button
    {{ $attributes->merge(['class' => 'w-full px-3 py-3 rounded-md bg-emerald-700 hover:bg-emerald-600 text-emerald-50 font-bold text-center']) }}>
    {{ $slot }}
</button>
