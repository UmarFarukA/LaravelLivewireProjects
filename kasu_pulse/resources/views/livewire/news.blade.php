<section class="mt-20">
    <div class="w-2/4 mx-auto grid md:grid-cols-1 justify-center bg-gray-200 p-3">
        @foreach ($this->posts as $post)
            <div class="flex flex-col gap-1 px-4 pt-5 border-b-2 border-stone-900">
                <div class="flex justify-between items-center">
                    <div class="flex flex-row items-center gap-1">
                        <img src="{{ $post->user->photo_path }}" class="h-8 w-8 rounded-full" alt="">
                        <div class="flex flex-col gap-1 text-stone-700 font-bold ms-1">
                            <p class="text-sm font-bold  text-start">{{ $post->user->name }}</p>
                            <span class="text-sm">
                                {{ $post->created_at }}
                            </span>
                        </div>
                    </div>
                    <div>
                        <span class="font-bold text-sm">
                            Action
                        </span>
                    </div>
                </div>
                <div class="mb-4 mt-3 border-bottom border-gray-500 px-4 flex flex-col">
                    <div class="text-stone-700 flex justify-between items-center mb-2">
                        <p class="text-lg text-justify">
                            {{ $post->content }}
                        </p>
                    </div>

                    <div>
                        @if ($post->media_url)
                            <img src="{{ $post->media_url }}" class="w-full h-96 rounded-md object-cover"
                                alt="">
                        @endif
                    </div>

                    <div class="ms-5 text-stone-600 pt-4 flex items-center justify-normal gap-5">
                        <span>{{ $post->likes_count }}: Likes</span>
                        <span>{{ $post->comments }}: Comments</span>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
</section>
