<div class="w-full">
    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center w-full" data-tabs-toggle="#" role="tablist">
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile"
                    type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
            </li>
            <li class="me-2" role="presentation">
                <button
                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    id="changePassword-tab" data-tabs-target="#changePassword" type="button" role="tab"
                    aria-controls="changePassword" aria-selected="false">Change Password</button>
            </li>
            <li class="me-2" role="presentation">
                <button
                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    id="photo-tab" data-tabs-target="#photo" type="button" role="tab" aria-controls="photo"
                    aria-selected="false">Photo</button>
            </li>
        </ul>
    </div>
    <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel"
        class="relative overflow-x-auto shadow-md sm:rounded-lg px-8 py-4">
        <form wire:submit='updateDetails'>
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input wire:model="name" id='name'
                    class='bg-gray-50 border  text-stone-800 text-sm rounded-lg block w-full p-2.5  dark:text-white focus:ring-green-700 focus:border-green-700 mb-2'
                    required />
                @error('name')
                    <span class="text-red-400 ml-2 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-5">
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                <input wire:model="phone" id='phone'
                    class='bg-gray-50 border  text-stone-800 text-sm rounded-lg block w-full p-2.5  dark:text-white focus:ring-green-700 focus:border-green-700 mb-2'
                    required />
                @error('phone')
                    <span class="text-red-400 ml-2 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input wire:model="email" id='email'
                    class='bg-gray-50 border  text-stone-800 text-sm rounded-lg block w-full p-2.5  dark:text-white focus:ring-green-700 focus:border-green-700 mb-2'
                    required />
                @error('email')
                    <span class="text-red-400 ml-2 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-5">
                <button type="submit"
                    class='border-0 border:focus:ring-green-100 px-3 py-2 bg-green-700 text-green-100 rounded-lg hover:bg-green-600 hover:text-green-50'>Save
                    Changes</button>
            </div>
        </form>
    </div>
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="changePassword" role="tabpanel"
        aria-labelledby="dashboard-tab">
        <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="changePassword" role="tabpanel"
            class="relative overflow-x-auto shadow-md sm:rounded-lg px-8 py-4" wire:ignore.self>
            {{-- @if (isset($wrongPassword))
                <span class="bg-red-600 px-2 py-1 mb-2 rounded text-white text-center">
                    {{ $wrongPassword }}
                </span>
            @endif --}}
            <form wire:submit='updatePassword'>

                <div class="mb-5">
                    <label for="currentPassword"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current Password</label>
                    <input wire:model="currentPassword" id='currentPassword' type="password"
                        class='bg-gray-50 border  text-stone-800 text-sm rounded-lg block w-full p-2.5  dark:text-white focus:ring-green-700 focus:border-green-700 mb-2'
                        required />
                    @error('currentPassword')
                        <span class="text-red-400 ml-2 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New
                        Password</label>
                    <input wire:model="password" id='password' type="password"
                        class='bg-gray-50 border  text-stone-800 text-sm rounded-lg block w-full p-2.5  dark:text-white focus:ring-green-700 focus:border-green-700 mb-2'
                        required />
                    @error('password')
                        <span class="text-red-400 ml-2 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password_confirmation"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
                    <input wire:model="password_confirmation" id='password_confirmation' type="password"
                        class='bg-gray-50 border  text-stone-800 text-sm rounded-lg block w-full p-2.5  dark:text-white focus:ring-green-700 focus:border-green-700 mb-2'
                        required />
                    @error('password_confirmation')
                        <span class="text-red-400 ml-2 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-5">
                    <button type="submit"
                        class='border-0 border:focus:ring-green-100 px-3 py-2 bg-green-700 text-green-100 rounded-lg hover:bg-green-600 hover:text-green-50'>Save
                        Changes</button>
                </div>
            </form>
        </div>
    </div>
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="photo" role="tabpanel"
        aria-labelledby="photo-tab">
        <div class="flex flex-col items-center pt-6">

            <form class="max-w-lg mx-auto my-8" wire:submit.prevent='uploadPhoto' enctype="multipart/form-data">
                @if ($photo && !is_string($photo))
                    <div class="mb-4 flex justify-center">
                        <img class="w-32 h-32 object-cover rounded" src="{{ $photo->temporaryUrl() }}"
                            alt="{{ $name }}">
                    </div>
                @elseif ($photo_path)
                    <div class="mb-4 flex justify-center">
                        <img class="w-32 h-32 object-cover rounded" src="{{ Storage::url($photo_path) }}"
                            alt="{{ $name }}">
                    </div>
                @endif

                <div class="mt-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        for="user_avatar">Upload
                        file</label>
                    <div class="flex gap-2 mb-6 space-y-2">
                        <div class="flex flex-col">
                            <input wire:model='photo'
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-green-400 focus:outline-none dark:bg-green-700 dark:border-green-600 dark:placeholder-gray-400"
                                id="user_avatar" type="file">
                            @error('photo')
                                <span class="text-red-400 ml-2 text-sm">{{ $message }}</span>
                            @enderror

                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300 mb-2" id="user_avatar_help">A
                                profile
                                picture is useful to confirm your are logged into your account</p>
                            <x-primary-button>Save</x-primary-button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel"
        aria-labelledby="contacts-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>.
            Clicking
            another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to
            control
            the content visibility and styling.</p>
    </div>
</div>
</div>
