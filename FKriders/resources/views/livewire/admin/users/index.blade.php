<div>
    <flux:heading size="xl" level="1">{{ __('Users') }}</flux:heading>
    <flux:subheading size="lg" class="mb-6">
        {{ __('Manage users - create, modify, and delete users') }}
    </flux:subheading>
    <flux:separator variant="subtle" />

    <x-notification />

    <div class="mt-12 flex justify-between items-center">
        <flux:modal.trigger name="create-user">
            <flux:button variant="primary">Create User</flux:button>
        </flux:modal.trigger>

        <div class="w-2/4">
            <flux:input wire:model.live.debounce.500ms="search" type="search" required />
        </div>
    </div>

    <livewire:admin.users.create />
    <livewire:admin.users.edit />


    <div class="mt-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Full name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Phone Number
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Role
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($this->users as $user)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 dark:text-white">
                            <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap ">
                                {{ $user->fname }} {{ $user->lname }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $user->phone }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->email }}
                            </td>
                            <td class="px-6 py-4">
                                @if ($user->role_id === 1)
                                    <p class="rounded bg-sky-500 text-emerald-50 text-center">
                                        Driver
                                    </p>
                                @elseif ($user->role_id === 2)
                                    <p class="p-1 rounded bg-indigo-600 text-indigo-50 text-center">
                                        Customer
                                    </p>
                                @elseif ($user->role_id === 3)
                                    <p class="p-1 rounded bg-yellow-600 text-yellow-50 text-center">
                                        Admin
                                    </p>
                                @else
                                    <p class="p-1 rounded bg-stone-700 text-stone-50 text-center">
                                        Super Admin
                                    </p>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                @if ($user->status === 1)
                                    <p class="rounded bg-emerald-600 text-emerald-50 text-center">
                                        Active
                                    </p>
                                @else
                                    <p class="p-1 rounded bg-indigo-600 text-indigo-50 text-center">
                                        Inactive
                                    </p>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-right flex items-center space-x-4">
                                <div wire:click="edit({{ $user->id }})">
                                    <svg name="edit-user" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-pencil-icon lucide-pencil cursor-pointer">
                                        <path
                                            d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                        <path d="m15 5 4 4" />
                                    </svg>
                                </div>

                                <svg name="delete-user" wire:click='delete({{ $user->id }})'
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-trash-icon lucide-trash cursor-pointer">
                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6" />
                                    <path d="M3 6h18" />
                                    <path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                                </svg>

                                <svg
                                    name="update-password" wire:click='change_password({{ $user->id }})'
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-key-round-icon lucide-key-round cursor-pointer">
                                    <path
                                        d="M2.586 17.414A2 2 0 0 0 2 18.828V21a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h1a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h.172a2 2 0 0 0 1.414-.586l.814-.814a6.5 6.5 0 1 0-4-4z" />
                                    <circle cx="16.5" cy="7.5" r=".5" fill="currentColor" />

                                </svg>

                            </td>
                            {{-- Delete Modal --}}
                            <flux:modal name="delete-user" class="min-w-[22rem]">
                                <div class="space-y-6">
                                    <div>
                                        <flux:heading size="lg">Delete User?</flux:heading>
                                        <flux:text class="mt-2">
                                            <p>You're about to delete this user.</p>
                                            <p>This action cannot be reversed.</p>
                                        </flux:text>
                                    </div>
                                    <div class="flex gap-2">
                                        <flux:spacer />
                                        <flux:modal.close>
                                            <flux:button variant="ghost">Cancel</flux:button>
                                        </flux:modal.close>
                                        <flux:button type="submit" variant="danger" wire:click='destroy({{ $user->id }})'>
                                            Delete User
                                        </flux:button>
                                    </div>
                                </div>
                            </flux:modal>

                            {{-- Change Password Modal --}}
                            <livewire:admin.users.change-password />
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-6 mb-8 dark:text-white">
                {{ $this->users->links() }}
            </div>
        </div>

    </div>
</div>
