<!-- Nav -->
<header class="bg-blue-900 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-semibold">
            <a href="{{ route('home') }}">Workopia</a>
        </h1>
        <nav class="space-x-4 flex items-center justify-center">

            {{-- <form method="POST" action="/auth/logout">
                    <button type="submit" class="text-white inline hover:underline">Logout</button>
                </form> --}}
            <a href="{{ route('create') }}"
                class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded hover:shadow-md transition duration-300"><i
                    class="fa fa-edit"></i> Post a Job</a>

            <a href="{{ route('login') }}" class="text-white hover:underline">Login</a>
            <a href="{{ route('register') }}" class="text-white hover:underline">Register</a>

        </nav>
    </div>
</header>
