<aside id="sidebar" class="bg-white border-r w-64 flex-shrink-0 hidden md:block">
    <div class="p-4 border-b">
      <div class="flex items-center">
        <span class="ml-2 font-bold text-lg">FK Riders</span>
      </div>
    </div>
    <nav class="p-4">
      <p class="text-xs font-semibold text-gray-500 uppercase mb-4">Main</p>
      <ul class="space-y-2">
        <li>
          <a href="#dashboard" class="flex items-center p-2 rounded-md bg-sky-100 text-sky-700">
            <i class="fas fa-tachometer-alt w-5"></i>
            <span class="ml-3">Dashboard Overview</span>
          </a>
        </li>
        <li>
          <button

            class="flex items-center p-2 w-full text-left rounded-md hover:bg-gray-100">
            <i class="fas fa-motorcycle w-5"></i>
            <span class="ml-3">Manage Products</span>
            <i class="fas fa-chevron-down ml-auto"></i>
          </button>
          <ul class="pl-6 mt-2 space-y-1">
            <li>
              <a href="{{route('admin_addProduct')}}" class="flex items-center p-2 rounded-md hover:bg-gray-100">
                <i class="fas fa-plus w-5"></i>
                <span class="ml-3">Add New Product</span>
              </a>
            </li>
            <li>
              <a href="{{route('admin_editProduct')}}" class="flex items-center p-2 rounded-md hover:bg-gray-100">
                <i class="fas fa-list w-5"></i>
                <span class="ml-3">View/Edit Products</span>
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="{{route('admin_users')}}" class="flex items-center p-2 rounded-md hover:bg-gray-100">
            <i class="fas fa-users w-5"></i>
            <span class="ml-3">Manage Users</span>
          </a>
        </li>
        <li>
          <a href="{{route('admin_verifyPayment')}}" class="flex items-center p-2 rounded-md hover:bg-gray-100">
            <i class="fas fa-credit-card w-5"></i>
            <span class="ml-3">Verify Payments</span>
          </a>
        </li>
        <li>
          <a href="#" class="flex items-center p-2 rounded-md hover:bg-gray-100">
            <i class="fas fa-chart-line w-5"></i>
            <span class="ml-3">Analytics / Reports</span>
          </a>
        </li>
      </ul>
      <hr class="my-6 border-gray-200">
      <ul class="space-y-2">
        <li>
          <a href="{{route('admin_settings')}}" class="flex items-center p-2 rounded-md hover:bg-gray-100">
            <i class="fas fa-cog w-5"></i>
            <span class="ml-3">Settings</span>
          </a>
        </li>
        <li>
          <a href="{{route('admin_logout')}}" class="flex items-center p-2 rounded-md hover:bg-gray-100 text-red-500">
            <i class="fas fa-sign-out-alt w-5"></i>
            <span class="ml-3">Logout</span>
          </a>
        </li>
      </ul>
    </nav>
  </aside>
