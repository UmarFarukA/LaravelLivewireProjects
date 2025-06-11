<div class="mt-8 mx-auto w-2/4">
    <h3 class="text-blue-600 text-2xl font-semibold mb-5">Create Article</h3>
    <form wire:submit.prevent='save'>
        <div class="mb-3 flex flex-col">
            <label for="title" class="text-gray-100 text-lg">
                Title
            </label>
            <input
                type="text"
                id="title"
                placeholder="Article title"
                class="rounded-md px-2 py-3 bg-gray-200 text-stone-800 border border-blue-500"
                wire:model='form.title'
            />
            @error('title')
                <span class="mt-1 text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3 flex flex-col">
            <label for="content" class="text-gray-100 text-lg">
                Content
            </label>
            <textarea
                rows="4"
                class="w-full rounded-md bg-gray-200 text-stone-800 px-2"
                wire:model='form.content'
            >
            </textarea>
            @error('content')
                <span class="mt-1 text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3 flex items-center">
            <label class="text-gray-100 text-xl">
                <input type="checkbox" wire:model.boolean='form.published'>
                Published
            </label>
        </div>

        <div class="mb-3 flex items-center">

            <div>
                @if ($form->photo)
                    <img src="{{$form->photo->temporaryUrl()}}" alt="Phot" class="w-1/2">
                @elseif ($form->photo_path)
                    <img src="{{Storage::url($form->photo_path)}}" alt="Photo" class="w-1/2">
                @endif
            </div>

            <div>
                <label class="text-gray-100 text-xl mr-1">
                    Upload Photo:
                </label>
                <input
                    type="file"
                    wire:model='form.photo'
                    class="bg-blue-400 p-2 rounded-md cursor-pointer"
                >
            </div>
        </div>

        <div class="mb-3">
            <div>
                <div class="flex items-center">
                    <div class="mr-4 text-lg">Allow Notification: </div>
                    <label class="flex items-center">
                        <input
                            type="radio"
                            name="allowNotification"
                            class="mr-1"
                            value="true"
                            wire:model.boolean="form.allowNotification"
                        >
                        Yes
                    </label>
                    <label class="flex items-center">
                        <input
                            type="radio"
                            name="allowNotification"
                            class="mx-2"
                            value="false"
                            wire:model.boolean="form.allowNotification"
                        >
                        No
                    </label>
                </div>

            </div>
        </div>

        <div class="mb-3" x-show="$wire.form.allowNotification">

            <label class="flex items-center">
                <input
                    type="checkbox"
                    value="sms"
                    class="mr-2"
                    wire:model='form.notifications'
                >
                SMS
            </label>
            <label class="flex items-center">
                <input
                    type="checkbox"
                    value="email"
                    class="mr-2"
                    wire:model='form.notifications'
                >
                Email
            </label>
            <label class="flex items-center">
                <input
                    type="checkbox"
                    value="push"
                    class="mr-2"
                    wire:model='form.notifications'
                >
                Push
             </label>
        </div>

        <button
            type="submit"
            class="bg-blue-600 text-blue-100 rounded-md px-3 py-2 cursor-pointer"
        >
            Save
        </button>
    </form>


</div>


