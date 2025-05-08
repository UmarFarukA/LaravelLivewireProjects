<!-- Order Details Content -->
<div class="p-6">
    
    <!-- Order Status Card -->
    <div class="bg-white rounded-lg shadow mb-6">
      <div class="p-6 border-b">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
          <div>
            <h2 class="text-xl font-semibold">Order #ORD-002</h2>
            <p class="text-sm text-gray-500">Placed on March 10, 2023</p>
          </div>
          <div class="mt-2 md:mt-0">
            <span class="px-3 py-1 text-sm rounded-full bg-yellow-100 text-yellow-800">
              Active Installment
            </span>
          </div>
        </div>
      </div>
      <div class="p-6">
        <div class="flex flex-col md:flex-row">
          <!-- Product Image -->
          <div class="md:w-1/3 mb-4 md:mb-0 md:pr-6">
            <img src="https://placehold.co/600x400" alt="Deluxe Tricycle D3" class="w-full h-auto rounded-lg">
          </div>
          
          <!-- Product Details -->
          <div class="md:w-2/3">
            <h3 class="text-lg font-semibold mb-2">Deluxe Tricycle D3</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
              <div>
                <p class="text-sm text-gray-500">Model</p>
                <p class="font-medium">Deluxe D3 (2023)</p>
              </div>
              <div>
                <p class="text-sm text-gray-500">Color</p>
                <p class="font-medium">Red</p>
              </div>
              <div>
                <p class="text-sm text-gray-500">Engine</p>
                <p class="font-medium">150cc</p>
              </div>
              <div>
                <p class="text-sm text-gray-500">Condition</p>
                <p class="font-medium">New</p>
              </div>
              <div>
                <p class="text-sm text-gray-500">Warranty</p>
                <p class="font-medium">1 Year</p>
              </div>
              <div>
                <p class="text-sm text-gray-500">Serial Number</p>
                <p class="font-medium">D3-2023-78945</p>
              </div>
            </div>
            
            <div class="border-t pt-4 mb-6">
              <div class="flex justify-between mb-2">
                <p class="font-medium">Price</p>
                <p class="font-medium">₦850,000</p>
              </div>
              <div class="flex justify-between mb-2">
                <p class="font-medium">Payment Plan</p>
                <p class="font-medium">12-month installment</p>
              </div>
              <div class="flex justify-between mb-2">
                <p class="font-medium">Monthly Payment</p>
                <p class="font-medium">₦70,833</p>
              </div>
            </div>
            
            <div class="flex flex-col md:flex-row md:items-center gap-3">
              <a href="#" class="px-4 py-2 bg-sky-500 text-white rounded-md hover:bg-sky-600 text-center">
                Make Payment
              </a>
              <a href="#" class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50 text-center">
                Download Invoice
              </a>
              <a href="support-tickets.html" class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50 text-center">
                Contact Support
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Payment Progress -->
    <div class="bg-white rounded-lg shadow mb-6">
      <div class="p-6 border-b">
        <h2 class="text-lg font-semibold">Payment Progress</h2>
      </div>
      <div class="p-6">
        <div class="mb-6">
          <div class="flex items-center justify-between mb-2">
            <div>
              <p class="font-medium">Total Amount</p>
              <p class="text-sm text-gray-500">₦850,000</p>
            </div>
            <div>
              <p class="font-medium">Amount Paid</p>
              <p class="text-sm text-gray-500">₦425,000 (50%)</p>
            </div>
            <div>
              <p class="font-medium">Remaining</p>
              <p class="text-sm text-gray-500">₦425,000 (50%)</p>
            </div>
          </div>
          <div class="w-full bg-gray-200 rounded-full h-2.5 mt-4">
            <div class="bg-sky-500 h-2.5 rounded-full" style="width: 50%"></div>
          </div>
        </div>
        
        <div class="border rounded-lg overflow-hidden">
          <div class="bg-gray-50 p-4 border-b">
            <div class="flex justify-between items-center">
              <h3 class="font-medium">Payment Schedule</h3>
              <p class="text-sm text-gray-500">6 of 12 payments completed</p>
            </div>
          </div>
          
          <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Payment #</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Due Date</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Receipt</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">Payment 1</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mar 10, 2023</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₦70,833</td>
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
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">Payment 2</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Apr 10, 2023</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₦70,833</td>
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
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">Payment 3</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">May 10, 2023</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₦70,833</td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                      Paid
                    </span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                    <a href="#" class="text-sky-500 hover:text-sky-700">Download</a>
                  </td>
                </tr>
                <tr class="bg-sky-50">
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">Payment 7</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Sep 10, 2023</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₦70,833</td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                      Due Soon
                    </span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                    <button class="text-sky-500 hover:text-sky-700 font-medium">Pay Now</button>
                  </td>
                </tr>
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">Payment 8</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Oct 10, 2023</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₦70,833</td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                      Upcoming
                    </span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                    <span class="text-gray-400">Not Available</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>