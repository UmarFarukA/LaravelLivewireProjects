<div class="m-4">

    <div class="flex space-x-2 mt-3 relative">
        <form action="">
            <input type="text" wire:model.live.debounce="searchText" placeholder="enter text to search">
            <button type="submit" class="bg-gray-200 text-gray-800 px-3 py-2 rounded">Search</button>
        </form>

        <div class="mt-4 absolute top-4 left-0">
            @if ($result)
                @foreach ($result as $item)
                    <p class="mt-3 px-2 py-3 bg-stone-600 text-stone-100 rounded">
                        {{ $item->title }}
                    </p>
                @endforeach
            @endif
        </div>
    </div>
</div>
