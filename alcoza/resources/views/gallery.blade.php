<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery - Alhudahuda (ALCOZA04)</title>
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
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Photo Gallery</h1>
            <p class="text-xl max-w-3xl mx-auto">Explore memories from our events, gatherings, and community activities throughout the years</p>
        </div>
    </section>

    <!-- Gallery Filter -->
    <section class="py-8 bg-white border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap justify-center gap-4">
                <button class="px-4 py-2 bg-green-600 text-white rounded-lg font-medium hover:bg-green-700 transition duration-300" onclick="filterGallery('all')">All Photos</button>
                <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg font-medium hover:bg-gray-300 transition duration-300" onclick="filterGallery('events')">Events</button>
                <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg font-medium hover:bg-gray-300 transition duration-300" onclick="filterGallery('reunions')">Reunions</button>
                <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg font-medium hover:bg-gray-300 transition duration-300" onclick="filterGallery('community')">Community Service</button>
                <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg font-medium hover:bg-gray-300 transition duration-300" onclick="filterGallery('awards')">Awards & Recognition</button>
                <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg font-medium hover:bg-gray-300 transition duration-300" onclick="filterGallery('networking')">Networking</button>
            </div>
        </div>
    </section>

    <!-- Photo Gallery -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6" id="gallery-grid">
                <!-- Event Photos -->
                <div class="gallery-item events" data-category="events">
                    <div class="bg-gray-200 aspect-square rounded-lg overflow-hidden cursor-pointer hover:shadow-lg transition duration-300" onclick="openModal('Annual Gala 2023', 'A spectacular evening celebrating our achievements and community spirit.')">
                        <div class="w-full h-full flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-12 h-12 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <p class="text-sm text-gray-500">Annual Gala 2023</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gallery-item events" data-category="events">
                    <div class="bg-gray-200 aspect-square rounded-lg overflow-hidden cursor-pointer hover:shadow-lg transition duration-300" onclick="openModal('Career Workshop', 'Professional development session with industry experts.')">
                        <div class="w-full h-full flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-12 h-12 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <p class="text-sm text-gray-500">Career Workshop</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Reunion Photos -->
                <div class="gallery-item reunions" data-category="reunions">
                    <div class="bg-gray-200 aspect-square rounded-lg overflow-hidden cursor-pointer hover:shadow-lg transition duration-300" onclick="openModal('Class of 2004 Reunion', 'Celebrating 20 years since graduation with classmates from around the world.')">
                        <div class="w-full h-full flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-12 h-12 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <p class="text-sm text-gray-500">Class of 2004 Reunion</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gallery-item reunions" data-category="reunions">
                    <div class="bg-gray-200 aspect-square rounded-lg overflow-hidden cursor-pointer hover:shadow-lg transition duration-300" onclick="openModal('Multi-Class Reunion', 'Alumni from different graduating classes coming together.')">
                        <div class="w-full h-full flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-12 h-12 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <p class="text-sm text-gray-500">Multi-Class Reunion</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Community Service Photos -->
                <div class="gallery-item community" data-category="community">
                    <div class="bg-gray-200 aspect-square rounded-lg overflow-hidden cursor-pointer hover:shadow-lg transition duration-300" onclick="openModal('Community Clean-up Day', 'Alumni volunteers working together to beautify local parks and neighborhoods.')">
                        <div class="w-full h-full flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-12 h-12 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <p class="text-sm text-gray-500">Community Clean-up</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gallery-item community" data-category="community">
                    <div class="bg-gray-200 aspect-square rounded-lg overflow-hidden cursor-pointer hover:shadow-lg transition duration-300" onclick="openModal('Educational Support Program', 'Alumni mentoring students and providing educational resources.')">
                        <div class="w-full h-full flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-12 h-12 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <p class="text-sm text-gray-500">Educational Support</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Awards Photos -->
                <div class="gallery-item awards" data-category="awards">
                    <div class="bg-gray-200 aspect-square rounded-lg overflow-hidden cursor-pointer hover:shadow-lg transition duration-300" onclick="openModal('Alumni Achievement Awards', 'Recognizing outstanding contributions and achievements of our community members.')">
                        <div class="w-full h-full flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-12 h-12 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <p class="text-sm text-gray-500">Achievement Awards</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gallery-item awards" data-category="awards">
                    <div class="bg-gray-200 aspect-square rounded-lg overflow-hidden cursor-pointer hover:shadow-lg transition duration-300" onclick="openModal('Scholarship Recipients', 'Celebrating scholarship recipients and their academic achievements.')">
                        <div class="w-full h-full flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-12 h-12 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <p class="text-sm text-gray-500">Scholarship Recipients</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Networking Photos -->
                <div class="gallery-item networking" data-category="networking">
                    <div class="bg-gray-200 aspect-square rounded-lg overflow-hidden cursor-pointer hover:shadow-lg transition duration-300" onclick="openModal('Business Networking Mixer', 'Professional networking event connecting alumni across industries.')">
                        <div class="w-full h-full flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-12 h-12 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <p class="text-sm text-gray-500">Business Mixer</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gallery-item networking" data-category="networking">
                    <div class="bg-gray-200 aspect-square rounded-lg overflow-hidden cursor-pointer hover:shadow-lg transition duration-300" onclick="openModal('Summer Social Gathering', 'Casual networking and socializing at our annual summer event.')">
                        <div class="w-full h-full flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-12 h-12 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <p class="text-sm text-gray-500">Summer Social</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Photos -->
                <div class="gallery-item events" data-category="events">
                    <div class="bg-gray-200 aspect-square rounded-lg overflow-hidden cursor-pointer hover:shadow-lg transition duration-300" onclick="openModal('Graduation Ceremony', 'Celebrating new graduates joining our alumni community.')">
                        <div class="w-full h-full flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-12 h-12 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <p class="text-sm text-gray-500">Graduation Ceremony</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gallery-item community" data-category="community">
                    <div class="bg-gray-200 aspect-square rounded-lg overflow-hidden cursor-pointer hover:shadow-lg transition duration-300" onclick="openModal('Food Drive Initiative', 'Alumni organizing food drives for local food banks and shelters.')">
                        <div class="w-full h-full flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-12 h-12 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <p class="text-sm text-gray-500">Food Drive</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gallery-item reunions" data-category="reunions">
                    <div class="bg-gray-200 aspect-square rounded-lg overflow-hidden cursor-pointer hover:shadow-lg transition duration-300" onclick="openModal('International Alumni Meetup', 'Global alumni gathering with members from different countries.')">
                        <div class="w-full h-full flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-12 h-12 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <p class="text-sm text-gray-500">International Meetup</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gallery-item networking" data-category="networking">
                    <div class="bg-gray-200 aspect-square rounded-lg overflow-hidden cursor-pointer hover:shadow-lg transition duration-300" onclick="openModal('Industry Panel Discussion', 'Expert panel featuring alumni leaders from various industries.')">
                        <div class="w-full h-full flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-12 h-12 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <p class="text-sm text-gray-500">Industry Panel</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Photo Modal -->
    <div id="photoModal" class="fixed inset-0 bg-black bg-opacity-75 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-4xl w-full max-h-full overflow-auto">
            <div class="flex justify-between items-center p-6 border-b">
                <h3 id="modalTitle" class="text-xl font-bold text-gray-900"></h3>
                <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="p-6">
                <div class="bg-gray-200 h-96 rounded-lg flex items-center justify-center mb-4">
                    <span class="text-gray-500">Photo Placeholder</span>
                </div>
                <p id="modalDescription" class="text-gray-600"></p>
            </div>
        </div>
    </div>

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

        function filterGallery(category) {
            const items = document.querySelectorAll('.gallery-item');
            const buttons = document.querySelectorAll('button[onclick^="filterGallery"]');

            // Reset button styles
            buttons.forEach(btn => {
                btn.className = 'px-4 py-2 bg-gray-200 text-gray-700 rounded-lg font-medium hover:bg-gray-300 transition duration-300';
            });

            // Highlight active button
            event.target.className = 'px-4 py-2 bg-green-600 text-white rounded-lg font-medium hover:bg-green-700 transition duration-300';

            // Show/hide items
            items.forEach(item => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        function openModal(title, description) {
            document.getElementById('modalTitle').textContent = title;
            document.getElementById('modalDescription').textContent = description;
            document.getElementById('photoModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('photoModal').classList.add('hidden');
        }

        // Close modal when clicking outside
        document.getElementById('photoModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });
    </script>
</body>
</html>
