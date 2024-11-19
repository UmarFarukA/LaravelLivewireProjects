<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Knowledge Drive Hub' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-100">
    {{-- Header Section --}}
    <header>
        <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('images/kasu_logo.jpeg') }}" class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-green-700">Knowledge
                        Hub</span>
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">

                    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
                        <ul
                            class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                            <li>
                                <a href="#"
                                    class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Login</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Register</a>
                            </li>
                        </ul>
                    </div>
                    <button data-collapse-toggle="navbar-cta" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-cta" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                    <ul
                        class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="#"
                                class="block py-2 px-3 md:p-0 text-white bg-green-700 rounded md:bg-transparent md:text-green-700 md:dark:text-green-500"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Knowledge
                                Sessions</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                        </li>

                        <li>
                            <a href="#"
                                class="md:hidden  py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Login</a>
                        </li>
                        <li class="mt-4">
                            <a href="#"
                                class="md:hidden  py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Register</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>

    </header>

    {{-- Hero Section --}}
    <section id="hero" class="bg-white">
        <div id="default-carousel" class="relative w-full h-dvh" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-5/6 object-cover">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/1.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div
                        class="relative top-12 md:top-500 md:top-1/2 left-4 md:left-32 space-y-2 px-4 py-2  bg-gray-50 opacity-50 p-4 w-2/3 md:w-1/3 rounded-md">
                        <h2 class="text-sm md:text-4xl font-semibold text-green-700">Empowering Through Sharing: Welcome
                            to KASU
                            Knowledge Drive
                            Hub
                        </h2>
                        <p class="text-sm md:text-xl text-black">
                            Daily insights, collaborative growth, and innovation at your fingertips.
                        </p>

                        <div class="flex align-items-center my-4">
                            <button
                                class="px-3 py-2 text-sm md:text-xl text-green-100 text-center bg-green-700 hover:bg-green-800 rounded">
                                Explore
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                {{-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/2.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div> --}}
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/3.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div
                        class="relative top-12 md:top-500 md:top-1/2 left-4 md:left-32 space-y-2 px-4 py-2  bg-gray-50 opacity-50 p-4 w-2/3 md:w-1/3 rounded-md">
                        <h2 class="text-sm md:text-4xl font-semibold text-green-700">Share Your Insights</h2>
                        <p class="text-sm md:text-xl text-black">
                            Have an idea, thought, or experience to share? Contribute and be
                            part of the collective growth
                        </p>

                        <div class="flex align-items-center my-4">
                            <a class="px-3 py-2 text-green-100 text-center bg-green-700 hover:bg-green-800 rounded">
                                Submit Your Write-Up
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/4.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">

                    <div
                        class="relative top-12 md:top-500 md:top-1/2 left-4 md:left-32 space-y-2 px-4 py-2  bg-gray-50 opacity-50 p-4 w-2/3 md:w-1/3 rounded-md">
                        <h2 class="text-sm md:text-4xl font-semibold text-green-700">Ready to Join the Drive?</h2>

                        <p class="text-sm md:text-xl text-black">
                            Feel free to contribute any insight,
                            or simply explore knowledge repository
                        </p>

                        <div class="flex align-items-center my-4">
                            <a
                                class="px-3 py-2 text-sm text-green-100 text-center bg-green-700 hover:bg-green-800 rounded">
                                Explore Today's Knowledge
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/5.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div
                        class="relative top-12 md:top-500 md:top-1/2 left-4 md:left-32 space-y-2 px-4 py-2  bg-gray-50 opacity-50 p-4 w-2/3 md:w-1/3 rounded-md">
                        <h2 class="text-sm md:text-4xl font-semibold text-green-700">Empowering Through Sharing: Welcome
                        </h2>
                        <p class="text-sm md:text-xl text-black">
                            Feel free to contribute any insight, or simply explore knowledge repository
                        </p>

                        <div class="flex flex-col gap-1 md:flex-row align-items-center my-4 space-x-2">
                            <a
                                class="text-sm md:text-lg text-center px-3 py-2 text-green-100s bg-green-700 hover:bg-green-800 rounded">
                                Submit Your Insight
                            </a>
                            <a href=""
                                class="text-sm md:text-lg text-center px-3 py-2 bg-red-700 hover:bg-red-800 text-red-100 rounded">Explore
                                Knowledge</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

    </section>

    {{-- About Section --}}
    <section id="about-us" class="mx-auto text-center bg-white">
        <div class="pb-8">
            <h1 class="text-green-700 text-6xl font-bold">About Us</h1>
            <p class="text-gray-600 text-lg pt-5">Who we are</p>
        </div>
        <div class="mt-4  flex flex-col justify-center items-center w-2/3 mx-auto pb-8">
            <p class="text-stone-600 text-2xl leading-10 mb-8">
                At Kaduna State University, we believe that knowledge is the key to progress. The KASU Knowledge
                Drive is designed to foster a culture of continuous learning, collaboration, and innovation among our
                staff.
            </p>
            <a class="px-3 py-2 text-sm md:text-lg text-green-100 text-center bg-green-700 hover:bg-green-800 rounded">
                Learn More &rightarrow;
            </a>
        </div>
    </section>

    {{-- Envent & Session Section --}}
    <section id="events" class="mx-auto text-center bg-white">
        <div class="pt-32">
            <h1 class="text-red-700 text-6xl font-bold">Events & Sessions</h1>
            <p class="text-stone-700 text-lg pt-5">Future and Previous events & sessions</p>
        </div>
        <div class="flex items-center justify-around mx-auto w-2/3 pt-12">
            <div class="mt-2">
                <h3 class="text-green-700 text-3xl font-bold">Upcomnig Session</h3>
                <div class="pt-8 mb-12 space-y-4 text-stone-700">
                    <p class="flex items-center gap-2">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z" />
                        </svg>
                        <span>Date</span>
                    </p>
                    <p class="flex items-center gap-2">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                        <span>Time</span>
                    </p>
                    <p class="flex items-center gap-2">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M6 4h12M6 4v16M6 4H5m13 0v16m0-16h1m-1 16H6m12 0h1M6 20H5M9 7h1v1H9V7Zm5 0h1v1h-1V7Zm-5 4h1v1H9v-1Zm5 0h1v1h-1v-1Zm-3 4h2a1 1 0 0 1 1 1v4h-4v-4a1 1 0 0 1 1-1Z" />
                        </svg>


                        <span>Venue</span>
                    </p>
                </div>
            </div>

            <div class="mt-4">

                <h2 class="text-green-700 font-semibold">Events content</h2>

                <div class="grid grid-cols-1 items-center gap-4">
                    <div>
                        <img class="h-64 w-64 rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-64 w-64 rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-64 w-64 rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>
</body>

</html>
