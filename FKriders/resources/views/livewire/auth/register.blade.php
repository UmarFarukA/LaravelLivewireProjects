{{-- <div class="flex flex-col gap-6">
    <x-auth-header :title="__('Create an account')" :description="__('Enter your details below to create your account')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="register" class="flex flex-col gap-6">
        <!-- Name -->
        <flux:input
            wire:model="name"
            :label="__('Name')"
            type="text"
            required
            autofocus
            autocomplete="name"
            :placeholder="__('Full name')"
        />

        <!-- Email Address -->
        <flux:input
            wire:model="email"
            :label="__('Email address')"
            type="email"
            required
            autocomplete="email"
            placeholder="email@example.com"
        />

        <!-- Password -->
        <flux:input
            wire:model="password"
            :label="__('Password')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Password')"
            viewable
        />

        <!-- Confirm Password -->
        <flux:input
            wire:model="password_confirmation"
            :label="__('Confirm password')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Confirm password')"
            viewable
        />

        <div class="flex items-center justify-end">
            <flux:button type="submit" variant="primary" class="w-full">
                {{ __('Create account') }}
            </flux:button>
        </div>
    </form>

    <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
        <span>{{ __('Already have an account?') }}</span>
        <flux:link :href="route('login')" wire:navigate>{{ __('Log in') }}</flux:link>
    </div>
</div> --}}

<section class=" text-gray-900">
    <div class="flex flex-col items-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div
            class="w-full bg-white rounded-lg shadow dark:border md:mt-12 sm:max-w-md xl:p-0 dark:bg-gray-50 dark:border-gray-700">
            <a href="{{route('home')}}" wire:navigate
                class="flex justify-center pt-12 mb-6 text-4xl font-semibold text-sky-500">
                FK Riders
            </a>
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-stone-700 text-center text-2xl">
                    Create Account
                </h1>
                <form class="space-y-4 md:space-y-8" wire:submit.prevent='save'>
                    <x-form-field>
                        <x-input-label name="name">Name</x-input-label>
                        <x-input-field name="form.name" id="name" type="text" />
                    </x-form-field>

                    <x-form-field>
                        <x-input-label name="phone">Phone</x-input-label>
                        <x-input-field name="form.phone" id="phone" type="phone" />
                    </x-form-field>

                    <x-form-field>
                        <x-input-label name="email">Email</x-input-label>
                        <x-input-field name="form.email" id="email" type="email" />
                    </x-form-field>

                    <x-form-field>
                        <x-input-label name="password">Password</x-input-label>
                        <x-input-field name="form.password" id="password" type="password" />
                    </x-form-field>

                    <x-form-field>
                        <x-input-label name="password_confirmation">Confirm Password</x-input-label>
                        <x-input-field name="form.password_confirmation" id="password_confirmation" type="password" />
                    </x-form-field>

                    <x-form-field>
                        <x-primary-button type="submit" class="w-full mb-1">Register</x-primary-button>
                    </x-form-field>

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
