<div class="">
    <div class="flex justify-between items-center gap-2">
        <form wire:submit='onUpdated'>
            <input
                type="text"
                placeholder="Search something"
                class="rounded-md px-2 py-4 bg-gray-500 w-full"
                wire:model.live.debounce="searchText"
            >
        </form>
        <button
                type="submit"
                class="rounded text-stone-800 text-md p-4 bg-gray-400 hover:bg-gray-300 disabled:bg-gray-500 pointer"
                wire:click.prevent='clear'
                {{ empty($searchText) ? 'disabled' : '' }}
        >
            Clear
        </button>
    </div>

    @empty(!$results)
        <div class="rounded-md text-stone-700 text-lg bg-gray-500 mt-2 px-3 py-1 absolute top-22 right-0">
            @foreach ($results as $result)
                <p class="text-stone-800 pb-2">{{$result->title}}</p>
            @endforeach
        </div>
    @endempty
</div>
