<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events - Alhudahuda (ALCOZA04)</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-green-900 text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <a href="index.html" class="text-xl font-bold">ALCOZA04</a>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="index.html" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-green-700">Home</a>
                        <a href="about.html" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-green-700">About Us</a>
                        <a href="events.html" class="px-3 py-2 rounded-md text-sm font-medium bg-green-700">Events</a>
                        <a href="alumni.html" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-green-700">Alumni</a>
                        <a href="news.html" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-green-700">News</a>
                        <a href="get-involved.html" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-green-700">Get Involved</a>
                        <a href="contact.html" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-green-700">Contact</a>
                    </div>
                </div>
                <div class="md:hidden">
                    <button class="inline-flex items-center justify-center p-2 rounded-md hover:bg-green-700 focus:outline-none" onclick="toggleMobileMenu()">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="bg-green-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4"></h1>
            <p class="text-xl max-w-3xl mx-auto"></p>
        </div>
    </section>

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
                        <p class="text-gray-600 mb-4">Join us for our biggest gathering of the year with networking, dinner, and entertainment. Reconnect with old friends and make new connections.</p>
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Grand Ballroom, City Center
                        </div>
                        <button class="w-full bg-green-600 text-white py-2 px-4 rounded-lg font-semibold hover:bg-green-700 transition duration-300">Register Now</button>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-gray-200">
                    <div class="bg-emerald-600 text-white p-4">
                        <div class="text-sm font-semibold">April 8, 2024</div>
                        <div class="text-xs opacity-90">2:00 PM - 5:00 PM</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-3 text-gray-900">Career Development Workshop</h3>
                        <p class="text-gray-600 mb-4">Professional development session focusing on leadership skills, career advancement strategies, and networking techniques.</p>
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Conference Room A, Business Center
                        </div>
                        <button class="w-full bg-emerald-600 text-white py-2 px-4 rounded-lg font-semibold hover:bg-emerald-700 transition duration-300">Register Now</button>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-gray-200">
                    <div class="bg-teal-600 text-white p-4">
                        <div class="text-sm font-semibold">May 20, 2024</div>
                        <div class="text-xs opacity-90">9:00 AM - 3:00 PM</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-3 text-gray-900">Community Service Day</h3>
                        <p class="text-gray-600 mb-4">Give back to the community through various volunteer activities including park cleanup, food distribution, and educational support.</p>
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Community Park & Local Schools
                        </div>
                        <button class="w-full bg-teal-600 text-white py-2 px-4 rounded-lg font-semibold hover:bg-teal-700 transition duration-300">Register Now</button>
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
                        <p class="text-sm text-gray-600 mb-3">A memorable evening celebrating our achievements and honoring distinguished alumni with awards and recognition.</p>
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
                        <p class="text-sm text-gray-600 mb-3">Connecting experienced alumni with recent graduates for career guidance and professional development.</p>
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
                        <p class="text-sm text-gray-600 mb-3">Family-friendly gathering with games, food, and networking opportunities in a relaxed outdoor setting.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-green-600 font-medium">July 2023</span>
                            <button class="text-green-600 hover:text-green-800 text-sm font-medium">View Photos</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">ALCOZA04</h3>
                    <p class="text-gray-300 mb-4">Connecting alumni, preserving heritage, and building stronger communities since 2004.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M20 10C20 4.477 15.523 0 10 0S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"></path>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="about.html" class="text-gray-300 hover:text-white">About Us</a></li>
                        <li><a href="events.html" class="text-gray-300 hover:text-white">Events</a></li>
                        <li><a href="alumni.html" class="text-gray-300 hover:text-white">Alumni Directory</a></li>
                        <li><a href="news.html" class="text-gray-300 hover:text-white">News & Updates</a></li>
                        <li><a href="get-involved.html" class="text-gray-300 hover:text-white">Get Involved</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Resources</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white">Membership Forms</a></li>
                        <li><a href="news.html" class="text-gray-300 hover:text-white">Newsletters</a></li>
                        <li><a href="events.html" class="text-gray-300 hover:text-white">Event Materials</a></li>
                        <li><a href="gallery.html" class="text-gray-300 hover:text-white">Photo Gallery</a></li>
                        <li><a href="contact.html" class="text-gray-300 hover:text-white">Contact Directory</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Info</h4>
                    <div class="text-gray-300 space-y-2">
                        <p>123 Alumni Street<br>Community Center, Building A<br>City, State 12345</p>
                        <p>Email: info@alcoza04.org</p>
                        <p>Phone: +1 (555) 123-4567</p>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-300">&copy; 2024 Alhudahuda (ALCOZA04). All rights reserved.</p>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#" class="text-gray-300 hover:text-white text-sm">Privacy Policy</a>
                        <a href="#" class="text-gray-300 hover:text-white text-sm">Terms of Use</a>
                        <a href="#" class="text-gray-300 hover:text-white text-sm">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu -->
    <div class="md:hidden fixed inset-0 z-50 bg-green-900 text-white transform -translate-x-full transition-transform duration-300" id="mobile-menu">
        <div class="flex justify-between items-center p-4 border-b border-green-700">
            <h2 class="text-xl font-bold">ALCOZA04</h2>
            <button class="text-white" onclick="toggleMobileMenu()">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <nav class="p-4">
            <a href="index.html" class="block py-3 px-4 hover:bg-green-700 rounded">Home</a>
            <a href="about.html" class="block py-3 px-4 hover:bg-green-700 rounded">About Us</a>
            <a href="events.html" class="block py-3 px-4 bg-green-700 rounded">Events</a>
            <a href="alumni.html" class="block py-3 px-4 hover:bg-green-700 rounded">Alumni</a>
            <a href="news.html" class="block py-3 px-4 hover:bg-green-700 rounded">News</a>
            <a href="get-involved.html" class="block py-3 px-4 hover:bg-green-700 rounded">Get Involved</a>
            <a href="contact.html" class="block py-3 px-4 hover:bg-green-700 rounded">Contact</a>
        </nav>
    </div>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('-translate-x-full');
        }
    </script>
</body>
</html>
