<div class="mt-8 mx-auto w-2/4">
    <h3 class="text-blue-600 text-2xl font-semibold mb-5">Login</h3>
    <form wire:submit.prevent='authenticate'>
        <div class="mb-3 flex flex-col">
            <label for="email" class="text-gray-100 text-lg">
                Email
            </label>
            <input
                type="text"
                id="email"
                placeholder="Enter your email"
                class="rounded-md px-2 py-3 bg-gray-200 text-stone-800 border border-blue-500"
                wire:model='email'
            />
            @error('email')
                <span class="mt-1 text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3 flex flex-col">
            <label for="content" class="text-gray-100 text-lg">
                Password
            </label>
            <input
                type="password"
                id="password"
                placeholder="Enter your password"
                class="rounded-md px-2 py-3 bg-gray-200 text-stone-800 border border-blue-500"
                wire:model='password'
            />
            @error('password')
                <span class="mt-1 text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <button
            type="submit"
            class="bg-blue-600 text-blue-100 rounded-md px-3 py-2 disabled:bg-blue-900"
        >
            Login
        </button>
    </form>


</div>



