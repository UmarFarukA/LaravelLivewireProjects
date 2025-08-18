
@props([
    'plan' => "",
    'caption' => "",
    'amount' => "0",
    "buttonText" => "",
])


<div {{ $attributes->merge(["class"=>"bg-white rounded-lg shadow-lg p-8 border  hover:shadow-xl transition-shadow"]) }}>

    <div class="text-center">
        <h3 class="text-2xl font-semibold text-gray-900 mb-2">{{ $plan }}</h3>
        <p class="text-gray-500 mb-6">{{ $caption }}</p>
        <div class="mb-8">
            <span class="text-4xl font-bold text-gray-900">{{ $amount }}</span>
        </div>
    </div>

    <ul class="space-y-4 mb-8">

        {{ $slot }}
    </ul>

    <button
        class="w-full bg-sky-500 text-white py-3 px-6 rounded-lg font-semibold hover:bg-sky-600 transition-colors">
        {{ $buttonText }}
    </button>
</div>
