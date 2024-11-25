{{-- @props(['active' => false]) --}}

<li>
    <a {{ $attributes->merge(['class' => 'hover:text-green-800 block py-2 px-3 md:p-0 text-stone-700  rounded md:bg-transparent']) }}
        wire:navigate aria-current="page">{{ $slot }}</a>
</li>
