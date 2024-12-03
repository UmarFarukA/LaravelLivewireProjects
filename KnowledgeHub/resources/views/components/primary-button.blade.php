<button
    {{ $attributes->merge(['class' => 'border-0 border:focus:ring-green-100 px-3 py-2 bg-green-700 text-green-100 rounded-lg hover:bg-green-600 hover:text-green-50']) }}>
    {{ $slot }}
</button>
