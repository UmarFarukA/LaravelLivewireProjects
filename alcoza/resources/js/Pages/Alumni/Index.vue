<script setup>
    import PageHeader from '../../Shared/PageHeader.vue';
import UserCard from '../../Shared/UserCard.vue';

</script>

<template>
    <Head title="Alumni" />
    <PageHeader
        title="Alumni Directory"
        description="Connect with fellow alumni and discover the amazing achievements of our community members"
    />

        <!-- Featured Alumni -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-12 text-gray-900 text-center">Featured Alumni</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <UserCard
                    user-name="Dr Garzali Aminu"
                    title="Chief Medical Officer"
                    description="Leading healthcare innovation and serving communities worldwide through medical excellence and research."
                />
                <UserCard
                    user-name="Ibrahim Idris"
                    title="Entrepreneur"
                    description="Founded multiple successful businesses and mentors young entrepreneurs in the Financial industry."
                />

                <UserCard
                    user-name="Dr Abubakar Nuhu"
                    title="Chief Vetenary Officer"
                    description="Leading healthcare innovation and serving communities worldwide through medical excellence and research."
                />
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
</template>
