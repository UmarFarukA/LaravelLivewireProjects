<section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center mb-6 text-4xl font-semibold text-stone-700">
            <img src="{{ asset('images/kasu_logo.jpeg') }}" class="h-8" alt="KASU Logo" />
            Knowledge Drive Hub
        </a>
        <div
            class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Login
                </h1>
                <form class="space-y-4 md:space-y-8" wire:submit.prevent='authenticate'>

                    <div class="text-center">
                        @if (isset($loginError))
                            <span class="my-1 text-red-500 text-md">{{ $loginError }}</span>
                        @endif
                    </div>

                    <x-form-field>
                        <x-input-label name="email">Email</x-input-label>
                        <x-input-field name="email" id="email" type="email" />
                    </x-form-field>

                    <x-form-field>
                        <x-input-label name="password">Password</x-input-label>
                        <x-input-field name="password" id="password" type="password" />
                    </x-form-field>

                    <x-primary-button type="submit" class="w-full mb-1">Login</x-primary-button>

                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Already have an account? <a href="#"
                            class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login
                            here</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
