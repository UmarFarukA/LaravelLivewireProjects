<!-- Settings Content -->
<div class="p-6">
    <div class="grid grid-cols-12 gap-6">
      <!-- Settings Navigation -->
      {{-- <div class="col-span-12 md:col-span-3">
        <div class="bg-white rounded-lg shadow">
          <div class="p-4 border-b">
            <h2 class="text-lg font-semibold">Settings</h2>
          </div>
          <nav class="p-4">
            <ul class="space-y-1">
              <li>
                <a href="#account-settings" class="flex items-center p-2 rounded-md bg-sky-50 text-sky-700">
                  <i class="fas fa-user-circle w-5"></i>
                  <span class="ml-3">Account Settings</span>
                </a>
              </li>
              <li>
                <a href="#company-settings" class="flex items-center p-2 rounded-md hover:bg-gray-100">
                  <i class="fas fa-building w-5"></i>
                  <span class="ml-3">Company Settings</span>
                </a>
              </li>
              <li>
                <a href="#payment-settings" class="flex items-center p-2 rounded-md hover:bg-gray-100">
                  <i class="fas fa-credit-card w-5"></i>
                  <span class="ml-3">Payment Settings</span>
                </a>
              </li>
              <li>
                <a href="#email-settings" class="flex items-center p-2 rounded-md hover:bg-gray-100">
                  <i class="fas fa-envelope w-5"></i>
                  <span class="ml-3">Email Settings</span>
                </a>
              </li>
              <li>
                <a href="#system-settings" class="flex items-center p-2 rounded-md hover:bg-gray-100">
                  <i class="fas fa-cogs w-5"></i>
                  <span class="ml-3">System Settings</span>
                </a>
              </li>
              <li>
                <a href="#security-settings" class="flex items-center p-2 rounded-md hover:bg-gray-100">
                  <i class="fas fa-shield-alt w-5"></i>
                  <span class="ml-3">Security Settings</span>
                </a>
              </li>
              <li>
                <a href="#user-management" class="flex items-center p-2 rounded-md hover:bg-gray-100">
                  <i class="fas fa-users-cog w-5"></i>
                  <span class="ml-3">User Management</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div> --}}

      <!-- Settings Content -->
      <div class="col-span-12 md:col-span-9 space-y-6">
        <!-- Account Settings -->
        <div id="account-settings" class="bg-white rounded-lg shadow">
          <div class="p-6 border-b">
            <h2 class="text-lg font-semibold">Account Settings</h2>
            <p class="text-sm text-gray-500">Manage your personal account information</p>
          </div>
          <div class="p-6">
            <form>
              <div class="flex flex-col md:flex-row md:items-center mb-6">
                <div class="md:w-1/4 mb-2 md:mb-0">
                  <label class="block text-sm font-medium text-gray-700">Profile Picture</label>
                </div>
                <div class="md:w-3/4 flex items-center">
                  <img src="https://placehold.co/100x100" alt="Profile" class="h-20 w-20 rounded-full">
                  <div class="ml-4">
                    <div class="flex space-x-2">
                      <button type="button" class="px-3 py-1.5 text-sm border border-gray-300 rounded-md hover:bg-gray-50">Change</button>
                      <button type="button" class="px-3 py-1.5 text-sm border border-gray-300 rounded-md hover:bg-gray-50 text-red-500">Remove</button>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">JPG, GIF or PNG. Max size 2MB</p>
                  </div>
                </div>
              </div>

              <div class="flex flex-col md:flex-row mb-6">
                <div class="md:w-1/4 mb-2 md:mb-0">
                  <label for="full-name" class="block text-sm font-medium text-gray-700">Full Name</label>
                </div>
                <div class="md:w-3/4">
                  <input type="text" id="full-name" name="full-name" value="Admin User" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                </div>
              </div>

              <div class="flex flex-col md:flex-row mb-6">
                <div class="md:w-1/4 mb-2 md:mb-0">
                  <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                </div>
                <div class="md:w-3/4">
                  <input type="email" id="email" name="email" value="admin@fkriders.com" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                </div>
              </div>

              <div class="flex flex-col md:flex-row mb-6">
                <div class="md:w-1/4 mb-2 md:mb-0">
                  <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                </div>
                <div class="md:w-3/4">
                  <input type="tel" id="phone" name="phone" value="+234 123 456 7890" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                </div>
              </div>

              <div class="flex flex-col md:flex-row mb-6">
                <div class="md:w-1/4 mb-2 md:mb-0">
                  <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                </div>
                <div class="md:w-3/4">
                  <select id="role" name="role" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                    <option value="admin">Administrator</option>
                    <option value="manager">Manager</option>
                    <option value="staff">Staff</option>
                  </select>
                </div>
              </div>

              <div class="flex flex-col md:flex-row mb-6">
                <div class="md:w-1/4 mb-2 md:mb-0">
                  <label for="timezone" class="block text-sm font-medium text-gray-700">Timezone</label>
                </div>
                <div class="md:w-3/4">
                  <select id="timezone" name="timezone" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                    <option value="Africa/Lagos">(GMT+01:00) Lagos</option>
                    <option value="Africa/Accra">(GMT+00:00) Accra</option>
                    <option value="Europe/London">(GMT+00:00) London</option>
                    <option value="America/New_York">(GMT-05:00) New York</option>
                  </select>
                </div>
              </div>

              <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-sky-500 text-white rounded-md hover:bg-sky-600">Save Changes</button>
              </div>
            </form>
          </div>
        </div>

        <!-- Password Change -->
        <div class="bg-white rounded-lg shadow">
          <div class="p-6 border-b">
            <h2 class="text-lg font-semibold">Change Password</h2>
            <p class="text-sm text-gray-500">Update your password</p>
          </div>
          <div class="p-6">
            <form>
              <div class="flex flex-col md:flex-row mb-6">
                <div class="md:w-1/4 mb-2 md:mb-0">
                  <label for="current-password" class="block text-sm font-medium text-gray-700">Current Password</label>
                </div>
                <div class="md:w-3/4">
                  <input type="password" id="current-password" name="current-password" placeholder="Enter current password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                </div>
              </div>

              <div class="flex flex-col md:flex-row mb-6">
                <div class="md:w-1/4 mb-2 md:mb-0">
                  <label for="new-password" class="block text-sm font-medium text-gray-700">New Password</label>
                </div>
                <div class="md:w-3/4">
                  <input type="password" id="new-password" name="new-password" placeholder="Enter new password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                  <p class="text-xs text-gray-500 mt-1">Password must be at least 8 characters and include a number and a special character</p>
                </div>
              </div>

              <div class="flex flex-col md:flex-row mb-6">
                <div class="md:w-1/4 mb-2 md:mb-0">
                  <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                </div>
                <div class="md:w-3/4">
                  <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm new password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                </div>
              </div>

              <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-sky-500 text-white rounded-md hover:bg-sky-600">Update Password</button>
              </div>
            </form>
          </div>
        </div>

        <!-- Company Settings (Hidden by default, would be shown with JavaScript) -->
        <div id="company-settings" class="bg-white rounded-lg shadow hidden">
          <div class="p-6 border-b">
            <h2 class="text-lg font-semibold">Company Settings</h2>
            <p class="text-sm text-gray-500">Manage your business information</p>
          </div>
          <div class="p-6">
            <form>
              <div class="flex flex-col md:flex-row md:items-center mb-6">
                <div class="md:w-1/4 mb-2 md:mb-0">
                  <label class="block text-sm font-medium text-gray-700">Company Logo</label>
                </div>
                <div class="md:w-3/4 flex items-center">
                  <img src="https://placehold.co/100x100" alt="Company Logo" class="h-20 w-20 rounded">
                  <div class="ml-4">
                    <div class="flex space-x-2">
                      <button type="button" class="px-3 py-1.5 text-sm border border-gray-300 rounded-md hover:bg-gray-50">Change</button>
                      <button type="button" class="px-3 py-1.5 text-sm border border-gray-300 rounded-md hover:bg-gray-50 text-red-500">Remove</button>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">JPG, GIF or PNG. Max size 2MB</p>
                  </div>
                </div>
              </div>

              <div class="flex flex-col md:flex-row mb-6">
                <div class="md:w-1/4 mb-2 md:mb-0">
                  <label for="company-name" class="block text-sm font-medium text-gray-700">Company Name</label>
                </div>
                <div class="md:w-3/4">
                  <input type="text" id="company-name" name="company-name" value="FK Riders" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                </div>
              </div>

              <div class="flex flex-col md:flex-row mb-6">
                <div class="md:w-1/4 mb-2 md:mb-0">
                  <label for="company-email" class="block text-sm font-medium text-gray-700">Company Email</label>
                </div>
                <div class="md:w-3/4">
                  <input type="email" id="company-email" name="company-email" value="info@fkriders.com" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                </div>
              </div>

              <div class="flex flex-col md:flex-row mb-6">
                <div class="md:w-1/4 mb-2 md:mb-0">
                  <label for="company-phone" class="block text-sm font-medium text-gray-700">Company Phone</label>
                </div>
                <div class="md:w-3/4">
                  <input type="tel" id="company-phone" name="company-phone" value="+234 123 456 7890" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                </div>
              </div>

              <div class="flex flex-col md:flex-row mb-6">
                <div class="md:w-1/4 mb-2 md:mb-0">
                  <label for="company-address" class="block text-sm font-medium text-gray-700">Company Address</label>
                </div>
                <div class="md:w-3/4">
                  <textarea id="company-address" name="company-address" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">123 Main Street, Lagos, Nigeria</textarea>
                </div>
              </div>

              <div class="flex flex-col md:flex-row mb-6">
                <div class="md:w-1/4 mb-2 md:mb-0">
                  <label for="company-website" class="block text-sm font-medium text-gray-700">Company Website</label>
                </div>
                <div class="md:w-3/4">
                  <input type="url" id="company-website" name="company-website" value="https://www.fkriders.com" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                </div>
              </div>

              <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-sky-500 text-white rounded-md hover:bg-sky-600">Save Changes</button>
              </div>
            </form>
          </div>
        </div>

        <!-- Payment Settings (Hidden by default) -->
        <div id="payment-settings" class="bg-white rounded-lg shadow hidden">
          <div class="p-6 border-b">
            <h2 class="text-lg font-semibold">Payment Settings</h2>
            <p class="text-sm text-gray-500">Configure payment methods and options</p>
          </div>
          <div class="p-6">
            <form>
              <div class="mb-6">
                <h3 class="text-md font-medium mb-4">Payment Methods</h3>
                <div class="space-y-4">
                  <div class="flex items-center p-4 border rounded-md">
                    <input type="checkbox" id="bank-transfer" name="payment-methods" value="bank-transfer" class="h-4 w-4 text-sky-500 focus:ring-sky-400 border-gray-300 rounded" checked>
                    <label for="bank-transfer" class="ml-2 block text-sm text-gray-700">Bank Transfer</label>
                  </div>
                  <div class="flex items-center p-4 border rounded-md">
                    <input type="checkbox" id="credit-card" name="payment-methods" value="credit-card" class="h-4 w-4 text-sky-500 focus:ring-sky-400 border-gray-300 rounded" checked>
                    <label for="credit-card" class="ml-2 block text-sm text-gray-700">Credit Card</label>
                  </div>
                  <div class="flex items-center p-4 border rounded-md">
                    <input type="checkbox" id="paypal" name="payment-methods" value="paypal" class="h-4 w-4 text-sky-500 focus:ring-sky-400 border-gray-300 rounded">
                    <label for="paypal" class="ml-2 block text-sm text-gray-700">PayPal</label>
                  </div>
                  <div class="flex items-center p-4 border rounded-md">
                    <input type="checkbox" id="cash" name="payment-methods" value="cash" class="h-4 w-4 text-sky-500 focus:ring-sky-400 border-gray-300 rounded" checked>
                    <label for="cash" class="ml-2 block text-sm text-gray-700">Cash on Delivery</label>
                  </div>
                </div>
              </div>

              <div class="mb-6">
                <h3 class="text-md font-medium mb-4">Installment Settings</h3>
                <div class="space-y-4">
                  <div class="flex flex-col md:flex-row mb-4">
                    <div class="md:w-1/4 mb-2 md:mb-0">
                      <label for="min-deposit" class="block text-sm font-medium text-gray-700">Minimum Deposit (%)</label>
                    </div>
                    <div class="md:w-3/4">
                      <input type="number" id="min-deposit" name="min-deposit" value="30" min="0" max="100" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                  </div>
                  <div class="flex flex-col md:flex-row mb-4">
                    <div class="md:w-1/4 mb-2 md:mb-0">
                      <label for="max-months" class="block text-sm font-medium text-gray-700">Maximum Months</label>
                    </div>
                    <div class="md:w-3/4">
                      <input type="number" id="max-months" name="max-months" value="12" min="1" max="36" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                  </div>
                  <div class="flex flex-col md:flex-row mb-4">
                    <div class="md:w-1/4 mb-2 md:mb-0">
                      <label for="interest-rate" class="block text-sm font-medium text-gray-700">Interest Rate (%)</label>
                    </div>
                    <div class="md:w-3/4">
                      <input type="number" id="interest-rate" name="interest-rate" value="5" min="0" max="100" step="0.1" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                  </div>
                </div>
              </div>

              <div class="mb-6">
                <h3 class="text-md font-medium mb-4">Bank Account Details</h3>
                <div class="space-y-4">
                  <div class="flex flex-col md:flex-row mb-4">
                    <div class="md:w-1/4 mb-2 md:mb-0">
                      <label for="bank-name" class="block text-sm font-medium text-gray-700">Bank Name</label>
                    </div>
                    <div class="md:w-3/4">
                      <input type="text" id="bank-name" name="bank-name" value="First Bank of Nigeria" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                  </div>
                  <div class="flex flex-col md:flex-row mb-4">
                    <div class="md:w-1/4 mb-2 md:mb-0">
                      <label for="account-name" class="block text-sm font-medium text-gray-700">Account Name</label>
                    </div>
                    <div class="md:w-3/4">
                      <input type="text" id="account-name" name="account-name" value="FK Riders Ltd" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                  </div>
                  <div class="flex flex-col md:flex-row mb-4">
                    <div class="md:w-1/4 mb-2 md:mb-0">
                      <label for="account-number" class="block text-sm font-medium text-gray-700">Account Number</label>
                    </div>
                    <div class="md:w-3/4">
                      <input type="text" id="account-number" name="account-number" value="1234567890" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                  </div>
                </div>
              </div>

              <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-sky-500 text-white rounded-md hover:bg-sky-600">Save Changes</button>
              </div>
            </form>
          </div>
        </div>

        <!-- Email Settings (Hidden by default) -->
        <div id="email-settings" class="bg-white rounded-lg shadow hidden">
          <div class="p-6 border-b">
            <h2 class="text-lg font-semibold">Email Settings</h2>
            <p class="text-sm text-gray-500">Configure email notifications and templates</p>
          </div>
          <div class="p-6">
            <form>
              <div class="mb-6">
                <h3 class="text-md font-medium mb-4">Email Notifications</h3>
                <div class="space-y-4">
                  <div class="flex items-center p-4 border rounded-md">
                    <input type="checkbox" id="new-order" name="email-notifications" value="new-order" class="h-4 w-4 text-sky-500 focus:ring-sky-400 border-gray-300 rounded" checked>
                    <label for="new-order" class="ml-2 block text-sm text-gray-700">New Order Notifications</label>
                  </div>
                  <div class="flex items-center p-4 border rounded-md">
                    <input type="checkbox" id="payment-received" name="email-notifications" value="payment-received" class="h-4 w-4 text-sky-500 focus:ring-sky-400 border-gray-300 rounded" checked>
                    <label for="payment-received" class="ml-2 block text-sm text-gray-700">Payment Received Notifications</label>
                  </div>
                  <div class="flex items-center p-4 border rounded-md">
                    <input type="checkbox" id="new-user" name="email-notifications" value="new-user" class="h-4 w-4 text-sky-500 focus:ring-sky-400 border-gray-300 rounded" checked>
                    <label for="new-user" class="ml-2 block text-sm text-gray-700">New User Registration Notifications</label>
                  </div>
                  <div class="flex items-center p-4 border rounded-md">
                    <input type="checkbox" id="low-stock" name="email-notifications" value="low-stock" class="h-4 w-4 text-sky-500 focus:ring-sky-400 border-gray-300 rounded" checked>
                    <label for="low-stock" class="ml-2 block text-sm text-gray-700">Low Stock Alerts</label>
                  </div>
                </div>
              </div>

              <div class="mb-6">
                <h3 class="text-md font-medium mb-4">Email Templates</h3>
                <div class="space-y-4">
                  <div class="border rounded-md overflow-hidden">
                    <div class="bg-gray-50 px-4 py-2 border-b flex justify-between items-center">
                      <span class="font-medium">Order Confirmation</span>
                      <button type="button" class="text-sky-500 hover:text-sky-700">Edit</button>
                    </div>
                    <div class="p-4">
                      <p class="text-sm text-gray-500">Template for order confirmation emails sent to customers.</p>
                    </div>
                  </div>
                  <div class="border rounded-md overflow-hidden">
                    <div class="bg-gray-50 px-4 py-2 border-b flex justify-between items-center">
                      <span class="font-medium">Payment Receipt</span>
                      <button type="button" class="text-sky-500 hover:text-sky-700">Edit</button>
                    </div>
                    <div class="p-4">
                      <p class="text-sm text-gray-500">Template for payment receipt emails sent to customers.</p>
                    </div>
                  </div>
                  <div class="border rounded-md overflow-hidden">
                    <div class="bg-gray-50 px-4 py-2 border-b flex justify-between items-center">
                      <span class="font-medium">Welcome Email</span>
                      <button type="button" class="text-sky-500 hover:text-sky-700">Edit</button>
                    </div>
                    <div class="p-4">
                      <p class="text-sm text-gray-500">Template for welcome emails sent to new users.</p>
                    </div>
                  </div>
                  <div class="border rounded-md overflow-hidden">
                    <div class="bg-gray-50 px-4 py-2 border-b flex justify-between items-center">
                      <span class="font-medium">Password Reset</span>
                      <button type="button" class="text-sky-500 hover:text-sky-700">Edit</button>
                    </div>
                    <div class="p-4">
                      <p class="text-sm text-gray-500">Template for password reset emails.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mb-6">
                <h3 class="text-md font-medium mb-4">SMTP Settings</h3>
                <div class="space-y-4">
                  <div class="flex flex-col md:flex-row mb-4">
                    <div class="md:w-1/4 mb-2 md:mb-0">
                      <label for="smtp-host" class="block text-sm font-medium text-gray-700">SMTP Host</label>
                    </div>
                    <div class="md:w-3/4">
                      <input type="text" id="smtp-host" name="smtp-host" value="smtp.gmail.com" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                  </div>
                  <div class="flex flex-col md:flex-row mb-4">
                    <div class="md:w-1/4 mb-2 md:mb-0">
                      <label for="smtp-port" class="block text-sm font-medium text-gray-700">SMTP Port</label>
                    </div>
                    <div class="md:w-3/4">
                      <input type="text" id="smtp-port" name="smtp-port" value="587" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                  </div>
                  <div class="flex flex-col md:flex-row mb-4">
                    <div class="md:w-1/4 mb-2 md:mb-0">
                      <label for="smtp-username" class="block text-sm font-medium text-gray-700">SMTP Username</label>
                    </div>
                    <div class="md:w-3/4">
                      <input type="text" id="smtp-username" name="smtp-username" value="notifications@fkriders.com" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                  </div>
                  <div class="flex flex-col md:flex-row mb-4">
                    <div class="md:w-1/4 mb-2 md:mb-0">
                      <label for="smtp-password" class="block text-sm font-medium text-gray-700">SMTP Password</label>
                    </div>
                    <div class="md:w-3/4">
                      <input type="password" id="smtp-password" name="smtp-password" value="********" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                  </div>
                  <div class="flex flex-col md:flex-row mb-4">
                    <div class="md:w-1/4 mb-2 md:mb-0">
                      <label for="smtp-encryption" class="block text-sm font-medium text-gray-700">Encryption</label>
                    </div>
                    <div class="md:w-3/4">
                      <select id="smtp-encryption" name="smtp-encryption" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                        <option value="tls">TLS</option>
                        <option value="ssl">SSL</option>
                        <option value="none">None</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="flex justify-end">
                <button type="button" class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50 mr-2">Test Connection</button>
                <button type="submit" class="px-4 py-2 bg-sky-500 text-white rounded-md hover:bg-sky-600">Save Changes</button>
              </div>
            </form>
          </div>
        </div>

        <!-- System Settings (Hidden by default) -->
        <div id="system-settings" class="bg-white rounded-lg shadow hidden">
          <div class="p-6 border-b">
            <h2 class="text-lg font-semibold">System Settings</h2>
            <p class="text-sm text-gray-500">Configure general system settings</p>
          </div>
          <div class="p-6">
            <form>
              <div class="mb-6">
                <h3 class="text-md font-medium mb-4">General Settings</h3>
                <div class="space-y-4">
                  <div class="flex flex-col md:flex-row mb-4">
                    <div class="md:w-1/4 mb-2 md:mb-0">
                      <label for="site-title" class="block text-sm font-medium text-gray-700">Site Title</label>
                    </div>
                    <div class="md:w-3/4">
                      <input type="text" id="site-title" name="site-title" value="FK Riders - Reliable Tricycles, Flexible Payment" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                  </div>
                  <div class="flex flex-col md:flex-row mb-4">
                    <div class="md:w-1/4 mb-2 md:mb-0">
                      <label for="site-description" class="block text-sm font-medium text-gray-700">Site Description</label>
                    </div>
                    <div class="md:w-3/4">
                      <textarea id="site-description" name="site-description" rows="2" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">Buy brand new or neatly used tricycles with ease. Pay once or spread across 12 months.</textarea>
                    </div>
                  </div>
                  <div class="flex flex-col md:flex-row mb-4">
                    <div class="md:w-1/4 mb-2 md:mb-0">
                      <label for="currency" class="block text-sm font-medium text-gray-700">Currency</label>
                    </div>
                    <div class="md:w-3/4">
                      <select id="currency" name="currency" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                        <option value="NGN">Nigerian Naira (₦)</option>
                        <option value="USD">US Dollar ($)</option>
                        <option value="EUR">Euro (€)</option>
                        <option value="GBP">British Pound (£)</option>
                      </select>
                    </div>
                  </div>
                  <div class="flex flex-col md:flex-row mb-4">
                    <div class="md:w-1/4 mb-2 md:mb-0">
                      <label for="date-format" class="block text-sm font-medium text-gray-700">Date Format</label>
                    </div>
                    <div class="md:w-3/4">
                      <select id="date-format" name="date-format" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                        <option value="dd/mm/yyyy">DD/MM/YYYY</option>
                        <option value="mm/dd/yyyy">MM/DD/YYYY</option>
                        <option value="yyyy-mm-dd">YYYY-MM-DD</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mb-6">
                <h3 class="text-md font-medium mb-4">Maintenance Mode</h3>
                <div class="space-y-4">
                  <div class="flex items-center p-4 border rounded-md">
                    <input type="checkbox" id="maintenance-mode" name="maintenance-mode" class="h-4 w-4 text-sky-500 focus:ring-sky-400 border-gray-300 rounded">
                    <label for="maintenance-mode" class="ml-2 block text-sm text-gray-700">Enable Maintenance Mode</label>
                  </div>
                  <div class="flex flex-col md:flex-row mb-4">
                    <div class="md:w-1/4 mb-2 md:mb-0">
                      <label for="maintenance-message" class="block text-sm font-medium text-gray-700">Maintenance Message</label>
                    </div>
                    <div class="md:w-3/4">
                      <textarea id="maintenance-message" name="maintenance-message" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">We are currently performing scheduled maintenance. Please check back soon.</textarea>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mb-6">
                <h3 class="text-md font-medium mb-4">System Backup</h3>
                <div class="space-y-4">
                  <div class="flex items-center p-4 border rounded-md">
                    <input type="checkbox" id="auto-backup" name="auto-backup" class="h-4 w-4 text-sky-500 focus:ring-sky-400 border-gray-300 rounded" checked>
                    <label for="auto-backup" class="ml-2 block text-sm text-gray-700">Enable Automatic Backups</label>
                  </div>
                  <div class="flex flex-col md:flex-row mb-4">
                    <div class="md:w-1/4 mb-2 md:mb-0">
                      <label for="backup-frequency" class="block text-sm font-medium text-gray-700">Backup Frequency</label>
                    </div>
                    <div class="md:w-3/4">
                      <select id="backup-frequency" name="backup-frequency" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                        <option value="daily">Daily</option>
                        <option value="weekly">Weekly</option>
                        <option value="monthly">Monthly</option>
                      </select>
                    </div>
                  </div>
                  <div class="flex flex-col md:flex-row mb-4">
                    <div class="md:w-1/4 mb-2 md:mb-0">
                      <label for="backup-retention" class="block text-sm font-medium text-gray-700">Backup Retention (days)</label>
                    </div>
                    <div class="md:w-3/4">
                      <input type="number" id="backup-retention" name="backup-retention" value="30" min="1" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                  </div>
                  <div class="flex justify-end">
                    <button type="button" class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50">Create Backup Now</button>
                  </div>
                </div>
              </div>

              <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-sky-500 text-white rounded-md hover:bg-sky-600">Save Changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
