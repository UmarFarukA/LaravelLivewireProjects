<!-- Profile Settings Content -->
<div class="p-6">

    <!-- Profile Overview -->
    <div class="bg-white rounded-lg shadow mb-6">
      <div class="p-6 border-b">
        <h2 class="text-lg font-semibold">Profile Overview</h2>
      </div>
      <div class="p-6">
        <div class="flex flex-col md:flex-row items-start">
          <div class="md:w-1/4 flex flex-col items-center mb-6 md:mb-0">
            <div class="relative">
              <img src="https://placehold.co/150x150" alt="Profile Picture" class="h-32 w-32 rounded-full object-cover border-4 border-white shadow">
              <button class="absolute bottom-0 right-0 bg-sky-500 text-white rounded-full p-2 shadow-md hover:bg-sky-600">
                <i class="fas fa-camera"></i>
              </button>
            </div>
            <h3 class="mt-4 text-lg font-medium">John Doe</h3>
            <p class="text-gray-500">Customer since Jan 2023</p>
            <div class="mt-4 flex space-x-2">
              <span class="px-2 py-1 bg-sky-100 text-sky-800 text-xs rounded-full">
                Verified Customer
              </span>
            </div>
          </div>
          <div class="md:w-3/4 md:pl-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                <h4 class="text-sm font-medium text-gray-500 mb-1">Full Name</h4>
                <p class="font-medium">John Doe</p>
              </div>
              <div>
                <h4 class="text-sm font-medium text-gray-500 mb-1">Email Address</h4>
                <p class="font-medium">johndoe@example.com</p>
              </div>
              <div>
                <h4 class="text-sm font-medium text-gray-500 mb-1">Phone Number</h4>
                <p class="font-medium">+234 123 456 7890</p>
              </div>
              <div>
                <h4 class="text-sm font-medium text-gray-500 mb-1">Address</h4>
                <p class="font-medium">123 Main Street, Lagos, Nigeria</p>
              </div>
              <div>
                <h4 class="text-sm font-medium text-gray-500 mb-1">Customer ID</h4>
                <p class="font-medium">CUST-001234</p>
              </div>
              <div>
                <h4 class="text-sm font-medium text-gray-500 mb-1">Account Status</h4>
                <p class="font-medium text-green-600">Active</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Profile Settings Tabs -->
    <div class="bg-white rounded-lg shadow">
      <div class="border-b">
        <nav class="flex -mb-px">
          <button id="tab-personal" class="tab-button text-sky-600 border-b-2 border-sky-500 py-4 px-6 font-medium">
            Personal Information
          </button>
          
        </nav>
      </div>

      <!-- Personal Information Tab -->
      <div id="content-personal" class="tab-content p-6">
        <form>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
              <label for="firstName" class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
              <input type="text" id="firstName" name="firstName" value="John" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm p-2 border">
            </div>
            <div>
              <label for="lastName" class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
              <input type="text" id="lastName" name="lastName" value="Doe" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm p-2 border">
            </div>
            <div>
              <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
              <input type="email" id="email" name="email" value="johndoe@example.com" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm p-2 border">
            </div>
            <div>
              <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
              <input type="tel" id="phone" name="phone" value="+234 123 456 7890" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm p-2 border">
            </div>
            <div class="md:col-span-2">
              <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Address</label>
              <textarea id="address" name="address" rows="3" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm p-2 border">123 Main Street, Lagos, Nigeria</textarea>
            </div>
            <div>
              <label for="city" class="block text-sm font-medium text-gray-700 mb-1">City</label>
              <input type="text" id="city" name="city" value="Lagos" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm p-2 border">
            </div>
            <div>
              <label for="state" class="block text-sm font-medium text-gray-700 mb-1">State</label>
              <input type="text" id="state" name="state" value="Lagos State" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm p-2 border">
            </div>
            <div>
              <label for="country" class="block text-sm font-medium text-gray-700 mb-1">Country</label>
              <select id="country" name="country" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm p-2 border">
                <option value="nigeria" selected>Nigeria</option>
                <option value="ghana">Ghana</option>
                <option value="kenya">Kenya</option>
                <option value="southafrica">South Africa</option>
              </select>
            </div>
            <div>
              <label for="zipCode" class="block text-sm font-medium text-gray-700 mb-1">Postal/Zip Code</label>
              <input type="text" id="zipCode" name="zipCode" value="100001" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm p-2 border">
            </div>
          </div>

          <div class="flex justify-end space-x-3">
            <button type="button" class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
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