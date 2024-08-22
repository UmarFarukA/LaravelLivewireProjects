<x-app>
    <x-wrapper>

        <x-slot:heading>Login</x-slot:heading>

        <x-forms.form>
            <x-forms.field>
                <x-forms.input type="email" name="email" placeholder="Email Address" />
            </x-forms.field>

            <x-forms.field>
                <x-forms.input type="password" name="password" placeholder="Password" />
            </x-forms.field>

            <x-forms.button type="submit">
                Login
            </x-forms.button>

            <p class="mt-4 text-gray-500">
                Don't have an account?
                <a class="text-blue-900" href="register.html">Register</a>
            </p>
        </x-forms.form>

    </x-wrapper>
</x-app>
