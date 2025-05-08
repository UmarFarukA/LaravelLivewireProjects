<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FK Riders - Support Tickets</title>
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
            <a href="#" class="flex items-center p-2 rounded-md bg-sky-100 text-sky-700">
              <i class="fas fa-headset w-5"></i>
              <span class="ml-3">Support</span>
            </a>
          </li>
        </ul>
        <hr class="my-6 border-gray-200">
        <ul class="space-y-2">
          <li>
            <a href="payment-methods.html" class="flex items-center p-2 rounded-md hover:bg-gray-100">
              <i class="fas fa-wallet w-5"></i>
              <span class="ml-3">Payment Methods</span>
            </a>
          </li>
          <li>
            <a href="installment-calculator.html" class="flex items-center p-2 rounded-md hover:bg-gray-100">
              <i class="fas fa-calculator w-5"></i>
              <span class="ml-3">Installment Calculator</span>
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
          <h1 class="text-2xl font-semibold">Support Tickets</h1>
          <p class="text-sm text-gray-500">Get help with your tricycle purchase</p>
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

      <!-- Support Tickets Content -->
      <div class="p-6">
        <!-- Back Button -->
        <div class="mb-6">
          <a href="customer-dashboard.html" class="inline-flex items-center text-sky-500 hover:text-sky-700">
            <i class="fas fa-arrow-left mr-2"></i> Back to Dashboard
          </a>
        </div>

        <!-- Support Options -->
        <div class="bg-white rounded-lg shadow mb-6">
          <div class="p-6">
            <h2 class="text-xl font-semibold mb-4">How Can We Help You?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
              <a href="#new-ticket" class="block p-4 border rounded-lg hover:bg-gray-50 transition-colors">
                <div class="flex items-center mb-2">
                  <div class="w-10 h-10 rounded-full bg-sky-100 flex items-center justify-center text-sky-500">
                    <i class="fas fa-ticket-alt"></i>
                  </div>
                  <h3 class="ml-3 font-medium">Create New Ticket</h3>
                </div>
                <p class="text-sm text-gray-500">Submit a new support request for any issue you're facing.</p>
              </a>
              <a href="#faq" class="block p-4 border rounded-lg hover:bg-gray-50 transition-colors">
                <div class="flex items-center mb-2">
                  <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-500">
                    <i class="fas fa-question-circle"></i>
                  </div>
                  <h3 class="ml-3 font-medium">FAQ</h3>
                </div>
                <p class="text-sm text-gray-500">Find answers to commonly asked questions about our products.</p>
              </a>
              <a href="#contact" class="block p-4 border rounded-lg hover:bg-gray-50 transition-colors">
                <div class="flex items-center mb-2">
                  <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center text-purple-500">
                    <i class="fas fa-phone-alt"></i>
                  </div>
                  <h3 class="ml-3 font-medium">Contact Us</h3>
                </div>
                <p class="text-sm text-gray-500">Get in touch with our customer service team directly.</p>
              </a>
            </div>
          </div>
        </div>

        <!-- My Tickets -->
        <div class="bg-white rounded-lg shadow mb-6">
          <div class="p-6 border-b flex justify-between items-center">
            <h2 class="text-lg font-semibold">My Support Tickets</h2>
            <button id="new-ticket-btn" class="px-4 py-2 bg-sky-500 text-white rounded-md hover:bg-sky-600">
              <i class="fas fa-plus mr-2"></i> New Ticket
            </button>
          </div>
          <div class="p-6">
            <div class="overflow-x-auto">
              <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                  <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ticket ID</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subject</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#TKT-001</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Engine making unusual noise</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Technical Support</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">May 5, 2023</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        Resolved
                      </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                      <a href="#view-ticket" class="text-sky-500 hover:text-sky-700">View</a>
                    </td>
                  </tr>
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#TKT-002</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Payment not reflecting in account</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Billing</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">May 10, 2023</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                        In Progress
                      </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                      <a href="#view-ticket" class="text-sky-500 hover:text-sky-700">View</a>
                    </td>
                  </tr>
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#TKT-003</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Request for maintenance service</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Service Request</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">May 12, 2023</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                        Open
                      </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                      <a href="#view-ticket" class="text-sky-500 hover:text-sky-700">View</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- New Ticket Form (Hidden by default, would be shown with JavaScript) -->
        <div id="new-ticket-form" class="bg-white rounded-lg shadow mb-6 hidden">
          <div class="p-6 border-b">
            <h2 class="text-lg font-semibold">Create New Support Ticket</h2>
          </div>
          <div class="p-6">
            <form>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                  <label for="ticketCategory" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                  <select id="ticketCategory" name="ticketCategory" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm p-2 border">
                    <option value="">Select a category</option>
                    <option value="technical">Technical Support</option>
                    <option value="billing">Billing & Payments</option>
                    <option value="service">Service Request</option>
                    <option value="warranty">Warranty Claim</option>
                    <option value="general">General Inquiry</option>
                  </select>
                </div>
                <div>
                  <label for="relatedOrder" class="block text-sm font-medium text-gray-700 mb-1">Related Order (Optional)</label>
                  <select id="relatedOrder" name="relatedOrder" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm p-2 border">
                    <option value="">Select an order</option>
                    <option value="ord001">ORD-001: Premium Tricycle X1</option>
                    <option value="ord002">ORD-002: Deluxe Tricycle D3</option>
                  </select>
                </div>
              </div>

              <div class="mb-6">
                <label for="ticketSubject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                <input type="text" id="ticketSubject" name="ticketSubject" placeholder="Brief description of your issue" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm p-2 border">
              </div>

              <div class="mb-6">
                <label for="ticketDescription" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea id="ticketDescription" name="ticketDescription" rows="5" placeholder="Please provide details about your issue" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm p-2 border"></textarea>
              </div>

              <div class="mb-6">
                <label for="ticketAttachment" class="block text-sm font-medium text-gray-700 mb-1">Attachments (Optional)</label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                  <div class="space-y-1 text-center">
                    <i class="fas fa-upload text-gray-400 text-xl"></i>
                    <div class="flex text-sm text-gray-600">
                      <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-sky-500 hover:text-sky-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-sky-500">
                        <span>Upload a file</span>
                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                      </label>
                      <p class="pl-1">or drag and drop</p>
                    </div>
                    <p class="text-xs text-gray-500">
                      PNG, JPG, GIF up to 10MB
                    </p>
                  </div>
                </div>
              </div>

              <div class="mb-6">
                <label for="ticketPriority" class="block text-sm font-medium text-gray-700 mb-1">Priority</label>
                <select id="ticketPriority" name="ticketPriority" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm p-2 border">
                  <option value="low">Low</option>
                  <option value="medium" selected>Medium</option>
                  <option value="high">High</option>
                  <option value="urgent">Urgent</option>
                </select>
              </div>

              <div class="flex justify-end space-x-3">
                <button type="button" id="cancel-ticket" class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                  Cancel
                </button>
                <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-sky-500 hover:bg-sky-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                  Submit Ticket
                </button>
              </div>
            </form>
          </div>
        </div>

        <!-- Ticket Details (Hidden by default, would be shown with JavaScript) -->
        <div id="ticket-details" class="bg-white rounded-lg shadow mb-6 hidden">
          <div class="p-6 border-b flex justify-between items-center">
            <div>
              <h2 class="text-lg font-semibold">Ticket #TKT-002</h2>
              <p class="text-sm text-gray-500">Payment not reflecting in account</p>
            </div>
            <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
              In Progress
            </span>
          </div>
          <div class="p-6">
            <div class="mb-6">
              <div class="flex justify-between mb-2">
                <div>
                  <span class="text-sm text-gray-500">Category:</span>
                  <span class="ml-1 font-medium">Billing</span>
                </div>
                <div>
                  <span class="text-sm text-gray-500">Created:</span>
                  <span class="ml-1 font-medium">May 10, 2023</span>
                </div>
              </div>
              <div class="flex justify-between">
                <div>
                  <span class="text-sm text-gray-500">Related Order:</span>
                  <span class="ml-1 font-medium">ORD-002: Deluxe Tricycle D3</span>
                </div>
                <div>
                  <span class="text-sm text-gray-500">Last Updated:</span>
                  <span class="ml-1 font-medium">May 11, 2023</span>
                </div>
              </div>
            </div>

            <div class="border-t pt-4 mb-6">
              <h3 class="text-md font-medium mb-2">Description</h3>
              <p class="text-gray-700">
                I made a payment of ₦70,833 for my installment on May 10, 2023, but it's not showing up in my account. The payment was made via bank transfer from my First Bank account. I have the transaction reference number and receipt from my bank.
              </p>
            </div>

            <!-- Conversation Thread -->
            <div class="border-t pt-4 mb-6">
              <h3 class="text-md font-medium mb-4">Conversation</h3>
              
              <!-- Support Agent Response -->
              <div class="flex mb-4">
                <div class="flex-shrink-0 mr-3">
                  <img class="h-10 w-10 rounded-full" src="https://placehold.co/60x60" alt="Support Agent">
                </div>
                <div class="bg-gray-100 rounded-lg p-4 flex-1">
                  <div class="flex justify-between items-start mb-1">
                    <div>
                      <span class="font-medium">Sarah (Support Agent)</span>
                      <span class="text-xs text-gray-500 ml-2">May 10, 2023, 2:45 PM</span>
                    </div>
                    <span class="bg-sky-100 text-sky-800 text-xs px-2 py-0.5 rounded-full">Staff</span>
                  </div>
                  <p class="text-gray-700">
                    Hello John, thank you for reaching out. I'm sorry to hear about the issue with your payment. Could you please provide the transaction reference number and a screenshot of the payment receipt? This will help us trace the payment in our system.
                  </p>
                </div>
              </div>
              
              <!-- Customer Response -->
              <div class="flex mb-4">
                <div class="flex-shrink-0 mr-3">
                  <img class="h-10 w-10 rounded-full" src="https://placehold.co/40x40" alt="Customer">
                </div>
                <div class="bg-sky-50 rounded-lg p-4 flex-1">
                  <div class="flex justify-between mb-1">
                    <div>
                      <span class="font-medium">John Doe</span>
                      <span class="text-xs text-gray-500 ml-2">May 10, 2023, 3:20 PM</span>
                    </div>
                  </div>
                  <p class="text-gray-700 mb-3">
                    Hi Sarah, thanks for your quick response. The transaction reference number is FBN23051078945. I've attached a screenshot of the payment receipt below.
                  </p>
                  <div class="border rounded-md p-2 bg-white inline-block">
                    <img src="https://placehold.co/300x150" alt="Payment Receipt" class="h-auto w-full max-w-xs rounded">
                  </div>
                </div>
              </div>
              
              <!-- Support Agent Response -->
              <div class="flex">
                <div class="flex-shrink-0 mr-3">
                  <img class="h-10 w-10 rounded-full" src="https://placehold.co/60x60" alt="Support Agent">
                </div>
                <div class="bg-gray-100 rounded-lg p-4 flex-1">
                  <div class="flex justify-between items-start mb-1">
                    <div>
                      <span class="font-medium">Sarah (Support Agent)</span>
                      <span class="text-xs text-gray-500 ml-2">May 11, 2023, 10:15 AM</span>
                    </div>
                    <span class="bg-sky-100 text-sky-800 text-xs px-2 py-0.5 rounded-full">Staff</span>
                  </div>
                  <p class="text-gray-700">
                    Thank you for providing the transaction reference and receipt, John. I've forwarded this to our finance team for investigation. They've confirmed that the payment was received but there was a delay in updating your account due to a system issue. Your account has now been updated to reflect this payment. Please check your dashboard and let me know if you can see the payment now. We apologize for any inconvenience caused.
                  </p>
                </div>
              </div>
            </div>

            <!-- Reply Form -->
            <div class="border-t pt-4">
              <h3 class="text-md font-medium mb-3">Add Reply</h3>
              <form>
                <div class="mb-4">
                  <textarea rows="4" placeholder="Type your message here..." class="block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm p-2 border"></textarea>
                </div>
                <div class="mb-4">
                  <label for="reply-attachment" class="block text-sm font-medium text-gray-700 mb-1">Attachments (Optional)</label>
                  <input type="file" id="reply-attachment" name="reply-attachment" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-sky-50 file:text-sky-700 hover:file:bg-sky-100">
                </div>
                <div class="flex justify-between">
                  <button type="button" class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                    Close Ticket
                  </button>
                  <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-sky-500 hover:bg-sky-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                    Send Reply
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <!-- FAQ Section -->
        <div id="faq-section" class="bg-white rounded-lg shadow">
          <div class="p-6 border-b">
            <h2 class="text-lg font-semibold">Frequently Asked Questions</h2>
          </div>
          <div class="p-6">
            <div class="space-y-4">
              <div class="border rounded-lg overflow-hidden">
                <button class="flex justify-between items-center w-full p-4 text-left font-medium focus:outline-none">
                  <span>How do I make my installment payments?</span>
                  <i class="fas fa-chevron-down text-gray-500"></i>
                </button>
                <div class="p-4 border-t bg-gray-50">
                  <p class="text-gray-700">
                    You can make installment payments through several methods:
                  </p>
                  <ul class="list-disc pl-5 mt-2 text-gray-700 space-y-1">
                    <li>Bank transfer to our company account</li>
                    <li>Credit/debit card payment through your dashboard</li>
                    <li>Mobile money transfer</li>
                    <li>In-person payment at any of our service centers</li>
                  </ul>
                  <p class="mt-2 text-gray-700">
                    After making a payment, it should reflect in your account within 24 hours. If you don't see your payment after this time, please contact our support team.
                  </p>
                </div>
              </div>

              <div class="border rounded-lg overflow-hidden">
                <button class="flex justify-between items-center w-full p-4 text-left font-medium focus:outline-none">
                  <span>What is covered under the warranty?</span>
                  <i class="fas fa-chevron-down text-gray-500"></i>
                </button>
                <div class="p-4 border-t bg-gray-50">
                  <p class="text-gray-700">
                    Our standard warranty covers:
                  </p>
                  <ul class="list-disc pl-5 mt-2 text-gray-700 space-y-1">
                    <li>Manufacturing defects</li>
                    <li>Engine issues</li>
                    <li>Electrical system failures</li>
                    <li>Frame and structural components</li>
                  </ul>
                  <p class="mt-2 text-gray-700">
                    The warranty is valid for 1 year from the date of purchase. Normal wear and tear, damage due to accidents, and improper use are not covered under the warranty.
                  </p>
                </div>
              </div>

              <div class="border rounded-lg overflow-hidden">
                <button class="flex justify-between items-center w-full p-4 text-left font-medium focus:outline-none">
                  <span>How do I schedule a maintenance service?</span>
                  <i class="fas fa-chevron-down text-gray-500"></i>
                </button>
                <div class="p-4 border-t bg-gray-50">
                  <p class="text-gray-700">
                    To schedule a maintenance service:
                  </p>
                  <ol class="list-decimal pl-5 mt-2 text-gray-700 space-y-1">
                    <li>Log in to your customer dashboard</li>
                    <li>Navigate to the Support section</li>
                    <li>Create a new ticket with the category "Service Request"</li>
                    <li>Provide your preferred date and time for the service</li>
                    <li>Our team will confirm your appointment within 24 hours</li>
                  </ol>
                  <p class="mt-2 text-gray-700">
                    Alternatively, you can call our service hotline at +234 123 456 7890 to schedule an appointment.
                  </p>
                </div>
              </div>

              <div class="border rounded-lg overflow-hidden">
                <button class="flex justify-between items-center w-full p-4 text-left font-medium focus:outline-none">
                  <span>What should I do if I miss an installment payment?</span>
                  <i class="fas fa-chevron-down text-gray-500"></i>
                </button>
                <div class="p-4 border-t bg-gray-50">
                  <p class="text-gray-700">
                    If you miss an installment payment:
                  </p>
                  <ol class="list-decimal pl-5 mt-2 text-gray-700 space-y-1">
                    <li>Make the payment as soon as possible to avoid late fees</li>
                    <li>If you anticipate difficulty making a payment, contact our customer service team before the due date</li>
                    <li>We may be able to offer a payment extension or restructure your payment plan</li>
                  </ol>
                  <p class="mt-2 text-gray-700">
                    A grace period of 5 days is provided for all installment payments. Late payments beyond this period may incur a 2% late fee.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <!-- Simple JavaScript for mobile menu toggle and ticket form -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Mobile menu toggle
      const mobileMenuButton = document.getElementById('mobile-menu-button');
      const sidebar = document.getElementById('sidebar');
      
      mobileMenuButton.addEventListener('click', function() {
        sidebar.classList.toggle('hidden');
      });

      // New ticket form toggle
      const newTicketBtn = document.getElementById('new-ticket-btn');
      const newTicketForm = document.getElementById('new-ticket-form');
      const cancelTicketBtn = document.getElementById('cancel-ticket');
      
      newTicketBtn.addEventListener('click', function() {
        newTicketForm.classList.remove('hidden');
      });
      
      cancelTicketBtn.addEventListener('click', function() {
        newTicketForm.classList.add('hidden');
      });
    });
  </script>
</body>
</html>