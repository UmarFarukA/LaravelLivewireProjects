<footer class="bg-lime-600 shadow dark:bg-gray-900 ">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8 pt-10">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="{{ route('index') }}"
                class="flex justify-center items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/logo.png') }}" class="h-8" alt="BEPU Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">BEPU</span>
            </a>
            <ul class="flex flex-wrap justify-center items-center mb-6 text-lg text-white sm:mb-0 font-bold">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Home</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Events</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Blog</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">About</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-stone-700 lg:my-8" />
        <span class="block text-sm text-gray-500 text-center dark:text-gray-400">© 2025 <a href="{{ route('index') }}"
                class="hover:underline">BEPU</a>. All Rights Reserved.</span>
    </div>
     <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</footer>
