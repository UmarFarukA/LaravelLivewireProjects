<div class="mt-3 w-4/5">
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
                <x-input-label name="content">Content</x-input-label>
                <x-text-area id="content" rows="6" name="form.content" />
            </x-form-field>

            <x-form-field>
                <x-input-label name="status">Status</x-input-label>
                <x-input-select name="form.status">
                    <option value="0">Draft</option>
                    <option value="1">Publish</option>
                    <option value="2">Rejected</option>
                </x-input-select>
            </x-form-field>

            <x-form-field class="flex align-middle gap-2">
                {{-- <x-secondary-button type="button" wire:submit.prevent='cancel'>&times;
                    Cancel</x-secondary-button> --}}
                <x-primary-button type="submit">Save Changes</x-primary-button>
            </x-form-field>
        </form>
    </div>
</div>
