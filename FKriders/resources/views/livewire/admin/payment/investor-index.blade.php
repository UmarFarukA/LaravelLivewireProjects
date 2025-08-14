<div>
    <flux:heading size="xl" level="1">{{ __('My Investments') }}</flux:heading>
    <flux:subheading size="lg" class="mb-6">
        {{ __('View all payments received for your investments') }}
    </flux:subheading>
    <flux:separator variant="subtle" />

    <x-notification />
    <livewire:admin.payment.create />
    <livewire:admin.payment.edit />

    <div class="mt-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>

                            <th scope="col" class="px-6 py-3">
                                Tricycle
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Cost (N)
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Amount Paid (N)
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Last Payment Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Payment Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($payments as $payment)
                            <tr class="border-b dark:bg-gray-800  border-gray-200">
                                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                    {{ $payment->allocation->tricycle->model_number }}
                                </td>
                                <td class="px-6 py-4">
                                   {{ number_format($payment->allocation->tricycle->amount, 2) }}
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                    {{ number_format($payment->amount, 2) }}
                                </td>
                                <td class="px-6 py-4">
                                   {{ $payment->created_at->format('d-m-Y') }}
                                </td>
                                <td class="px-6 py-4">
                                    @if ($payment->payment_status == 0)
                                        <span class="px-2 py-1 text-sm bg-sky-500 text-sky-50 rounded-md">Pending</span>
                                    @elseif ($payment->payment_status == 1)
                                        <span class="px-2 py-1 text-sm bg-green-500 text-green-50 rounded-md">Verified</span>
                                    @elseif ($payment->payment_status == 2)
                                        <span class="px-2 py-1 text-sm bg-red-500 text-red-50 rounded-md">Failed</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 flex flex-col space-y-1 md:flex-row items-center space-x-2">
                                    <a
                                        href="{{ route('receipt.download', $payment->id) }}"
                                        class="bg-sky-500 hover:bg-sky-400 text-sky-50 px-2 py-1 rounded-md"
                                    >
                                        Download
                                    </a>
                                </td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>

            {{-- <div class="mt-6 mb-8 pl-2 dark:text-white">
                 Total Amount Paid: <span class="text-xl">₦{{ number_format($total_amount_paid, 2) }}</span>
            </div> --}}
        </div>

    </div>
</div>

