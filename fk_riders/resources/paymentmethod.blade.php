<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FK Riders - Payment Methods</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: {
              DEFAULT: '#0ea5e9', /* sky-500 */
              foreground: '#ffffff',
            },
          }
        }
      }
    }
  </script>
  <!-- Include Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100">
  <div class="min-h-screen flex flex-col md:flex-row">
    <!-- Mobile Header -->
    <header class="bg-white border-b md:hidden p-4 flex items-center justify-between">
      <div class="flex items-center">
        <button id="mobile-menu-button" class="mr-2">
          <i class="fas fa-bars text-gray-700 text-xl"></i>
        </button>
        <div class="flex items-center">
          <img src="https://placehold.co/32x32" alt="FK Riders Logo" class="h-8 w-8 rounded">
          <span class="ml-2 font-bold text-lg">FK Riders</span>
        </div>
      </div>
      <div class="flex items-center">
        <button class="relative p-2">
          <i class="fas fa-bell text-gray-700"></i>
          <span class="absolute top-0 right-0 h-4 w-4 bg-red-500 rounded-full text-xs text-white flex items-center justify-center">2</span>
        </button>
        <img src="https://placehold.co/40x40" alt="User" class="h-8 w-8 rounded-full ml-4">
      </div>
    </header>

    <!-- Sidebar Navigation -->
    <aside id="sidebar" class="bg-white border-r w-64 flex-shrink-0 hidden md:block">
      <div class="p-4 border-b">
        <div class="flex items-center">
          <img src="https://placehold.co/32x32" alt="FK Riders Logo" class="h-8 w-8 rounded">
          <span class="ml-2 font-bold text-lg">FK Riders</span>
        </div>
      </div>
      <nav class="p-4">
        <p class="text-xs font-semibold text-gray-500 uppercase mb-4">Main</p>
        <ul class="space-y-2">
          <li>
            <a href="customer-dashboard.html" class="flex items-center p-2 rounded-md hover:bg-gray-100">
              <i class="fas fa-tachometer-alt w-5"></i>
              <span class="ml-3">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="order-details.html" class="flex items-center p-2 rounded-md hover:bg-gray-100">
              <i class="fas fa-shopping-bag w-5"></i>
              <span class="ml-3">My Orders</span>
            </a>
          </li>
          <li>
            <a href="#installments" class="flex items-center p-2 rounded-md hover:bg-gray-100">
              <i class="fas fa-credit-card w-5"></i>
              <span class="ml-3">Installment Payments</span>
            </a>
          </li>
          <li>
            <a href="#browse-products" class="flex items-center p-2 rounded-md hover:bg-gray-100">
              <i class="fas fa-motorcycle w-5"></i>
              <span class="ml-3">Browse Products</span>
            </a>
          </li>
          <li>
            <a href="support-tickets.html" class="flex items-center p-2 rounded-md hover:bg-gray-100">
              <i class="fas fa-headset w-5"></i>
              <span class="ml-3">Support</span>
            </a>
          </li>
        </ul>
        <hr class="my-6 border-gray-200">
        <ul class="space-y-2">
          <li>
            <a href="#" class="flex items-center p-2 rounded-md bg-sky-100 text-sky-700">
              <i class="fas fa-wallet w-5"></i>
              <span class="ml-3">Payment Methods</span>
            </a>
          </li>
          <li>
            <a href="#profile" class="flex items-center p-2 rounded-md hover:bg-gray-100">
              <i class="fas fa-user w-5"></i>
              <span class="ml-3">Profile Settings</span>
            </a>
          </li>
          <li>
            <a href="#logout" class="flex items-center p-2 rounded-md hover:bg-gray-100 text-red-500">
              <i class="fas fa-sign-out-alt w-5"></i>
              <span class="ml-3">Logout</span>
            </a>
          </li>
        </ul>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
      <!-- Desktop Header -->
      <header class="bg-white border-b p-4 hidden md:flex items-center justify-between">
        <div>
          <h1 class="text-2xl font-semibold">Payment Methods</h1>
          <p class="text-sm text-gray-500">Manage your payment options</p>
        </div>
        <div class="flex items-center">
          <button class="relative p-2 mr-4">
            <i class="fas fa-bell text-gray-700"></i>
            <span class="absolute top-0 right-0 h-4 w-4 bg-red-500 rounded-full text-xs text-white flex items-center justify-center">2</span>
          </button>
          <div class="flex items-center">
            <img src="https://placehold.co/40x40" alt="User" class="h-8 w-8 rounded-full">
            <div class="ml-2">
              <p class="text-sm font-medium">John Doe</p>
              <p class="text-xs text-gray-500">Customer</p>
            </div>
          </div>
        </div>
      </header>

      <!-- Payment Methods Content -->
      <div class="p-6">
        <!-- Back Button -->
        <div class="mb-6">
          <a href="customer-dashboard.html" class="inline-flex items-center text-sky-500 hover:text-sky-700">
            <i class="fas fa-arrow-left mr-2"></i> Back to Dashboard
          </a>
        </div>

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

        <!-- Add New Payment Method (Hidden by default, would be shown with JavaScript) -->
        <div id="add-payment-method" class="bg-white rounded-lg shadow mb-6">
          <div class="p-6 border-b">
            <h2 class="text-lg font-semibold">Add New Payment Method</h2>
          </div>
          <div class="p-6">
            <!-- Payment Method Tabs -->
            <div class="border-b mb-6">
              <div class="flex space-x-6">
                <button class="px-4 py-2 border-b-2 border-sky-500 text-sky-500 font-medium">
                  Bank Account
                </button>
                <button class="px-4 py-2 text-gray-500 hover:text-gray-700">
                  Credit/Debit Card
                </button>
                <button class="px-4 py-2 text-gray-500 hover:text-gray-700">
                  Mobile Money
                </button>
              </div>
            </div>

            <!-- Bank Account Form -->
            <form>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                  <label for="bankName" class="block text-sm font-medium text-gray-700 mb-1">Bank Name</label>
                  <select id="bankName" name="bankName" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm p-2 border">
                    <option value="">Select a bank</option>
                    <option value="firstbank">First Bank of Nigeria</option>
                    <option value="gtbank">Guaranty Trust Bank</option>
                    <option value="zenithbank">Zenith Bank</option>
                    <option value="accessbank">Access Bank</option>
                    <option value="ubabank">United Bank for Africa</option>
                  </select>
                </div>
                <div>
                  <label for="accountType" class="block text-sm font-medium text-gray-700 mb-1">Account Type</label>
                  <select id="accountType" name="accountType" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm p-2 border">
                    <option value="">Select account type</option>
                    <option value="savings">Savings Account</option>
                    <option value="current">Current Account</option>
                  </select>
                </div>
                <div>
                  <label for="accountNumber" class="block text-sm font-medium text-gray-700 mb-1">Account Number</label>
                  <input type="text" id="accountNumber" name="accountNumber" placeholder="Enter 10-digit account number" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm p-2 border">
                </div>
                <div>
                  <label for="accountName" class="block text-sm font-medium text-gray-700 mb-1">Account Name</label>
                  <input type="text" id="accountName" name="accountName" placeholder="Enter account name" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm p-2 border">
                </div>
              </div>

              <div class="flex items-center mb-6">
                <input type="checkbox" id="defaultPayment" name="defaultPayment" class="h-4 w-4 text-sky-500 focus:ring-sky-500 border-gray-300 rounded">
                <label for="defaultPayment" class="ml-2 block text-sm text-gray-700">
                  Set as default payment method
                </label>
              </div>

              <div class="flex justify-end space-x-3">
                <button type="button" class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                  Cancel
                </button>
                <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-sky-500 hover:bg-sky-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                  Add Payment Method
                </button>
              </div>
            </form>
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
    </main>
  </div>

  <!-- Simple JavaScript for mobile menu toggle -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const mobileMenuButton = document.getElementById('mobile-menu-button');
      const sidebar = document.getElementById('sidebar');
      
      mobileMenuButton.addEventListener('click', function() {
        sidebar.classList.toggle('hidden');
      });
    });
  </script>
</body>
</html>