<script setup>
import PageHeader from '../../Shared/PageHeader.vue';
import FormInput from '../../Shared/FormInput.vue';
import FormSelect from '../../Shared/FormSelect.vue';
import FormTextarea from '../../Shared/FormTextarea.vue';
</script>

<template>
    <Head title="Contact" />
    <PageHeader title="Alumni Directory"
        description="Connect with fellow alumni and discover the amazing achievements of our community members" />

    <!-- Contact Information & Form -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Contact Information -->
                <div>
                    <h2 class="text-3xl font-bold mb-8 text-gray-900">Get in Touch</h2>
                    <div class="space-y-8">
                        <div class="flex items-start space-x-4">
                            <div
                                class="bg-green-600 w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-2">Our Address</h3>
                                <p class="text-gray-600">123 Alumni Street<br>Community Center, Building A<br>City,
                                    State 12345<br>United States</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div
                                class="bg-green-600 w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-2">Email Addresses</h3>
                                <div class="space-y-1">
                                    <p class="text-gray-600">General Inquiries: <a href="mailto:info@alcoza04.org"
                                            class="text-green-600 hover:text-green-800">info@alcoza04.org</a></p>
                                    <p class="text-gray-600">President: <a href="mailto:president@alcoza04.org"
                                            class="text-green-600 hover:text-green-800">president@alcoza04.org</a></p>
                                    <p class="text-gray-600">Events: <a href="mailto:events@alcoza04.org"
                                            class="text-green-600 hover:text-green-800">events@alcoza04.org</a></p>
                                    <p class="text-gray-600">Membership: <a href="mailto:membership@alcoza04.org"
                                            class="text-green-600 hover:text-green-800">membership@alcoza04.org</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div
                                class="bg-green-600 w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-2">Phone Numbers</h3>
                                <div class="space-y-1">
                                    <p class="text-gray-600">Main Office: <a href="tel:+15551234567"
                                            class="text-green-600 hover:text-green-800">+1 (555) 123-4567</a></p>
                                    <p class="text-gray-600">Events Hotline: <a href="tel:+15559876543"
                                            class="text-green-600 hover:text-green-800">+1 (555) 987-6543</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div
                                class="bg-green-600 w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-2">Office Hours</h3>
                                <div class="space-y-1">
                                    <p class="text-gray-600">Monday - Friday: 9:00 AM - 5:00 PM</p>
                                    <p class="text-gray-600">Saturday: 10:00 AM - 2:00 PM</p>
                                    <p class="text-gray-600">Sunday: Closed</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="mt-12">
                        <h3 class="font-semibold text-gray-900 mb-4">Follow Us</h3>
                        <div class="flex space-x-4">
                            <a href="#"
                                class="bg-green-600 w-12 h-12 rounded-full flex items-center justify-center text-white hover:bg-green-700 transition duration-300">
                                <span class="sr-only">Facebook</span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M20 10C20 4.477 15.523 0 10 0S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="#"
                                class="bg-green-500 w-12 h-12 rounded-full flex items-center justify-center text-white hover:bg-green-600 transition duration-300">
                                <span class="sr-only">Twitter</span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84">
                                    </path>
                                </svg>
                            </a>
                            <a href="#"
                                class="bg-green-700 w-12 h-12 rounded-full flex items-center justify-center text-white hover:bg-green-800 transition duration-300">
                                <span class="sr-only">LinkedIn</span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="#"
                                class="bg-green-400 w-12 h-12 rounded-full flex items-center justify-center text-white hover:bg-green-500 transition duration-300">
                                <span class="sr-only">Instagram</span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div>
                    <h2 class="text-3xl font-bold mb-8 text-gray-900">Send us a Message</h2>
                    <form class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <FormInput label="First Name" type="text" />
                            <FormInput label="Last Name" type="text" />
                        </div>

                        <div>
                            <FormInput label="Email" type="email" />
                        </div>

                        <div>
                            <FormInput label="Phone" type="number" />
                        </div>

                        <div>
                            <FormInput label="Subject" type="text" />
                        </div>

                        <div>
                            <FormTextarea label="Message" />
                        </div>

                        <button type="submit"
                            class="w-full bg-green-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-300">
                            Send Message
                        </button>

                        <p class="text-sm text-gray-500 text-center">We'll get back to you within 24-48 hours during
                            business days.</p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-8 text-gray-900 text-center">Find Us</h2>
            <div class="bg-gray-300 h-96 rounded-lg flex items-center justify-center">
                <div class="text-center">
                    <svg class="w-16 h-16 text-gray-500 mx-auto mb-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <p class="text-gray-500">Interactive Map Placeholder</p>
                    <p class="text-sm text-gray-400 mt-2">123 Alumni Street, Community Center, Building A</p>
                </div>
            </div>
        </div>
    </section>

</template>
