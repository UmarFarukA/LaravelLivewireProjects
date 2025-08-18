<div class="mt-12">
    <div class="flex flex-col items-center justify-center space-y-4 text-center">
        <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">Contact Us</h2>
    </div>
    <div class="w-2/4 mx-auto mt-12">
        <form class="space-y-6">
            <flux:input label="Name" type="text" />

            <flux:input label="Email" type="email" />

            <flux:input label="Phone" type="number" />

            <flux:textarea label="Message" />

            <div>
                <flux:button variant="primary"  type="submit" class="w-full">
                Send
            </flux:button>
            </div>

        </form>
    </div>

    <!-- CTA Banner -->
    <section class="w-full py-12 md:py-16 lg:py-20">
        <div class="container mx-auto px-4 md:px-6">
            <div
                class="flex flex-col items-center justify-center space-y-4 text-center rounded-lg bg-sky-500 p-8 md:p-12">
                <div class="space-y-2">
                    <h2 class="text-3xl font-bold tracking-tighter text-white sm:text-4xl md:text-5xl">
                        Ready to ride your dream tricycle?
                    </h2>
                    <p class="mx-auto max-w-[600px] text-white md:text-xl/relaxed">
                        Buy now or spread your payments easily.
                    </p>
                </div>
                <div class="flex flex-col gap-2 min-[400px]:flex-row">
                    <a href="{{route('products')}}"
                        class="px-4 py-2 text-sm font-medium bg-white text-sky-500 rounded-md hover:bg-gray-100 flex items-center gap-1">
                        Browse Products
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="h-4 w-4">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </a>
                    <a href="{{ route('register') }}"
                        class="px-4 py-2 text-sm font-medium bg-transparent text-white border border-white rounded-md hover:bg-white hover:text-sky-500 flex items-center gap-1">
                        Create an Account
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="h-4 w-4">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
