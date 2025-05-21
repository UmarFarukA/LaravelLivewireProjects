@props(['heading', 'icon', 'content'])

<div
    class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col gap-1">
    <svg class="w-7 h-7 text-gray-800 dark:text-white mb-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
        width="24" height="24" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="{{ $icon }}" />
    </svg>
    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-emerald-800 dark:text-white">Our
        {{ $heading }}
    </h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
        {{ $content }}
    </p>
</div>
