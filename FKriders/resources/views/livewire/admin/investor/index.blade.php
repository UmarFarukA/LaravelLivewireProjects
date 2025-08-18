<div>
    <flux:heading size="xl" level="1">{{ __('Investors') }}</flux:heading>
    <flux:subheading size="lg" class="mb-6">
        {{ __('Manage investors and their payments') }}
    </flux:subheading>
    <flux:separator variant="subtle" />

    <x-notification />
    <livewire:admin.investor.create />
    <livewire:admin.investor.create-investor-payment />
    <livewire:admin.investor.edit />


    <div class="mt-12 flex justify-between items-center">

        <div class="space-x-6">
            <flux:modal.trigger name="manage-investor">
                <flux:button variant="primary">Manage Investors</flux:button>
            </flux:modal.trigger>

            <flux:modal.trigger name="manage-investor-payment">
                <flux:button variant="primary">Manage Investors Payments</flux:button>
            </flux:modal.trigger>

        </div>

        <div class="w-2/4">
            <flux:input wire:model.live.debounce.500ms="search" type="search" required placeholder="Search"/>
        </div>
    </div>

    <div class="mt-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Investor
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Amount Paid (N)
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Payment Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Payment For
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($this->investors as $investor)
                        <tr class="border-b dark:bg-gray-800  border-gray-200">
                            <td class="px-6 py-4 font-semibold text-white">
                                {{ $investor->investor->user->lname }} {{ $investor->investor->user->othernames }}
                            </td>
                            <td class="px-6 py-4">
                                {{ number_format($investor->amount_due, 2) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $investor->created_at->format('d-m-Y') }}
                            </td>

                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                {{ $investor->payment_number }}
                            </td>
                            <td class="px-6 py-4 flex flex-col space-y-1 md:flex-row items-center space-x-2">
                                <flux:button variant="primary" wire:click='edit({{ $investor->id }})'>Edit</flux:button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-6 mb-8 pl-2 dark:text-white">
                {{-- Total Amount Paid: <span class="text-xl">₦{{ number_format($total_amount_paid, 2) }}</span> --}}
            </div>
        </div>

    </div>
</div>
