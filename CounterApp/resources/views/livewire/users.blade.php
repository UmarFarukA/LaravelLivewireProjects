<div class="flex flex-col gap-2 mt-6">
    <form action="" wire:submit.prevent='create'>
        <div class="mb-3 flex flex-col">
            <label for="user" class="text-white">Username</label>
            <input type="text" wire:model='name' id="user" class="px-2 py-2 rounded-md text-stone-700">
            <div class="mt-1">
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3 flex flex-col">
            <label for="email" class="text-white">Email</label>
            <input type="email" wire:model='email' id="email" class="px-2 py-2 rounded-md text-stone-700">
            <div class="mt-1">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="mb-3 flex flex-col">
            <label for="password" class="text-white">password</label>
            <input type="password" wire:model='password' id="password" class="px-2 py-2 rounded-md text-stone-700">
            <div class="mt-1">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <button type="submit" class="bg-stone-500 text-stone-50 rounded-md px-3 py-2 w-full">Create</button>
        </div>
    </form>
</div>
