<div class="mt-3 w-4/5">
    <h2 class="text-green-700 text-2xl text-center font-semibold">Edit Session</h2>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg px-8 py-4">
        <form wire:submit.prevent='save'>
            <x-form-field>
                <x-input-label name="title">Title</x-input-label>
                <x-input-field type="text" name="form.title" />
            </x-form-field>

            <x-form-field>
                <x-input-label name="venue">Venue</x-input-label>
                <x-input-field type="text" name="form.venue" />
            </x-form-field>

            <x-form-field>
                <x-input-label name="date">Date</x-input-label>
                <x-input-field type="date" name="form.date" />
            </x-form-field>

            <x-form-field>
                <x-input-label name="status">Status</x-input-label>
                <x-input-select name="form.status" id="status">
                    <option value="1">Upcoming</option>
                    <option value="0">Completed</option>
                </x-input-select>
            </x-form-field>

            <x-form-field>
                <x-input-label name="resolution">Resolution</x-input-label>
                <x-text-area rows='10' />
            </x-form-field>

            <x-form-field class="flex align-middle gap-2">
                <x-primary-button type="submit">Save changes</x-primary-button>
            </x-form-field>
        </form>
    </div>
</div>
