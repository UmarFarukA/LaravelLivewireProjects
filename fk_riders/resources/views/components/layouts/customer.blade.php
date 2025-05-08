<x-customerHeader />

    <x-customerSideBar />

    <!-- Main Content -->
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">

      <x-customerTopHeader />

      {{$slot}}

    </main>
  

<x-customerFooter />