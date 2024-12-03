<div class="mt-3 w-4/5">
    <h2 class="text-green-700 text-2xl text-center font-semibold">Edit User</h2>
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
                <x-input-label name="password">Password</x-input-label>
                <x-input-field type="password" name="form.password" />
            </x-form-field>

            <x-form-field>
                <x-input-label name="password_confirmation">Confirm Password</x-input-label>
                <x-input-field type="password" name="form.password_confirmation" />
            </x-form-field>

            <x-form-field>
                <x-input-label name="status">Role</x-input-label>
                <x-input-select name="form.status">
                    <option value="viewer">Viewer</option>
                    <option value="contributor">Contributor</option>
                    <option value="admin">Admin</option>
                </x-input-select>
            </x-form-field>

            <x-form-field class="flex align-middle gap-2">
                <x-primary-button type="submit">Save changes</x-primary-button>
            </x-form-field>
        </form>
    </div>
</div>
