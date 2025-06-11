<div class="rounded-md text-stone-700 text-lg bg-gray-500 mt-2 px-3 py-1 absolute">
    @foreach ($results as $result)
        <a
            href="{{route('show-article', $result->id)}}"
            class="text-stone-800 pb-2"
        >
            {{$result->title}}
        </a>
    @endforeach
</div>
