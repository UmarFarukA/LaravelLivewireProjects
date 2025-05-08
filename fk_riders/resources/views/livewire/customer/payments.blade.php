<!-- Payment Methods Content -->
<div class="p-6">
    <!-- Back Button -->
   

    <!-- Payment Methods Overview -->
    <div class="bg-white rounded-lg shadow mb-6">
      <div class="p-6 border-b flex justify-between items-center">
        <h2 class="text-lg font-semibold">Your Payment Methods</h2>
        <button class="px-4 py-2 bg-sky-500 text-white rounded-md hover:bg-sky-600">
          <i class="fas fa-plus mr-2"></i> Add New Method
        </button>
      </div>
      <div class="p-6">
        <!-- Saved Payment Methods -->
        <div class="space-y-4">
          <!-- Bank Account -->
          <div class="border rounded-lg p-4 flex flex-col md:flex-row md:items-center md:justify-between">
            <div class="flex items-center mb-3 md:mb-0">
              <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-500">
                <i class="fas fa-university text-xl"></i>
              </div>
              <div class="ml-4">
                <p class="font-medium">First Bank of Nigeria</p>
                <p class="text-sm text-gray-500">Account ending in 7890</p>
                <div class="flex items-center mt-1">
                  <span class="px-2 py-0.5 text-xs rounded-full bg-green-100 text-green-800">
                    Default
                  </span>
                </div>
              </div>
            </div>
            <div class="flex space-x-2">
              <button class="px-3 py-1 text-xs rounded border border-gray-300 hover:bg-gray-100">
                Edit
              </button>
              <button class="px-3 py-1 text-xs rounded border border-gray-300 hover:bg-gray-100">
                Remove
              </button>
            </div>
          </div>

          <!-- Credit Card -->
          <div class="border rounded-lg p-4 flex flex-col md:flex-row md:items-center md:justify-between">
            <div class="flex items-center mb-3 md:mb-0">
              <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center text-purple-500">
                <i class="fas fa-credit-card text-xl"></i>
              </div>
              <div class="ml-4">
                <p class="font-medium">Visa Card</p>
                <p class="text-sm text-gray-500">Card ending in 4321</p>
                <p class="text-xs text-gray-500">Expires: 05/25</p>
              </div>
            </div>
            <div class="flex space-x-2">
              <button class="px-3 py-1 text-xs rounded border border-gray-300 hover:bg-gray-100">
                Set as Default
              </button>
              <button class="px-3 py-1 text-xs rounded border border-gray-300 hover:bg-gray-100">
                Edit
              </button>
              <button class="px-3 py-1 text-xs rounded border border-gray-300 hover:bg-gray-100">
                Remove
              </button>
            </div>
          </div>

          <!-- Mobile Money -->
          <div class="border rounded-lg p-4 flex flex-col md:flex-row md:items-center md:justify-between">
            <div class="flex items-center mb-3 md:mb-0">
              <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center text-green-500">
                <i class="fas fa-mobile-alt text-xl"></i>
              </div>
              <div class="ml-4">
                <p class="font-medium">Mobile Money</p>
                <p class="text-sm text-gray-500">+234 123 456 7890</p>
              </div>
            </div>
            <div class="flex space-x-2">
              <button class="px-3 py-1 text-xs rounded border border-gray-300 hover:bg-gray-100">
                Set as Default
              </button>
              <button class="px-3 py-1 text-xs rounded border border-gray-300 hover:bg-gray-100">
                Edit
              </button>
              <button class="px-3 py-1 text-xs rounded border border-gray-300 hover:bg-gray-100">
                Remove
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Payment History -->
    <div class="bg-white rounded-lg shadow">
      <div class="p-6 border-b">
        <h2 class="text-lg font-semibold">Recent Payment History</h2>
      </div>
      <div class="p-6">
        <div class="overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Payment Method</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">May 10, 2023</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">First Bank of Nigeria</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Installment Payment - Deluxe Tricycle D3</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₦70,833</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    Successful
                  </span>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Apr 10, 2023</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Visa Card</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Installment Payment - Deluxe Tricycle D3</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₦70,833</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    Successful
                  </span>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Mar 10, 2023</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mobile Money</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Installment Payment - Deluxe Tricycle D3</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₦70,833</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    Successful
                  </span>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Jan 15, 2023</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">First Bank of Nigeria</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Full Payment - Premium Tricycle X1</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₦750,000</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    Successful
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>