<div>
    <flux:heading size="xl" level="1">{{ __('Tricycle Allocation') }}</flux:heading>
    <flux:subheading size="lg" class="mb-6">
        {{ __('Manage the allocation of tricycles to users.') }}
    </flux:subheading>
    <flux:separator variant="subtle" />

    <x-notification />

    <livewire:admin.allocation.create />
    <livewire:admin.allocation.edit />
    <livewire:admin.allocation.delete />

    <div class="mt-12 flex justify-between items-center">
        <flux:modal.trigger name="assign-tricycle">
            <flux:button variant="primary">Allocate</flux:button>
        </flux:modal.trigger>

        <div class="w-2/4">
            <flux:input wire:model.live.debounce.500ms="search" type="search" required />
        </div>
    </div>

    <div class="mt-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Full name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tricycle Brand
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Model
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Cost (N)
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Phone
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($this->allocations as $allocation)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 dark:text-white">
                            <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap ">
                                {{ $allocation->user->fname }} {{ $allocation->user->lname }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $allocation->tricycle->brand->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $allocation->tricycle->model_number }}
                            </td>
                            <td class="px-6 py-4">
                                {{ number_format($allocation->tricycle->amount, 2) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $allocation->user->phone }}
                            </td>
                            <td>
                                @if ($allocation->tricycle->allocated == 1)
                                    <span class="px-3 py-2 bg-sky-500 text-sky-50 text-center rounded">Allocated</span>
                                @else
                                    <span class="px-3 py-2 bg-red-500 text-red-50 text-center rounded">De-allocated</span>

                                @endif
                            </td>
                            <td class="px-6 py-4 text-right flex items-center space-x-4">
                                <x-edit-icon name="edit-user" wire:click="edit({{ $allocation->id }})"/>

                                <x-delete-icon name="delete-allocation" wire:click="delete({{ $allocation->id }})"/>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- <div class="mt-6 mb-8 dark:text-white">
                {{ $this->allocations->links() }}
            </div> --}}
        </div>

    </div>
</div>

