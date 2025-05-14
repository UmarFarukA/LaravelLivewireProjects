<div class="p-6">
    <!-- Stats Widgets -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
      <!-- Total Tricycles -->
      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
          <div class="p-3 rounded-full bg-sky-100 text-sky-500">
            <i class="fas fa-motorcycle text-xl"></i>
          </div>
          <div class="ml-4">
            <p class="text-sm font-medium text-gray-500">Total Tricycles</p>
            <p class="text-2xl font-semibold">124</p>
          </div>
        </div>
        <div class="mt-4 flex items-center text-sm">
          <span class="text-green-500 flex items-center">
            <i class="fas fa-arrow-up mr-1"></i> 12%
          </span>
          <span class="text-gray-500 ml-2">from last month</span>
        </div>
      </div>

      <!-- Registered Customers -->
      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
          <div class="p-3 rounded-full bg-green-100 text-green-500">
            <i class="fas fa-users text-xl"></i>
          </div>
          <div class="ml-4">
            <p class="text-sm font-medium text-gray-500">Registered Customers</p>
            <p class="text-2xl font-semibold">842</p>
          </div>
        </div>
        <div class="mt-4 flex items-center text-sm">
          <span class="text-green-500 flex items-center">
            <i class="fas fa-arrow-up mr-1"></i> 18%
          </span>
          <span class="text-gray-500 ml-2">from last month</span>
        </div>
      </div>

      <!-- Pending Payments -->
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

      <!-- Verified Payments -->
      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
          <div class="p-3 rounded-full bg-purple-100 text-purple-500">
            <i class="fas fa-check-circle text-xl"></i>
          </div>
          <div class="ml-4">
            <p class="text-sm font-medium text-gray-500">Verified Payments</p>
            <p class="text-2xl font-semibold">₦12.4M</p>
          </div>
        </div>
        <div class="mt-4 flex items-center text-sm">
          <span class="text-green-500 flex items-center">
            <i class="fas fa-arrow-up mr-1"></i> 22%
          </span>
          <span class="text-gray-500 ml-2">from last month</span>
        </div>
      </div>
    </div>

    <!-- Revenue Chart -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
      <div class="flex items-center justify-between mb-4">
        <h2 class="text-lg font-semibold">Revenue This Month</h2>
        <div class="flex space-x-2">
          <button class="px-3 py-1 text-xs rounded border border-gray-300 hover:bg-gray-100">Day</button>
          <button class="px-3 py-1 text-xs rounded border border-gray-300 bg-sky-500 text-white">Week</button>
          <button class="px-3 py-1 text-xs rounded border border-gray-300 hover:bg-gray-100">Month</button>
          <button class="px-3 py-1 text-xs rounded border border-gray-300 hover:bg-gray-100">Year</button>
        </div>
      </div>
      <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center">
        <!-- This would be a chart in a real application -->
        <div class="text-center">
          <i class="fas fa-chart-line text-4xl text-gray-300 mb-2"></i>
          <p class="text-gray-500">Revenue Chart Placeholder</p>
        </div>
      </div>
    </div>

    <!-- Recent Activity -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
      <!-- Latest Payments -->
      <div class="bg-white rounded-lg shadow">
        <div class="p-6 border-b">
          <h2 class="text-lg font-semibold">Latest Payments</h2>
        </div>
        <div class="p-6">
          <ul class="divide-y">
            <li class="py-3 flex items-center">
              <div class="h-10 w-10 rounded-full bg-sky-100 flex items-center justify-center text-sky-500">
                <i class="fas fa-credit-card"></i>
              </div>
              <div class="ml-4 flex-1">
                <p class="text-sm font-medium">John Doe paid ₦450,000</p>
                <p class="text-xs text-gray-500">Economy Tricycle E2 • 2 hours ago</p>
              </div>
              <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-600">Verified</span>
            </li>
            <li class="py-3 flex items-center">
              <div class="h-10 w-10 rounded-full bg-sky-100 flex items-center justify-center text-sky-500">
                <i class="fas fa-credit-card"></i>
              </div>
              <div class="ml-4 flex-1">
                <p class="text-sm font-medium">Jane Smith paid ₦75,000</p>
                <p class="text-xs text-gray-500">Installment • 5 hours ago</p>
              </div>
              <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-600">Pending</span>
            </li>
            <li class="py-3 flex items-center">
              <div class="h-10 w-10 rounded-full bg-sky-100 flex items-center justify-center text-sky-500">
                <i class="fas fa-credit-card"></i>
              </div>
              <div class="ml-4 flex-1">
                <p class="text-sm font-medium">Michael Johnson paid ₦850,000</p>
                <p class="text-xs text-gray-500">Deluxe Tricycle D3 • 1 day ago</p>
              </div>
              <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-600">Verified</span>
            </li>
            <li class="py-3 flex items-center">
              <div class="h-10 w-10 rounded-full bg-sky-100 flex items-center justify-center text-sky-500">
                <i class="fas fa-credit-card"></i>
              </div>
              <div class="ml-4 flex-1">
                <p class="text-sm font-medium">Sarah Williams paid ₦75,000</p>
                <p class="text-xs text-gray-500">Installment • 1 day ago</p>
              </div>
              <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-600">Pending</span>
            </li>
          </ul>
          <div class="mt-4 text-center">
            <a href="#" class="text-sm text-sky-500 hover:underline">View all payments</a>
          </div>
        </div>
      </div>

      <!-- Recently Added Products -->
      <div class="bg-white rounded-lg shadow">
        <div class="p-6 border-b">
          <h2 class="text-lg font-semibold">Recently Added Products</h2>
        </div>
        <div class="p-6">
          <ul class="divide-y">
            <li class="py-3 flex items-center">
              <img src="https://placehold.co/60x60" alt="Product" class="h-12 w-12 rounded object-cover">
              <div class="ml-4 flex-1">
                <p class="text-sm font-medium">Premium Tricycle X2</p>
                <p class="text-xs text-gray-500">Added today • ₦780,000</p>
              </div>
              <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-600">New</span>
            </li>
            <li class="py-3 flex items-center">
              <img src="https://placehold.co/60x60" alt="Product" class="h-12 w-12 rounded object-cover">
              <div class="ml-4 flex-1">
                <p class="text-sm font-medium">Economy Tricycle E3</p>
                <p class="text-xs text-gray-500">Added 2 days ago • ₦420,000</p>
              </div>
              <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-600">Used</span>
            </li>
            <li class="py-3 flex items-center">
              <img src="https://placehold.co/60x60" alt="Product" class="h-12 w-12 rounded object-cover">
              <div class="ml-4 flex-1">
                <p class="text-sm font-medium">Deluxe Tricycle D4</p>
                <p class="text-xs text-gray-500">Added 3 days ago • ₦890,000</p>
              </div>
              <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-600">New</span>
            </li>
            <li class="py-3 flex items-center">
              <img src="https://placehold.co/60x60" alt="Product" class="h-12 w-12 rounded object-cover">
              <div class="ml-4 flex-1">
                <p class="text-sm font-medium">Standard Tricycle S1</p>
                <p class="text-xs text-gray-500">Added 5 days ago • ₦650,000</p>
              </div>
              <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-600">New</span>
            </li>
          </ul>
          <div class="mt-4 text-center">
            <a href="#" class="text-sm text-sky-500 hover:underline">View all products</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Manage Products Section (Hidden by default, would be shown with JavaScript) -->
    <div id="manage-products-section" class="hidden mt-6">
      <div class="bg-white rounded-lg shadow">
        <div class="p-6 border-b flex justify-between items-center">
          <h2 class="text-lg font-semibold">Manage Products</h2>
          <button class="px-4 py-2 bg-sky-500 text-white rounded-md hover:bg-sky-600">
            <i class="fas fa-plus mr-2"></i> Add New Product
          </button>
        </div>
        <div class="p-6 overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200">
            <thead>
              <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Condition</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="h-10 w-10 flex-shrink-0">
                      <img class="h-10 w-10 rounded-md" src="https://placehold.co/60x60" alt="Product">
                    </div>
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">Premium Tricycle X1</div>
                      <div class="text-sm text-gray-500">ID: PRD-001</div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-600">New</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₦750,000</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-600">In Stock</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                  <a href="#" class="text-sky-500 hover:text-sky-700 mr-3">Edit</a>
                  <a href="#" class="text-red-500 hover:text-red-700">Delete</a>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="h-10 w-10 flex-shrink-0">
                      <img class="h-10 w-10 rounded-md" src="https://placehold.co/60x60" alt="Product">
                    </div>
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">Economy Tricycle E2</div>
                      <div class="text-sm text-gray-500">ID: PRD-002</div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-600">Used</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₦450,000</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-600">In Stock</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                  <a href="#" class="text-sky-500 hover:text-sky-700 mr-3">Edit</a>
                  <a href="#" class="text-red-500 hover:text-red-700">Delete</a>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="h-10 w-10 flex-shrink-0">
                      <img class="h-10 w-10 rounded-md" src="https://placehold.co/60x60" alt="Product">
                    </div>
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">Deluxe Tricycle D3</div>
                      <div class="text-sm text-gray-500">ID: PRD-003</div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-600">New</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₦850,000</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 py-1 text-xs rounded-full bg-red-100 text-red-600">Out of Stock</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                  <a href="#" class="text-sky-500 hover:text-sky-700 mr-3">Edit</a>
                  <a href="#" class="text-red-500 hover:text-red-700">Delete</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="px-6 py-4 border-t">
          <div class="flex items-center justify-between">
            <div class="text-sm text-gray-500">
              Showing 1 to 3 of 24 entries
            </div>
            <div class="flex space-x-2">
              <button class="px-3 py-1 rounded border border-gray-300 bg-gray-100 text-gray-500">Previous</button>
              <button class="px-3 py-1 rounded border border-gray-300 bg-sky-500 text-white">1</button>
              <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100">2</button>
              <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100">3</button>
              <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100">Next</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Manage Users Section (Hidden by default) -->
    <div id="manage-users-section" class="hidden mt-6">
      <div class="bg-white rounded-lg shadow">
        <div class="p-6 border-b">
          <h2 class="text-lg font-semibold">Manage Users</h2>
        </div>
        <div class="p-6 overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200">
            <thead>
              <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Purchases</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Joined Date</th>
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
                      <div class="text-sm font-medium text-gray-900">John Doe</div>
                      <div class="text-sm text-gray-500">ID: USR-001</div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">johndoe@example.com</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Jan 15, 2023</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-600">Active</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                  <a href="#" class="text-sky-500 hover:text-sky-700 mr-3">View</a>
                  <a href="#" class="text-red-500 hover:text-red-700">Ban</a>
                </td>
              </tr>
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
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">janesmith@example.com</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">1</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Feb 22, 2023</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-600">Active</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                  <a href="#" class="text-sky-500 hover:text-sky-700 mr-3">View</a>
                  <a href="#" class="text-red-500 hover:text-red-700">Ban</a>
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
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">michael@example.com</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mar 10, 2023</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-600">Active</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                  <a href="#" class="text-sky-500 hover:text-sky-700 mr-3">View</a>
                  <a href="#" class="text-red-500 hover:text-red-700">Ban</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="px-6 py-4 border-t">
          <div class="flex items-center justify-between">
            <div class="text-sm text-gray-500">
              Showing 1 to 3 of 18 entries
            </div>
            <div class="flex space-x-2">
              <button class="px-3 py-1 rounded border border-gray-300 bg-gray-100 text-gray-500">Previous</button>
              <button class="px-3 py-1 rounded border border-gray-300 bg-sky-500 text-white">1</button>
              <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100">2</button>
              <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100">3</button>
              <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100">Next</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Payment Verification Section (Hidden by default) -->
    <div id="payment-verification-section" class="hidden mt-6">
      <div class="bg-white rounded-lg shadow">
        <div class="p-6 border-b">
          <h2 class="text-lg font-semibold">Payment Verification</h2>
        </div>
        <div class="p-6 overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200">
            <thead>
              <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product</th>
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
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₦75,000 (Installment)</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Today, 10:30 AM</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-600">Pending</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                  <button class="px-3 py-1 text-xs rounded bg-green-500 text-white hover:bg-green-600 mr-2">Verify</button>
                  <button class="px-3 py-1 text-xs rounded bg-red-500 text-white hover:bg-red-600">Reject</button>
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
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₦75,000 (Installment)</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Today, 2:15 PM</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-600">Pending</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                  <button class="px-3 py-1 text-xs rounded bg-green-500 text-white hover:bg-green-600 mr-2">Verify</button>
                  <button class="px-3 py-1 text-xs rounded bg-red-500 text-white hover:bg-red-600">Reject</button>
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
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₦850,000 (Full Payment)</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Yesterday, 4:45 PM</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-600">Pending</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                  <button class="px-3 py-1 text-xs rounded bg-green-500 text-white hover:bg-green-600 mr-2">Verify</button>
                  <button class="px-3 py-1 text-xs rounded bg-red-500 text-white hover:bg-red-600">Reject</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Analytics Section (Hidden by default) -->
    <div id="analytics-section" class="hidden mt-6">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <!-- Sales Over Time Chart -->
        <div class="bg-white rounded-lg shadow p-6">
          <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-semibold">Sales Over Time</h2>
            <div class="flex space-x-2">
              <button class="px-3 py-1 text-xs rounded border border-gray-300 hover:bg-gray-100">Week</button>
              <button class="px-3 py-1 text-xs rounded border border-gray-300 bg-sky-500 text-white">Month</button>
              <button class="px-3 py-1 text-xs rounded border border-gray-300 hover:bg-gray-100">Year</button>
            </div>
          </div>
          <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center">
            <!-- This would be a chart in a real application -->
            <div class="text-center">
              <i class="fas fa-chart-line text-4xl text-gray-300 mb-2"></i>
              <p class="text-gray-500">Sales Chart Placeholder</p>
            </div>
          </div>
        </div>

        <!-- Popular Products Chart -->
        <div class="bg-white rounded-lg shadow p-6">
          <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-semibold">Popular Products</h2>
            <div class="flex space-x-2">
              <button class="px-3 py-1 text-xs rounded border border-gray-300 hover:bg-gray-100">Week</button>
              <button class="px-3 py-1 text-xs rounded border border-gray-300 bg-sky-500 text-white">Month</button>
              <button class="px-3 py-1 text-xs rounded border border-gray-300 hover:bg-gray-100">Year</button>
            </div>
          </div>
          <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center">
            <!-- This would be a chart in a real application -->
            <div class="text-center">
              <i class="fas fa-chart-pie text-4xl text-gray-300 mb-2"></i>
              <p class="text-gray-500">Products Chart Placeholder</p>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between mb-4">
          <h2 class="text-lg font-semibold">Sales Report</h2>
          <div class="flex space-x-2">
            <button class="px-3 py-1 text-xs rounded border border-gray-300 hover:bg-gray-100">
              <i class="fas fa-file-csv mr-1"></i> Export CSV
            </button>
            <button class="px-3 py-1 text-xs rounded border border-gray-300 hover:bg-gray-100">
              <i class="fas fa-file-pdf mr-1"></i> Export PDF
            </button>
          </div>
        </div>
        <div class="overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200">
            <thead>
              <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Units Sold</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Revenue</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Growth</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Premium Tricycle X1</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">12</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₦9,000,000</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <span class="text-green-500 flex items-center mr-2">
                      <i class="fas fa-arrow-up mr-1"></i> 15%
                    </span>
                    <div class="w-16 bg-gray-200 rounded-full h-2">
                      <div class="bg-green-500 h-2 rounded-full" style="width: 75%"></div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Economy Tricycle E2</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">18</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₦8,100,000</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <span class="text-green-500 flex items-center mr-2">
                      <i class="fas fa-arrow-up mr-1"></i> 22%
                    </span>
                    <div class="w-16 bg-gray-200 rounded-full h-2">
                      <div class="bg-green-500 h-2 rounded-full" style="width: 85%"></div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Deluxe Tricycle D3</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">8</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₦6,800,000</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <span class="text-red-500 flex items-center mr-2">
                      <i class="fas fa-arrow-down mr-1"></i> 5%
                    </span>
                    <div class="w-16 bg-gray-200 rounded-full h-2">
                      <div class="bg-red-500 h-2 rounded-full" style="width: 45%"></div>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
