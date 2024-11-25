{{-- Admin Header --}}
<x-adminHeader />

<!-- Dashboard Container -->
<div class="flex h-screen">

    <!-- Sidebar -->
    <x-adminSidebar />

    <!-- Overlay for Sidebar (Small Screens) -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-30 hidden"></div>

    <!-- Main Content -->
    <div class="flex flex-col flex-grow ml-0 md:ml-64">

        <!-- Header -->
        <x-adminTopHeader />

        <!-- Main Section -->
        <main class="flex-grow p-6 space-y-6 overflow-auto">

            {{ $slot }}

        </main>
    </div>
</div>

{{-- Admin Footer Section --}}
<x-adminFooter />
