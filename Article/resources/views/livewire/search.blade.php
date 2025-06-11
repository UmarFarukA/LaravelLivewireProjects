<div class="mx-auto w-full">
    <div class=" gap-2">
        <form wire:submit='onUpdated'>
            <input
                type="text"
                placeholder="Search something"
                class="rounded-md px-2 py-4 bg-gray-500 w-full"
                wire:model.live.debounce="searchText"
            >
        </form>
    </div>

    @if (!empty($searchText))
        <livewire:search-result :results="$results"/>
    @endif
</div>
