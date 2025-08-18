<section class="text-gray-900">
    <div class="flex flex-col items-center px-6 py-8 mx-auto md:h-screen lg:py-0">

        <div
            class="w-full bg-white rounded-lg shadow dark:border md:mt-24 sm:max-w-md xl:p-0 dark:bg-gray-50 dark:border-gray-700">
            <a href="{{route('home')}}" wire:navigate
                class="flex justify-center pt-12 mb-2 text-4xl font-semibold text-sky-500">
                <img src="{{ asset('fkryders.png') }}" class="w-48 h-32 rounded-full"/>
            </a>
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-stone-700 text-center text-2xl">
                    Login to your Account
                </h1>
                <form class="space-y-4 md:space-y-8" wire:submit.prevent='login()'>
                    <div class="text-center">
                        @if (isset($loginError))
                            <span class="my-1 text-red-500 text-md">{{ $loginError }}</span>
                        @endif
                    </div>

                    <flux:input
                        label="Phone"
                        type="number"
                        wire:model='phone'
                    />

                    <flux:input
                        label="Password"
                        type="password"
                        wire:model='password'
                    />

                    <div>
                        <flux:button variant="primary" type="submit" class="w-full">Login</flux:button>
                    </div>

                    <div class="flex justify-between items-center">
                        <p class="text-sm font-light text-stone-500 dark:text-gray-400 mt-8">
                            Don't have an account?
                            <a href="{{ route('register') }}" wire:navigate
                                class="font-medium text-stone-600 hover:underline dark:text-primary-500">Click
                                here
                            </a>
                        </p>
                        <p class="text-sm font-light text-stone-500 dark:text-gray-400 mt-8">

                            <a href="#" wire:navigate
                                class="font-medium text-stone-600 hover:underline dark:text-primary-500">Forgot Password
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
