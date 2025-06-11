<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
         @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18]">
        <header class="container flex justify-between items-center px-8 w-3/4 mx-auto pt-8">
            <nav class="">
                <ul class="flex items-center text-blue-500 text-lg font-bold gap-3">
                    <li>
                        <a href="{{route('index')}}" wire:navigate>Home</a>
                    </li>
                </ul>
            </nav>
            <div>
                <ul class="flex items-center text-blue-500 text-lg font-bold gap-3">
                    <li>
                        <a href="{{route('login')}}" wire:navigate>Login</a>
                    </li>
                </ul>
            </div>
        </header>

        <main class="flex justify-between items-center w-3/4 mx-auto mt-8 p-6 text-white relative">
            {{ $slot }}
        </main>
    </body>
</html>
