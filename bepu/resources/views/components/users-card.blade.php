@props(['username', 'rank', 'path'])

<div class="flex flex-col justify-start">
    <img src="{{ asset($path) }}" alt="BEPU Chairman" class="rounded-md w-60 h-60 object-cover">
    <p class="text-stone-800 font-bold text-center">
        {{ $username }} <br />
        <span class="text-emerald-800">{{ $rank }}</span>
    </p>
</div>
