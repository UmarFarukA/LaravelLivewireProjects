 <!-- Products List -->
 <div class="p-6">
    <div class="bg-white rounded-lg shadow">
      <div class="p-6 border-b flex flex-col md:flex-row md:items-center md:justify-between">
        <div>
          <h2 class="text-lg font-semibold">All Products</h2>
          <p class="text-sm text-gray-500">Manage your tricycle inventory</p>
        </div>
        <div class="mt-4 md:mt-0 flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-2">
          <div class="relative">
            <input type="text" placeholder="Search products..." class="pl-8 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
            <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
          </div>
          <div class="flex space-x-2">
            <select class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
              <option value="">All Conditions</option>
              <option value="new">New</option>
              <option value="used">Used</option>
            </select>
            <select class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
              <option value="">All Status</option>
              <option value="in-stock">In Stock</option>
              <option value="out-of-stock">Out of Stock</option>
            </select>
            <a href="add-product.html" class="px-4 py-2 bg-sky-500 text-white rounded-md hover:bg-sky-600 flex items-center">
              <i class="fas fa-plus mr-2"></i> Add New
            </a>
          </div>
        </div>
      </div>
      <div class="p-6 overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
          <thead>
            <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                <div class="flex items-center">
                  Product <i class="fas fa-sort ml-1"></i>
                </div>
              </th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                <div class="flex items-center">
                  Condition <i class="fas fa-sort ml-1"></i>
                </div>
              </th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                <div class="flex items-center">
                  Price <i class="fas fa-sort ml-1"></i>
                </div>
              </th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                <div class="flex items-center">
                  Status <i class="fas fa-sort ml-1"></i>
                </div>
              </th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                <div class="flex items-center">
                  Added Date <i class="fas fa-sort ml-1"></i>
                </div>
              </th>
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
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Jan 15, 2023</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <div class="flex space-x-2">
                  <button class="text-sky-500 hover:text-sky-700">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="text-yellow-500 hover:text-yellow-700">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button class="text-red-500 hover:text-red-700">
                    <i class="fas fa-trash"></i>
                  </button>
                </div>
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
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Feb 3, 2023</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <div class="flex space-x-2">
                  <button class="text-sky-500 hover:text-sky-700">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="text-yellow-500 hover:text-yellow-700">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button class="text-red-500 hover:text-red-700">
                    <i class="fas fa-trash"></i>
                  </button>
                </div>
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
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mar 12, 2023</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <div class="flex space-x-2">
                  <button class="text-sky-500 hover:text-sky-700">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="text-yellow-500 hover:text-yellow-700">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button class="text-red-500 hover:text-red-700">
                    <i class="fas fa-trash"></i>
                  </button>
                </div>
              </td>
            </tr>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="h-10 w-10 flex-shrink-0">
                    <img class="h-10 w-10 rounded-md" src="https://placehold.co/60x60" alt="Product">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">Standard Tricycle S1</div>
                    <div class="text-sm text-gray-500">ID: PRD-004</div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-600">New</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₦650,000</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-600">In Stock</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Apr 5, 2023</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <div class="flex space-x-2">
                  <button class="text-sky-500 hover:text-sky-700">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="text-yellow-500 hover:text-yellow-700">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button class="text-red-500 hover:text-red-700">
                    <i class="fas fa-trash"></i>
                  </button>
                </div>
              </td>
            </tr>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="h-10 w-10 flex-shrink-0">
                    <img class="h-10 w-10 rounded-md" src="https://placehold.co/60x60" alt="Product">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">Economy Tricycle E3</div>
                    <div class="text-sm text-gray-500">ID: PRD-005</div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-600">Used</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₦420,000</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-600">In Stock</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">May 18, 2023</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <div class="flex space-x-2">
                  <button class="text-sky-500 hover:text-sky-700">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="text-yellow-500 hover:text-yellow-700">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button class="text-red-500 hover:text-red-700">
                    <i class="fas fa-trash"></i>
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
            Showing 1 to 5 of 24 entries
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
                5
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
