<script setup>
    import PageHeader from '../../Shared/PageHeader.vue';
</script>

<template>
    <Head title="Events" />
    <page-header
        title="Events"
        description="Stay connected through our exciting events, workshops, and community gatherings"
    />
    <!-- Upcoming Events -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-12 text-gray-900 text-center">Upcoming Events</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-gray-200">
                    <div class="bg-green-600 text-white p-4">
                        <div class="text-sm font-semibold">March 15, 2024</div>
                        <div class="text-xs opacity-90">7:00 PM - 11:00 PM</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-3 text-gray-900">Annual Reunion 2024</h3>
                        <p class="text-gray-600 mb-4">Join us for our biggest gathering of the year with networking,
                            dinner, and entertainment. Reconnect with old friends and make new connections.</p>
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Grand Ballroom, City Center
                        </div>
                        <button
                            class="w-full bg-green-600 text-white py-2 px-4 rounded-lg font-semibold hover:bg-green-700 transition duration-300">Register
                            Now</button>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-gray-200">
                    <div class="bg-emerald-600 text-white p-4">
                        <div class="text-sm font-semibold">April 8, 2024</div>
                        <div class="text-xs opacity-90">2:00 PM - 5:00 PM</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-3 text-gray-900">Career Development Workshop</h3>
                        <p class="text-gray-600 mb-4">Professional development session focusing on leadership skills,
                            career advancement strategies, and networking techniques.</p>
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Conference Room A, Business Center
                        </div>
                        <button
                            class="w-full bg-emerald-600 text-white py-2 px-4 rounded-lg font-semibold hover:bg-emerald-700 transition duration-300">Register
                            Now</button>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-gray-200">
                    <div class="bg-teal-600 text-white p-4">
                        <div class="text-sm font-semibold">May 20, 2024</div>
                        <div class="text-xs opacity-90">9:00 AM - 3:00 PM</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-3 text-gray-900">Community Service Day</h3>
                        <p class="text-gray-600 mb-4">Give back to the community through various volunteer activities
                            including park cleanup, food distribution, and educational support.</p>
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Community Park & Local Schools
                        </div>
                        <button
                            class="w-full bg-teal-600 text-white py-2 px-4 rounded-lg font-semibold hover:bg-teal-700 transition duration-300">Register
                            Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Event Calendar -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-12 text-gray-900 text-center">Event Calendar</h2>
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="grid gap-4">
                    <div class="border-l-4 border-green-500 pl-4 py-3 hover:bg-gray-50 transition duration-200">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-semibold text-gray-900">Annual Reunion 2024</h4>
                                <p class="text-sm text-gray-600">Grand ballroom networking and dinner</p>
                                <p class="text-xs text-gray-500 mt-1">7:00 PM - 11:00 PM</p>
                            </div>
                            <span class="text-sm text-green-600 font-medium">March 15, 2024</span>
                        </div>
                    </div>
                    <div class="border-l-4 border-emerald-500 pl-4 py-3 hover:bg-gray-50 transition duration-200">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-semibold text-gray-900">Career Development Workshop</h4>
                                <p class="text-sm text-gray-600">Professional skills and leadership training</p>
                                <p class="text-xs text-gray-500 mt-1">2:00 PM - 5:00 PM</p>
                            </div>
                            <span class="text-sm text-emerald-600 font-medium">April 8, 2024</span>
                        </div>
                    </div>
                    <div class="border-l-4 border-teal-500 pl-4 py-3 hover:bg-gray-50 transition duration-200">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-semibold text-gray-900">Community Service Day</h4>
                                <p class="text-sm text-gray-600">Volunteer activities and community outreach</p>
                                <p class="text-xs text-gray-500 mt-1">9:00 AM - 3:00 PM</p>
                            </div>
                            <span class="text-sm text-teal-600 font-medium">May 20, 2024</span>
                        </div>
                    </div>
                    <div class="border-l-4 border-green-400 pl-4 py-3 hover:bg-gray-50 transition duration-200">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-semibold text-gray-900">Summer Networking Mixer</h4>
                                <p class="text-sm text-gray-600">Casual networking event with refreshments</p>
                                <p class="text-xs text-gray-500 mt-1">6:00 PM - 9:00 PM</p>
                            </div>
                            <span class="text-sm text-green-600 font-medium">June 15, 2024</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Past Events -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-12 text-gray-900 text-center">Past Events</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="bg-gray-200 h-48 flex items-center justify-center">
                        <span class="text-gray-500">Event Photo</span>
                    </div>
                    <div class="p-6">
                        <h4 class="font-semibold text-gray-900 mb-2">2023 Annual Gala</h4>
                        <p class="text-sm text-gray-600 mb-3">A memorable evening celebrating our achievements and
                            honoring distinguished alumni with awards and recognition.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-green-600 font-medium">December 2023</span>
                            <button class="text-green-600 hover:text-green-800 text-sm font-medium">View Photos</button>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="bg-gray-200 h-48 flex items-center justify-center">
                        <span class="text-gray-500">Event Photo</span>
                    </div>
                    <div class="p-6">
                        <h4 class="font-semibold text-gray-900 mb-2">Mentorship Program Launch</h4>
                        <p class="text-sm text-gray-600 mb-3">Connecting experienced alumni with recent graduates for
                            career guidance and professional development.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-green-600 font-medium">September 2023</span>
                            <button class="text-green-600 hover:text-green-800 text-sm font-medium">View Photos</button>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="bg-gray-200 h-48 flex items-center justify-center">
                        <span class="text-gray-500">Event Photo</span>
                    </div>
                    <div class="p-6">
                        <h4 class="font-semibold text-gray-900 mb-2">Summer Picnic 2023</h4>
                        <p class="text-sm text-gray-600 mb-3">Family-friendly gathering with games, food, and networking
                            opportunities in a relaxed outdoor setting.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-green-600 font-medium">July 2023</span>
                            <button class="text-green-600 hover:text-green-800 text-sm font-medium">View Photos</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
