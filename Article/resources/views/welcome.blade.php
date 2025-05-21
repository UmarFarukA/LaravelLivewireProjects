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
        <header class="flex justify-between items-center px-8 w-full">
            <nav>
                <h3 class="text-xl text-white">Nav Component</h3>
            </nav>

        </header>

        <main class="flex justify-between items-center w-3/4 mx-auto mt-8 p-6 text-white border border-red-600 relative">
            <div>
                <h4>Main Article content goes here</h4>
            </div>

            <div>
                <livewire:search />
            </div>
        </main>
    </body>
</html>
