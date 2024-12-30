<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KASU PULSE</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased dark:text-white/50">
    {{-- <nav class="flex justify-between items-center px-8 py-6 text-slate-50 font-semibold border-b-2">
        <div class="flex items-center gap-2">
            <img src="{{ asset('images/kasu_logo.jpeg') }}" alt="KASU" class="h-8 w-8 rounded-full">
            <h4 class="font-bold text-2xl">KASU Pulse</h4>
        </div>
        <div class="text-lg">
            <ul class="flex items-center gap-3">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">News</a>
                </li>
                <li>
                    <a href="#">Forums</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <div class="text-lg">
            <ul class="flex items-center gap-2">
                <li>
                    <a href="#">Login</a>
                </li>
                <li>
                    <a href="#">Register</a>
                </li>
            </ul>
        </div>
    </nav> --}}
    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/kasu_logo.jpeg') }}" class="h-8" alt="Flowbite Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-emerald-700">KASU Pulse</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="hidden md:inline-block text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">Get
                    started</button>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white bg-emerald-700 rounded md:bg-transparent md:text-emerald-700 md:p-0 md:dark:text-emerald-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-emerald-700 md:p-0 md:dark:hover:text-emerald-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">News</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-emerald-700 md:p-0 md:dark:hover:text-emerald-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Forum</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-emerald-700 md:p-0 md:dark:hover:text-emerald-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="grid md:grid-cols-2 min-h-screen">
        <div class="hidden md:flex flex-col justify-center items-center  bg-emerald-700 h-full rounded-e-md">
            <div class="text-slate-50 text-center">
                <h1 class="mb-4 text-6xl font-bold pt-32">KASU PULSE</h1>
                <p>Connecting minds, Sharing Knowledge</p>
            </div>
            <div class="mt-6 text-center flex font-bold text-2xl text-slate-50 space-x-7">
                <p>Informed</p>
                <p>Inspired</p>
                <p>Involved</p>
            </div>
            <dib class="mt-4 mb-3">
                <p class="text-slate-50 font-bold text-xl">Join the pulse now &rArr;</p>
            </dib>
        </div>

        <div class="pt-28 md:pt-36 mx-8 md:mx-auto flex flex-col text-emerald-700 md:w-2/3">
            <div class="mb-3 flex flex-col justify-center items-center">
                <img src="{{ asset('images/kasu_logo.jpeg') }}" class="mb-6  h-32 w-56" alt="Logo">
                <h3 class="text-2xl md:text-5xl font-semibold mb-6">Sign In, stay Informed</h3>
            </div>
            <form>
                <div class="mb-3 flex flex-col gap-1 ">
                    <label for="username" class="text-lg font-semibold">Username</label>
                    <input type="text" placeholder="Enter your username"
                        class="rounded-md px-2 py-3 text-stone-700 bg-gray-100 border-none focus:ring  focus:ring-emerald-700" />
                </div>
                <div class="mb-6 flex flex-col gap-1">
                    <label for="password" class="text-lg font-semibold">Password</label>
                    <input type="password" placeholder="***********"
                        class="rounded-md px-2 py-3 text-stone-700 bg-gray-100 border-none focus:ring  focus:ring-emerald-700 border-s-2 border-s-emerald-700" />
                </div>
                <div class="mb-3">
                    <button
                        class="w-full px-3 py-3 rounded-md bg-emerald-700 hover:bg-emerald-600 text-emerald-50 font-bold text-center">Login</button>
                </div>
            </form>
            <div class="mt-3 mb-4 text-emerald-700 text-lg flex md:flex-row flex-col justify-between">
                <p class="">Don't have an account? click <a href="" class="font-bold underline">here</a>
                </p>
                <p><a href="#" class="underline">Forgot Password</a></p>
            </div>
        </div>
    </section>
</body>

</html>
