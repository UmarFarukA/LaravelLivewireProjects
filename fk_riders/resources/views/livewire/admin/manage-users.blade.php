<!-- User Management Content -->
<div class="p-6">
    <!-- Action Buttons -->
    <div class="mb-6 flex flex-col sm:flex-row sm:items-center sm:justify-between">
      <div class="mb-4 sm:mb-0">
        <h2 class="text-xl font-semibold">Admin Users</h2>
        <p class="text-gray-500 text-sm">Manage system administrators and staff accounts</p>
      </div>
      <div class="flex flex-wrap gap-2">
        <button id="add-user-btn" class="bg-sky-500 hover:bg-sky-600 text-white px-4 py-2 rounded-md flex items-center">
          <i class="fas fa-user-plus mr-2"></i> Add New User
        </button>
        <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-md flex items-center">
          <i class="fas fa-user-lock mr-2"></i> Manage Roles
        </button>
      </div>
    </div>

    <!-- User Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
      <!-- Total Users -->
      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
          <div class="p-3 rounded-full bg-sky-100 text-sky-500">
            <i class="fas fa-users text-xl"></i>
          </div>
          <div class="ml-4">
            <p class="text-gray-500 text-sm">Total Users</p>
            <p class="text-2xl font-bold">12</p>
          </div>
        </div>
      </div>

      <!-- Administrators -->
      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
          <div class="p-3 rounded-full bg-purple-100 text-purple-500">
            <i class="fas fa-user-shield text-xl"></i>
          </div>
          <div class="ml-4">
            <p class="text-gray-500 text-sm">Administrators</p>
            <p class="text-2xl font-bold">3</p>
          </div>
        </div>
      </div>

      <!-- Staff -->
      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
          <div class="p-3 rounded-full bg-green-100 text-green-500">
            <i class="fas fa-user-tie text-xl"></i>
          </div>
          <div class="ml-4">
            <p class="text-gray-500 text-sm">Staff</p>
            <p class="text-2xl font-bold">9</p>
          </div>
        </div>
      </div>

      <!-- Active Now -->
      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
          <div class="p-3 rounded-full bg-blue-100 text-blue-500">
            <i class="fas fa-user-clock text-xl"></i>
          </div>
          <div class="ml-4">
            <p class="text-gray-500 text-sm">Active Now</p>
            <p class="text-2xl font-bold">5</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Users Table -->
    <div class="bg-white rounded-lg shadow mb-6">
      <div class="p-4 border-b flex justify-between items-center">
        <h3 class="font-semibold">System Users</h3>
        <div class="flex items-center">
          <div class="relative mr-2">
            <select class="appearance-none bg-white border rounded-md px-3 py-1 pr-8 focus:outline-none focus:ring-2 focus:ring-sky-500 text-sm">
              <option value="">All Roles</option>
              <option value="admin">Administrator</option>
              <option value="manager">Manager</option>
              <option value="staff">Staff</option>
            </select>
            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
              <i class="fas fa-chevron-down text-gray-400 text-xs"></i>
            </div>
          </div>
          <div class="relative">
            <select class="appearance-none bg-white border rounded-md px-3 py-1 pr-8 focus:outline-none focus:ring-2 focus:ring-sky-500 text-sm">
              <option value="">All Status</option>
              <option value="active">Active</option>
              <option value="inactive">Inactive</option>
            </select>
            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
              <i class="fas fa-chevron-down text-gray-400 text-xs"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Login</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <!-- User 1 -->
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="https://placehold.co/40x40" alt="User">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">John Doe</div>
                    <div class="text-xs text-gray-500">User ID: #001</div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">
                  Administrator
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">johndoe@example.com</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Today, 10:30 AM</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  Active
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <div class="flex space-x-2">
                  <button class="text-sky-500 hover:text-sky-700" title="Edit">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button class="text-yellow-500 hover:text-yellow-700" title="Reset Password">
                    <i class="fas fa-key"></i>
                  </button>
                  <button class="text-red-500 hover:text-red-700" title="Disable Account">
                    <i class="fas fa-user-slash"></i>
                  </button>
                </div>
              </td>
            </tr>

            <!-- User 2 -->
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="https://placehold.co/40x40" alt="User">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">Jane Smith</div>
                    <div class="text-xs text-gray-500">User ID: #002</div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                  Manager
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">janesmith@example.com</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Today, 09:15 AM</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  Active
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <div class="flex space-x-2">
                  <button class="text-sky-500 hover:text-sky-700" title="Edit">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button class="text-yellow-500 hover:text-yellow-700" title="Reset Password">
                    <i class="fas fa-key"></i>
                  </button>
                  <button class="text-red-500 hover:text-red-700" title="Disable Account">
                    <i class="fas fa-user-slash"></i>
                  </button>
                </div>
              </td>
            </tr>

            <!-- User 3 -->
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="https://placehold.co/40x40" alt="User">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">Michael Johnson</div>
                    <div class="text-xs text-gray-500">User ID: #003</div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">
                  Administrator
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">michael@example.com</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Yesterday, 16:45 PM</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  Active
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <div class="flex space-x-2">
                  <button class="text-sky-500 hover:text-sky-700" title="Edit">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button class="text-yellow-500 hover:text-yellow-700" title="Reset Password">
                    <i class="fas fa-key"></i>
                  </button>
                  <button class="text-red-500 hover:text-red-700" title="Disable Account">
                    <i class="fas fa-user-slash"></i>
                  </button>
                </div>
              </td>
            </tr>

            <!-- User 4 -->
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="https://placehold.co/40x40" alt="User">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">Sarah Williams</div>
                    <div class="text-xs text-gray-500">User ID: #004</div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  Staff
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">sarah@example.com</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Today, 11:20 AM</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  Active
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <div class="flex space-x-2">
                  <button class="text-sky-500 hover:text-sky-700" title="Edit">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button class="text-yellow-500 hover:text-yellow-700" title="Reset Password">
                    <i class="fas fa-key"></i>
                  </button>
                  <button class="text-red-500 hover:text-red-700" title="Disable Account">
                    <i class="fas fa-user-slash"></i>
                  </button>
                </div>
              </td>
            </tr>

            <!-- User 5 -->
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="https://placehold.co/40x40" alt="User">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">David Brown</div>
                    <div class="text-xs text-gray-500">User ID: #005</div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  Staff
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">david@example.com</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3 days ago</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                  Inactive
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <div class="flex space-x-2">
                  <button class="text-sky-500 hover:text-sky-700" title="Edit">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button class="text-yellow-500 hover:text-yellow-700" title="Reset Password">
                    <i class="fas fa-key"></i>
                  </button>
                  <button class="text-green-500 hover:text-green-700" title="Enable Account">
                    <i class="fas fa-user-check"></i>
                  </button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Pagination -->
      <div class="px-6 py-4 flex items-center justify-between border-t">
        <div class="flex-1 flex justify-between sm:hidden">
          <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
            Previous
          </a>
          <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
            Next
          </a>
        </div>
        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
          <div>
            <p class="text-sm text-gray-700">
              Showing <span class="font-medium">1</span> to <span class="font-medium">5</span> of <span class="font-medium">12</span> users
            </p>
          </div>
          <div>
            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
              <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                <span class="sr-only">Previous</span>
                <i class="fas fa-chevron-left"></i>
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
                8
              </a>
              <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                <span class="sr-only">Next</span>
                <i class="fas fa-chevron-right"></i>
              </a>
            </nav>
          </div>
        </div>
      </div>
    </div>

  </div>
