<div class="w-2/4 mx-auto mt-12">
    <h2 class="text-green-700 text-xl font-bold text-center mb-8">Contact Us</h2>

    <form wire:submit.prevent='save'>
        <x-form-field>
            <x-input-label name='name'>Name</x-input-label>
            <x-input-field name='name' id='name' type='text' />
        </x-form-field>

        <x-form-field>
            <x-input-label name='phone'>Phone</x-input-label>
            <x-input-field name='phone' id='phone' type='text' />
        </x-form-field>

        <x-form-field>
            <x-input-label name='email'>Email</x-input-label>
            <x-input-field name='email' type='email' id='email' />
        </x-form-field>

        <x-form-field>
            <x-input-label name='content'>Message</x-input-label>
            <x-text-area name='content' rows='15' />
        </x-form-field>

        <x-primary-button type='submit' class="mb-2">Send</x-primary-button>
    </form>
</div>
