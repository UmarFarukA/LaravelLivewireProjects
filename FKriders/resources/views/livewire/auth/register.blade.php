<section class=" text-gray-900">
    <div class="flex flex-col items-center px-6 py-4 mx-auto md:h-screen lg:py-0">
        <div
            class="w-full bg-white rounded-lg shadow dark:border md:mt-12 sm:max-w-md xl:p-0 dark:bg-gray-50 dark:border-gray-700">
            <a href="{{route('home')}}" wire:navigate
                class="flex justify-center pt-6 mb-1 text-4xl font-semibold text-sky-500">
                <img src="{{ asset('fkryders.png') }}" class="w-48 h-32 rounded-full"/>
            </a>
            <div class="p-4 space-y-4 md:space-y-6 sm:p-8">

                <form class="space-y-4 md:space-y-8" wire:submit.prevent='register'>
                    <flux:input
                        wire:model="lname"
                        :label="__('Last Name')"
                        type="text"
                        required
                        autofocus
                        autocomplete="lname"
                        :placeholder="__('Last name')"
                    />

                    <flux:input
                        wire:model="othernames"
                        :label="__('Othernames')"
                        type="text"
                        required
                        :placeholder="__('Othernames')"
                    />

                    <flux:input
                        wire:model="phone"
                        :label="__('Phone Number')"
                        type="number"
                        required
                        :placeholder="__('Othernames')"
                    />

                    <flux:input
                        wire:model="email"
                        :label="__('Email')"
                        type="email"
                        :placeholder="__('Email')"
                    />

                    <flux:input
                        wire:model="password"
                        :label="__('Password')"
                        type="password"
                        required
                        :placeholder="__('Password')"
                    />

                    <flux:input
                        wire:model="password_confirmation"
                        :label="__('Confirm Password')"
                        type="password"
                        required
                        :placeholder="__('Confirm Password')"
                    />

                    <div>
                        <flux:button class="w-full" variant="primary" type="submit">
                            Register
                        </flux:button>
                    </div>

                    <p class="text-sm font-light text-stone-500 dark:text-gray-400 mt-8">
                        Already have an account?
                        <a href="{{route('login')}}"
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
