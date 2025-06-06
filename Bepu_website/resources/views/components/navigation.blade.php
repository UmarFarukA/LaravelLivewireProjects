<header>
    <nav class="bg-white border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{route('index')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/logo.png') }}" class="h-8" alt="BEPU Logo" />
                <span class="self-center text-emerald-800 text-2xl font-semibold whitespace-nowrap">BEPU</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <x-nav-links>
                    <x-nav-item href="{{ route('index') }}">Home</x-nav-item>
                    <x-nav-item>Events</x-nav-item>
                    <x-nav-item>Blog</x-nav-item>
                    <x-nav-item href="{{ route('about') }}">About</x-nav-item>
                    <x-nav-item href="{{ route('contact') }}">Contact</x-nav-item>
                </x-nav-links>
            </div>
        </div>
    </nav>

</header>
