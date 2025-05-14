<x-adminHeader />

<!-- Sidebar Navigation -->
<x-adminSideBar />

<!-- Main Content -->
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
  <!-- Desktop Header -->
  <x-adminTopHeader />

  <!-- Dashboard Content -->
    {{$slot}}
</main>


<x-adminFooter />
