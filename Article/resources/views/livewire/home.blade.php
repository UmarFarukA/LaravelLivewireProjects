<div class="mt-8 mb-6 mx-auto w-2/4">
    <div class="mb-8 flex justify-between items-center">

        <button
            class="px-3 py-2 rounded text-lg bg-blue-500"
            wire:click="showAll"
        >
            Show All
        </button>

        <button
            class="px-3 py-2 rounded bg-indigo-500 text-lg"
            wire:click="showPublished"
        >
                Show Published (<livewire:published-count />)
        </button>
    </div>
    <div class="mb-3">
        {{$this->articles->links()}}
    </div>
    <div class="mb-3">
        @foreach($this->articles as $article)
            <div
                class="flex justify-between items-center p-4 mb-2 rounded-md w-full bg-gray-700 text-gray-100 text-xl border border-blue-200"
                wire:key="{{$article->id}}"
            >
                <div>
                    <a href="{{route('show-article', $article->id)}}">
                        {{$article->title}}
                    </a>
                </div>

                {{-- <div class="flex items-center gap-2">
                    <a href="{{route('edit-article', $article->id)}}" class="px-3 py-2 bg-gray-600 hover:bg-gray-500 text-gray-200 rounded">
                        Edit
                    </a>
                    <button
                            wire:click.prevent='delete({{$article->id}})'
                            type="button"
                            class="bg-red-600 hover:bg-red-500 text-red-100 rounded-md px-3 py-2 pointer"
                            wire:confirm="Are you sure you want to delete this Article?"
                        >
                            Delete
                    </button>
                </div> --}}
            </div>
        @endforeach
    </div>
    <div class="mb-3">
        {{$this->articles->links()}}
    </div>
</div>

