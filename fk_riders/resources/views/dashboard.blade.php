<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FK Riders Admin Dashboard</title>
  <!-- Tailwind CSS via CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            primary: {
              DEFAULT: '#3b82f6',
              foreground: '#ffffff',
            },
            secondary: {
              DEFAULT: '#f1f5f9',
              foreground: '#1e293b',
            },
            muted: {
              DEFAULT: '#f1f5f9',
              foreground: '#64748b',
            },
            accent: {
              DEFAULT: '#f1f5f9',
              foreground: '#1e293b',
            },
            destructive: {
              DEFAULT: '#ef4444',
              foreground: '#ffffff',
            },
            success: {
              DEFAULT: '#10b981',
              foreground: '#ffffff',
            },
            border: '#e2e8f0',
            input: '#e2e8f0',
            ring: '#3b82f6',
            background: '#ffffff',
            foreground: '#0f172a',
          },
        },
      },
    }
  </script>
  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>
  <!-- Chart.js for simple charts -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-background text-foreground">
  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <div id="sidebar" class="fixed inset-y-0 left-0 z-50 w-64 bg-white border-r transform transition-transform duration-200 ease-in-out md:translate-x-0" data-state="expanded">
      <div class="flex flex-col h-full">
        <!-- Sidebar Header -->
        <div class="border-b">
          <div class="flex items-center gap-2 px-4 py-2">
            <span class="text-xl font-bold">
              <span class="text-primary">FK</span> Riders
            </span>
            <span class="text-xs bg-primary/10 text-primary px-2 py-0.5 rounded-md">Admin</span>
          </div>
        </div>
        
        <!-- Sidebar Content -->
        <div class="flex-1 overflow-auto py-4">
          <nav class="space-y-1 px-2">
            <a href="#dashboard" class="flex items-center gap-2 rounded-md px-3 py-2 text-sm font-medium bg-primary/10 text-primary">
              <i data-lucide="home" class="h-5 w-5"></i>
              <span>Dashboard</span>
            </a>
            <a href="#products" class="flex items-center gap-2 rounded-md px-3 py-2 text-sm font-medium text-foreground hover:bg-muted">
              <i data-lucide="package" class="h-5 w-5"></i>
              <span>Manage Products</span>
            </a>
            <a href="#add-product" class="flex items-center gap-2 rounded-md px-3 py-2 text-sm font-medium text-foreground hover:bg-muted">
              <i data-lucide="plus-circle" class="h-5 w-5"></i>
              <span>Add New Product</span>
            </a>
            <a href="#users" class="flex items-center gap-2 rounded-md px-3 py-2 text-sm font-medium text-foreground hover:bg-muted">
              <i data-lucide="users" class="h-5 w-5"></i>
              <span>Manage Users</span>
            </a>
            <a href="#payments" class="flex items-center gap-2 rounded-md px-3 py-2 text-sm font-medium text-foreground hover:bg-muted">
              <i data-lucide="circle-dollar-sign" class="h-5 w-5"></i>
              <span>Verify Payments</span>
            </a>
            <a href="#analytics" class="flex items-center gap-2 rounded-md px-3 py-2 text-sm font-medium text-foreground hover:bg-muted">
              <i data-lucide="bar-chart-3" class="h-5 w-5"></i>
              <span>Analytics / Reports</span>
            </a>
            <a href="#settings" class="flex items-center gap-2 rounded-md px-3 py-2 text-sm font-medium text-foreground hover:bg-muted">
              <i data-lucide="settings" class="h-5 w-5"></i>
              <span>Settings</span>
            </a>
          </nav>
        </div>
        
        <!-- Sidebar Footer -->
        <div class="border-t p-4">
          <a href="#logout" class="flex items-center gap-2 rounded-md px-3 py-2 text-sm font-medium text-foreground hover:bg-muted">
            <i data-lucide="log-out" class="h-5 w-5"></i>
            <span>Logout</span>
          </a>
        </div>
      </div>
    </div>
    
    <!-- Mobile Sidebar Toggle -->
    <div class="fixed bottom-4 right-4 md:hidden z-50">
      <button id="sidebar-toggle" class="flex h-10 w-10 items-center justify-center rounded-full bg-primary text-primary-foreground shadow-lg">
        <i data-lucide="menu" class="h-5 w-5"></i>
      </button>
    </div>
    
    <!-- Main Content -->
    <div class="flex-1 md:ml-64">
      <!-- Dashboard Section -->
      <div id="dashboard-section" class="p-4 md:p-8 space-y-4">
        <div class="flex items-center justify-between">
          <h2 class="text-3xl font-bold tracking-tight">Dashboard</h2>
          <div class="flex items-center gap-2">
            <button class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
              Download Report
            </button>
          </div>
        </div>
        
        <!-- Dashboard Tabs -->
        <div class="border-b">
          <div class="flex -mb-px space-x-6">
            <button class="dashboard-tab py-2 border-b-2 border-primary font-medium text-primary" data-tab="overview">Overview</button>
            <button class="dashboard-tab py-2 border-b-2 border-transparent font-medium text-muted-foreground hover:text-foreground" data-tab="analytics">Analytics</button>
            <button class="dashboard-tab py-2 border-b-2 border-transparent font-medium text-muted-foreground hover:text-foreground" data-tab="reports">Reports</button>
          </div>
        </div>
        
        <!-- Dashboard Tab Content -->
        <div class="dashboard-content" data-content="overview">
          <!-- Stats Cards -->
          <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-4">
            <!-- Total Tricycles -->
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
              <div class="flex flex-row items-center justify-between space-y-0 p-6 pb-2">
                <h3 class="text-sm font-medium">Total Tricycles</h3>
                <i data-lucide="package" class="h-4 w-4 text-muted-foreground"></i>
              </div>
              <div class="p-6 pt-0">
                <div class="text-2xl font-bold">142</div>
                <p class="text-xs text-muted-foreground">+6 added this month</p>
                <a href="#products" class="text-xs text-blue-500 flex items-center mt-2">
                  View all products
                  <i data-lucide="arrow-right" class="ml-1 h-3 w-3"></i>
                </a>
              </div>
            </div>
            
            <!-- Registered Customers -->
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
              <div class="flex flex-row items-center justify-between space-y-0 p-6 pb-2">
                <h3 class="text-sm font-medium">Registered Customers</h3>
                <i data-lucide="users" class="h-4 w-4 text-muted-foreground"></i>
              </div>
              <div class="p-6 pt-0">
                <div class="text-2xl font-bold">2,350</div>
                <p class="text-xs text-muted-foreground">+180 this month</p>
                <a href="#users" class="text-xs text-blue-500 flex items-center mt-2">
                  View all users
                  <i data-lucide="arrow-right" class="ml-1 h-3 w-3"></i>
                </a>
              </div>
            </div>
            
            <!-- Pending Payments -->
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
              <div class="flex flex-row items-center justify-between space-y-0 p-6 pb-2">
                <h3 class="text-sm font-medium">Pending Payments</h3>
                <i data-lucide="circle-dollar-sign" class="h-4 w-4 text-muted-foreground"></i>
              </div>
              <div class="p-6 pt-0">
                <div class="text-2xl font-bold">18</div>
                <p class="text-xs text-muted-foreground">Requires verification</p>
                <a href="#payments" class="text-xs text-blue-500 flex items-center mt-2">
                  Verify payments
                  <i data-lucide="arrow-right" class="ml-1 h-3 w-3"></i>
                </a>
              </div>
            </div>
            
            <!-- Revenue This Month -->
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
              <div class="flex flex-row items-center justify-between space-y-0 p-6 pb-2">
                <h3 class="text-sm font-medium">Revenue This Month</h3>
                <i data-lucide="shopping-cart" class="h-4 w-4 text-muted-foreground"></i>
              </div>
              <div class="p-6 pt-0">
                <div class="text-2xl font-bold">₦4.2M</div>
                <p class="text-xs text-muted-foreground">+12% from last month</p>
                <a href="#analytics" class="text-xs text-blue-500 flex items-center mt-2">
                  View analytics
                  <i data-lucide="arrow-right" class="ml-1 h-3 w-3"></i>
                </a>
              </div>
            </div>
          </div>
          
          <!-- Charts and Recent Activity -->
          <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-7 mt-4">
            <!-- Revenue Chart -->
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm col-span-4">
              <div class="flex flex-col space-y-1.5 p-6">
                <h3 class="text-lg font-semibold">Revenue Overview</h3>
                <p class="text-sm text-muted-foreground">Monthly revenue for the current year</p>
              </div>
              <div class="p-6 pt-0">
                <canvas id="revenue-chart" height="350"></canvas>
              </div>
            </div>
            
            <!-- Recent Activity -->
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm col-span-3">
              <div class="flex flex-col space-y-1.5 p-6">
                <h3 class="text-lg font-semibold">Recent Activity</h3>
                <p class="text-sm text-muted-foreground">Latest transactions and product updates</p>
              </div>
              <div class="p-6 pt-0 space-y-4">
                <!-- Activity Item 1 -->
                <div class="flex items-start gap-4">
                  <div class="mt-0.5 rounded-full p-2 bg-green-100 text-green-600">
                    <i data-lucide="circle-dollar-sign" class="h-4 w-4"></i>
                  </div>
                  <div class="space-y-1">
                    <p class="text-sm font-medium leading-none">New payment received</p>
                    <p class="text-sm text-muted-foreground">John Doe paid ₦180,000 for Premium Tricycle Model 3</p>
                    <p class="text-xs text-muted-foreground">2 hours ago</p>
                  </div>
                </div>
                
                <!-- Activity Item 2 -->
                <div class="flex items-start gap-4">
                  <div class="mt-0.5 rounded-full p-2 bg-blue-100 text-blue-600">
                    <i data-lucide="package" class="h-4 w-4"></i>
                  </div>
                  <div class="space-y-1">
                    <p class="text-sm font-medium leading-none">New product added</p>
                    <p class="text-sm text-muted-foreground">Premium Tricycle Model X was added to inventory</p>
                    <p class="text-xs text-muted-foreground">5 hours ago</p>
                  </div>
                </div>
                
                <!-- Activity Item 3 -->
                <div class="flex items-start gap-4">
                  <div class="mt-0.5 rounded-full p-2 bg-orange-100 text-orange-600">
                    <i data-lucide="user" class="h-4 w-4"></i>
                  </div>
                  <div class="space-y-1">
                    <p class="text-sm font-medium leading-none">New user registered</p>
                    <p class="text-sm text-muted-foreground">Jane Smith created an account</p>
                    <p class="text-xs text-muted-foreground">8 hours ago</p>
                  </div>
                </div>
                
                <!-- Activity Item 4 -->
                <div class="flex items-start gap-4">
                  <div class="mt-0.5 rounded-full p-2 bg-green-100 text-green-600">
                    <i data-lucide="circle-dollar-sign" class="h-4 w-4"></i>
                  </div>
                  <div class="space-y-1">
                    <p class="text-sm font-medium leading-none">Payment verified</p>
                    <p class="text-sm text-muted-foreground">Michael Johnson's payment was verified</p>
                    <p class="text-xs text-muted-foreground">1 day ago</p>
                  </div>
                </div>
                
                <!-- Activity Item 5 -->
                <div class="flex items-start gap-4">
                  <div class="mt-0.5 rounded-full p-2 bg-blue-100 text-blue-600">
                    <i data-lucide="package" class="h-4 w-4"></i>
                  </div>
                  <div class="space-y-1">
                    <p class="text-sm font-medium leading-none">Product updated</p>
                    <p class="text-sm text-muted-foreground">Premium Tricycle Model 2 price was updated</p>
                    <p class="text-xs text-muted-foreground">1 day ago</p>
                  </div>
                </div>
              </div>
              <div class="p-6 pt-0">
                <button class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-full">
                  <i data-lucide="arrow-up-right" class="mr-2 h-4 w-4"></i>
                  See all activity
                </button>
              </div>
            </div>
          </div>
        </div>
        
        <div class="dashboard-content hidden" data-content="analytics">
          <div class="flex items-center justify-center h-64">
            <p class="text-muted-foreground">Analytics content will be displayed here.</p>
          </div>
        </div>
        
        <div class="dashboard-content hidden" data-content="reports">
          <div class="flex items-center justify-center h-64">
            <p class="text-muted-foreground">Reports content will be displayed here.</p>
          </div>
        </div>
      </div>
      
      <!-- Products Section -->
      <div id="products-section" class="hidden p-4 md:p-8 space-y-4">
        <div class="flex items-center justify-between">
          <h2 class="text-3xl font-bold tracking-tight">Manage Products</h2>
          <a href="#add-product" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2">
            <i data-lucide="plus-circle" class="mr-2 h-4 w-4"></i>
            Add New Product
          </a>
        </div>
        
        <div class="flex items-center gap-2">
          <input type="text" placeholder="Search products..." class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 max-w-sm" />
          <div class="relative">
            <button id="filter-button" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
              Filter
            </button>
            <div id="filter-dropdown" class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden">
              <div class="py-1">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">All Products</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Tricycles</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Used Tricycles</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">In Stock</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Out of Stock</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="rounded-md border">
          <table class="w-full">
            <thead>
              <tr class="border-b bg-muted/50">
                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">Product</th>
                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">Condition</th>
                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">Price</th>
                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">Stock</th>
                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">Status</th>
                <th class="h-12 px-4 text-right align-middle font-medium text-muted-foreground">Actions</th>
              </tr>
            </thead>
            <tbody>
              <!-- Product 1 -->
              <tr class="border-b">
                <td class="p-4 align-middle">
                  <div class="flex items-center gap-3">
                    <img src="https://placehold.co/50x50/e2e8f0/1e293b?text=T1" alt="Premium Tricycle Model 1" class="rounded-md" width="50" height="50" />
                    <span class="font-medium">Premium Tricycle Model 1</span>
                  </div>
                </td>
                <td class="p-4 align-middle">
                  <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary text-primary-foreground hover:bg-primary/80">New</span>
                </td>
                <td class="p-4 align-middle">₦160,000</td>
                <td class="p-4 align-middle">5</td>
                <td class="p-4 align-middle">
                  <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-success text-success-foreground">In Stock</span>
                </td>
                <td class="p-4 align-middle text-right">
                  <div class="relative">
                    <button class="product-action-btn inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-8 px-3">
                      Actions
                    </button>
                    <div class="product-action-dropdown absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden">
                      <div class="py-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">View Details</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit Product</a>
                        <div class="border-t border-gray-200"></div>
                        <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Delete Product</a>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              
              <!-- Product 2 -->
              <tr class="border-b">
                <td class="p-4 align-middle">
                  <div class="flex items-center gap-3">
                    <img src="https://placehold.co/50x50/e2e8f0/1e293b?text=T2" alt="Premium Tricycle Model 2" class="rounded-md" width="50" height="50" />
                    <span class="font-medium">Premium Tricycle Model 2</span>
                  </div>
                </td>
                <td class="p-4 align-middle">
                  <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent border-border bg-background text-foreground">Used</span>
                </td>
                <td class="p-4 align-middle">₦120,000</td>
                <td class="p-4 align-middle">3</td>
                <td class="p-4 align-middle">
                  <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-success text-success-foreground">In Stock</span>
                </td>
                <td class="p-4 align-middle text-right">
                  <div class="relative">
                    <button class="product-action-btn inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-8 px-3">
                      Actions
                    </button>
                    <div class="product-action-dropdown absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden">
                      <div class="py-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">View Details</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit Product</a>
                        <div class="border-t border-gray-200"></div>
                        <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Delete Product</a>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              
              <!-- Product 3 -->
              <tr class="border-b">
                <td class="p-4 align-middle">
                  <div class="flex items-center gap-3">
                    <img src="https://placehold.co/50x50/e2e8f0/1e293b?text=T3" alt="Premium Tricycle Model 3" class="rounded-md" width="50" height="50" />
                    <span class="font-medium">Premium Tricycle Model 3</span>
                  </div>
                </td>
                <td class="p-4 align-middle">
                  <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary text-primary-foreground hover:bg-primary/80">New</span>
                </td>
                <td class="p-4 align-middle">₦180,000</td>
                <td class="p-4 align-middle">0</td>
                <td class="p-4 align-middle">
                  <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-destructive text-destructive-foreground">Out of Stock</span>
                </td>
                <td class="p-4 align-middle text-right">
                  <div class="relative">
                    <button class="product-action-btn inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-8 px-3">
                      Actions
                    </button>
                    <div class="product-action-dropdown absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden">
                      <div class="py-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">View Details</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit Product</a>
                        <div class="border-t border-gray-200"></div>
                        <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Delete Product</a>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      
      <!-- Add Product Section -->
      <div id="add-product-section" class="hidden p-4 md:p-8 space-y-4">
        <div class="flex items-center gap-2">
          <a href="#products" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10">
            <i data-lucide="arrow-left" class="h-4 w-4"></i>
          </a>
          <h2 class="text-3xl font-bold tracking-tight">Add New Product</h2>
        </div>
        
        <div class="grid gap-6 md:grid-cols-2">
          <div class="space-y-6">
            <div class="space-y-2">
              <label for="name" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Product Name</label>
              <input id="name" placeholder="Enter product name" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" />
            </div>
            
            <div class="space-y-2">
              <label for="description" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Description</label>
              <textarea id="description" placeholder="Enter product description" class="flex min-h-[150px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"></textarea>
            </div>
            
            <div class="grid gap-4 md:grid-cols-2">
              <div class="space-y-2">
                <label for="condition" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Condition</label>
                <select id="condition" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                  <option value="" disabled selected>Select condition</option>
                  <option value="new">New</option>
                  <option value="used">Used</option>
                </select>
              </div>
              
              <div class="space-y-2">
                <label for="price" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Price (₦)</label>
                <input id="price" type="number" placeholder="0.00" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" />
              </div>
            </div>
            
            <div class="grid gap-4 md:grid-cols-2">
              <div class="space-y-2">
                <label for="stock" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Stock Quantity</label>
                <input id="stock" type="number" placeholder="0" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" />
              </div>
              
              <div class="space-y-2">
                <label for="sku" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">SKU</label>
                <input id="sku" placeholder="Enter SKU" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" />
              </div>
            </div>
            
            <div class="space-y-2">
              <label for="features" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Key Features</label>
              <textarea id="features" placeholder="Enter key features (one per line)" class="flex min-h-[100px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"></textarea>
            </div>
          </div>
          
          <div class="space-y-6">
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
              <div class="p-6">
                <div class="space-y-2">
                  <h3 class="font-medium">Product Images</h3>
                  <p class="text-sm text-muted-foreground">
                    Upload up to 5 images of your product. The first image will be used as the cover.
                  </p>
                </div>
                <div class="mt-4">
                  <div class="space-y-4">
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                      <button type="button" class="aspect-square rounded-md border-2 border-dashed flex flex-col items-center justify-center gap-1 hover:bg-muted/50 transition-colors">
                        <i data-lucide="upload" class="h-6 w-6 text-muted-foreground"></i>
                        <span class="text-xs text-muted-foreground">Upload Image</span>
                      </button>
                    </div>
                    
                    <div class="text-center py-4">
                      <p class="text-sm text-muted-foreground">No images uploaded yet</p>
                      <button class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 mt-2">
                        <i data-lucide="upload" class="mr-2 h-4 w-4"></i>
                        Upload Images
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
              <div class="p-6">
                <div class="space-y-2">
                  <h3 class="font-medium">Specifications</h3>
                  <p class="text-sm text-muted-foreground">Add technical specifications for your product.</p>
                </div>
                <div class="mt-4 space-y-4">
                  <div class="grid grid-cols-2 gap-4">
                    <input placeholder="Engine Type" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" />
                    <input placeholder="Value" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" />
                  </div>
                  <div class="grid grid-cols-2 gap-4">
                    <input placeholder="Fuel Capacity" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" />
                    <input placeholder="Value" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" />
                  </div>
                  <div class="grid grid-cols-2 gap-4">
                    <input placeholder="Max Speed" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" />
                    <input placeholder="Value" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" />
                  </div>
                  <button class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 px-3 w-full">
                    Add More Specifications
                  </button>
                </div>
              </div>
            </div>
            
            <div class="flex justify-end gap-2">
              <button class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                Save as Draft
              </button>
              <button class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2">
                Publish Product
              </button>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Users Section -->
      <div id="users-section" class="hidden p-4 md:p-8 space-y-4">
        <div class="flex items-center justify-between">
          <h2 class="text-3xl font-bold tracking-tight">Manage Users</h2>
        </div>
        
        <div class="flex items-center gap-2">
          <input type="text" placeholder="Search users..." class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 max-w-sm" />
          <div class="relative">
            <button id="user-filter-button" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
              Filter
            </button>
            <div id="user-filter-dropdown" class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden">
              <div class="py-1">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">All Users</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Active Users</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Pending Users</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">With Purchases</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">No Purchases</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="rounded-md border">
          <table class="w-full">
            <thead>
              <tr class="border-b bg-muted/50">
                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">Name</th>
                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">Email</th>
                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">Total Purchases</th>
                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">Joined Date</th>
                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">Status</th>
                <th class="h-12 px-4 text-right align-middle font-medium text-muted-foreground">Actions</th>
              </tr>
            </thead>
            <tbody>
              <!-- User 1 -->
              <tr class="border-b">
                <td class="p-4 align-middle font-medium">John Doe</td>
                <td class="p-4 align-middle">john.doe@example.com</td>
                <td class="p-4 align-middle">3</td>
                <td class="p-4 align-middle">Oct 12, 2023</td>
                <td class="p-4 align-middle">
                  <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-success text-success-foreground">Active</span>
                </td>
                <td class="p-4 align-middle text-right">
                  <div class="relative">
                    <button class="user-action-btn inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-8 px-3">
                      Actions
                    </button>
                    <div class="user-action-dropdown absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden">
                      <div class="py-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">View Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">View Purchases</a>
                        <div class="border-t border-gray-200"></div>
                        <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Ban User</a>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              
              <!-- User 2 -->
              <tr class="border-b">
                <td class="p-4 align-middle font-medium">Jane Smith</td>
                <td class="p-4 align-middle">jane.smith@example.com</td>
                <td class="p-4 align-middle">1</td>
                <td class="p-4 align-middle">Nov 5, 2023</td>
                <td class="p-4 align-middle">
                  <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-success text-success-foreground">Active</span>
                </td>
                <td class="p-4 align-middle text-right">
                  <div class="relative">
                    <button class="user-action-btn inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-8 px-3">
                      Actions
                    </button>
                    <div class="user-action-dropdown absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden">
                      <div class="py-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">View Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">View Purchases</a>
                        <div class="border-t border-gray-200"></div>
                        <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Ban User</a>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              
              <!-- User 3 -->
              <tr class="border-b">
                <td class="p-4 align-middle font-medium">Michael Johnson</td>
                <td class="p-4 align-middle">michael.johnson@example.com</td>
                <td class="p-4 align-middle">5</td>
                <td class="p-4 align-middle">Aug 23, 2023</td>
                <td class="p-4 align-middle">
                  <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-success text-success-foreground">Active</span>
                </td>
                <td class="p-4 align-middle text-right">
                  <div class="relative">
                    <button class="user-action-btn inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-8 px-3">
                      Actions
                    </button>
                    <div class="user-action-dropdown absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden">
                      <div class="py-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">View Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">View Purchases</a>
                        <div class="border-t border-gray-200"></div>
                        <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Ban User</a>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      
      <!-- Payments Section -->
      <div id="payments-section" class="hidden p-4 md:p-8 space-y-4">
        <div class="flex items-center justify-between">
          <h2 class="text-3xl font-bold tracking-tight">Payment Verification</h2>
        </div>
        
        <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-4">
          <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
            <div class="flex flex-row items-center justify-between space-y-0 p-6 pb-2">
              <h3 class="text-sm font-medium">Total Payments</h3>
            </div>
            <div class="p-6 pt-0">
              <div class="text-2xl font-bold">₦2.8M</div>
              <p class="text-xs text-muted-foreground">Last 30 days</p>
            </div>
          </div>
          
          <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
            <div class="flex flex-row items-center justify-between space-y-0 p-6 pb-2">
              <h3 class="text-sm font-medium">Pending Verification</h3>
            </div>
            <div class="p-6 pt-0">
              <div class="text-2xl font-bold">18</div>
              <p class="text-xs text-muted-foreground">+3 since yesterday</p>
            </div>
          </div>
          
          <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
            <div class="flex flex-row items-center justify-between space-y-0 p-6 pb-2">
              <h3 class="text-sm font-medium">Verified Today</h3>
            </div>
            <div class="p-6 pt-0">
              <div class="text-2xl font-bold">5</div>
              <p class="text-xs text-muted-foreground">-2 from yesterday</p>
            </div>
          </div>
          
          <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
            <div class="flex flex-row items-center justify-between space-y-0 p-6 pb-2">
              <h3 class="text-sm font-medium">Rejected</h3>
            </div>
            <div class="p-6 pt-0">
              <div class="text-2xl font-bold">2</div>
              <p class="text-xs text-muted-foreground">This month</p>
            </div>
          </div>
        </div>
        
        <!-- Payment Tabs -->
        <div class="border-b">
          <div class="flex -mb-px space-x-6">
            <button class="payment-tab py-2 border-b-2 border-primary font-medium text-primary" data-tab="pending">Pending Verification</button>
            <button class="payment-tab py-2 border-b-2 border-transparent font-medium text-muted-foreground hover:text-foreground" data-tab="verified">Verified Payments</button>
            <button class="payment-tab py-2 border-b-2 border-transparent font-medium text-muted-foreground hover:text-foreground" data-tab="rejected">Rejected Payments</button>
          </div>
        </div>
        
        <!-- Payment Tab Content -->
        <div class="payment-content" data-content="pending">
          <div class="flex items-center gap-2">
            <input type="text" placeholder="Search payments..." class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 max-w-sm" />
          </div>
          
          <div class="rounded-md border mt-4">
            <table class="w-full">
              <thead>
                <tr class="border-b bg-muted/50">
                  <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">Customer</th>
                  <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">Product</th>
                  <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">Amount</th>
                  <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">Date</th>
                  <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">Payment Method</th>
                  <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">Status</th>
                  <th class="h-12 px-4 text-right align-middle font-medium text-muted-foreground">Actions</th>
                </tr>
              </thead>
              <tbody>
                <!-- Payment 1 -->
                <tr class="border-b">
                  <td class="p-4 align-middle font-medium">John Doe</td>
                  <td class="p-4 align-middle">Premium Tricycle Model 3</td>
                  <td class="p-4 align-middle">₦180,000</td>
                  <td class="p-4 align-middle">Oct 30, 2023</td>
                  <td class="p-4 align-middle">Bank Transfer</td>
                  <td class="p-4 align-middle">
                    <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent border-border bg-background text-foreground">Pending</span>
                  </td>
                  <td class="p-4 align-middle text-right">
                    <div class="flex justify-end gap-2">
                      <button class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-8 px-3">
                        View Details
                      </button>
                      <button class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-8 px-3">
                        Verify
                      </button>
                    </div>
                  </td>
                </tr>
                
                <!-- Payment 2 -->
                <tr class="border-b">
                  <td class="p-4 align-middle font-medium">Jane Smith</td>
                  <td class="p-4 align-middle">Premium Tricycle Model 1</td>
                  <td class="p-4 align-middle">₦160,000</td>
                  <td class="p-4 align-middle">Oct 29, 2023</td>
                  <td class="p-4 align-middle">Cash Deposit</td>
                  <td class="p-4 align-middle">
                    <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent border-border bg-background text-foreground">Pending</span>
                  </td>
                  <td class="p-4 align-middle text-right">
                    <div class="flex justify-end gap-2">
                      <button class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-8 px-3">
                        View Details
                      </button>
                      <button class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-8 px-3">
                        Verify
                      </button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        
        <div class="payment-content hidden" data-content="verified">
          <div class="flex items-center gap-2">
            <input type="text" placeholder="Search verified payments..." class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 max-w-sm" />
          </div>
          
          <div class="rounded-md border mt-4">
            <table class="w-full">
              <thead>
                <tr class="border-b bg-muted/50">
                  <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">Customer</th>
                  <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">Product</th>
                  <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">Amount</th>
                  <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">Payment Date</th>
                  <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">Verified Date</th>
                  <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">Status</th>
                  <th class="h-12 px-4 text-right align-middle font-medium text-muted-foreground">Actions</th>
                </tr>
              </thead>
              <tbody>
                <!-- Verified Payment 1 -->
                <tr class="border-b">
                  <td class="p-4 align-middle font-medium">David Wilson</td>
                  <td class="p-4 align-middle">Premium Tricycle Model 1</td>
                  <td class="p-4 align-middle">₦160,000</td>
                  <td class="p-4 align-middle">Oct 25, 2023</td>
                  <td class="p-4 align-middle">Oct 26, 2023</td>
                  <td class="p-4 align-middle">
                    <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-success text-success-foreground">Verified</span>
                  </td>
                  <td class="p-4 align-middle text-right">
                    <button class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-8 px-3">
                      View Details
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        
        <div class="payment-content hidden" data-content="rejected">
          <div class="flex items-center justify-center p-8">
            <p class="text-muted-foreground">No rejected payments found.</p>
          </div>
        </div>
      </div>
      
      <!-- Analytics Section -->
      <div id="analytics-section" class="hidden p-4 md:p-8 space-y-4">
        <div class="flex items-center justify-between">
          <h2 class="text-3xl font-bold tracking-tight">Analytics & Reports</h2>
          <div class="flex items-center gap-2">
            <select class="flex h-10 w-[180px] rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
              <option value="7days">Last 7 days</option>
              <option value="30days" selected>Last 30 days</option>
              <option value="90days">Last 90 days</option>
              <option value="year">This year</option>
            </select>
            <button class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
              <i data-lucide="download" class="mr-2 h-4 w-4"></i>
              Export
            </button>
          </div>
        </div>
        
        <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-4">
          <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
            <div class="flex flex-row items-center justify-between space-y-0 p-6 pb-2">
              <h3 class="text-sm font-medium">Total Revenue</h3>
            </div>
            <div class="p-6 pt-0">
              <div class="text-2xl font-bold">₦4.2M</div>
              <p class="text-xs text-muted-foreground">+12% from previous period</p>
            </div>
          </div>
          
          <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
            <div class="flex flex-row items-center justify-between space-y-0 p-6 pb-2">
              <h3 class="text-sm font-medium">Sales Count</h3>
            </div>
            <div class="p-6 pt-0">
              <div class="text-2xl font-bold">28</div>
              <p class="text-xs text-muted-foreground">+4% from previous period</p>
            </div>
          </div>
          
          <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
            <div class="flex flex-row items-center justify-between space-y-0 p-6 pb-2">
              <h3 class="text-sm font-medium">Average Order Value</h3>
            </div>
            <div class="p-6 pt-0">
              <div class="text-2xl font-bold">₦150K</div>
              <p class="text-xs text-muted-foreground">+8% from previous period</p>
            </div>
          </div>
          
          <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
            <div class="flex flex-row items-center justify-between space-y-0 p-6 pb-2">
              <h3 class="text-sm font-medium">New Customers</h3>
            </div>
            <div class="p-6 pt-0">
              <div class="text-2xl font-bold">180</div>
              <p class="text-xs text-muted-foreground">+15% from previous period</p>
            </div>
          </div>
        </div>
        
        <!-- Analytics Tabs -->
        <div class="border-b">
          <div class="flex -mb-px space-x-6">
            <button class="analytics-tab py-2 border-b-2 border-primary font-medium text-primary" data-tab="revenue">Revenue</button>
            <button class="analytics-tab py-2 border-b-2 border-transparent font-medium text-muted-foreground hover:text-foreground" data-tab="products">Product Performance</button>
            <button class="analytics-tab py-2 border-b-2 border-transparent font-medium text-muted-foreground hover:text-foreground" data-tab="customers">Customer Acquisition</button>
          </div>
        </div>
        
        <!-- Analytics Tab Content -->
        <div class="analytics-content" data-content="revenue">
          <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
            <div class="flex flex-col space-y-1.5 p-6">
              <h3 class="text-lg font-semibold">Revenue Overview</h3>
              <p class="text-sm text-muted-foreground">Monthly revenue for the current year</p>
            </div>
            <div class="p-6 pt-0">
              <canvas id="revenue-chart-analytics" height="350"></canvas>
            </div>
          </div>
        </div>
        
        <div class="analytics-content hidden" data-content="products">
          <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
            <div class="flex flex-col space-y-1.5 p-6">
              <h3 class="text-lg font-semibold">Product Performance</h3>
              <p class="text-sm text-muted-foreground">Top selling products by revenue</p>
            </div>
            <div class="p-6 pt-0">
              <canvas id="product-performance-chart" height="350"></canvas>
            </div>
          </div>
        </div>
        
        <div class="analytics-content hidden" data-content="customers">
          <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
            <div class="flex flex-col space-y-1.5 p-6">
              <h3 class="text-lg font-semibold">Customer Acquisition</h3>
              <p class="text-sm text-muted-foreground">New customer registrations over time</p>
            </div>
            <div class="p-6 pt-0">
              <canvas id="customer-acquisition-chart" height="350"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- JavaScript for Interactivity -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Initialize Lucide icons
      lucide.createIcons();
      
      // Sidebar Toggle
      const sidebar = document.getElementById('sidebar');
      const sidebarToggle = document.getElementById('sidebar-toggle');
      
      sidebarToggle.addEventListener('click', function() {
        sidebar.classList.toggle('translate-x-0');
        sidebar.classList.toggle('-translate-x-full');
      });
      
      // Navigation
      const navLinks = document.querySelectorAll('nav a');
      const sections = {
        '#dashboard': document.getElementById('dashboard-section'),
        '#products': document.getElementById('products-section'),
        '#add-product': document.getElementById('add-product-section'),
        '#users': document.getElementById('users-section'),
        '#payments': document.getElementById('payments-section'),
        '#analytics': document.getElementById('analytics-section')
      };
      
      function showSection(sectionId) {
        // Hide all sections
        Object.values(sections).forEach(section => {
          if (section) section.classList.add('hidden');
        });
        
        // Show the selected section
        const section = sections[sectionId];
        if (section) section.classList.remove('hidden');
        
        // Update active nav link
        navLinks.forEach(link => {
          if (link.getAttribute('href') === sectionId) {
            link.classList.add('bg-primary/10', 'text-primary');
            link.classList.remove('text-foreground', 'hover:bg-muted');
          } else {
            link.classList.remove('bg-primary/10', 'text-primary');
            link.classList.add('text-foreground', 'hover:bg-muted');
          }
        });
        
        // Close mobile sidebar after navigation
        if (window.innerWidth < 768) {
          sidebar.classList.add('-translate-x-full');
          sidebar.classList.remove('translate-x-0');
        }
      }
      
      navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
          e.preventDefault();
          const sectionId = this.getAttribute('href');
          showSection(sectionId);
          
          // Update URL hash
          window.location.hash = sectionId;
        });
      });
      
      // Check URL hash on page load
      if (window.location.hash && sections[window.location.hash]) {
        showSection(window.location.hash);
      }
      
      // Dashboard Tabs
      const dashboardTabs = document.querySelectorAll('.dashboard-tab');
      const dashboardContents = document.querySelectorAll('.dashboard-content');
      
      dashboardTabs.forEach(tab => {
        tab.addEventListener('click', function() {
          const tabName = this.getAttribute('data-tab');
          
          // Update active tab
          dashboardTabs.forEach(t => {
            t.classList.remove('border-primary', 'text-primary');
            t.classList.add('border-transparent', 'text-muted-foreground');
          });
          this.classList.add('border-primary', 'text-primary');
          this.classList.remove('border-transparent', 'text-muted-foreground');
          
          // Show content
          dashboardContents.forEach(content => {
            if (content.getAttribute('data-content') === tabName) {
              content.classList.remove('hidden');
            } else {
              content.classList.add('hidden');
            }
          });
        });
      });
      
      // Payment Tabs
      const paymentTabs = document.querySelectorAll('.payment-tab');
      const paymentContents = document.querySelectorAll('.payment-content');
      
      paymentTabs.forEach(tab => {
        tab.addEventListener('click', function() {
          const tabName = this.getAttribute('data-tab');
          
          // Update active tab
          paymentTabs.forEach(t => {
            t.classList.remove('border-primary', 'text-primary');
            t.classList.add('border-transparent', 'text-muted-foreground');
          });
          this.classList.add('border-primary', 'text-primary');
          this.classList.remove('border-transparent', 'text-muted-foreground');
          
          // Show content
          paymentContents.forEach(content => {
            if (content.getAttribute('data-content') === tabName) {
              content.classList.remove('hidden');
            } else {
              content.classList.add('hidden');
            }
          });
        });
      });
      
      // Analytics Tabs
      const analyticsTabs = document.querySelectorAll('.analytics-tab');
      const analyticsContents = document.querySelectorAll('.analytics-content');
      
      analyticsTabs.forEach(tab => {
        tab.addEventListener('click', function() {
          const tabName = this.getAttribute('data-tab');
          
          // Update active tab
          analyticsTabs.forEach(t => {
            t.classList.remove('border-primary', 'text-primary');
            t.classList.add('border-transparent', 'text-muted-foreground');
          });
          this.classList.add('border-primary', 'text-primary');
          this.classList.remove('border-transparent', 'text-muted-foreground');
          
          // Show content
          analyticsContents.forEach(content => {
            if (content.getAttribute('data-content') === tabName) {
              content.classList.remove('hidden');
            } else {
              content.classList.add('hidden');
            }
          });
        });
      });
      
      // Dropdowns
      const filterButton = document.getElementById('filter-button');
      const filterDropdown = document.getElementById('filter-dropdown');
      
      if (filterButton && filterDropdown) {
        filterButton.addEventListener('click', function() {
          filterDropdown.classList.toggle('hidden');
        });
        
        document.addEventListener('click', function(e) {
          if (!filterButton.contains(e.target) && !filterDropdown.contains(e.target)) {
            filterDropdown.classList.add('hidden');
          }
        });
      }
      
      const userFilterButton = document.getElementById('user-filter-button');
      const userFilterDropdown = document.getElementById('user-filter-dropdown');
      
      if (userFilterButton && userFilterDropdown) {
        userFilterButton.addEventListener('click', function() {
          userFilterDropdown.classList.toggle('hidden');
        });
        
        document.addEventListener('click', function(e) {
          if (!userFilterButton.contains(e.target) && !userFilterDropdown.contains(e.target)) {
            userFilterDropdown.classList.add('hidden');
          }
        });
      }
      
      // Product Action Dropdowns
      const productActionBtns = document.querySelectorAll('.product-action-btn');
      const productActionDropdowns = document.querySelectorAll('.product-action-dropdown');
      
      productActionBtns.forEach((btn, index) => {
        btn.addEventListener('click', function(e) {
          e.stopPropagation();
          productActionDropdowns[index].classList.toggle('hidden');
          
          // Close other dropdowns
          productActionDropdowns.forEach((dropdown, i) => {
            if (i !== index) {
              dropdown.classList.add('hidden');
            }
          });
        });
      });
      
      // User Action Dropdowns
      const userActionBtns = document.querySelectorAll('.user-action-btn');
      const userActionDropdowns = document.querySelectorAll('.user-action-dropdown');
      
      userActionBtns.forEach((btn, index) => {
        btn.addEventListener('click', function(e) {
          e.stopPropagation();
          userActionDropdowns[index].classList.toggle('hidden');
          
          // Close other dropdowns
          userActionDropdowns.forEach((dropdown, i) => {
            if (i !== index) {
              dropdown.classList.add('hidden');
            }
          });
        });
      });
      
      // Close dropdowns when clicking outside
      document.addEventListener('click', function() {
        productActionDropdowns.forEach(dropdown => {
          dropdown.classList.add('hidden');
        });
        
        userActionDropdowns.forEach(dropdown => {
          dropdown.classList.add('hidden');
        });
      });
      
      // Charts
      // Revenue Chart
      const revenueChartCtx = document.getElementById('revenue-chart');
      if (revenueChartCtx) {
        new Chart(revenueChartCtx, {
          type: 'bar',
          data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
              label: 'Revenue',
              data: [1800000, 2200000, 2900000, 3100000, 2800000, 3300000, 3500000, 3800000, 4000000, 4200000, 0, 0],
              backgroundColor: '#3b82f6',
              borderRadius: 4,
            }]
          },
          options: {
            responsive: true,
            scales: {
              y: {
                beginAtZero: true,
                ticks: {
                  callback: function(value) {
                    return '₦' + (value / 1000000).toFixed(1) + 'M';
                  }
                }
              }
            },
            plugins: {
              tooltip: {
                callbacks: {
                  label: function(context) {
                    return '₦' + context.raw.toLocaleString();
                  }
                }
              }
            }
          }
        });
      }
      
      // Analytics Charts
      const revenueChartAnalyticsCtx = document.getElementById('revenue-chart-analytics');
      if (revenueChartAnalyticsCtx) {
        new Chart(revenueChartAnalyticsCtx, {
          type: 'bar',
          data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
              label: 'Revenue',
              data: [1800000, 2200000, 2900000, 3100000, 2800000, 3300000, 3500000, 3800000, 4000000, 4200000, 0, 0],
              backgroundColor: '#3b82f6',
              borderRadius: 4,
            }]
          },
          options: {
            responsive: true,
            scales: {
              y: {
                beginAtZero: true,
                ticks: {
                  callback: function(value) {
                    return '₦' + (value / 1000000).toFixed(1) + 'M';
                  }
                }
              }
            },
            plugins: {
              tooltip: {
                callbacks: {
                  label: function(context) {
                    return '₦' + context.raw.toLocaleString();
                  }
                }
              }
            }
          }
        });
      }
      
      // Product Performance Chart
      const productPerformanceChartCtx = document.getElementById('product-performance-chart');
      if (productPerformanceChartCtx) {
        new Chart(productPerformanceChartCtx, {
          type: 'bar',
          data: {
            labels: ['Model 1', 'Model 2', 'Model 3', 'Model 4', 'Model 5'],
            datasets: [
              {
                label: 'Revenue',
                data: [1200000, 960000, 720000, 570000, 400000],
                backgroundColor: '#3b82f6',
                borderRadius: 4,
                yAxisID: 'y'
              },
              {
                label: 'Units Sold',
                data: [8, 8, 4, 3, 2],
                backgroundColor: '#10b981',
                borderRadius: 4,
                yAxisID: 'y1'
              }
            ]
          },
          options: {
            responsive: true,
            scales: {
              y: {
                beginAtZero: true,
                position: 'left',
                ticks: {
                  callback: function(value) {
                    return '₦' + (value / 1000).toFixed(0) + 'K';
                  }
                }
              },
              y1: {
                beginAtZero: true,
                position: 'right',
                grid: {
                  drawOnChartArea: false
                }
              }
            },
            plugins: {
              tooltip: {
                callbacks: {
                  label: function(context) {
                    if (context.dataset.label === 'Revenue') {
                      return 'Revenue: ₦' + context.raw.toLocaleString();
                    }
                    return 'Units Sold: ' + context.raw;
                  }
                }
              }
            }
          }
        });
      }
      
      // Customer Acquisition Chart
      const customerAcquisitionChartCtx = document.getElementById('customer-acquisition-chart');
      if (customerAcquisitionChartCtx) {
        new Chart(customerAcquisitionChartCtx, {
          type: 'line',
          data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
              label: 'New Customers',
              data: [120, 145, 162, 170, 190, 210, 220, 215, 250, 280, 0, 0],
              borderColor: '#3b82f6',
              backgroundColor: 'rgba(59, 130, 246, 0.1)',
              tension: 0.2,
              fill: true
            }]
          },
          options: {
            responsive: true,
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });
      }
    });
  </script>
</body>
</html>