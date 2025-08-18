<div>
    <section class="relative py-20 md:py-24 lg:py-32 overflow-hidden">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid gap-6 lg:grid-cols-2 lg:gap-12 xl:grid-cols-2">
                <div class="flex flex-col justify-center space-y-4">
                    <div class="space-y-2">
                        <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl lg:text-6xl/none">
                            Ride to Wealth.
                        </h1>
                        <p class="max-w-[600px] text-gray-500 md:text-xl">
                            Invest in our premium tricycles and let us manage them for you!
                            With FK Ryder's System, you're securing a steady stream of income.
                        </p>
                    </div>
                    <div class="flex flex-col gap-2 min-[400px]:flex-row">
                        <button
                            class="px-4 py-2 text-sm font-medium bg-sky-500 text-white rounded-md hover:bg-sky-600 flex items-center gap-1">
                            Join Us Now
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="h-4 w-4">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </button>
                        <button
                            class="px-4 py-2 text-sm font-medium border rounded-md hover:bg-gray-50 flex items-center gap-1">
                            Learn more &rarr;
                        </button>
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <img src="{{ asset('tricycle_image_1.png') }}" alt="Tricycles" width="400" height="200"
                        class="rounded-lg object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Value Proposition -->
    <section class="w-full py-12 md:py-16 lg:py-20 bg-gray-100">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex flex-col items-center justify-center space-y-4 text-center">
                <div class="space-y-2">
                    <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">Why Choose FK Ryder's
                        System?</h2>
                    <p class="max-w-[900px] text-gray-500 md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed">
                        We provide quality and exceptional service.
                    </p>
                </div>
            </div>
            <div class="mx-auto grid max-w-5xl items-center gap-6 py-12 lg:grid-cols-4">
                <x-card caption="Hassle-Free" subcaption="We manage everything-drivers, maintenance, & Operations">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="h-6 w-6 text-sky-500">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                </x-card>
                <x-card caption="Transparency"
                    subcaption="Track your earnings with regular update at your own conformt">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="h-6 w-6 text-sky-500">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                    </svg>
                </x-card>
                <x-card caption="Proven Profits" subcaption="Ride the wave of Nigeria's booming transportation sector.">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="h-6 w-6 text-sky-500">
                        <path d="m12 19 7-7 3 3-7 7-3-3z"></path>
                        <path d="m18 13-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
                        <path d="m2 2 7.586 7.586"></path>
                        <circle cx="11" cy="11" r="2"></circle>
                    </svg>
                </x-card>
                <x-card caption="Flexibility"
                    subcaption="Buy one tricycle or scale up with mulyiple units for higher return">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="h-6 w-6 text-sky-500">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                </x-card>


            </div>
        </div>
    </section>

    <!-- Plans -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">
        <!-- Header -->
        <div class="text-center mb-12 mt-12">
            <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">
                Choose Your Plan
            </h2>
            <p class="mt-4 text-lg text-gray-600">
                Select the perfect plan for your needs
            </p>
        </div>

        <!-- Pricing Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <!-- Plan A - Basic -->
            <x-plan-card class="border-gray-200" plan="Plan A" caption="Fast Returns" amount="N5M"
                buttonText="Get Started">
                <x-plan-card-item content="Total returns in 6months" />
                <x-plan-card-item content="Maximize earnings quickly" />
                <x-plan-card-item content="Devidents assured" />
            </x-plan-card>

            <!-- Plan B - Popular -->
            <x-plan-card plan="Plan B" caption="Long-Term Wealth" amount="N6M" buttonText="Choose Plan B"
                class="border-sky-600">
                <x-plan-card-item content="Total returns in 20months" />
                <x-plan-card-item content="Weekly or monthly returns" />
                <x-plan-card-item content="Reliable payouts" />
                <x-plan-card-item content="24/7 dedicated support" />
                <x-plan-card-item content="Devidents assured" />
            </x-plan-card>

            <!-- Plan C - Enterprise -->
            <x-plan-card class="border-gray-200" plan="Plan C" caption="Higher Purchase" amount="Negotiable"
                buttonText="Contact Us">
                <x-plan-card-item content="Weekly returns" />
                <x-plan-card-item content="Simple and affordable" />
                <x-plan-card-item content="Track your vehicle" />
                <x-plan-card-item content="24/7 dedicated support" />
            </x-plan-card>
        </div>

        <!-- Additional Info -->
        {{-- <div class="text-center mt-12">
            <p class="text-gray-600">
                All plans include a 14-day free trial. No credit card required.
            </p>
        </div> --}}
    </div>

    <!-- How It Works -->
    <section class="w-full py-12 md:py-16 lg:py-20 bg-gray-100">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex flex-col items-center justify-center space-y-4 text-center">
                <div class="space-y-2">
                    <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">How It Works</h2>
                    <p class="max-w-[900px] text-gray-500 md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed">
                        Purchase a tricycle from us for N4M, and we'll handle the rest-management, operations, profits
                        delivered to your account.
                    </p>
                </div>
            </div>
            <div class="mx-auto grid max-w-5xl gap-8 py-12 md:grid-cols-2 lg:grid-cols-4">
                <!-- Step 1 -->
                <x-card :steps="true" :stepNumber="1" caption="Sign up for an account"
                    subcaption="Create your FK Riders account in minutes">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="h-8 w-8 text-sky-500">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                </x-card>

                <!-- Step 2 -->
                <x-card :steps="true" :stepNumber="2" caption="Select a plan and Invest"
                    subcaption="Explore from our variety of plans and get valued">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="h-8 w-8 text-sky-500">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </x-card>

                <!-- Step 3 -->
                <x-card :steps="true" :stepNumber="3" caption="Get verified"
                    subcaption="Agree to our terms and policies">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="h-8 w-8 text-sky-500">
                        <rect x="1" y="3" width="15" height="13"></rect>
                        <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                        <circle cx="5.5" cy="18.5" r="2.5"></circle>
                        <circle cx="18.5" cy="18.5" r="2.5"></circle>
                    </svg>
                </x-card>

                <!-- Step 4 -->
                <x-card :steps="true" :stepNumber="4" caption="Make full payment" subcaption="Pay for the desired plan">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="h-8 w-8 text-sky-500">
                        <rect x="1" y="3" width="15" height="13"></rect>
                        <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                        <circle cx="5.5" cy="18.5" r="2.5"></circle>
                        <circle cx="18.5" cy="18.5" r="2.5"></circle>
                    </svg>
                </x-card>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="w-full py-12 md:py-16 lg:py-20">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex flex-col items-center justify-center space-y-4 text-center">
                <div class="space-y-2">
                    <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">Customer Testimonials</h2>
                    <p class="max-w-[900px] text-gray-500 md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed">
                        Hear what our satisfied customers have to say about their experience.
                    </p>
                </div>
            </div>
            <div class="mx-auto grid max-w-5xl gap-8 py-12 md:grid-cols-3">
                <!-- Testimonial 1 -->
                <div class="flex flex-col items-center space-y-4 rounded-lg border bg-white p-6 text-center">
                    <img src="https://placehold.co/60x60" alt="John Doe" width="60" height="60" class="rounded-full" />
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="h-5 w-5 text-sky-500">
                            <polygon
                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                            </polygon>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="h-5 w-5 text-sky-500">
                            <polygon
                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                            </polygon>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="h-5 w-5 text-sky-500">
                            <polygon
                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                            </polygon>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="h-5 w-5 text-sky-500">
                            <polygon
                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                            </polygon>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="h-5 w-5 text-sky-500">
                            <polygon
                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                            </polygon>
                        </svg>
                    </div>
                    <p class="text-gray-500">"The installment plan made it possible for me to own a tricycle. The
                        process was smooth and the customer service was excellent."</p>
                    <p class="font-semibold">John Doe</p>
                </div>

                <!-- Testimonial 2 -->
                <div class="flex flex-col items-center space-y-4 rounded-lg border bg-white p-6 text-center">
                    <img src="https://placehold.co/60x60" alt="Jane Smith" width="60" height="60"
                        class="rounded-full" />
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="h-5 w-5 text-sky-500">
                            <polygon
                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                            </polygon>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="h-5 w-5 text-sky-500">
                            <polygon
                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                            </polygon>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="h-5 w-5 text-sky-500">
                            <polygon
                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                            </polygon>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="h-5 w-5 text-sky-500">
                            <polygon points="12   stroke-linejoin=" round" class="h-5 w-5 text-sky-500">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="h-5 w-5 text-sky-500">
                            <polygon
                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                            </polygon>
                        </svg>
                    </div>
                    <p class="text-gray-500">"I was skeptical about buying a used tricycle, but FK Riders' inspection
                        process gave me confidence. My tricycle is in perfect condition!"</p>
                    <p class="font-semibold">Jane Smith</p>
                </div>

                <!-- Testimonial 3 -->
                <div class="flex flex-col items-center space-y-4 rounded-lg border bg-white p-6 text-center">
                    <img src="https://placehold.co/60x60" alt="Michael Johnson" width="60" height="60"
                        class="rounded-full" />
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="h-5 w-5 text-sky-500">
                            <polygon
                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                            </polygon>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="h-5 w-5 text-sky-500">
                            <polygon
                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                            </polygon>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="h-5 w-5 text-sky-500">
                            <polygon
                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                            </polygon>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="h-5 w-5 text-sky-500">
                            <polygon
                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                            </polygon>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="h-5 w-5 text-gray-400">
                            <polygon
                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                            </polygon>
                        </svg>
                    </div>
                    <p class="text-gray-500">"The flexible payment option is a game-changer. I couldn't afford to pay at
                        once, but the installment plan worked perfectly for me."</p>
                    <p class="font-semibold">Michael Johnson</p>
                </div>
            </div>
        </div>
    </section>

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
                            Founded in 2018, FK Ryders has grown to become a trusted name in the tricycle market. We
                            understand the
                            challenges of purchasing a tricycle outright, which is why we pioneered our flexible
                            installment plan.
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
                    <img src="{{ asset('fk_ryders_logo.jpg') }}" alt="About FK Riders" width="400" height="200"
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

    <!-- FAQ Section -->
    <section id="faqs" class="w-full py-12 md:py-16 lg:py-20 bg-gray-100">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex flex-col items-center justify-center space-y-4 text-center">
                <div class="space-y-2">
                    <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">Frequently Asked Questions
                    </h2>
                    <p class="max-w-[900px] text-gray-500 md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed">
                        Find answers to common questions about our products and services.
                    </p>
                </div>
            </div>
            <div class="mx-auto max-w-3xl py-12">
                <div class="rounded-lg border divide-y">
                    <!-- FAQ Item 1 -->
                    <details class="group p-6">
                        <summary class="flex cursor-pointer items-center justify-between font-medium">
                            <span>Can I pay in installments?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="h-5 w-5 transition-transform group-open:rotate-180">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </summary>
                        <p class="mt-4 text-gray-500">
                            Yes, we offer flexible installment plans that allow you to spread your payments over up to
                            12 months.
                            Our installment plans are designed to make tricycle ownership accessible to everyone.
                        </p>
                    </details>

                    <!-- FAQ Item 2 -->
                    <details class="group p-6">
                        <summary class="flex cursor-pointer items-center justify-between font-medium">
                            <span>What happens if I miss a payment?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="h-5 w-5 transition-transform group-open:rotate-180">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </summary>
                        <p class="mt-4 text-gray-500">
                            We understand that financial situations can change. If you anticipate missing a payment,
                            please contact
                            our customer service team as soon as possible. We'll work with you to find a solution that
                            works for
                            both parties.
                        </p>
                    </details>

                    <!-- FAQ Item 3 -->
                    <details class="group p-6">
                        <summary class="flex cursor-pointer items-center justify-between font-medium">
                            <span>Are used tricycles guaranteed?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="h-5 w-5 transition-transform group-open:rotate-180">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </summary>
                        <p class="mt-4 text-gray-500">
                            Yes, all our used tricycles undergo a thorough inspection process before being listed for
                            sale. They
                            come with a 3-month warranty covering major mechanical issues. We stand behind the quality
                            of every
                            tricycle we sell.
                        </p>
                    </details>

                    <!-- FAQ Item 4 -->
                    <details class="group p-6">
                        <summary class="flex cursor-pointer items-center justify-between font-medium">
                            <span>How does delivery work?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="h-5 w-5 transition-transform group-open:rotate-180">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </summary>
                        <p class="mt-4 text-gray-500">
                            We offer nationwide delivery services. Delivery times and costs vary depending on your
                            location. Once
                            your purchase is confirmed, our logistics team will contact you to arrange a convenient
                            delivery time.
                        </p>
                    </details>
                </div>
            </div>
        </div>
    </section>
</div>
