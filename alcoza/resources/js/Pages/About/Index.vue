<script setup>
    import PageHeader from '../../Shared/PageHeader.vue';
</script>

<template>
    <Head title="About" />
    <!-- Page Header -->

    <page-header
        title="About Alhudahuda (ALCOZA04)"
        description="Learn about our history, mission, and the dedicated people who make our alumni association thrive"
    />

    <!-- History Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-12 text-gray-900 text-center">Our History</h2>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl font-bold mb-6 text-gray-900">Founded in 2004</h3>
                    <p class="text-gray-600 mb-6">Alhudahuda (ALCOZA04) was established in 2004 by a group of passionate alumni who recognized the need for a strong, unified community that would preserve our shared heritage and support future generations.</p>
                    <p class="text-gray-600 mb-6">What began as informal gatherings among friends has evolved into a thriving association with hundreds of active members spanning across continents, all united by our common values and commitment to excellence.</p>
                    <p class="text-gray-600">Over the past two decades, we have organized countless events, supported numerous charitable causes, and created lasting connections that have enriched the lives of our members and their communities.</p>
                </div>
                <div class="bg-gray-100 h-96 rounded-lg flex items-center justify-center">
                    <span class="text-gray-500">Historical Photo Placeholder</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission and Vision -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-12 text-gray-900 text-center">Mission & Vision</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-green-50 p-8 rounded-lg">
                    <div class="flex items-center mb-6">
                        <div class="bg-green-600 w-12 h-12 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-green-900">Our Mission</h3>
                    </div>
                    <p class="text-gray-700 leading-relaxed">To strengthen the bonds among alumni through meaningful connections, professional development opportunities, and community service initiatives that honor our shared heritage and values while fostering personal and collective growth.</p>
                </div>
                <div class="bg-emerald-50 p-8 rounded-lg">
                    <div class="flex items-center mb-6">
                        <div class="bg-emerald-600 w-12 h-12 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-emerald-900">Our Vision</h3>
                    </div>
                    <p class="text-gray-700 leading-relaxed">To be the premier alumni association that empowers members to achieve personal and professional excellence while contributing positively to society and preserving our legacy for future generations through innovation, collaboration, and service.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-12 text-gray-900 text-center">Our Core Values</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="bg-green-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900">Unity</h3>
                    <p class="text-gray-600">We believe in the power of coming together as one community, celebrating our diversity while maintaining our shared identity and purpose.</p>
                </div>
                <div class="text-center">
                    <div class="bg-green-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900">Excellence</h3>
                    <p class="text-gray-600">We strive for excellence in all our endeavors, encouraging continuous learning, innovation, and the pursuit of the highest standards.</p>
                </div>
                <div class="text-center">
                    <div class="bg-green-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900">Service</h3>
                    <p class="text-gray-600">We are committed to serving our community and society at large, using our collective knowledge and resources to make a positive impact.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Committee Members -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-12 text-gray-900 text-center">Leadership Committee</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white rounded-lg p-6 text-center shadow-md">
                    <div class="bg-gray-300 w-32 h-32 rounded-full mx-auto mb-4"></div>
                    <h4 class="text-xl font-semibold text-gray-900 mb-2">John Doe</h4>
                    <p class="text-green-600 font-medium mb-3">President</p>
                    <p class="text-sm text-gray-600">Leading the association with vision and dedication to our community's growth and success.</p>
                </div>
                <div class="bg-white rounded-lg p-6 text-center shadow-md">
                    <div class="bg-gray-300 w-32 h-32 rounded-full mx-auto mb-4"></div>
                    <h4 class="text-xl font-semibold text-gray-900 mb-2">Jane Smith</h4>
                    <p class="text-green-600 font-medium mb-3">Vice President</p>
                    <p class="text-sm text-gray-600">Supporting strategic initiatives and fostering member engagement across all programs.</p>
                </div>
                <div class="bg-white rounded-lg p-6 text-center shadow-md">
                    <div class="bg-gray-300 w-32 h-32 rounded-full mx-auto mb-4"></div>
                    <h4 class="text-xl font-semibold text-gray-900 mb-2">Mike Johnson</h4>
                    <p class="text-green-600 font-medium mb-3">Secretary</p>
                    <p class="text-sm text-gray-600">Maintaining records and ensuring effective communication throughout our community.</p>
                </div>
                <div class="bg-white rounded-lg p-6 text-center shadow-md">
                    <div class="bg-gray-300 w-32 h-32 rounded-full mx-auto mb-4"></div>
                    <h4 class="text-xl font-semibold text-gray-900 mb-2">Sarah Wilson</h4>
                    <p class="text-green-600 font-medium mb-3">Treasurer</p>
                    <p class="text-sm text-gray-600">Managing finances and ensuring responsible stewardship of our resources.</p>
                </div>
            </div>
        </div>
    </section>
</template>
