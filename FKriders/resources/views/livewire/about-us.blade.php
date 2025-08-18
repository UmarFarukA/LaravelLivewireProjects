<div>

    <!-- About Section -->
    <section id="about" class="w-full py-12 md:py-16 lg:py-20 bg-gray-100">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid gap-6 lg:grid-cols-2 lg:gap-12">
                <div class="flex flex-col justify-center space-y-4">
                    <div class="space-y-2">
                        <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">About FK Ryders</h2>
                        <p class="text-gray-500 md:text-xl">
                            We're on a mission to make tricycle ownership accessible to everyone through flexible
                            payment options
                            and quality products.
                        </p>
                    </div>
                    <div class="space-y-2">
                        <p class="text-gray-500">
                            Founded in 2020, FK Ryders has grown to become a trusted name in the tricycle market. We
                            understand the
                            challenges of managing a tricycle outright, which is why we pioneered our flexible
                            services.
                        </p>
                        <p class="text-gray-500">
                            Our team of experts carefully inspects each tricycle to ensure it meets our high standards
                            of quality
                            and reliability.
                        </p>
                    </div>
                    <div class="flex flex-wrap gap-6">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="h-5 w-5 text-sky-500">
                                <path d="M20 7 9 18l-5-5"></path>
                            </svg>
                            <span class="font-medium">1000+ satisfied customers</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="h-5 w-5 text-sky-500">
                                <path d="M20 7 9 18l-5-5"></path>
                            </svg>
                            <span class="font-medium">5 years of experience</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="h-5 w-5 text-sky-500">
                                <rect x="1" y="3" width="15" height="13"></rect>
                                <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                                <circle cx="5.5" cy="18.5" r="2.5"></circle>
                                <circle cx="18.5" cy="18.5" r="2.5"></circle>
                            </svg>
                            <span class="font-medium">Nationwide delivery</span>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <img src="https://placehold.co/600x400" alt="About FK Riders" width="600" height="400"
                        class="rounded-lg object-cover" />
                </div>
            </div>
        </div>
    </section>

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
