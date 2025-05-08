<!-- Sidebar Navigation -->
<aside id="sidebar" class="bg-white border-r w-64 flex-shrink-0 hidden md:block">
    <div class="p-4 border-b">
      <div class="flex items-center">
        
        <span class="ml-2 font-bold text-lg flex flex-col items-center text-primary-default">FK Riders</span>
      </div>
    </div>
    <nav class="p-4">
      <p class="text-xs font-semibold text-gray-500 uppercase mb-4">Main</p>
      <ul class="space-y-2">
        <li>
          <a href="{{route('customer_dashboard')}}" class="flex items-center p-2 rounded-md bg-sky-100 text-sky-700">
            <i class="fas fa-tachometer-alt w-5"></i>
            <span class="ml-3">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="{{route('customer_orders')}}" class="flex items-center p-2 rounded-md hover:bg-gray-100">
            <i class="fas fa-shopping-bag w-5"></i>
            <span class="ml-3">My Orders</span>
          </a>
        </li>
        <li>
          <a href="{{route('customer_payments')}}" class="flex items-center p-2 rounded-md hover:bg-gray-100">
            <i class="fas fa-credit-card w-5"></i>
            <span class="ml-3">Payments</span>
          </a>
        </li>
        <li>
          <a href="{{route('customer_products')}}" class="flex items-center p-2 rounded-md hover:bg-gray-100">
            <i class="fas fa-motorcycle w-5"></i>
            <span class="ml-3">Browse Products</span>
          </a>
        </li>
        <li>
          <a href="#support" class="flex items-center p-2 rounded-md hover:bg-gray-100">
            <i class="fas fa-headset w-5"></i>
            <span class="ml-3">Support</span>
          </a>
        </li>
      </ul>
      <hr class="my-6 border-gray-200">
      <ul class="space-y-2">
        <li>
          <a href="{{route('customer_profile')}}" class="flex items-center p-2 rounded-md hover:bg-gray-100">
            <i class="fas fa-user w-5"></i>
            <span class="ml-3">Profile</span>
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