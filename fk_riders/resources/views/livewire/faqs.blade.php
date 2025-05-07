<div>
    <!-- FAQ Section -->
    <section id="faqs" class="w-full py-12 md:py-16 lg:py-20 bg-gray-100">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex flex-col items-center justify-center space-y-4 text-center">
                <div class="space-y-2">
                    <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">Frequently Asked Questions</h2>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 transition-transform group-open:rotate-180">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </summary>
                        <p class="mt-4 text-gray-500">
                            Yes, we offer flexible installment plans that allow you to spread your payments over up to 12 months.
                            Our installment plans are designed to make tricycle ownership accessible to everyone.
                        </p>
                    </details>

                    <!-- FAQ Item 2 -->
                    <details class="group p-6">
                        <summary class="flex cursor-pointer items-center justify-between font-medium">
                            <span>What happens if I miss a payment?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 transition-transform group-open:rotate-180">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </summary>
                        <p class="mt-4 text-gray-500">
                            We understand that financial situations can change. If you anticipate missing a payment, please contact
                            our customer service team as soon as possible. We'll work with you to find a solution that works for
                            both parties.
                        </p>
                    </details>

                    <!-- FAQ Item 3 -->
                    <details class="group p-6">
                        <summary class="flex cursor-pointer items-center justify-between font-medium">
                            <span>Are used tricycles guaranteed?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 transition-transform group-open:rotate-180">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </summary>
                        <p class="mt-4 text-gray-500">
                            Yes, all our used tricycles undergo a thorough inspection process before being listed for sale. They
                            come with a 3-month warranty covering major mechanical issues. We stand behind the quality of every
                            tricycle we sell.
                        </p>
                    </details>

                    <!-- FAQ Item 4 -->
                    <details class="group p-6">
                        <summary class="flex cursor-pointer items-center justify-between font-medium">
                            <span>How does delivery work?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 transition-transform group-open:rotate-180">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </summary>
                        <p class="mt-4 text-gray-500">
                            We offer nationwide delivery services. Delivery times and costs vary depending on your location. Once
                            your purchase is confirmed, our logistics team will contact you to arrange a convenient delivery time.
                        </p>
                    </details>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
<section class="w-full py-12 md:py-16 lg:py-20">
    <div class="container mx-auto px-4 md:px-6">
        <div class="flex flex-col items-center justify-center space-y-4 text-center rounded-lg bg-sky-500 p-8 md:p-12">
            <div class="space-y-2">
                <h2 class="text-3xl font-bold tracking-tighter text-white sm:text-4xl md:text-5xl">
                    Ready to ride your dream tricycle?
                </h2>
                <p class="mx-auto max-w-[600px] text-white md:text-xl/relaxed">
                    Buy now or spread your payments easily.
                </p>
            </div>
            <div class="flex flex-col gap-2 min-[400px]:flex-row">
                <a href="{{route('products')}}" class="px-4 py-2 text-sm font-medium bg-white text-sky-500 rounded-md hover:bg-gray-100 flex items-center gap-1">
                    Browse Products
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </a>
                <a  href="{{route('signup')}}"
                    class="px-4 py-2 text-sm font-medium bg-transparent text-white border border-white rounded-md hover:bg-white hover:text-sky-500 flex items-center gap-1">
                    Create an Account
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
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
