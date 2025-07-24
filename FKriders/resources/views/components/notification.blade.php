<div>
    @session('success')
        <div x-data="{show: true}" x-show="show" x-init="setTimeout(() => {show = false}, 3000)"
            class="fixed top-5 right-5 bg-green-600 text-white text-md p-4 rounded-lg shadow-lg z-50" role="alert">
            <p>{{$value}}</p>
        </div>
    @endsession
</div>
