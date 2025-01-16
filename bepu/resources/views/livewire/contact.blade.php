<section id="about" class="">

    <h2 class="text-5xl text-emerald-800 text-center font-semibold pt-10 underline">Get in touch with BEPU</h2>
    <div class="grid md:grid-cols-2 grid-cols-1 md:w-3/4 mx-8 md:mx-auto pt-8 pb-6 md:pt-24 md:pb-28">
        <div class="bg-slate-50 px-8 py-10 mb-4">
            <h3 class="text-emerald-800 text-3xl text-center md:text-start font-bold pt-3 pb-4">
                We are available at:
            </h3>

            <div class="flex-col gap-4 space-y-4 pt-8">
                <x-address-item
                    icon="M7 6H5m2 3H5m2 3H5m2 3H5m2 3H5m11-1a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2M7 3h11a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1Zm8 7a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"
                    details="No 4 Emirs Palace road, Birnin Gwari." />
                <x-address-item
                    icon="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z"
                    details="Call us on: +234809000458" />
                <x-address-item
                    icon="M21 8v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8m18 0-8.029-4.46a2 2 0 0 0-1.942 0L3 8m18 0-9 6.5L3 8"
                    details="Send us a mail: bepu@info.org" />
            </div>

            <p class="hidden md:block py-10 text-emerald-800 text-xl font-bold">Alternative, send us a message &rArr;
            </p>
        </div>

        <form class="md:mx-10 mx-1 pt-4">

            <h2 class="hidden text-stone-800 font-bold pt-8 text-center text-2xl mb-3">Send Us Message</h2>

            <x-form-element>
                <x-form-label for="name">Name</x-form-label>
                <x-form-input id="name" />
            </x-form-element>

            <x-form-element>
                <x-form-label for="email">Email</x-form-label>
                <x-form-input id="email" type="email" />
            </x-form-element>

            <x-form-element>
                <x-form-label for="number">Phone Number</x-form-label>
                <x-form-input id="number" type="text" />
            </x-form-element>

            <x-form-element>
                <x-form-label for="message">Message</x-form-label>
                <x-form-textarea />
            </x-form-element>

            <x-form-element>
                <button class="w-full bg-emerald-800 text-emerald-50 px-3 py-2 hover:bg-emerald-700 rounded-md">
                    Send message
                </button>
            </x-form-element>

        </form>
    </div>
</section>
