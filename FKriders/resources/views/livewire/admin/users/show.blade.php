<div>
    <flux:heading size="xl" level="1">{{ __('User Allocation') }}</flux:heading>
    <flux:subheading size="lg" class="mb-6">
        {{ __('View User status, allocation, payments, etc.') }}
    </flux:subheading>
    <flux:separator variant="subtle" />

    {{-- <x-notification /> --}}

    <div class="mt-4 flex sm:flex-col gap-4 space-y-3">
        <div class="flex gap-2">
            <div>
                @if ($user->photo)
                    <img
                        src="{{Storage::url($user->photo)}}"
                        alt="User Avatar"
                        width="200"
                        class="rounded-sm"
                    >
                @else
                    <img
                        src="{{asset('user.jpg')}}"
                        alt="User Avatar"
                        width="200"
                        class="rounded-sm"
                    >
                @endif
            </div>
            <div class="flex flex-col space-y-4 text-white text-lg">
                <span class="text-lg text-white">
                    Name:{{ $user->fname }} {{ $user->lname }}
                </span>
                <span class="text-lg text-white">
                    Phone Number: {{ $user->phone }}
                </span>
                <span class="text-lg text-white">
                    Address: {{ $user->address }}
                </span>
                <span class="text-lg text-white">
                    Guarantor Name: Umar Faruk
                </span>
                <span class="text-lg text-white">
                    Guarantor Phone: Umar Faruk
                </span>
            </div>
        </div>

        <flux:separator variant="subtle" />

        <div class="flex gap-2.5">
            <div>
                <img
                    src="{{Storage::url($user->allocation->tricycle->photo_path)}}"
                    alt="Tricycle Photo"
                    width="200"
                    class="rounded-sm"
                >
            </div>
            <div class="flex flex-col space-y-4 text-white text-lg">
                <span class="text-lg text-white">
                    Tricycle Brand: {{ $user->allocation->tricycle->brand->name}}
                </span>
                <span class="text-lg text-white">
                    Tricycle Model: {{ $user->allocation->tricycle->model_number}}
                </span>
                <span class="text-lg text-white">
                    Amount: N{{ number_format($user->allocation->tricycle->amount, 2)}}
                </span>
                <span class="text-lg text-white">
                        Total Amount Paid: {{ number_format($user->allocation->payments()->sum('amount'), 2) }}
                    </span>
                    <span class="text-lg text-white">
                        Balance: N{{number_format($user->allocation->tricycle->amount - $user->allocation->payments()->sum('amount'), 2)
                        }}
                    </span>
                <span class="text-lg text-white">
                    Payment Duration: {{ $user->allocation->duration}} weeks
                </span>
            </div>
        </div>

        <flux:separator variant="subtle" />

        <div class="mt-1">
            <div>
                Progress tracker goes here
            </div>
        </div>
    </div>
</div>
