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
        <header class="container px-8 w-3/4 mx-auto pt-8">
            <nav class="flex justify-between items-center">
                <ul class="flex justify-between items-center text-blue-500 text-lg font-bold gap-3">
                    <li>
                        <a href="#" wire:navigate>Dashboard</a>
                    </li>
                    <li>
                        <a href="{{route('article-index')}}" wire:navigate>Articles</a>
                    </li>
                </ul>

                <div class=" my-8">
                    <livewire:search />
                </div>

                <ul class="flex items-center text-blue-500 text-lg font-bold gap-3">
                    <li>
                        <a href="{{route('logout')}}" wire:navigate>Logout</a>
                    </li>
                </ul>


            </nav>

        </header>

        <main class="flex-col justify-between items-center w-3/4 mx-auto mt-8 p-6 text-white relative">


            @session('success')
                <div
                    x-data="{show: true}"
                    x-show="show"
                    x-init="setTimeout(() => {show = false}, 3000)"
                    class="fixed top-5 right-5 bg-green-600 text-white text-md p-4 rounded-lg shadow-lg z-50"
                    role="alert"
                >
                    <p>{{$value}}</p>
                </div>
            @endsession

            {{ $slot }}
        </main>
    </body>
</html>
