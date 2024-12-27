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

<body class="font-sans antialiased bg-emerald-700 dark:text-white/50">
    <nav class="flex justify-between items-center px-8 py-6 text-slate-50 font-semibold border-b-2">
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
    </nav>
    <section class="grid grid-cols-2">
        <div class="flex flex-col justify-center items-center">
            <div class="text-slate-50 text-center">
                <h1 class="mb-4 text-6xl font-bold pt-32">KASU PULSE</h1>
                <p>Your reliable source of information</p>
            </div>
            <div class="mt-6 text-center flex font-bold text-2xl text-slate-50 space-x-7">
                <p>Connect</p>
                <p>Get Informed</p>
                <p>Share</p>
            </div>
        </div>

        <div class="pt-16 mx-auto flex flex-col text-slate-50 w-2/3">
            <div class="mb-3 flex flex-col justify-center items-center">
                <img src="{{ asset('images/kasu_logo.jpeg') }}" class="mb-6 rounded-full h-36 w-36" alt="Logo">
                <h3 class="text-4xl font-bold mb-6">Sign In, stay Informed</h3>
            </div>
            <form>
                <div class="mb-3 flex flex-col gap-1 ">
                    <label for="username" class="text-lg">Username</label>
                    <input type="text" placeholder="Enter your username"
                        class="rounded-md px-2 py-3 text-stone-700 bg-slate-50" />
                </div>
                <div class="mb-6 flex flex-col gap-1">
                    <label for="password" class="text-lg">Password</label>
                    <input type="password" placeholder="***********"
                        class="rounded-md px-2 py-3 text-stone-700 bg-slate-50 border-none focus:ring  focus:ring-emerald-700" />
                </div>
                <div class="mb-3">
                    <button
                        class="w-full px-3 py-2 rounded-md bg-emerald-200 hover:bg-emerald-100 text-emerald-700 font-bold text-center">Login</button>
                </div>
            </form>
            <div class="mt-3 mb-4 text-slate-50 text-lg">
                <p>Don't have an account? Sign up <a href="">here</a></p>
            </div>
        </div>
    </section>
</body>

</html>
