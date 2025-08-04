<script setup>
import PageHeader from '../../Shared/PageHeader.vue';
</script>

<template>
    <PageHeader title="Get Involved"
        description="Join our community and make a difference through membership, volunteering, and supporting our initiatives" />

    <!-- Main Options -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Membership -->
                <div class="bg-green-50 rounded-lg p-8 text-center shadow-lg">
                    <div class="bg-green-600 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900">Membership</h3>
                    <p class="text-gray-600 mb-6">Join our growing community of alumni and enjoy exclusive benefits,
                        networking opportunities, and lifelong connections with fellow graduates.</p>
                    <div class="space-y-3 mb-6 text-left">
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Access to exclusive events
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Alumni directory access
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Career resources & mentorship
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Quarterly newsletter
                        </div>
                    </div>
                    <button
                        class="w-full bg-green-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-green-700 transition duration-300 mb-4">Join
                        Now</button>
                    <p class="text-xs text-gray-500">Starting from $25/year</p>
                </div>

                <!-- Volunteer Opportunities -->
                <div class="bg-emerald-50 rounded-lg p-8 text-center shadow-lg">
                    <div class="bg-emerald-600 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900">Volunteer</h3>
                    <p class="text-gray-600 mb-6">Share your skills and time to help organize events, mentor students,
                        and contribute to our community initiatives that make a real difference.</p>
                    <div class="space-y-3 mb-6 text-left">
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-emerald-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Event organization & planning
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-emerald-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Mentorship programs
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-emerald-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Community service projects
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-emerald-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Skills-based volunteering
                        </div>
                    </div>
                    <button
                        class="w-full bg-emerald-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-emerald-700 transition duration-300 mb-4">Get
                        Started</button>
                    <p class="text-xs text-gray-500">Flexible time commitment</p>
                </div>

                <!-- Donations -->
                <div class="bg-teal-50 rounded-lg p-8 text-center shadow-lg">
                    <div class="bg-teal-600 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900">Donate</h3>
                    <p class="text-gray-600 mb-6">Support our initiatives, scholarship programs, and community projects
                        that make a lasting impact on current and future generations of students.</p>
                    <div class="space-y-3 mb-6 text-left">
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-teal-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Scholarship fund support
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-teal-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Community development projects
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-teal-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Event sponsorship opportunities
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-teal-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Tax-deductible contributions
                        </div>
                    </div>
                    <button
                        class="w-full bg-teal-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-teal-700 transition duration-300 mb-4">Donate
                        Now</button>
                    <p class="text-xs text-gray-500">Any amount makes a difference</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Membership Plans -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-12 text-gray-900 text-center">Membership Plans</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Student Membership -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="text-center mb-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Student</h3>
                        <div class="text-3xl font-bold text-green-600 mb-2">$25</div>
                        <div class="text-gray-500">per year</div>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Access to student events
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Mentorship program
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Career resources
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Newsletter subscription
                        </li>
                    </ul>
                    <button
                        class="w-full bg-green-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-green-700 transition duration-300">Choose
                        Plan</button>
                </div>

                <!-- Annual Membership -->
                <div class="bg-white rounded-lg shadow-lg p-8 border-2 border-green-600 relative">
                    <div class="absolute -top-3 left-1/2 transform -translate-x-1/2">
                        <span class="bg-green-600 text-white px-4 py-1 rounded-full text-sm font-medium">Most
                            Popular</span>
                    </div>
                    <div class="text-center mb-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Annual</h3>
                        <div class="text-3xl font-bold text-green-600 mb-2">$50</div>
                        <div class="text-gray-500">per year</div>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            All student benefits
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Exclusive alumni events
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Full alumni directory access
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Priority event registration
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Voting rights in elections
                        </li>
                    </ul>
                    <button
                        class="w-full bg-green-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-green-700 transition duration-300">Choose
                        Plan</button>
                </div>

                <!-- Lifetime Membership -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="text-center mb-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Lifetime</h3>
                        <div class="text-3xl font-bold text-green-600 mb-2">$500</div>
                        <div class="text-gray-500">one-time payment</div>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            All annual benefits
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            VIP event access
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Legacy recognition
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Advisory board eligibility
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Exclusive networking opportunities
                        </li>
                    </ul>
                    <button
                        class="w-full bg-green-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-green-700 transition duration-300">Choose
                        Plan</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Volunteer Opportunities -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-12 text-gray-900 text-center">Volunteer Opportunities</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-gray-50 rounded-lg p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-green-100 p-3 rounded-lg mr-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Event Planning Committee</h3>
                            <p class="text-sm text-gray-600">Help organize our annual events and gatherings</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">Join our event planning team to help coordinate memorable experiences
                        for our alumni community. From annual galas to networking mixers, your creativity and
                        organizational skills will make a difference.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-green-600 font-medium">Time commitment: 5-10 hours/month</span>
                        <button
                            class="bg-green-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-green-700 transition duration-300">Apply</button>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-100 p-3 rounded-lg mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Mentorship Program</h3>
                            <p class="text-sm text-gray-600">Guide and support current students and recent graduates</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">Share your professional experience and wisdom with the next
                        generation. As a mentor, you'll provide career guidance, industry insights, and personal support
                        to help students and young alumni navigate their professional journey.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-green-600 font-medium">Time commitment: 2-4 hours/month</span>
                        <button
                            class="bg-green-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-green-700 transition duration-300">Apply</button>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-purple-100 p-3 rounded-lg mr-4">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Community Outreach</h3>
                            <p class="text-sm text-gray-600">Participate in local community service projects</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">Make a positive impact in local communities through various service
                        projects. From educational support to environmental initiatives, help us give back and
                        strengthen our community bonds.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-green-600 font-medium">Time commitment: Flexible</span>
                        <button
                            class="bg-green-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-green-700 transition duration-300">Apply</button>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-100 p-3 rounded-lg mr-4">
                            <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Content Creation</h3>
                            <p class="text-sm text-gray-600">Help create newsletters, social media content, and website
                                updates</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">Use your creative skills to help tell our story and keep our community
                        connected. Contribute to newsletters, social media campaigns, website content, and other
                        communication materials.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-green-600 font-medium">Time commitment: 3-6 hours/month</span>
                        <button
                            class="bg-green-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-green-700 transition duration-300">Apply</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
