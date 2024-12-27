<div class=" w-2/4 mx-auto mt-12 pb-8">
    @foreach ($sessions as $session)
        <div class="px-4 py-2 rounded-md text-stone-800 bg-gray-300 mb-8">
            <div class="flex flex-col">
                <div class="flex justify-between items-center mb-6 text-lg">
                    <span class="text-green-700 ">
                        Submitted by: {{ $session->name }}
                    </span>
                    <span class="text-green-700">
                        Posted: {{ $session->updated_at }}
                    </span>
                </div>
                <p class="text-stone-800">{{ $session->content }}</p>
            </div>
        </div>
    @endforeach
</div>
