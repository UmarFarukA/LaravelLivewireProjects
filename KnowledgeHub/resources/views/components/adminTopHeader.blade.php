<header class="bg-white shadow p-4 flex items-center justify-between">
    <button id="menu-btn" class="md:hidden text-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500">
        <!-- Hamburger Icon -->
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
            </path>
        </svg>
    </button>
    {{-- <h1 class="text-lg font-semibold">Dashboard</h1> --}}
    <img src="{{ asset('images/kasu_logo.jpeg') }}" class="h-8" alt="KASU Logo" />
    <div class="flex items-center space-x-4">
        <input type="text" placeholder="Search..."
            class="border border-gray-300 rounded p-2 text-sm focus:ring focus:ring-blue-300" />
        <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center">
            <span class="text-gray-500">JD</span>
        </div>
    </div>
</header>
