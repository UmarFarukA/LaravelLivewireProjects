<x-app>

    <x-slot:sections></x-slot:sections>
    <x-wrapper class="min-h-dvh">
        <x-slot:heading>Login</x-slot:heading>
        <form action="/login" method="POST">
            @csrf
            <x-forms.field>
                <x-forms.input type="email" name="email" value="{{ old('email') }}" placeholder="Email Address" />
                <x-error name="email" />
            </x-forms.field>

            <x-forms.field>
                <x-forms.input type="password" name="password" placeholder="Password" />
                <x-error name="password" />
            </x-forms.field>

            <x-forms.button type="submit">
                Login
            </x-forms.button>

            <p class="mt-4 text-gray-500">
                Don't have an account?
                <a class="text-blue-900" href="{{ route('register') }}">Register</a>
            </p>
        </form>

    </x-wrapper>

    <x-slot:footer>
    </x-slot:footer>
</x-app>
