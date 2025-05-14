<section class="bg-white text-gray-900 mt-8">
    <div class="flex flex-col items-center mt-12 px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="{{route('home')}}" wire:navigate class="flex items-center mb-6 text-4xl font-semibold text-primary-default">
           FK Riders
        </a>
        <div
            class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-50 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="">
                    Login
                </h1>
                <form class="space-y-4 md:space-y-8" wire:submit.prevent='authenticate'>
                    <div class="text-center">
                        @if (isset($loginError))
                            <span class="my-1 text-red-500 text-md">{{ $loginError }}</span>
                        @endif
                    </div>

                    <x-form-field>
                        <x-input-label name="phone">Phone</x-input-label>
                        <x-input-field name="phone" id="phone" type="phone" />
                    </x-form-field>

                    <x-form-field>
                        <x-input-label name="password">Password</x-input-label>
                        <x-input-field name="password" id="password" type="password" />
                    </x-form-field>

                    <x-primary-button type="submit" class="w-full mb-1">Login</x-primary-button>

                    <p class="text-sm font-light text-stone-500 dark:text-gray-400 mt-8">
                        Don't have an account?
                        <a href="{{route('signup')}}"
                            wire:navigate
                            class="font-medium text-stone-600 hover:underline dark:text-primary-500">Click
                            here
                        </a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
