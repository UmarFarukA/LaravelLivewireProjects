<!-- Dashboard Content -->
<div class="p-6">
    <!-- Welcome Banner -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
      <h1 class="text-2xl font-bold text-gray-800">Welcome back, John Doe!</h1>
      <p class="text-gray-600 mt-1">Here's an overview of your tricycle purchases and payments.</p>
    </div>

    <!-- Stats Widgets -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
      <!-- Tricycles Bought -->
      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
          <div class="p-3 rounded-full bg-sky-100 text-sky-500">
            <i class="fas fa-motorcycle text-xl"></i>
          </div>
          <div class="ml-4">
            <p class="text-sm font-medium text-gray-500">Tricycles Bought</p>
            <p class="text-2xl font-semibold">2</p>
          </div>
        </div>
      </div>

      <!-- Active Installments -->
      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
          <div class="p-3 rounded-full bg-yellow-100 text-yellow-500">
            <i class="fas fa-credit-card text-xl"></i>
          </div>
          <div class="ml-4">
            <p class="text-sm font-medium text-gray-500">Active Installments</p>
            <p class="text-2xl font-semibold">1</p>
          </div>
        </div>
      </div>

      <!-- Fully Paid -->
      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
          <div class="p-3 rounded-full bg-green-100 text-green-500">
            <i class="fas fa-check-circle text-xl"></i>
          </div>
          <div class="ml-4">
            <p class="text-sm font-medium text-gray-500">Fully Paid</p>
            <p class="text-2xl font-semibold">1</p>
          </div>
        </div>
      </div>

      <!-- Next Payment Due -->
      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
          <div class="p-3 rounded-full bg-red-100 text-red-500">
            <i class="fas fa-calendar-alt text-xl"></i>
          </div>
          <div class="ml-4">
            <p class="text-sm font-medium text-gray-500">Next Payment Due</p>
            <p class="text-lg font-semibold">May 15, 2023</p>
          </div>
        </div>
      </div>
    </div>

    <!-- My Orders / Purchases -->
    <div class="bg-white rounded-lg shadow mb-6">
      <div class="p-6 border-b flex justify-between items-center">
        <h2 class="text-lg font-semibold">My Orders / Purchases</h2>
        <button class="px-3 py-1 text-xs rounded border border-gray-300 hover:bg-gray-100">
          View All
        </button>
      </div>
      <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Purchase Date</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount Paid</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <!-- Order 1 -->
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-md object-cover" src="https://placehold.co/60x60" alt="Product">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">Premium Tricycle X1</div>
                    <div class="text-sm text-gray-500">ID: ORD-001</div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">Jan 15, 2023</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">₦750,000</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  Fully Paid
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <a href="#" class="text-sky-500 hover:text-sky-700">View Details</a>
              </td>
            </tr>
            <!-- Order 2 -->
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-md object-cover" src="https://placehold.co/60x60" alt="Product">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">Deluxe Tricycle D3</div>
                    <div class="text-sm text-gray-500">ID: ORD-002</div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">Mar 10, 2023</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">₦425,000 / ₦850,000</div>
                <div class="text-xs text-gray-500">50% paid</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                  Active Installment
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <a href="#" class="text-sky-500 hover:text-sky-700">View Details</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Installment Payments -->
    <div class="bg-white rounded-lg shadow mb-6">
      <div class="p-6 border-b flex justify-between items-center">
        <h2 class="text-lg font-semibold">Installment Payments</h2>
        <button class="px-3 py-1 text-xs rounded border border-gray-300 hover:bg-gray-100">
          Payment History
        </button>
      </div>
      <div class="p-6">
        <div class="border rounded-lg overflow-hidden">
          <!-- Installment Header -->
          <div class="bg-gray-50 p-4 border-b">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
              <div>
                <h3 class="text-lg font-medium text-gray-900">Deluxe Tricycle D3</h3>
                <p class="text-sm text-gray-500">12-month installment plan</p>
              </div>
              <div class="mt-2 md:mt-0">
                <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800">
                  Active
                </span>
              </div>
            </div>
          </div>
          
          <!-- Installment Details -->
          <div class="p-4 border-b">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
              <div>
                <p class="text-sm text-gray-500">Total Cost</p>
                <p class="text-lg font-semibold">₦850,000</p>
              </div>
              <div>
                <p class="text-sm text-gray-500">Amount Paid</p>
                <p class="text-lg font-semibold">₦425,000</p>
              </div>
              <div>
                <p class="text-sm text-gray-500">Remaining</p>
                <p class="text-lg font-semibold">₦425,000</p>
              </div>
            </div>
          </div>
          
          <!-- Payment Progress -->
          <div class="p-4 border-b">
            <div class="flex items-center justify-between mb-2">
              <p class="text-sm font-medium text-gray-700">Payment Progress</p>
              <p class="text-sm font-medium text-gray-700">50%</p>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2.5">
              <div class="bg-sky-500 h-2.5 rounded-full" style="width: 50%"></div>
            </div>
          </div>
          
          <!-- Next Payment -->
          <div class="p-4">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
              <div>
                <p class="text-sm text-gray-500">Next Payment Due</p>
                <p class="text-lg font-semibold">May 15, 2023</p>
                <p class="text-sm text-gray-500">₦70,833 (Installment 7 of 12)</p>
              </div>
              <div class="mt-4 md:mt-0">
                <button class="px-4 py-2 bg-sky-500 text-white rounded-md hover:bg-sky-600">
                  Make Payment
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Recent Payment History -->
    {{-- <div class="bg-white rounded-lg shadow mb-6">
      <div class="p-6 border-b">
        <h2 class="text-lg font-semibold">Recent Payment History</h2>
      </div>
      <div class="p-6">
        <div class="overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Receipt</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Apr 15, 2023</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Deluxe Tricycle D3</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₦70,833</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    Paid
                  </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                  <a href="#" class="text-sky-500 hover:text-sky-700">Download</a>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Mar 15, 2023</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Deluxe Tricycle D3</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₦70,833</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    Paid
                  </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                  <a href="#" class="text-sky-500 hover:text-sky-700">Download</a>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Feb 15, 2023</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Deluxe Tricycle D3</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₦70,833</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    Paid
                  </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                  <a href="#" class="text-sky-500 hover:text-sky-700">Download</a>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Jan 15, 2023</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Premium Tricycle X1</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₦750,000</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    Paid
                  </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                  <a href="#" class="text-sky-500 hover:text-sky-700">Download</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div> --}}

    <!-- Profile Settings Section (Hidden by default, would be shown with JavaScript) -->
    <div id="profile-settings-section" class="hidden mt-6">
      <div class="bg-white rounded-lg shadow">
        <div class="p-6 border-b">
          <h2 class="text-lg font-semibold">Profile Settings</h2>
        </div>
        <div class="p-6">
          <form>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <!-- Personal Information -->
              <div>
                <h3 class="text-md font-medium text-gray-700 mb-4">Personal Information</h3>
                <div class="space-y-4">
                  <div>
                    <label for="fullName" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" id="fullName" name="fullName" value="John Doe" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm p-2 border">
                  </div>
                  <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" id="email" name="email" value="johndoe@example.com" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm p-2 border">
                  </div>
                  <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="tel" id="phone" name="phone" value="+234 123 456 7890" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm p-2 border">
                  </div>
                  <div>
                    <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                    <textarea id="address" name="address" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm p-2 border">123 Main Street, Lagos, Nigeria</textarea>
                  </div>
                </div>
              </div>

              <!-- Change Password -->
              <div>
                <h3 class="text-md font-medium text-gray-700 mb-4">Change Password</h3>
                <div class="space-y-4">
                  <div>
                    <label for="currentPassword" class="block text-sm font-medium text-gray-700">Current Password</label>
                    <input type="password" id="currentPassword" name="currentPassword" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm p-2 border">
                  </div>
                  <div>
                    <label for="newPassword" class="block text-sm font-medium text-gray-700">New Password</label>
                    <input type="password" id="newPassword" name="newPassword" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm p-2 border">
                  </div>
                  <div>
                    <label for="confirmPassword" class="block text-sm font-medium text-gray-700">Confirm New Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm p-2 border">
                  </div>
                  <div class="pt-5">
                    <p class="text-sm text-gray-500">Password must be at least 8 characters and include a number and a special character.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="mt-6 flex justify-end">
              <button type="button" class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500 mr-3">
                Cancel
              </button>
              <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-sky-500 hover:bg-sky-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                Save Changes
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>