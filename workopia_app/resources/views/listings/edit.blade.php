<x-app>

    <x-slot:sections>
    </x-slot:sections>

    <section class="flex justify-center items-center mt-20">
        {{-- message placeholder --}}
        <div class="bg-white p-8 rounded-lg shadow-md w-full md:w-600 mx-6">
            <x-heading class="text-4xl text-center font-bold mb-4">Edit Job Listing</x-heading>
            <x-forms.form>
                <x-heading>Job Info</x-heading>

                <x-forms.field>
                    <x-forms.input name="title" placeholder="Job Title" value="{{ $job->title }}" />
                </x-forms.field>

                <x-forms.field>
                    <textarea name="description" placeholder="Job Description" class="w-full px-4 py-2 border rounded focus:outline-none">
                    {{ $job->description }}
                    </textarea>
                </x-forms.field>

                <x-forms.field>
                    <x-forms.input name="salary" placeholder="Annual Salary" value="{{ $job->salary }}" />
                </x-forms.field>

                <x-forms.field>
                    <x-forms.input name="requirements" placeholder="Requirements" value="{{ $job->requirements }}" />
                </x-forms.field>

                <x-forms.field>
                    <x-forms.input name="benefits" placeholder="Benefits" value="{{ $job->benefits }}" />
                </x-forms.field>

                <x-heading>
                    Job Info & Location
                </x-heading>

                <x-forms.field>
                    <x-forms.input name="address" placeholder="Address" value="{{ $job->address }}" />
                </x-forms.field>

                <x-forms.field>
                    <x-forms.input name="city" placeholder="City" value="{{ $job->city }}" />
                </x-forms.field>

                <x-forms.field>
                    <x-forms.input name="state" placeholder="State" value="{{ $job->state }}" />
                </x-forms.field>

                <x-forms.field>
                    <x-forms.input name="phone" placeholder="Phone" value="{{ $job->phone }}" />
                </x-forms.field>

                <x-forms.field>
                    <x-forms.input type="email" name="email" placeholder="Email Address For Applications"
                        value="{{ $job->email }}" />
                </x-forms.field>

                <x-forms.button class="bg-green-500 hover:bg-green-600 px-4 my-3">
                    Update
                </x-forms.button>
                <x-forms.cancel href="/">Cancel</x-forms.cancel>
            </x-forms.form>
        </div>
    </section>
    <x-slot:footer>
        <x-footer />
    </x-slot:footer>
</x-app>
