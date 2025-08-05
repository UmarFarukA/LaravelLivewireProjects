<div>
    <flux:heading size="xl" level="1">{{ __('Tricycles') }}</flux:heading>
    <flux:subheading size="lg" class="mb-6">
        {{ __('Manage Everything about tricycles') }}
    </flux:subheading>
    <flux:separator variant="subtle" />

    <x-notification />
    <livewire:admin.tricycle.delete />

    <div class="mt-12 flex flex-col gap-2 md:flex-row md:justify-between md:items-center">
        <flux:modal.trigger name="#">
            <x-link href="{{ route('tricycle.create') }}">Add New Tricycle</x-link>
        </flux:modal.trigger>

        <div class="md:w-2/4">
            <flux:input wire:model.live.debounce.500ms="search" type="search" required />
        </div>
    </div>
    <div class="mt-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-16 py-3">
                                <span class="sr-only">Image</span>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Brand
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Model Number
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Cost (N)
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($this->tricycles as $tricycle)
                            <tr class="border-b dark:bg-gray-800  border-gray-200">
                                <td class="p-4">
                                    <img src="{{Storage::url($tricycle->photo_path)}}" alt="Photo"
                                        class="w-8 md:w-16 max-w-full max-h-full rounded-full">
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                    @if ($tricycle->brand_id == 1)
                                        Bajaj
                                    @elseif ($tricycle->brand_id == 2)
                                        TVS
                                    @elseif ($tricycle->brand_id == 3)
                                        Piaggo
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    {{ $tricycle->model_number }}
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                    {{ number_format($tricycle->amount, 2) }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('tricycle.edit', $tricycle->id) }}"
                                        class="text-sky-50 bg-gray-500 hover:bg-gray-600 px-3 py-2 mr-2 rounded-md cursor-pointer text-lg">
                                        Edit
                                    </a>
                                    <flux:button variant="primary" color="red" wire:click='delete({{$tricycle->id}})'>
                                        Delete
                                    </flux:button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


            <div class="mt-6 mb-8 dark:text-white">
                {{-- {{ $this->tricycles->links() }} --}}
            </div>
        </div>

    </div>
</div>
