<a {{ $attributes->merge(['class' => 'block p-2 rounded hover:bg-white hover:text-green-700']) }}
    wire:navigate>{{ $slot }}</a>
