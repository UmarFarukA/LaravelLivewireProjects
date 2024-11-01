<div>

    <div class="flex space-x-2 mt-3">
        <form action="">
            <input type="text" wire:model.live.debounce="searchText" placeholder="enter text to search">
            <button type="submit">Search</button>
        </form>

        <div class="mt-4">
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
