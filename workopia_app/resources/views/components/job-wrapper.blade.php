<section>
    <div class="container mx-auto p-4 mt-4">

        @if (session('success'))
            <x-message message_type="success">
                {{ session('success') }}
            </x-message>
        @endif

        @if (session('error'))
            <x-message message_type="success">
                {{ session('error') }}
            </x-message>
        @endif

        <div class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3">Recent Jobs</div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">

            @foreach ($jobs as $job)
                <x-job-card :job="$job" />
            @endforeach
        </div>
        <a href="#" class="block text-xl text-center">
            <i class="fa fa-arrow-alt-circle-right"></i>
            Show All Jobs
        </a>
</section>
