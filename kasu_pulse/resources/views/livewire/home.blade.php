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
