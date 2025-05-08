<!-- Browse Products Content -->
<div class="p-6">
    <!-- Search and Filters -->
    <div class="bg-white rounded-lg shadow mb-6">
      <div class="p-6">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
          <!-- Search Bar -->
          <div class="relative flex-grow max-w-lg">
            <input type="text" placeholder="Search tricycles..." class="pl-10 pr-4 py-2 border rounded-md w-full focus:outline-none focus:ring-2 focus:ring-sky-500">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
              <i class="fas fa-search text-gray-400"></i>
            </div>
          </div>
          
          <!-- Filters -->
          <div class="flex flex-wrap gap-2">
            <div class="relative">
              <select class="appearance-none bg-white border rounded-md px-4 py-2 pr-8 focus:outline-none focus:ring-2 focus:ring-sky-500">
                <option value="">Price Range</option>
                <option value="0-500000">Under ₦500,000</option>
                <option value="500000-750000">₦500,000 - ₦750,000</option>
                <option value="750000-1000000">₦750,000 - ₦1,000,000</option>
                <option value="1000000+">Above ₦1,000,000</option>
              </select>
              <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                <i class="fas fa-chevron-down text-gray-400"></i>
              </div>
            </div>
            
            <div class="relative">
              <select class="appearance-none bg-white border rounded-md px-4 py-2 pr-8 focus:outline-none focus:ring-2 focus:ring-sky-500">
                <option value="">Category</option>
                <option value="passenger">Passenger</option>
                <option value="cargo">Cargo</option>
                <option value="hybrid">Hybrid</option>
              </select>
              <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                <i class="fas fa-chevron-down text-gray-400"></i>
              </div>
            </div>
            
            <div class="relative">
              <select class="appearance-none bg-white border rounded-md px-4 py-2 pr-8 focus:outline-none focus:ring-2 focus:ring-sky-500">
                <option value="">Sort By</option>
                <option value="price-asc">Price: Low to High</option>
                <option value="price-desc">Price: High to Low</option>
                <option value="newest">Newest First</option>
                <option value="popular">Most Popular</option>
              </select>
              <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                <i class="fas fa-chevron-down text-gray-400"></i>
              </div>
            </div>
            
            <button class="bg-gray-100 hover:bg-gray-200 border rounded-md px-4 py-2 flex items-center gap-2">
              <i class="fas fa-filter text-gray-500"></i>
              <span>More Filters</span>
            </button>
          </div>
        </div>
        
        <!-- Active Filters (if any) -->
        <div class="mt-4 flex flex-wrap gap-2">
          <div class="bg-sky-50 text-sky-700 px-3 py-1 rounded-full text-sm flex items-center">
            Price: ₦500,000 - ₦750,000
            <button class="ml-2 text-sky-500 hover:text-sky-700">
              <i class="fas fa-times-circle"></i>
            </button>
          </div>
          <div class="bg-sky-50 text-sky-700 px-3 py-1 rounded-full text-sm flex items-center">
            Category: Passenger
            <button class="ml-2 text-sky-500 hover:text-sky-700">
              <i class="fas fa-times-circle"></i>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Featured Products -->
    <div class="mb-8">
      <h2 class="text-xl font-semibold mb-4">Featured Tricycles</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Featured Product 1 -->
        <div class="bg-white rounded-lg shadow overflow-hidden group">
          <div class="relative">
            <img src="https://placehold.co/600x400" alt="Premium Tricycle X1" class="w-full h-48 object-cover">
            <div class="absolute top-0 right-0 bg-sky-500 text-white px-3 py-1 m-2 rounded-full text-sm font-medium">
              Featured
            </div>
            <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
              <button class="bg-white text-sky-500 hover:bg-sky-50 p-2 rounded-full mx-1">
                <i class="fas fa-eye"></i>
              </button>
              <button class="bg-white text-sky-500 hover:bg-sky-50 p-2 rounded-full mx-1">
                <i class="fas fa-heart"></i>
              </button>
              <button class="bg-white text-sky-500 hover:bg-sky-50 p-2 rounded-full mx-1">
                <i class="fas fa-calculator"></i>
              </button>
            </div>
          </div>
          <div class="p-4">
            <div class="flex justify-between items-start mb-2">
              <h3 class="font-semibold text-lg">Premium Tricycle X1</h3>
              <div class="flex items-center text-yellow-400 text-sm">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span class="text-gray-500 ml-1">(4.5)</span>
              </div>
            </div>
            <p class="text-gray-500 text-sm mb-3">The Premium X1 is our flagship passenger tricycle with enhanced comfort and superior performance.</p>
            <div class="flex flex-wrap gap-2 mb-3">
              <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">Passenger</span>
              <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">4-Stroke</span>
              <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">200cc</span>
            </div>
            <div class="flex justify-between items-center">
              <div>
                <p class="text-gray-400 text-sm line-through">₦800,000</p>
                <p class="text-sky-600 font-bold text-xl">₦750,000</p>
              </div>
              <a href="product-details.html" class="bg-sky-500 hover:bg-sky-600 text-white px-4 py-2 rounded-md text-sm">View Details</a>
            </div>
          </div>
        </div>

        <!-- Featured Product 2 -->
        <div class="bg-white rounded-lg shadow overflow-hidden group">
          <div class="relative">
            <img src="https://placehold.co/600x400" alt="Deluxe Tricycle D3" class="w-full h-48 object-cover">
            <div class="absolute top-0 right-0 bg-green-500 text-white px-3 py-1 m-2 rounded-full text-sm font-medium">
              New Arrival
            </div>
            <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
              <button class="bg-white text-sky-500 hover:bg-sky-50 p-2 rounded-full mx-1">
                <i class="fas fa-eye"></i>
              </button>
              <button class="bg-white text-sky-500 hover:bg-sky-50 p-2 rounded-full mx-1">
                <i class="fas fa-heart"></i>
              </button>
              <button class="bg-white text-sky-500 hover:bg-sky-50 p-2 rounded-full mx-1">
                <i class="fas fa-calculator"></i>
              </button>
            </div>
          </div>
          <div class="p-4">
            <div class="flex justify-between items-start mb-2">
              <h3 class="font-semibold text-lg">Deluxe Tricycle D3</h3>
              <div class="flex items-center text-yellow-400 text-sm">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span class="text-gray-500 ml-1">(5.0)</span>
              </div>
            </div>
            <p class="text-gray-500 text-sm mb-3">The Deluxe D3 combines luxury with functionality, featuring premium materials and advanced technology.</p>
            <div class="flex flex-wrap gap-2 mb-3">
              <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">Passenger</span>
              <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">4-Stroke</span>
              <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">250cc</span>
            </div>
            <div class="flex justify-between items-center">
              <div>
                <p class="text-sky-600 font-bold text-xl">₦850,000</p>
              </div>
              <a href="product-details.html" class="bg-sky-500 hover:bg-sky-600 text-white px-4 py-2 rounded-md text-sm">View Details</a>
            </div>
          </div>
        </div>

        <!-- Featured Product 3 -->
        <div class="bg-white rounded-lg shadow overflow-hidden group">
          <div class="relative">
            <img src="https://placehold.co/600x400" alt="Cargo Tricycle C2" class="w-full h-48 object-cover">
            <div class="absolute top-0 right-0 bg-purple-500 text-white px-3 py-1 m-2 rounded-full text-sm font-medium">
              Best Seller
            </div>
            <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
              <button class="bg-white text-sky-500 hover:bg-sky-50 p-2 rounded-full mx-1">
                <i class="fas fa-eye"></i>
              </button>
              <button class="bg-white text-sky-500 hover:bg-sky-50 p-2 rounded-full mx-1">
                <i class="fas fa-heart"></i>
              </button>
              <button class="bg-white text-sky-500 hover:bg-sky-50 p-2 rounded-full mx-1">
                <i class="fas fa-calculator"></i>
              </button>
            </div>
          </div>
          <div class="p-4">
            <div class="flex justify-between items-start mb-2">
              <h3 class="font-semibold text-lg">Cargo Tricycle C2</h3>
              <div class="flex items-center text-yellow-400 text-sm">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <span class="text-gray-500 ml-1">(4.0)</span>
              </div>
            </div>
            <p class="text-gray-500 text-sm mb-3">The Cargo C2 is designed for heavy-duty transport with enhanced load capacity and durability.</p>
            <div class="flex flex-wrap gap-2 mb-3">
              <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">Cargo</span>
              <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">4-Stroke</span>
              <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">300cc</span>
            </div>
            <div class="flex justify-between items-center">
              <div>
                <p class="text-sky-600 font-bold text-xl">₦950,000</p>
              </div>
              <a href="product-details.html" class="bg-sky-500 hover:bg-sky-600 text-white px-4 py-2 rounded-md text-sm">View Details</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- All Products -->
    <div>
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold">All Tricycles</h2>
        <p class="text-gray-500 text-sm">Showing 1-6 of 12 products</p>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Product 1 -->
        <div class="bg-white rounded-lg shadow overflow-hidden group">
          <div class="relative">
            <img src="https://placehold.co/600x400" alt="Economy Tricycle E2" class="w-full h-48 object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
              <button class="bg-white text-sky-500 hover:bg-sky-50 p-2 rounded-full mx-1">
                <i class="fas fa-eye"></i>
              </button>
              <button class="bg-white text-sky-500 hover:bg-sky-50 p-2 rounded-full mx-1">
                <i class="fas fa-heart"></i>
              </button>
              <button class="bg-white text-sky-500 hover:bg-sky-50 p-2 rounded-full mx-1">
                <i class="fas fa-calculator"></i>
              </button>
            </div>
          </div>
          <div class="p-4">
            <div class="flex justify-between items-start mb-2">
              <h3 class="font-semibold text-lg">Economy Tricycle E2</h3>
              <div class="flex items-center text-yellow-400 text-sm">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star"></i>
                <span class="text-gray-500 ml-1">(3.5)</span>
              </div>
            </div>
            <p class="text-gray-500 text-sm mb-3">The Economy E2 offers reliable performance at an affordable price point for budget-conscious buyers.</p>
            <div class="flex flex-wrap gap-2 mb-3">
              <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">Passenger</span>
              <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">4-Stroke</span>
              <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">150cc</span>
            </div>
            <div class="flex justify-between items-center">
              <div>
                <p class="text-sky-600 font-bold text-xl">₦450,000</p>
              </div>
              <a href="product-details.html" class="bg-sky-500 hover:bg-sky-600 text-white px-4 py-2 rounded-md text-sm">View Details</a>
            </div>
          </div>
        </div>

        <!-- Product 2 -->
        <div class="bg-white rounded-lg shadow overflow-hidden group">
          <div class="relative">
            <img src="https://placehold.co/600x400" alt="Standard Tricycle S1" class="w-full h-48 object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
              <button class="bg-white text-sky-500 hover:bg-sky-50 p-2 rounded-full mx-1">
                <i class="fas fa-eye"></i>
              </button>
              <button class="bg-white text-sky-500 hover:bg-sky-50 p-2 rounded-full mx-1">
                <i class="fas fa-heart"></i>
              </button>
              <button class="bg-white text-sky-500 hover:bg-sky-50 p-2 rounded-full mx-1">
                <i class="fas fa-calculator"></i>
              </button>
            </div>
          </div>
          <div class="p-4">
            <div class="flex justify-between items-start mb-2">
              <h3 class="font-semibold text-lg">Standard Tricycle S1</h3>
              <div class="flex items-center text-yellow-400 text-sm">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <span class="text-gray-500 ml-1">(4.0)</span>
              </div>
            </div>
            <p class="text-gray-500 text-sm mb-3">The Standard S1 balances quality and affordability, perfect for everyday commercial use.</p>
            <div class="flex flex-wrap gap-2 mb-3">
              <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">Passenger</span>
              <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">4-Stroke</span>
              <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">175cc</span>
            </div>
            <div class="flex justify-between items-center">
              <div>
                <p class="text-sky-600 font-bold text-xl">₦650,000</p>
              </div>
              <a href="product-details.html" class="bg-sky-500 hover:bg-sky-600 text-white px-4 py-2 rounded-md text-sm">View Details</a>
            </div>
          </div>
        </div>

        <!-- Product 3 -->
        <div class="bg-white rounded-lg shadow overflow-hidden group">
          <div class="relative">
            <img src="https://placehold.co/600x400" alt="Hybrid Tricycle H1" class="w-full h-48 object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
              <button class="bg-white text-sky-500 hover:bg-sky-50 p-2 rounded-full mx-1">
                <i class="fas fa-eye"></i>
              </button>
              <button class="bg-white text-sky-500 hover:bg-sky-50 p-2 rounded-full mx-1">
                <i class="fas fa-heart"></i>
              </button>
              <button class="bg-white text-sky-500 hover:bg-sky-50 p-2 rounded-full mx-1">
                <i class="fas fa-calculator"></i>
              </button>
            </div>
          </div>
          <div class="p-4">
            <div class="flex justify-between items-start mb-2">
              <h3 class="font-semibold text-lg">Hybrid Tricycle H1</h3>
              <div class="flex items-center text-yellow-400 text-sm">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span class="text-gray-500 ml-1">(4.5)</span>
              </div>
            </div>
            <p class="text-gray-500 text-sm mb-3">The Hybrid H1 features a convertible design that can switch between passenger and cargo configurations.</p>
            <div class="flex flex-wrap gap-2 mb-3">
              <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">Hybrid</span>
              <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">4-Stroke</span>
              <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">200cc</span>
            </div>
            <div class="flex justify-between items-center">
              <div>
                <p class="text-sky-600 font-bold text-xl">₦780,000</p>
              </div>
              <a href="product-details.html" class="bg-sky-500 hover:bg-sky-600 text-white px-4 py-2 rounded-md text-sm">View Details</a>
            </div>
          </div>
        </div>

        <!-- Product 4 -->
        <div class="bg-white rounded-lg shadow overflow-hidden group">
          <div class="relative">
            <img src="https://placehold.co/600x400" alt="Electric Tricycle E1" class="w-full h-48 object-cover">
            <div class="absolute top-0 right-0 bg-blue-500 text-white px-3 py-1 m-2 rounded-full text-sm font-medium">
              Eco-Friendly
            </div>
            <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
              <button class="bg-white text-sky-500 hover:bg-sky-50 p-2 rounded-full mx-1">
                <i class="fas fa-eye"></i>
              </button>
              <button class="bg-white text-sky-500 hover:bg-sky-50 p-2 rounded-full mx-1">
                <i class="fas fa-heart"></i>
              </button>
              <button class="bg-white text-sky-500 hover:bg-sky-50 p-2 rounded-full mx-1">
                <i class="fas fa-calculator"></i>
              </button>
            </div>
          </div>
          <div class="p-4">
            <div class="flex justify-between items-start mb-2">
              <h3 class="font-semibold text-lg">Electric Tricycle E1</h3>
              <div class="flex items-center text-yellow-400 text-sm">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span class="text-gray-500 ml-1">(5.0)</span>
              </div>
            </div>
            <p class="text-gray-500 text-sm mb-3">The Electric E1 is our eco-friendly option with zero emissions and low operating costs.</p>
            <div class="flex flex-wrap gap-2 mb-3">
              <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">Passenger</span>
              <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">Electric</span>
              <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">60V/100Ah</span>
            </div>
            <div class="flex justify-between items-center">
              <div>
                <p class="text-sky-600 font-bold text-xl">₦1,200,000</p>
              </div>
              <a href="product-details.html" class="bg-sky-500 hover:bg-sky-600 text-white px-4 py-2 rounded-md text-sm">View Details</a>
            </div>
          </div>
        </div>

        <!-- Product 5 -->
        <div class="bg-white rounded-lg shadow overflow-hidden group">
          <div class="relative">
            <img src="https://placehold.co/600x400" alt="Heavy Duty Cargo HC1" class="w-full h-48 object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
              <button class="bg-white text-sky-500 hover:bg-sky-50 p-2 rounded-full mx-1">
                <i class="fas fa-eye"></i>
              </button>
              <button class="bg-white text-sky-500 hover:bg-sky-50 p-2 rounded-full mx-1">
                <i class="fas fa-heart"></i>
              </button>
              <button class="bg-white text-sky-500 hover:bg-sky-50 p-2 rounded-full mx-1">
                <i class="fas fa-calculator"></i>
              </button>
            </div>
          </div>
          <div class="p-4">
            <div class="flex justify-between items-start mb-2">
              <h3 class="font-semibold text-lg">Heavy Duty Cargo HC1</h3>
              <div class="flex items-center text-yellow-400 text-sm">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <span class="text-gray-500 ml-1">(4.0)</span>
              </div>
            </div>
            <p class="text-gray-500 text-sm mb-3">The Heavy Duty HC1 is built for maximum load capacity with reinforced chassis and powerful engine.</p>
            <div class="flex flex-wrap gap-2 mb-3">
              <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">Cargo</span>
              <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">4-Stroke</span>
              <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">350cc</span>
            </div>
            <div class="flex justify-between items-center">
              <div>
                <p class="text-sky-600 font-bold text-xl">₦1,050,000</p>
              </div>
              <a href="product-details.html" class="bg-sky-500 hover:bg-sky-600 text-white px-4 py-2 rounded-md text-sm">View Details</a>
            </div>
          </div>
        </div>

        <!-- Product 6 -->
        <div class="bg-white rounded-lg shadow overflow-hidden group">
          <div class="relative">
            <img src="https://placehold.co/600x400" alt="Compact Tricycle C1" class="w-full h-48 object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
              <button class="bg-white text-sky-500 hover:bg-sky-50 p-2 rounded-full mx-1">
                <i class="fas fa-eye"></i>
              </button>
              <button class="bg-white text-sky-500 hover:bg-sky-50 p-2 rounded-full mx-1">
                <i class="fas fa-heart"></i>
              </button>
              <button class="bg-white text-sky-500 hover:bg-sky-50 p-2 rounded-full mx-1">
                <i class="fas fa-calculator"></i>
              </button>
            </div>
          </div>
          <div class="p-4">
            <div class="flex justify-between items-start mb-2">
              <h3 class="font-semibold text-lg">Compact Tricycle C1</h3>
              <div class="flex items-center text-yellow-400 text-sm">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <span class="text-gray-500 ml-1">(3.0)</span>
              </div>
            </div>
            <p class="text-gray-500 text-sm mb-3">The Compact C1 is designed for urban environments with a smaller footprint and nimble handling.</p>
            <div class="flex flex-wrap gap-2 mb-3">
              <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">Passenger</span>
              <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">4-Stroke</span>
              <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">125cc</span>
            </div>
            <div class="flex justify-between items-center">
              <div>
                <p class="text-sky-600 font-bold text-xl">₦400,000</p>
              </div>
              <a href="product-details.html" class="bg-sky-500 hover:bg-sky-600 text-white px-4 py-2 rounded-md text-sm">View Details</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Pagination -->
      <div class="mt-8 flex justify-center">
        <nav class="flex items-center space-x-2">
          <a href="#" class="px-3 py-2 rounded-md border text-gray-500 hover:bg-gray-50">
            <i class="fas fa-chevron-left"></i>
          </a>
          <a href="#" class="px-3 py-2 rounded-md border bg-sky-500 text-white">1</a>
          <a href="#" class="px-3 py-2 rounded-md border text-gray-700 hover:bg-gray-50">2</a>
          <a href="#" class="px-3 py-2 rounded-md border text-gray-700 hover:bg-gray-50">3</a>
          <span class="px-3 py-2 text-gray-500">...</span>
          <a href="#" class="px-3 py-2 rounded-md border text-gray-700 hover:bg-gray-50">8</a>
          <a href="#" class="px-3 py-2 rounded-md border text-gray-500 hover:bg-gray-50">
            <i class="fas fa-chevron-right"></i>
          </a>
        </nav>
      </div>
    </div>
  </div>