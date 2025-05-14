<!-- Payment Verification Content -->
<div class="p-6">
    <!-- Payment Stats -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
          <div class="p-3 rounded-full bg-yellow-100 text-yellow-500">
            <i class="fas fa-clock text-xl"></i>
          </div>
          <div class="ml-4">
            <p class="text-sm font-medium text-gray-500">Pending Payments</p>
            <p class="text-2xl font-semibold">28</p>
          </div>
        </div>
        <div class="mt-4 flex items-center text-sm">
          <span class="text-red-500 flex items-center">
            <i class="fas fa-arrow-up mr-1"></i> 5%
          </span>
          <span class="text-gray-500 ml-2">from last month</span>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
          <div class="p-3 rounded-full bg-green-100 text-green-500">
            <i class="fas fa-check-circle text-xl"></i>
          </div>
          <div class="ml-4">
            <p class="text-sm font-medium text-gray-500">Verified Payments</p>
            <p class="text-2xl font-semibold">156</p>
          </div>
        </div>
        <div class="mt-4 flex items-center text-sm">
          <span class="text-green-500 flex items-center">
            <i class="fas fa-arrow-up mr-1"></i> 12%
          </span>
          <span class="text-gray-500 ml-2">from last month</span>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
          <div class="p-3 rounded-full bg-red-100 text-red-500">
            <i class="fas fa-times-circle text-xl"></i>
          </div>
          <div class="ml-4">
            <p class="text-sm font-medium text-gray-500">Rejected Payments</p>
            <p class="text-2xl font-semibold">7</p>
          </div>
        </div>
        <div class="mt-4 flex items-center text-sm">
          <span class="text-green-500 flex items-center">
            <i class="fas fa-arrow-down mr-1"></i> 3%
          </span>
          <span class="text-gray-500 ml-2">from last month</span>
        </div>
      </div>
    </div>

    <!-- Pending Payments Table -->
    <div class="bg-white rounded-lg shadow">
      <div class="p-6 border-b flex flex-col md:flex-row md:items-center md:justify-between">
        <div>
          <h2 class="text-lg font-semibold">Pending Payments</h2>
          <p class="text-sm text-gray-500">Verify or reject customer payments</p>
        </div>
        <div class="mt-4 md:mt-0 flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-2">
          <div class="relative">
            <input type="text" placeholder="Search payments..." class="pl-8 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
            <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
          </div>
          <div class="flex space-x-2">
            <select class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
              <option value="">All Payment Types</option>
              <option value="full">Full Payment</option>
              <option value="installment">Installment</option>
            </select>
            <button class="px-4 py-2 bg-sky-500 text-white rounded-md hover:bg-sky-600 flex items-center">
              <i class="fas fa-filter mr-2"></i> Filter
            </button>
          </div>
        </div>
      </div>
      <div class="p-6 overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
          <thead>
            <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Payment Type</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="h-10 w-10 flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="https://placehold.co/60x60" alt="User">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">Jane Smith</div>
                    <div class="text-sm text-gray-500">ID: USR-002</div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Premium Tricycle X1</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-600">Installment</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₦75,000</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Today, 10:30 AM</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-600">Pending</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <div class="flex space-x-2">
                  <button class="px-3 py-1 text-xs rounded bg-sky-500 text-white hover:bg-sky-600">
                    <i class="fas fa-eye mr-1"></i> View
                  </button>
                  <button class="px-3 py-1 text-xs rounded bg-green-500 text-white hover:bg-green-600">
                    <i class="fas fa-check mr-1"></i> Verify
                  </button>
                  <button class="px-3 py-1 text-xs rounded bg-red-500 text-white hover:bg-red-600">
                    <i class="fas fa-times mr-1"></i> Reject
                  </button>
                </div>
              </td>
            </tr>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="h-10 w-10 flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="https://placehold.co/60x60" alt="User">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">Sarah Williams</div>
                    <div class="text-sm text-gray-500">ID: USR-008</div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Economy Tricycle E2</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-600">Installment</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₦75,000</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Today, 2:15 PM</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-600">Pending</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <div class="flex space-x-2">
                  <button class="px-3 py-1 text-xs rounded bg-sky-500 text-white hover:bg-sky-600">
                    <i class="fas fa-eye mr-1"></i> View
                  </button>
                  <button class="px-3 py-1 text-xs rounded bg-green-500 text-white hover:bg-green-600">
                    <i class="fas fa-check mr-1"></i> Verify
                  </button>
                  <button class="px-3 py-1 text-xs rounded bg-red-500 text-white hover:bg-red-600">
                    <i class="fas fa-times mr-1"></i> Reject
                  </button>
                </div>
              </td>
            </tr>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="h-10 w-10 flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="https://placehold.co/60x60" alt="User">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">David Brown</div>
                    <div class="text-sm text-gray-500">ID: USR-012</div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Deluxe Tricycle D3</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 text-xs rounded-full bg-purple-100 text-purple-600">Full Payment</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₦850,000</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Yesterday, 4:45 PM</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-600">Pending</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <div class="flex space-x-2">
                  <button class="px-3 py-1 text-xs rounded bg-sky-500 text-white hover:bg-sky-600">
                    <i class="fas fa-eye mr-1"></i> View
                  </button>
                  <button class="px-3 py-1 text-xs rounded bg-green-500 text-white hover:bg-green-600">
                    <i class="fas fa-check mr-1"></i> Verify
                  </button>
                  <button class="px-3 py-1 text-xs rounded bg-red-500 text-white hover:bg-red-600">
                    <i class="fas fa-times mr-1"></i> Reject
                  </button>
                </div>
              </td>
            </tr>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="h-10 w-10 flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="https://placehold.co/60x60" alt="User">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">Michael Johnson</div>
                    <div class="text-sm text-gray-500">ID: USR-003</div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Standard Tricycle S1</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-600">Installment</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₦65,000</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Yesterday, 11:20 AM</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-600">Pending</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <div class="flex space-x-2">
                  <button class="px-3 py-1 text-xs rounded bg-sky-500 text-white hover:bg-sky-600">
                    <i class="fas fa-eye mr-1"></i> View
                  </button>
                  <button class="px-3 py-1 text-xs rounded bg-green-500 text-white hover:bg-green-600">
                    <i class="fas fa-check mr-1"></i> Verify
                  </button>
                  <button class="px-3 py-1 text-xs rounded bg-red-500 text-white hover:bg-red-600">
                    <i class="fas fa-times mr-1"></i> Reject
                  </button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="px-6 py-4 border-t">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
          <div class="text-sm text-gray-500 mb-4 md:mb-0">
            Showing 1 to 4 of 28 entries
          </div>
          <div class="flex justify-center">
            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
              <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                <span class="sr-only">Previous</span>
                <i class="fas fa-chevron-left h-5 w-5"></i>
              </a>
              <a href="#" aria-current="page" class="z-10 bg-sky-50 border-sky-500 text-sky-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                1
              </a>
              <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                2
              </a>
              <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                3
              </a>
              <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
                ...
              </span>
              <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                7
              </a>
              <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                <span class="sr-only">Next</span>
                <i class="fas fa-chevron-right h-5 w-5"></i>
              </a>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
