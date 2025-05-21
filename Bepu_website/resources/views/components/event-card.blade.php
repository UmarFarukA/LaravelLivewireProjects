@props(['img_path', 'caption', 'content'])

<div class="max-w-sm bg-white border border-stone-200 rounded-lg shadow dark:bg-stone-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg object-cover h-56 w-full" src="{{ asset($img_path) }}" alt="Event" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $caption }}</h5>
        </a>
        <p class="mb-3 font-normal text-stone-700 dark:text-stone-400">{{ $content }}</p>
        <a href="#"
            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-emerald-700 rounded-lg hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">
            Read more
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
    </div>
</div>
