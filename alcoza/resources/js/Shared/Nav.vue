<script setup>
import Logo from './Logo.vue';
import NavLink from './NavLink.vue';


</script>

<template>
    <!-- Navigation -->
    <nav class="bg-green-900 text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <Logo />
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <NavLink
                            :href="route('home')"
                            :class="{'bg-green-700': $page.component == 'Home/Index'}"
                        >
                            Home
                        </NavLink>
                        <NavLink
                            :href="route('about')"
                            :class="{'bg-green-700': $page.component == 'About/Index'}"
                        >
                            About Us
                        </NavLink>
                        <NavLink
                            :href="route('events')"
                            :class="{'bg-green-700': $page.component == 'Events/Index'}"
                        >
                            Events
                        </NavLink>
                        <NavLink
                            :href="route('alumni')"
                            :class="{'bg-green-700': $page.component == 'Alumni/Index'}"
                        >
                            Alumni
                        </NavLink>

                        <NavLink
                            :href="route('get-involve')"
                            :class="{'bg-green-700': $page.component == 'GetInvolve/Index'}"
                        >
                            Get Involved
                        </NavLink>

                        <NavLink
                            :href="route('contact')"
                            :class="{'bg-green-700': $page.component == 'Contact/Index'}"
                        >
                            Contact
                        </NavLink>
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
