<x-layouts.admin.sidebar :title="$title ?? null">
    <flux:main>
        {{ $slot }}
    </flux:main>
     <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</x-layouts.admin.sidebar>
