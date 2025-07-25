<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alhudahuda (ALCOZA04) - Alumni Association</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-green-900 text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <h1 class="text-xl font-bold">ALCOZA04</h1>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="index.html" class="px-3 py-2 rounded-md text-sm font-medium bg-green-700">Home</a>
                        <a href="about.html" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-green-700">About Us</a>
                        <a href="events.html" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-green-700">Events</a>
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

    <!-- Homepage Section -->
    <section class="bg-gradient-to-r from-green-600 to-green-800 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Welcome to Alhudahuda</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Connecting alumni, preserving heritage, and building a stronger community together</p>
            <div class="space-x-4">
                <a href="get-involved.html" class="bg-white text-green-800 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300 inline-block">Join Us Today</a>
                <a href="about.html" class="border-2 border-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-green-800 transition duration-300 inline-block">Learn More</a>
            </div>
        </div>
    </section>

    <!-- Highlight Events -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">Upcoming Events</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-lg p-6 shadow-md">
                    <div class="text-green-600 text-sm font-semibold mb-2">March 15, 2024</div>
                    <h3 class="text-xl font-bold mb-3">Annual Reunion 2024</h3>
                    <p class="text-gray-600 mb-4">Join us for our biggest gathering of the year with networking, dinner, and entertainment.</p>
                    <a href="events.html" class="text-green-600 font-semibold hover:text-green-800">Learn More →</a>
                </div>
                <div class="bg-gray-50 rounded-lg p-6 shadow-md">
                    <div class="text-green-600 text-sm font-semibold mb-2">April 8, 2024</div>
                    <h3 class="text-xl font-bold mb-3">Career Development Workshop</h3>
                    <p class="text-gray-600 mb-4">Professional development session focusing on leadership and career advancement.</p>
                    <a href="events.html" class="text-green-600 font-semibold hover:text-green-800">Learn More →</a>
                </div>
                <div class="bg-gray-50 rounded-lg p-6 shadow-md">
                    <div class="text-green-600 text-sm font-semibold mb-2">May 20, 2024</div>
                    <h3 class="text-xl font-bold mb-3">Community Service Day</h3>
                    <p class="text-gray-600 mb-4">Give back to the community through various volunteer activities and initiatives.</p>
                    <a href="events.html" class="text-green-600 font-semibold hover:text-green-800">Learn More →</a>
                </div>
            </div>
            <div class="text-center mt-8">
                <a href="events.html" class="bg-green-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-700 transition duration-300 inline-block">View All Events</a>
            </div>
        </div>
    </section>

    <!-- Membership Benefits -->
    <section class="py-16 bg-green-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">Membership Benefits</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="bg-green-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Networking</h3>
                    <p class="text-gray-600">Connect with fellow alumni across various industries and professions.</p>
                </div>
                <div class="text-center">
                    <div class="bg-green-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Exclusive Events</h3>
                    <p class="text-gray-600">Access to member-only events, workshops, and social gatherings.</p>
                </div>
                <div class="text-center">
                    <div class="bg-green-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Resources</h3>
                    <p class="text-gray-600">Access to career resources, mentorship programs, and educational materials.</p>
                </div>
                <div class="text-center">
                    <div class="bg-green-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Community Impact</h3>
                    <p class="text-gray-600">Participate in community service and make a positive difference together.</p>
                </div>
            </div>
            <div class="text-center mt-8">
                <a href="get-involved.html" class="bg-green-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-700 transition duration-300 inline-block">Join Our Community</a>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">About Alhudahuda (ALCOZA04)</h2>

            <!-- History -->
            <div class="mb-16">
                <h3 class="text-2xl font-bold mb-6 text-gray-900">Our History</h3>
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div>
                        <p class="text-gray-600 mb-4">Founded in 2004, Alhudahuda (ALCOZA04) has been a cornerstone of alumni engagement and community building for over two decades. What started as a small group of passionate graduates has grown into a thriving association with hundreds of active members worldwide.</p>
                        <p class="text-gray-600">Our association has consistently fostered connections, supported professional development, and maintained the rich traditions that define our community.</p>
                    </div>
                    <div class="bg-gray-100 h-64 rounded-lg flex items-center justify-center">
                        <span class="text-gray-500">Historical Photo Placeholder</span>
                    </div>
                </div>
            </div>

            <!-- Mission and Vision -->
            <div class="mb-16">
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-green-50 p-8 rounded-lg">
                        <h3 class="text-2xl font-bold mb-4 text-green-900">Our Mission</h3>
                        <p class="text-gray-700">To strengthen the bonds among alumni through meaningful connections, professional development opportunities, and community service initiatives that honor our shared heritage and values.</p>
                    </div>
                    <div class="bg-emerald-50 p-8 rounded-lg">
                        <h3 class="text-2xl font-bold mb-4 text-emerald-900">Our Vision</h3>
                        <p class="text-gray-700">To be the premier alumni association that empowers members to achieve personal and professional excellence while contributing positively to society and preserving our legacy for future generations.</p>
                    </div>
                </div>
            </div>

            <!-- Committee Members -->
            <div>
                <h3 class="text-2xl font-bold mb-8 text-gray-900">Committee Members</h3>
                <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="bg-gray-300 w-24 h-24 rounded-full mx-auto mb-4"></div>
                        <h4 class="font-semibold text-gray-900">John Doe</h4>
                        <p class="text-sm text-gray-600">President</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-gray-300 w-24 h-24 rounded-full mx-auto mb-4"></div>
                        <h4 class="font-semibold text-gray-900">Jane Smith</h4>
                        <p class="text-sm text-gray-600">Vice President</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-gray-300 w-24 h-24 rounded-full mx-auto mb-4"></div>
                        <h4 class="font-semibold text-gray-900">Mike Johnson</h4>
                        <p class="text-sm text-gray-600">Secretary</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-gray-300 w-24 h-24 rounded-full mx-auto mb-4"></div>
                        <h4 class="font-semibold text-gray-900">Sarah Wilson</h4>
                        <p class="text-sm text-gray-600">Treasurer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section id="events" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">Events</h2>

            <!-- Calendar -->
            <div class="mb-16">
                <h3 class="text-2xl font-bold mb-8 text-gray-900">Upcoming Events Calendar</h3>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="grid gap-4">
                        <div class="border-l-4 border-green-500 pl-4 py-2">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h4 class="font-semibold text-gray-900">Annual Reunion 2024</h4>
                                    <p class="text-sm text-gray-600">Grand ballroom networking and dinner</p>
                                </div>
                                <span class="text-sm text-green-600 font-medium">March 15, 2024</span>
                            </div>
                        </div>
                        <div class="border-l-4 border-emerald-500 pl-4 py-2">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h4 class="font-semibold text-gray-900">Career Development Workshop</h4>
                                    <p class="text-sm text-gray-600">Professional skills and leadership training</p>
                                </div>
                                <span class="text-sm text-emerald-600 font-medium">April 8, 2024</span>
                            </div>
                        </div>
                        <div class="border-l-4 border-teal-500 pl-4 py-2">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h4 class="font-semibold text-gray-900">Community Service Day</h4>
                                    <p class="text-sm text-gray-600">Volunteer activities and community outreach</p>
                                </div>
                                <span class="text-sm text-teal-600 font-medium">May 20, 2024</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Past Events -->
            <div>
                <h3 class="text-2xl font-bold mb-8 text-gray-900">Past Events</h3>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="bg-gray-200 h-48 flex items-center justify-center">
                            <span class="text-gray-500">Event Photo</span>
                        </div>
                        <div class="p-6">
                            <h4 class="font-semibold text-gray-900 mb-2">2023 Annual Gala</h4>
                            <p class="text-sm text-gray-600 mb-3">A memorable evening celebrating our achievements and honoring distinguished alumni.</p>
                            <span class="text-xs text-green-600">December 2023</span>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="bg-gray-200 h-48 flex items-center justify-center">
                            <span class="text-gray-500">Event Photo</span>
                        </div>
                        <div class="p-6">
                            <h4 class="font-semibold text-gray-900 mb-2">Mentorship Program Launch</h4>
                            <p class="text-sm text-gray-600 mb-3">Connecting experienced alumni with recent graduates for career guidance.</p>
                            <span class="text-xs text-green-600">September 2023</span>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="bg-gray-200 h-48 flex items-center justify-center">
                            <span class="text-gray-500">Event Photo</span>
                        </div>
                        <div class="p-6">
                            <h4 class="font-semibold text-gray-900 mb-2">Summer Picnic 2023</h4>
                            <p class="text-sm text-gray-600 mb-3">Family-friendly gathering with games, food, and networking opportunities.</p>
                            <span class="text-xs text-green-600">July 2023</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Alumni Profiles Section -->
    <section id="alumni" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">Alumni Profiles</h2>

            <!-- Featured Alumni -->
            <div class="mb-16">
                <h3 class="text-2xl font-bold mb-8 text-gray-900">Featured Alumni</h3>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-gray-50 rounded-lg p-6 text-center">
                        <div class="bg-gray-300 w-32 h-32 rounded-full mx-auto mb-4"></div>
                        <h4 class="text-xl font-semibold text-gray-900 mb-2">Dr. Ahmed Hassan</h4>
                        <p class="text-green-600 font-medium mb-3">Chief Medical Officer</p>
                        <p class="text-sm text-gray-600">Leading healthcare innovation and serving communities worldwide through medical excellence.</p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6 text-center">
                        <div class="bg-gray-300 w-32 h-32 rounded-full mx-auto mb-4"></div>
                        <h4 class="text-xl font-semibold text-gray-900 mb-2">Fatima Al-Zahra</h4>
                        <p class="text-green-600 font-medium mb-3">Tech Entrepreneur</p>
                        <p class="text-sm text-gray-600">Founded multiple successful startups and mentors young entrepreneurs in the tech industry.</p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6 text-center">
                        <div class="bg-gray-300 w-32 h-32 rounded-full mx-auto mb-4"></div>
                        <h4 class="text-xl font-semibold text-gray-900 mb-2">Omar Abdullah</h4>
                        <p class="text-green-600 font-medium mb-3">Environmental Scientist</p>
                        <p class="text-sm text-gray-600">Leading research in sustainable development and climate change solutions.</p>
                    </div>
                </div>
            </div>

            <!-- Alumni Directory -->
            <div>
                <h3 class="text-2xl font-bold mb-8 text-gray-900">Alumni Directory</h3>
                <div class="bg-gray-50 rounded-lg p-6">
                    <div class="mb-4">
                        <input type="text" placeholder="Search alumni by name, profession, or location..." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                    </div>
                    <div class="space-y-4">
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <div class="flex items-center space-x-4">
                                <div class="bg-gray-300 w-12 h-12 rounded-full"></div>
                                <div class="flex-1">
                                    <h4 class="font-semibold text-gray-900">Ali Mohammed</h4>
                                    <p class="text-sm text-gray-600">Software Engineer at Tech Corp</p>
                                    <p class="text-xs text-gray-500">Dubai, UAE</p>
                                </div>
                                <button class="text-green-600 hover:text-green-800 text-sm font-medium">Connect</button>
                            </div>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <div class="flex items-center space-x-4">
                                <div class="bg-gray-300 w-12 h-12 rounded-full"></div>
                                <div class="flex-1">
                                    <h4 class="font-semibold text-gray-900">Maryam Khalil</h4>
                                    <p class="text-sm text-gray-600">Marketing Director at Global Inc</p>
                                    <p class="text-xs text-gray-500">London, UK</p>
                                </div>
                                <button class="text-green-600 hover:text-green-800 text-sm font-medium">Connect</button>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <button class="text-green-600 hover:text-green-800 font-medium">View All Alumni →</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News and Updates Section -->
    <section id="news" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">News & Updates</h2>

            <!-- Latest News -->
            <div class="mb-16">
                <h3 class="text-2xl font-bold mb-8 text-gray-900">Latest News</h3>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <article class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="bg-gray-200 h-48 flex items-center justify-center">
                            <span class="text-gray-500">News Image</span>
                        </div>
                        <div class="p-6">
                            <div class="text-sm text-green-600 font-medium mb-2">January 15, 2024</div>
                            <h4 class="text-xl font-semibold text-gray-900 mb-3">New Scholarship Program Launched</h4>
                            <p class="text-gray-600 mb-4">ALCOZA04 announces a new scholarship program to support underprivileged students in their educational journey.</p>
                            <a href="#" class="text-green-600 hover:text-green-800 font-medium">Read More →</a>
                        </div>
                    </article>
                    <article class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="bg-gray-200 h-48 flex items-center justify-center">
                            <span class="text-gray-500">News Image</span>
                        </div>
                        <div class="p-6">
                            <div class="text-sm text-green-600 font-medium mb-2">December 20, 2023</div>
                            <h4 class="text-xl font-semibold text-gray-900 mb-3">Alumni Achievement Awards</h4>
                            <p class="text-gray-600 mb-4">Celebrating outstanding achievements of our alumni in various fields and their contributions to society.</p>
                            <a href="#" class="text-green-600 hover:text-green-800 font-medium">Read More →</a>
                        </div>
                    </article>
                    <article class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="bg-gray-200 h-48 flex items-center justify-center">
                            <span class="text-gray-500">News Image</span>
                        </div>
                        <div class="p-6">
                            <div class="text-sm text-green-600 font-medium mb-2">November 30, 2023</div>
                            <h4 class="text-xl font-semibold text-gray-900 mb-3">Community Outreach Success</h4>
                            <p class="text-gray-600 mb-4">Our recent community service initiatives have made a significant impact in local communities.</p>
                            <a href="#" class="text-green-600 hover:text-green-800 font-medium">Read More →</a>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Newsletter Subscription -->
            <div class="bg-green-600 rounded-lg p-8 text-white text-center">
                <h3 class="text-2xl font-bold mb-4">Stay Updated</h3>
                <p class="mb-6">Subscribe to our newsletter to receive the latest news, events, and updates from ALCOZA04.</p>
                <div class="max-w-md mx-auto flex gap-4">
                    <input type="email" placeholder="Enter your email address" class="flex-1 px-4 py-2 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-green-300">
                    <button class="bg-white text-green-600 px-6 py-2 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">Subscribe</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Get Involved Section -->
    <section id="get-involved" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">Get Involved</h2>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Membership -->
                <div class="bg-green-50 rounded-lg p-8 text-center">
                    <div class="bg-green-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900">Membership</h3>
                    <p class="text-gray-600 mb-6">Join our growing community of alumni and enjoy exclusive benefits, networking opportunities, and lifelong connections.</p>
                    <div class="space-y-3 mb-6">
                        <div class="text-sm text-gray-600">✓ Annual membership: $50</div>
                        <div class="text-sm text-gray-600">✓ Lifetime membership: $500</div>
                        <div class="text-sm text-gray-600">✓ Student rate: $25</div>
                    </div>
                    <button class="bg-green-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-700 transition duration-300">Join Now</button>
                </div>

                <!-- Volunteer Opportunities -->
                <div class="bg-emerald-50 rounded-lg p-8 text-center">
                    <div class="bg-emerald-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900">Volunteer</h3>
                    <p class="text-gray-600 mb-6">Share your skills and time to help organize events, mentor students, and contribute to our community initiatives.</p>
                    <div class="space-y-3 mb-6">
                        <div class="text-sm text-gray-600">• Event organization</div>
                        <div class="text-sm text-gray-600">• Mentorship programs</div>
                        <div class="text-sm text-gray-600">• Community service</div>
                    </div>
                    <button class="bg-emerald-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-emerald-700 transition duration-300">Volunteer</button>
                </div>

                <!-- Donations -->
                <div class="bg-teal-50 rounded-lg p-8 text-center">
                    <div class="bg-teal-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900">Donate</h3>
                    <p class="text-gray-600 mb-6">Support our initiatives, scholarship programs, and community projects that make a lasting impact on current and future generations.</p>
                    <div class="space-y-3 mb-6">
                        <div class="text-sm text-gray-600">• Scholarship fund</div>
                        <div class="text-sm text-gray-600">• Community projects</div>
                        <div class="text-sm text-gray-600">• Event sponsorship</div>
                    </div>
                    <button class="bg-teal-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-teal-700 transition duration-300">Donate</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section id="contact" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">Contact Us</h2>

            <div class="grid md:grid-cols-2 gap-12">
                <!-- Contact Information -->
                <div>
                    <h3 class="text-2xl font-bold mb-6 text-gray-900">Get in Touch</h3>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="bg-green-600 w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Address</h4>
                                <p class="text-gray-600">123 Alumni Street<br>Community Center, Building A<br>City, State 12345</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="bg-green-600 w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Email</h4>
                                <p class="text-gray-600">info@alcoza04.org<br>president@alcoza04.org</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="bg-green-600 w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Phone</h4>
                                <p class="text-gray-600">+1 (555) 123-4567<br>+1 (555) 987-6543</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="mt-8">
                        <h4 class="font-semibold text-gray-900 mb-4">Follow Us</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="bg-green-600 w-10 h-10 rounded-full flex items-center justify-center text-white hover:bg-green-700 transition duration-300">
                                <span class="sr-only">Facebook</span>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M20 10C20 4.477 15.523 0 10 0S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="#" class="bg-green-500 w-10 h-10 rounded-full flex items-center justify-center text-white hover:bg-green-600 transition duration-300">
                                <span class="sr-only">Twitter</span>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"></path>
                                </svg>
                            </a>
                            <a href="#" class="bg-green-700 w-10 h-10 rounded-full flex items-center justify-center text-white hover:bg-green-800 transition duration-300">
                                <span class="sr-only">LinkedIn</span>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="#" class="bg-green-400 w-10 h-10 rounded-full flex items-center justify-center text-white hover:bg-green-500 transition duration-300">
                                <span class="sr-only">Instagram</span>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Feedback Form -->
                <div>
                    <h3 class="text-2xl font-bold mb-6 text-gray-900">Send us a Message</h3>
                    <form class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                            <select id="subject" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                <option>General Inquiry</option>
                                <option>Membership</option>
                                <option>Events</option>
                                <option>Volunteer Opportunities</option>
                                <option>Donations</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-green-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-green-700 transition duration-300">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">Gallery</h2>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div class="bg-gray-200 aspect-square rounded-lg flex items-center justify-center">
                    <span class="text-gray-500 text-sm">Photo 1</span>
                </div>
                <div class="bg-gray-200 aspect-square rounded-lg flex items-center justify-center">
                    <span class="text-gray-500 text-sm">Photo 2</span>
                </div>
                <div class="bg-gray-200 aspect-square rounded-lg flex items-center justify-center">
                    <span class="text-gray-500 text-sm">Photo 3</span>
                </div>
                <div class="bg-gray-200 aspect-square rounded-lg flex items-center justify-center">
                    <span class="text-gray-500 text-sm">Photo 4</span>
                </div>
                <div class="bg-gray-200 aspect-square rounded-lg flex items-center justify-center">
                    <span class="text-gray-500 text-sm">Photo 5</span>
                </div>
                <div class="bg-gray-200 aspect-square rounded-lg flex items-center justify-center">
                    <span class="text-gray-500 text-sm">Photo 6</span>
                </div>
                <div class="bg-gray-200 aspect-square rounded-lg flex items-center justify-center">
                    <span class="text-gray-500 text-sm">Photo 7</span>
                </div>
                <div class="bg-gray-200 aspect-square rounded-lg flex items-center justify-center">
                    <span class="text-gray-500 text-sm">Photo 8</span>
                </div>
            </div>

            <div class="text-center mt-8">
                <button class="bg-green-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-700 transition duration-300">View All Photos</button>
            </div>
        </div>
    </section>

    <!-- Resources Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">Resources</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-red-100 p-3 rounded-lg">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0-6V4m0 6h6m-6 0H6"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 ml-3">Membership Forms</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Download membership application and renewal forms.</p>
                    <div class="space-y-2">
                        <a href="#" class="block text-green-600 hover:text-green-800 text-sm">• New Member Application (PDF)</a>
                        <a href="#" class="block text-green-600 hover:text-green-800 text-sm">• Membership Renewal Form (PDF)</a>
                        <a href="#" class="block text-green-600 hover:text-green-800 text-sm">• Student Membership Form (PDF)</a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-green-100 p-3 rounded-lg">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 ml-3">Newsletters</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Access past newsletters and publications.</p>
                    <div class="space-y-2">
                        <a href="#" class="block text-green-600 hover:text-green-800 text-sm">• Newsletter - January 2024 (PDF)</a>
                        <a href="#" class="block text-green-600 hover:text-green-800 text-sm">• Newsletter - December 2023 (PDF)</a>
                        <a href="#" class="block text-green-600 hover:text-green-800 text-sm">• Annual Report 2023 (PDF)</a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-green-100 p-3 rounded-lg">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 ml-3">Event Materials</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Event presentations and materials from past gatherings.</p>
                    <div class="space-y-2">
                        <a href="#" class="block text-green-600 hover:text-green-800 text-sm">• Career Workshop Slides (PDF)</a>
                        <a href="#" class="block text-green-600 hover:text-green-800 text-sm">• Annual Gala Program (PDF)</a>
                        <a href="#" class="block text-green-600 hover:text-green-800 text-sm">• Networking Guide (PDF)</a>
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
            <a href="events.html" class="block py-3 px-4 hover:bg-green-700 rounded">Events</a>
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
