<x-app>

    <x-slot:sections>
    </x-slot:sections>

    <x-job-wrapper :jobs="$jobs" />

    <x-slot:footer>
        <div class="flex justify-between align-middle">
            {{ $jobs->links() }}
        </div>
    </x-slot:footer>
</x-app>
