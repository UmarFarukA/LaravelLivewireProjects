<x-app>

    <x-slot:sections>

    </x-slot:sections>
    <x-wrapper>

        <x-slot:heading>Register</x-slot:heading>

        <form>
            <x-forms.field>
                <x-forms.input type="text" name="name" placeholder="Full Name" />
            </x-forms.field>

            <x-forms.field>
                <x-forms.input type="email" name="email" placeholder="Email Address" />
            </x-forms.field>

            <x-forms.field>
                <x-forms.input type="text" name="city" placeholder="City" />
            </x-forms.field>

            <x-forms.field>
                <x-forms.input type="text" name="city" placeholder="City" />
            </x-forms.field>

            <x-forms.field>
                <x-forms.input type="text" name="state" placeholder="State" />
            </x-forms.field>

            <x-forms.field>
                <x-forms.input type="password" name="password" placeholder="Password" />
            </x-forms.field>

            <x-forms.field>
                <x-forms.input type="password" name="password_confirmation" placeholder="Confirm Password" />
            </x-forms.field>

            <x-forms.button type="submit">Register</x-forms.button>

            <p class="mt-4 text-gray-500">
                Already have an account?
                <a class="text-blue-900" href="{{ route('login') }}">Login</a>
            </p>
    </x-wrapper>
    <x-slot:footer>

    </x-slot:footer>
</x-app>
