@props([
    'caption' => '',
    'subcaption' => '',
    'steps' => false,
    'stepNumber' => 0
])

<div class="flex flex-col items-center space-y-2 rounded-lg border bg-white p-4 text-center">
    <div {{ $attributes->merge(["class"=>"flex flex-col h-12 w-12 items-center justify-center rounded-full bg-sky-100"]) }}>
        {{ $slot }}
    </div>
     @if ($steps)
        <div class="rounded-full bg-sky-500 px-2.5 py-0.5 text-xs font-semibold text-white">
            Step {{ $stepNumber }}
        </div>
    @endif
    <h3 class="text-xl font-bold">{{ $caption }}</h3>
    <p class="text-sm text-gray-500">
        {{ $subcaption }}
    </p>
</div>
