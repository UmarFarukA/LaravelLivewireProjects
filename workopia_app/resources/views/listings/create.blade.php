<x-app>

    <x-slot:sections> </x-slot:sections>

    <section class="flex justify-center items-center mt-20">
        {{-- message placeholder --}}
        <div class="bg-white p-8 rounded-lg shadow-md w-full md:w-600 mx-6">
            <x-heading class="text-4xl text-center font-bold mb-4">Create Job Listing</x-heading>
            <form action="/jobs" method="POST">
                @csrf
                <x-forms.field>
                    <x-forms.input name="title" placeholder="Job Title" value="{{ old('title') }}" />
                    <x-error name="title" />
                </x-forms.field>

                <x-forms.field>
                    <textarea name="description" placeholder="Job Description" class="w-full px-4 py-2 border rounded focus:outline-none"></textarea>
                    <x-error name="description" />
                </x-forms.field>

                <x-forms.field>
                    <x-forms.input name="salary" placeholder="Annual Salary" value="{{ old('salary') }}" />
                    <x-error name="salary" />
                </x-forms.field>

                <x-forms.field>
                    <x-forms.input name="requirements" placeholder="Requirements" value="{{ old('requirement') }}" />
                    <x-error name="requirements" />
                </x-forms.field>

                <x-forms.field>
                    <x-forms.input name="benefits" placeholder="Benefits" value="{{ old('benefits') }}" />
                    <x-error name="benefits" />
                </x-forms.field>

                <x-heading>
                    Job Info & Location
                </x-heading>

                <x-forms.field>
                    <x-forms.input name="address" placeholder="Address" value="{{ old('address') }}" />
                    <x-error name="address" />
                </x-forms.field>

                <x-forms.field>
                    <x-forms.input name="city" placeholder="City" value="{{ old('city') }}" />
                    <x-error name="city" />
                </x-forms.field>

                <x-forms.field>
                    <x-forms.input name="state" placeholder="State" value="{{ old('state') }}" />
                    <x-error name="state" />
                </x-forms.field>

                <x-forms.field>
                    <x-forms.input name="phone" placeholder="Phone" value="{{ old('state') }}" />
                    <x-error name="phone" />
                </x-forms.field>

                <x-forms.field>
                    <x-forms.input type="email" name="email" value="{{ old('email') }}"
                        placeholder="Email Address For Applications" />
                    <x-error name="email" />
                </x-forms.field>

                <x-forms.button class="bg-green-500 hover:bg-green-600 px-4 my-3">
                    Save
                </x-forms.button>
                <x-forms.cancel href="/">Cancel</x-forms.cancel>
            </form>
        </div>
    </section>
    <x-slot:footer>
        <x-footer />
    </x-slot:footer>
</x-app>
