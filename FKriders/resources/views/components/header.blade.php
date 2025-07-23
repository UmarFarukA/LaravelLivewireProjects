<header class="sticky top-0 z-50 w-full border-b bg-white/95 backdrop-blur">
    <div class="container mx-auto px-4 flex h-16 items-center justify-between">
      <div class="flex items-center gap-2">
        <a href="/" class="flex items-center gap-2 font-bold text-xl">
          <span class="text-sky-500 font-bold">FK Riders</span>
        </a>
      </div>

      <!-- Mobile menu button -->
      <div class="md:hidden">
        <button class="p-2 rounded-md hover:bg-gray-100">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
          </svg>
          <span class="sr-only">Toggle menu</span>
        </button>
      </div>

      <!-- Desktop navigation -->
      <x-nav>

        <x-nav-link href="{{route('home')}}">Home</x-nav-link>
        <x-nav-link href="{{route('products')}}">Products</x-nav-link>
        <x-nav-link href="{{route('about-us')}}">About Us</x-nav-link>
        <x-nav-link href="{{route('faqs')}}">FAQs</x-nav-link>
        <x-nav-link href="{{route('contact')}}">Contact</x-nav-link>
      </x-nav>

      <div class="hidden md:flex items-center gap-4">
        <a href="{{route('login')}}" wire:navigate class="px-3 py-1.5 text-sm font-medium border rounded-md hover:bg-gray-50">Login</a href="{{route('login')}}">
        <a href="{{route('register')}}" wire:navigate class="px-3 py-1.5 text-sm font-medium bg-sky-500 text-white rounded-md hover:bg-sky-600">Create Account</a>
      </div>
    </div>
  </header>
