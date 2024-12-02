<div class="mt-12 w-3/5 mx-auto mb-12">
    <h2 class="text-green-700 text-xl font-bold text-center">Submit your Write Up</h2>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg px-8 py-4">
        <form wire:submit.prevent='save'>
            <x-form-field>
                <x-input-label name="name">Name</x-input-label>
                <x-input-field type="text" name="form.name" />
            </x-form-field>

            <x-form-field>
                <x-input-label name="email">Email</x-input-label>
                <x-input-field type="email" name="form.email" />
            </x-form-field>

            <x-form-field>
                <x-input-label name="phone">Phone Number</x-input-label>
                <x-input-field type="number" name="form.phone" />
            </x-form-field>

            <x-form-field>
                <x-input-label name="content">
                    Content:
                    <span class="text-xs text-red-700">maximum of 150 words</span>
                </x-input-label>
                <x-text-area id="content" rows="6" name="form.content" />
            </x-form-field>

            <x-form-field class="flex align-middle gap-2">
                <x-primary-button type="submit">Save</x-primary-button>
            </x-form-field>
        </form>
    </div>
</div>
