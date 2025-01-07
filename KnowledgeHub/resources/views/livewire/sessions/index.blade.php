<div>

    <div class="mb-3 flex item-center justify-between">
        <div class="flex justify-start gap-4">
            <select wire:model.live="limit" id="" class="px-2 py-1">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
            </select>
            <input type="text" wire:model.live.debounce.150ms='search'
                class="w-full py-2 px-3 rounded-md border-none bg-gray-200 focus:ring focus:ring-green-700"
                placeholder="Search through users">
        </div>

        <x-nav-link href="{{ route('sessions.create') }}"
            class="bg-green-700 text-green-100 px-3 py-2 rounded-md">Create New
            Session</x-nav-link>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Venue
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @if ($this->sessions)
                    @foreach ($this->sessions as $session)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $session->title }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $session->venue }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $session->created_at }}...
                            </td>
                            <td class="px-6 py-4">
                                @if ($session->status === 0)
                                    <span
                                        class="px-3 py-1 bg-purple-600 text-purple-100 text-center rounded-md">Completed</span>
                                @elseif($session->status === 1)
                                    <span
                                        class="px-3 py-1 bg-blue-600 text-green-100 text-center rounded-md">Upcoming</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <button id="dropdownMenuIconButton" data-dropdown-toggle="drop-{{ $session->id }}"
                                    data-dropdown-placement="left"
                                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                    type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 4 15">
                                        <path
                                            d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                                    </svg>
                                </button>

                                <!-- Dropdown menu -->
                                <div id="drop-{{ $session->id }}"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownMenuIconButton">
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                wire:confirm='Are you sure you want to delete this session?'
                                                wire:click='destroy({{ $session }})'
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Delete</a>
                                        </li>
                                    </ul>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif


            </tbody>
            <div class="my-4">
                {{-- {{ $this->sessions->links() }} --}}
            </div>
        </table>
        {{-- <div class="my-4">
            {{ $this->sessions->links() }}
        </div> --}}
    </div>

</div>
