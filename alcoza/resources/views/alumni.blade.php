<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Directory - Alhudahuda (ALCOZA04)</title>
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
                        <a href="events.html" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-green-700">Events</a>
                        <a href="alumni.html" class="px-3 py-2 rounded-md text-sm font-medium bg-green-700">Alumni</a>
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
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Alumni Directory</h1>
            <p class="text-xl max-w-3xl mx-auto">Connect with fellow alumni and discover the amazing achievements of our community members</p>
        </div>
    </section>

    <!-- Featured Alumni -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-12 text-gray-900 text-center">Featured Alumni</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-lg p-6 text-center shadow-md">
                    <div class="bg-gray-300 w-32 h-32 rounded-full mx-auto mb-4"></div>
                    <h4 class="text-xl font-semibold text-gray-900 mb-2">Dr. Ahmed Hassan</h4>
                    <p class="text-green-600 font-medium mb-3">Chief Medical Officer</p>
                    <p class="text-sm text-gray-600 mb-4">Leading healthcare innovation and serving communities worldwide through medical excellence and research.</p>
                    <div class="flex justify-center space-x-3">
                        <button class="bg-green-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-green-700 transition duration-300">Connect</button>
                        <button class="border border-green-600 text-green-600 px-4 py-2 rounded-lg text-sm font-medium hover:bg-green-50 transition duration-300">View Profile</button>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-lg p-6 text-center shadow-md">
                    <div class="bg-gray-300 w-32 h-32 rounded-full mx-auto mb-4"></div>
                    <h4 class="text-xl font-semibold text-gray-900 mb-2">Fatima Al-Zahra</h4>
                    <p class="text-green-600 font-medium mb-3">Tech Entrepreneur</p>
                    <p class="text-sm text-gray-600 mb-4">Founded multiple successful startups and mentors young entrepreneurs in the technology industry.</p>
                    <div class="flex justify-center space-x-3">
                        <button class="bg-green-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-green-700 transition duration-300">Connect</button>
                        <button class="border border-green-600 text-green-600 px-4 py-2 rounded-lg text-sm font-medium hover:bg-green-50 transition duration-300">View Profile</button>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-lg p-6 text-center shadow-md">
                    <div class="bg-gray-300 w-32 h-32 rounded-full mx-auto mb-4"></div>
                    <h4 class="text-xl font-semibold text-gray-900 mb-2">Omar Abdullah</h4>
                    <p class="text-green-600 font-medium mb-3">Environmental Scientist</p>
                    <p class="text-sm text-gray-600 mb-4">Leading research in sustainable development and climate change solutions for a better future.</p>
                    <div class="flex justify-center space-x-3">
                        <button class="bg-green-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-green-700 transition duration-300">Connect</button>
                        <button class="border border-green-600 text-green-600 px-4 py-2 rounded-lg text-sm font-medium hover:bg-green-50 transition duration-300">View Profile</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Alumni Directory -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-12 text-gray-900 text-center">Alumni Directory</h2>
            <div class="bg-white rounded-lg shadow-md p-6">
                <!-- Search and Filter -->
                <div class="mb-6">
                    <div class="grid md:grid-cols-3 gap-4">
                        <input type="text" placeholder="Search by name..." class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                            <option>All Industries</option>
                            <option>Technology</option>
                            <option>Healthcare</option>
                            <option>Finance</option>
                            <option>Education</option>
                            <option>Engineering</option>
                        </select>
                        <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                            <option>All Locations</option>
                            <option>Dubai, UAE</option>
                            <option>London, UK</option>
                            <option>New York, USA</option>
                            <option>Toronto, Canada</option>
                            <option>Sydney, Australia</option>
                        </select>
                    </div>
                </div>

                <!-- Alumni List -->
                <div class="space-y-4">
                    <div class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition duration-200">
                        <div class="flex items-center space-x-4">
                            <div class="bg-gray-300 w-16 h-16 rounded-full flex-shrink-0"></div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-900">Ali Mohammed</h4>
                                <p class="text-sm text-gray-600">Software Engineer at Tech Corp</p>
                                <p class="text-xs text-gray-500">Dubai, UAE • Class of 2010</p>
                                <div class="flex space-x-2 mt-2">
                                    <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">Technology</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">Software Development</span>
                                </div>
                            </div>
                            <button class="text-green-600 hover:text-green-800 text-sm font-medium px-4 py-2 border border-green-600 rounded-lg hover:bg-green-50 transition duration-300">Connect</button>
                        </div>
                    </div>

                    <div class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition duration-200">
                        <div class="flex items-center space-x-4">
                            <div class="bg-gray-300 w-16 h-16 rounded-full flex-shrink-0"></div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-900">Maryam Khalil</h4>
                                <p class="text-sm text-gray-600">Marketing Director at Global Inc</p>
                                <p class="text-xs text-gray-500">London, UK • Class of 2008</p>
                                <div class="flex space-x-2 mt-2">
                                    <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded-full text-xs">Marketing</span>
                                    <span class="bg-orange-100 text-orange-800 px-2 py-1 rounded-full text-xs">Digital Strategy</span>
                                </div>
                            </div>
                            <button class="text-green-600 hover:text-green-800 text-sm font-medium px-4 py-2 border border-green-600 rounded-lg hover:bg-green-50 transition duration-300">Connect</button>
                        </div>
                    </div>

                    <div class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition duration-200">
                        <div class="flex items-center space-x-4">
                            <div class="bg-gray-300 w-16 h-16 rounded-full flex-shrink-0"></div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-900">Hassan Al-Rashid</h4>
                                <p class="text-sm text-gray-600">Investment Banker at Finance Plus</p>
                                <p class="text-xs text-gray-500">New York, USA • Class of 2012</p>
                                <div class="flex space-x-2 mt-2">
                                    <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs">Finance</span>
                                    <span class="bg-red-100 text-red-800 px-2 py-1 rounded-full text-xs">Investment Banking</span>
                                </div>
                            </div>
                            <button class="text-green-600 hover:text-green-800 text-sm font-medium px-4 py-2 border border-green-600 rounded-lg hover:bg-green-50 transition duration-300">Connect</button>
                        </div>
                    </div>

                    <div class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition duration-200">
                        <div class="flex items-center space-x-4">
                            <div class="bg-gray-300 w-16 h-16 rounded-full flex-shrink-0"></div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-900">Layla Ibrahim</h4>
                                <p class="text-sm text-gray-600">Pediatric Nurse at Children's Hospital</p>
                                <p class="text-xs text-gray-500">Toronto, Canada • Class of 2015</p>
                                <div class="flex space-x-2 mt-2">
                                    <span class="bg-pink-100 text-pink-800 px-2 py-1 rounded-full text-xs">Healthcare</span>
                                    <span class="bg-teal-100 text-teal-800 px-2 py-1 rounded-full text-xs">Pediatrics</span>
                                </div>
                            </div>
                            <button class="text-green-600 hover:text-green-800 text-sm font-medium px-4 py-2 border border-green-600 rounded-lg hover:bg-green-50 transition duration-300">Connect</button>
                        </div>
                    </div>

                    <div class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition duration-200">
                        <div class="flex items-center space-x-4">
                            <div class="bg-gray-300 w-16 h-16 rounded-full flex-shrink-0"></div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-900">Yusuf Ahmed</h4>
                                <p class="text-sm text-gray-600">Civil Engineer at Construction Co</p>
                                <p class="text-xs text-gray-500">Sydney, Australia • Class of 2009</p>
                                <div class="flex space-x-2 mt-2">
                                    <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded-full text-xs">Engineering</span>
                                    <span class="bg-indigo-100 text-indigo-800 px-2 py-1 rounded-full text-xs">Civil Engineering</span>
                                </div>
                            </div>
                            <button class="text-green-600 hover:text-green-800 text-sm font-medium px-4 py-2 border border-green-600 rounded-lg hover:bg-green-50 transition duration-300">Connect</button>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="flex justify-center mt-8">
                    <nav class="flex space-x-2">
                        <button class="px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-md hover:bg-gray-50">Previous</button>
                        <button class="px-3 py-2 text-sm font-medium text-white bg-green-600 border border-green-600 rounded-md">1</button>
                        <button class="px-3 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50">2</button>
                        <button class="px-3 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50">3</button>
                        <button class="px-3 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50">Next</button>
                    </nav>
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
            <a href="events.html" class="block py-3 px-4 hover:bg-green-700 rounded">Events</a>
            <a href="alumni.html" class="block py-3 px-4 bg-green-700 rounded">Alumni</a>
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
