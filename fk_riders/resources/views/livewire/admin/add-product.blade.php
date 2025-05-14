<!-- Add Product Form -->
<div class="p-6">
    <div class="bg-white rounded-lg shadow">
      <div class="p-6 border-b">
        <h2 class="text-lg font-semibold">Product Information</h2>
        <p class="text-sm text-gray-500">Fill in the details of the new tricycle</p>
      </div>
      <div class="p-6">
        <form>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Basic Information -->
            <div class="space-y-4">
              <div>
                <label for="product-name" class="block text-sm font-medium text-gray-700 mb-1">Product Name</label>
                <input type="text" id="product-name" name="product-name" placeholder="e.g. Premium Tricycle X1" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
              </div>

              <div>
                <label for="product-id" class="block text-sm font-medium text-gray-700 mb-1">Product Model</label>
                <input type="text" id="product-id" name="product-id" placeholder="e.g. PRD-001" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
              </div>

              <div>
                <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Price (₦)</label>
                <input type="number" id="price" name="price" placeholder="e.g. 750000" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
              </div>

              <div>
                <label for="condition" class="block text-sm font-medium text-gray-700 mb-1">Condition</label>
                <select id="condition" name="condition" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                  <option value="">Select condition</option>
                  <option value="new">New</option>
                  <option value="used">Used</option>
                </select>
              </div>

              <div>
                <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                <select id="status" name="status" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                  <option value="">Select status</option>
                  <option value="in-stock">In Stock</option>
                  <option value="out-of-stock">Out of Stock</option>
                  <option value="coming-soon">Coming Soon</option>
                </select>
              </div>
            </div>

            <!-- Additional Information -->
            <div class="space-y-4">
              <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea id="description" name="description" rows="5" placeholder="Enter product description..." class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500"></textarea>
              </div>

              <div>
                <label for="features" class="block text-sm font-medium text-gray-700 mb-1">Key Features (comma separated)</label>
                <input type="text" id="features" name="features" placeholder="e.g. Powerful engine, Comfortable seat, Fuel efficient" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
              </div>

              <div>
                <label for="quantity" class="block text-sm font-medium text-gray-700 mb-1">Quantity Available</label>
                <input type="number" id="quantity" name="quantity" placeholder="e.g. 10" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
              </div>
            </div>
          </div>

          <!-- Product Images -->
          <div class="mt-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Product Images</label>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
              <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center">
                <div class="flex flex-col items-center justify-center h-32">
                  <i class="fas fa-plus text-gray-400 text-2xl mb-2"></i>
                  <p class="text-sm text-gray-500">Add Main Image</p>
                  <input type="file" class="hidden" id="main-image">
                  <button type="button" onclick="document.getElementById('main-image').click()" class="mt-2 px-3 py-1 text-xs bg-gray-200 rounded-md hover:bg-gray-300">Browse</button>
                </div>
              </div>

              {{-- <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center">
                <div class="flex flex-col items-center justify-center h-32">
                  <i class="fas fa-plus text-gray-400 text-2xl mb-2"></i>
                  <p class="text-sm text-gray-500">Add Image</p>
                  <input type="file" class="hidden" id="image-1">
                  <button type="button" onclick="document.getElementById('image-1').click()" class="mt-2 px-3 py-1 text-xs bg-gray-200 rounded-md hover:bg-gray-300">Browse</button>
                </div>
              </div>

              <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center">
                <div class="flex flex-col items-center justify-center h-32">
                  <i class="fas fa-plus text-gray-400 text-2xl mb-2"></i>
                  <p class="text-sm text-gray-500">Add Image</p>
                  <input type="file" class="hidden" id="image-2">
                  <button type="button" onclick="document.getElementById('image-2').click()" class="mt-2 px-3 py-1 text-xs bg-gray-200 rounded-md hover:bg-gray-300">Browse</button>
                </div>
              </div>

              <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center">
                <div class="flex flex-col items-center justify-center h-32">
                  <i class="fas fa-plus text-gray-400 text-2xl mb-2"></i>
                  <p class="text-sm text-gray-500">Add Image</p>
                  <input type="file" class="hidden" id="image-3">
                  <button type="button" onclick="document.getElementById('image-3').click()" class="mt-2 px-3 py-1 text-xs bg-gray-200 rounded-md hover:bg-gray-300">Browse</button>
                </div>
              </div> --}}
            </div>
            <p class="text-xs text-gray-500 mt-2">Upload images in JPG, PNG or GIF format. Maximum file size 5MB.</p>
          </div>

          <!-- Installment Options -->
          <div class="mt-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Installment Options</label>
            <div class="bg-gray-50 p-4 rounded-md">
              <div class="flex items-center mb-3">
                <input type="checkbox" id="enable-installment" name="enable-installment" class="h-4 w-4 text-sky-500 focus:ring-sky-400 border-gray-300 rounded">
                <label for="enable-installment" class="ml-2 block text-sm text-gray-700">Enable Installment Payment</label>
              </div>

              <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                  <label for="min-deposit" class="block text-sm font-medium text-gray-700 mb-1">Minimum Deposit (%)</label>
                  <input type="number" id="min-deposit" name="min-deposit" placeholder="e.g. 30" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                </div>

                <div>
                  <label for="max-months" class="block text-sm font-medium text-gray-700 mb-1">Maximum Months</label>
                  <select id="max-months" name="max-months" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                    <option value="">Select months</option>
                    <option value="3">3 months</option>
                    <option value="6">6 months</option>
                    <option value="9">9 months</option>
                    <option value="12">12 months</option>
                  </select>
                </div>
                <!-- Form Actions -->
                <div class="mt-6 flex justify-end space-x-3">
                    <button type="button" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">Cancel</button>
                    <button type="button" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-sky-500 hover:bg-sky-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">Save as Draft</button>
                    <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-sky-600 hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">Publish Product</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
