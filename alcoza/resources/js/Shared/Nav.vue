<script setup>

</script>

<template>
    <!-- Navigation -->
    <nav class="bg-green-900 text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <h1 class="text-xl font-bold">ALCOZA04</h1>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="index.html" class="px-3 py-2 rounded-md text-sm font-medium bg-green-700">Home</a>
                        <a href="about.html" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-green-700">About
                            Us</a>
                        <a href="events.html"
                            class="px-3 py-2 rounded-md text-sm font-medium hover:bg-green-700">Events</a>
                        <a href="alumni.html"
                            class="px-3 py-2 rounded-md text-sm font-medium hover:bg-green-700">Alumni</a>
                        <a href="get-involved.html"
                            class="px-3 py-2 rounded-md text-sm font-medium hover:bg-green-700">Get Involved</a>
                        <a href="contact.html"
                            class="px-3 py-2 rounded-md text-sm font-medium hover:bg-green-700">Contact</a>
                    </div>
                </div>
                <div class="md:hidden">
                    <button
                        class="inline-flex items-center justify-center p-2 rounded-md hover:bg-green-700 focus:outline-none"
                        onclick="toggleMobileMenu()">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</template>
