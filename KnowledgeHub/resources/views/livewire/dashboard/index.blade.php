<div>
    <!-- Stats Section -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-3">
        <div class="bg-white shadow rounded p-4">
            <h2 class="text-gray-700">Users</h2>
            <p class="text-xl font-semibold">{{ $usersCount }}</p>
        </div>
        <div class="bg-white shadow rounded p-4">
            <h2 class="text-gray-700">Submissions</h2>
            <p class="text-xl font-semibold">{{ $submissionCount }}</p>
        </div>
        <div class="bg-white shadow rounded p-4">
            <h2 class="text-gray-700">Inquiry</h2>
            <p class="text-xl font-semibold">22</p>
        </div>
        <div class="bg-white shadow rounded p-4">
            <h2 class="text-gray-700">Messages</h2>
            <p class="text-xl font-semibold">78</p>
        </div>
    </div>

    <!-- Table Section -->
    <div class="bg-white shadow rounded p-6">
        <h2 class="text-gray-700 mb-4 font-semibold">Recent Transactions</h2>
        <table class="w-full border-collapse border border-gray-200 text-left">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-200 p-2">Date</th>
                    <th class="border border-gray-200 p-2">Customer</th>
                    <th class="border border-gray-200 p-2">Amount</th>
                    <th class="border border-gray-200 p-2">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-gray-200 p-2">2024-11-25</td>
                    <td class="border border-gray-200 p-2">John Doe</td>
                    <td class="border border-gray-200 p-2">$250</td>
                    <td class="border border-gray-200 p-2 text-green-600">Completed</td>
                </tr>
                <tr>
                    <td class="border border-gray-200 p-2">2024-11-24</td>
                    <td class="border border-gray-200 p-2">Jane Smith</td>
                    <td class="border border-gray-200 p-2">$180</td>
                    <td class="border border-gray-200 p-2 text-yellow-600">Pending</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
