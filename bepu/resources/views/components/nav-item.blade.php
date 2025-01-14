<li>
    <a {{ $attributes->merge(['class' => 'block py-2 px-3 text-white bg-emerald-800 rounded md:bg-transparent md:text-emerald-800 md:p-0 md:dark:text-emerald-800']) }}
        aria-current="page">
        {{ $slot }}
    </a>
</li>

{{-- {{ route($routeName) }} --}}
{{-- @props(['routeName']) --}}
