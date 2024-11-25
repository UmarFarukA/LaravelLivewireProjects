<header>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/kasu_logo.jpeg') }}" class="h-8" alt="KASU Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-green-700">Knowledge
                    Hub</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">

                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
                    <x-nav-list>
                        <x-nav-item href="{{ route('login') }}"
                            class="{{ request()->is('login') ? 'text-green-700 hover:text-green-800' : '' }}">Login</x-nav-item>
                        <x-nav-item href="#">Register</x-nav-item>
                    </x-nav-list>
                </div>
                <button data-collapse-toggle="navbar-cta" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-cta" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <x-nav-list>
                    <x-nav-item href="/"
                        class="{{ request()->is('/') ? 'text-green-700' : '' }}">Home</x-nav-item>
                    <x-nav-item href="#">About</x-nav-item>
                    <x-nav-item href="">Knowledge Sessions</x-nav-item>
                    <x-nav-item href="">Contact</x-nav-item>

                    <x-nav-item href="{{ route('login') }}" class="md:hidden  py-2 px-3 md:p-0">Login</x-nav-item>
                    <x-nav-item href="#" class="md:hidden  py-2 px-3 md:p-0">Register</x-nav-item>
                </x-nav-list>
            </div>

        </div>
    </nav>

</header>
