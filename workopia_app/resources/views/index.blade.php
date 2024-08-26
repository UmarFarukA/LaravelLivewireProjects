<x-app>

    <x-slot:sections>
        <x-searchbar />
    </x-slot:sections>

    <x-banner />

    <x-job-wrapper :jobs="$jobs" />

    <x-slot:footer>
        <x-footer />
    </x-slot:footer>
</x-app>
