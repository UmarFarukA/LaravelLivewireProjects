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

    <div class="pt-28 md:pt-36 mx-8 md:mx-auto flex flex-col  md:w-2/3">
        <div class="mb-3 text-emerald-700 flex flex-col justify-center items-center">
            <img src="{{ asset('images/kasu_logo.jpeg') }}" class="mb-6  h-32 w-56" alt="Logo">
            <h3 class="text-2xl md:text-5xl font-semibold mb-6">Sign In, stay Informed</h3>
        </div>
        <form wire:click='login'>
            {{-- <div class="my-2 flex justify-center">
                @if (isset($loginError))
                    <span class="text-cente px-3 py-1 rounded-md bg-red-600 text-white">{{ $loginError }}</span>
                @endif
            </div> --}}
            <x-form-field>
                <x-form-label name='username'>Username</x-form-label>
                <x-form-input id='username' type='text' placeholder='Enter your username' wire:model='username' />
                <x-error name='username' />
            </x-form-field>
            <x-form-field>
                <x-form-label name='password'>Password</x-form-label>
                <x-form-input id='password' type='password' placeholder='***************' wire:model='password' />
                <x-error name='password' />
            </x-form-field>
            <div class="mb-3 mt-2">
                <x-button type='button'>Login</x-button>
            </div>
        </form>
        <div class="mt-3 mb-4 text-emerald-700 text-lg flex md:flex-row flex-col justify-between">
            <p class="">Don't have an account? click <a href="" class="font-bold underline">here</a>
            </p>
            <p><a href="#" class="underline">Forgot Password</a></p>
        </div>
    </div>
</section>
