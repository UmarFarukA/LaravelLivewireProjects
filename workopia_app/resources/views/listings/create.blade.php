<x-app>

    Post a Job Form Box
    <section class="flex justify-center items-center mt-20">
        {{-- message placeholder --}}
        <div class="bg-white p-8 rounded-lg shadow-md w-full md:w-600 mx-6">
            <x-heading class="text-4xl text-center font-bold mb-4">Create Job Listing</x-heading>
            <x-forms.form>
                <x-heading>Job Info</x-heading>

                <x-forms.field>
                    <x-forms.input name="title" placeholder="Job Title" />
                </x-forms.field>

                <x-forms.field>
                    <textarea name="description" placeholder="Job Description" class="w-full px-4 py-2 border rounded focus:outline-none"></textarea>
                </x-forms.field>

                <x-forms.field>
                    <x-forms.input name="salary" placeholder="Annual Salary" />
                </x-forms.field>

                <x-forms.field>
                    <x-forms.input name="requirements" placeholder="Requirements" />
                </x-forms.field>

                <x-forms.field>
                    <x-forms.input name="benefits" placeholder="Benefits" />
                </x-forms.field>

                <x-forms.field>
                    <x-forms.input name="benefits" placeholder="Benefits" />
                </x-forms.field>

                <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
                    Company Info & Location
                </h2>

                <x-forms.field>
                    <x-forms.input name="company" placeholder="Company Name" />
                </x-forms.field>

                <x-forms.field>
                    <x-forms.input name="address" placeholder="Address" />
                </x-forms.field>

                <x-forms.field>
                    <x-forms.input name="city" placeholder="City" />
                </x-forms.field>

                <x-forms.field>
                    <x-forms.input name="state" placeholder="State" />
                </x-forms.field>

                <x-forms.field>
                    <x-forms.input name="phone" placeholder="Phone" />
                </x-forms.field>

                <x-forms.field>
                    <x-forms.input type="email" name="email" placeholder="Email Address For Applications" />
                </x-forms.field>

                <x-forms.button class="bg-green-500 hover:bg-green-600 px-4 my-3">
                    Save
                </x-forms.button>
                <x-forms.cancel href="/">Cancel</x-forms.cancel>
            </x-forms.form>
        </div>
    </section>

</x-app>
