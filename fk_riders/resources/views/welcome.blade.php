<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FK Riders - Reliable Tricycles, Flexible Payment</title>
  <meta name="description" content="Buy brand new or neatly used tricycles with ease. Pay once or spread across 12 months.">
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
            border: '#e2e8f0',
            input: '#e2e8f0',
            ring: '#3b82f6',
            background: '#ffffff',
            foreground: '#0f172a',
          },
          borderRadius: {
            lg: '0.5rem',
            md: '0.375rem',
            sm: '0.25rem',
          },
        },
        container: {
          center: true,
          padding: '2rem',
          screens: {
            '2xl': '1400px',
          },
        },
      },
    }
  </script>
  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="flex min-h-screen flex-col bg-background text-foreground">
  <!-- Header -->
  <header class="sticky top-0 z-40 w-full border-b bg-background">
    <div class="container flex h-16 items-center justify-between">
      <div class="flex items-center gap-2">
        <a href="/" class="font-bold text-xl flex items-center">
          <span class="text-primary">FK</span> Riders
        </a>
      </div>

      <nav class="hidden md:flex gap-6">
        <a href="#" class="text-sm font-medium hover:text-primary transition-colors">
          Home
        </a>
        <a href="#products" class="text-sm font-medium hover:text-primary transition-colors">
          Products
        </a>
        <a href="#about" class="text-sm font-medium hover:text-primary transition-colors">
          About Us
        </a>
        <a href="#faqs" class="text-sm font-medium hover:text-primary transition-colors">
          FAQs
        </a>
        <a href="#contact" class="text-sm font-medium hover:text-primary transition-colors">
          Contact
        </a>
      </nav>

      <div class="hidden md:flex items-center gap-4">
        <a href="#" class="text-sm font-medium hover:underline underline-offset-4">
          Sign In
        </a>
        <a href="#" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2">
          Browse Tricycles
        </a>
      </div>

      <!-- Mobile Menu Button -->
      <button class="md:hidden inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10" id="mobile-menu-button">
        <i data-lucide="menu" class="h-5 w-5"></i>
        <span class="sr-only">Toggle menu</span>
      </button>
    </div>

    <!-- Mobile Menu (Hidden by default) -->
    <div class="md:hidden hidden" id="mobile-menu">
      <div class="flex flex-col gap-4 p-4 border-t">
        <a href="#" class="text-sm font-medium hover:text-primary transition-colors">
          Home
        </a>
        <a href="#products" class="text-sm font-medium hover:text-primary transition-colors">
          Products
        </a>
        <a href="#about" class="text-sm font-medium hover:text-primary transition-colors">
          About Us
        </a>
        <a href="#faqs" class="text-sm font-medium hover:text-primary transition-colors">
          FAQs
        </a>
        <a href="#contact" class="text-sm font-medium hover:text-primary transition-colors">
          Contact
        </a>
        <div class="flex flex-col gap-2 mt-4">
          <a href="#" class="text-sm font-medium hover:underline underline-offset-4">
            Sign In
          </a>
          <a href="#" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 text-center">
            Browse Tricycles
          </a>
        </div>
      </div>
    </div>
  </header>

  <main class="flex-1">
    <!-- Hero Section -->
    <section class="w-full py-12 md:py-24 lg:py-32 bg-muted">
      <div class="container px-4 md:px-6">
        <div class="grid gap-6 lg:grid-cols-2 lg:gap-12 items-center">
          <div class="flex flex-col justify-center space-y-4">
            <div class="space-y-2">
              <h1 class="text-3xl font-bold tracking-tighter sm:text-5xl xl:text-6xl/none">
                Reliable Tricycles, Flexible Payment.
              </h1>
              <p class="max-w-[600px] text-muted-foreground md:text-xl">
                Buy brand new or neatly used tricycles with ease. Pay once or spread across 12 months.
              </p>
            </div>
            <div class="flex flex-col gap-2 min-[400px]:flex-row">
              <a href="#" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-11 px-8">
                Browse Products
              </a>
              <a href="#" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-11 px-8">
                Start Installment Plan
              </a>
            </div>
          </div>
          <div class="mx-auto w-full max-w-[500px] lg:max-w-none">
            <img
              src="https://placehold.co/600x400/e2e8f0/1e293b?text=FK+Riders+Tricycles"
              alt="FK Riders Tricycles"
              class="w-full h-auto rounded-xl object-cover"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- Value Proposition -->
    <section class="w-full py-12 md:py-24 lg:py-32">
      <div class="container px-4 md:px-6">
        <div class="flex flex-col items-center justify-center space-y-4 text-center">
          <div class="space-y-2">
            <h2 class="text-3xl font-bold tracking-tighter md:text-4xl/tight">Why Choose FK Riders?</h2>
            <p class="mx-auto max-w-[700px] text-muted-foreground md:text-xl/relaxed">
              We provide quality tricycles with flexible payment options and exceptional service.
            </p>
          </div>
        </div>
        <div class="mx-auto grid max-w-5xl items-center gap-6 py-12 lg:grid-cols-4">
          <div class="flex flex-col items-center space-y-2 border rounded-lg p-6 shadow-sm">
            <i data-lucide="credit-card" class="h-12 w-12 text-primary"></i>
            <h3 class="text-xl font-bold">Flexible Installment</h3>
            <p class="text-sm text-center text-muted-foreground">
              Spread your payments up to 12 months with our easy installment plans.
            </p>
          </div>
          <div class="flex flex-col items-center space-y-2 border rounded-lg p-6 shadow-sm">
            <i data-lucide="shield-check" class="h-12 w-12 text-primary"></i>
            <h3 class="text-xl font-bold">Secure Payment</h3>
            <p class="text-sm text-center text-muted-foreground">
              Safe and secure payment and verification process.
            </p>
          </div>
          <div class="flex flex-col items-center space-y-2 border rounded-lg p-6 shadow-sm">
            <i data-lucide="truck" class="h-12 w-12 text-primary"></i>
            <h3 class="text-xl font-bold">Quality Tricycles</h3>
            <p class="text-sm text-center text-muted-foreground">
              New & carefully inspected used tricycles for your needs.
            </p>
          </div>
          <div class="flex flex-col items-center space-y-2 border rounded-lg p-6 shadow-sm">
            <i data-lucide="headphones" class="h-12 w-12 text-primary"></i>
            <h3 class="text-xl font-bold">Customer Support</h3>
            <p class="text-sm text-center text-muted-foreground">
              Exceptional customer support throughout your journey.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Product Highlights -->
    <section id="products" class="w-full py-12 md:py-24 lg:py-32 bg-muted">
      <div class="container px-4 md:px-6">
        <div class="flex flex-col items-center justify-center space-y-4 text-center">
          <div class="space-y-2">
            <h2 class="text-3xl font-bold tracking-tighter md:text-4xl/tight">Our Bestsellers</h2>
            <p class="mx-auto max-w-[700px] text-muted-foreground md:text-xl/relaxed">
              Explore our most popular tricycles with flexible payment options.
            </p>
          </div>
        </div>
        <div class="mx-auto grid max-w-5xl gap-6 py-12 md:grid-cols-2 lg:grid-cols-3">
          <!-- Product 1 -->
          <div class="group relative overflow-hidden rounded-lg border bg-background shadow-sm transition-all hover:shadow-md">
            <div class="absolute right-2 top-2 z-10">
              <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary text-primary-foreground hover:bg-primary/80">New</span>
            </div>
            <a href="#" class="relative block overflow-hidden">
              <img
                src="https://placehold.co/300x200/e2e8f0/1e293b?text=Tricycle+1"
                alt="Tricycle 1"
                class="aspect-[3/2] w-full object-cover transition-all group-hover:scale-105"
              />
            </a>
            <div class="p-4">
              <h3 class="font-semibold">Premium Tricycle Model 1</h3>
              <div class="flex items-center gap-2 mt-2">
                <span class="font-bold">₦160,000</span>
              </div>
              <div class="flex items-center gap-1 mt-2">
                <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
                <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
                <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
                <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
                <i data-lucide="star" class="h-4 w-4 text-muted-foreground"></i>
                <span class="text-xs text-muted-foreground ml-1">(24)</span>
              </div>
              <div class="mt-4">
                <a href="#" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-full">
                  View Details
                </a>
              </div>
            </div>
          </div>
          
          <!-- Product 2 -->
          <div class="group relative overflow-hidden rounded-lg border bg-background shadow-sm transition-all hover:shadow-md">
            <div class="absolute right-2 top-2 z-10">
              <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent border-border bg-background text-foreground">Used</span>
            </div>
            <a href="#" class="relative block overflow-hidden">
              <img
                src="https://placehold.co/300x200/e2e8f0/1e293b?text=Tricycle+2"
                alt="Tricycle 2"
                class="aspect-[3/2] w-full object-cover transition-all group-hover:scale-105"
              />
            </a>
            <div class="p-4">
              <h3 class="font-semibold">Premium Tricycle Model 2</h3>
              <div class="flex items-center gap-2 mt-2">
                <span class="font-bold">₦170,000</span>
              </div>
              <div class="flex items-center gap-1 mt-2">
                <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
                <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
                <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
                <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
                <i data-lucide="star" class="h-4 w-4 text-muted-foreground"></i>
                <span class="text-xs text-muted-foreground ml-1">(24)</span>
              </div>
              <div class="mt-4">
                <a href="#" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-full">
                  View Details
                </a>
              </div>
            </div>
          </div>
          
          <!-- Product 3 -->
          <div class="group relative overflow-hidden rounded-lg border bg-background shadow-sm transition-all hover:shadow-md">
            <div class="absolute right-2 top-2 z-10">
              <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary text-primary-foreground hover:bg-primary/80">New</span>
            </div>
            <a href="#" class="relative block overflow-hidden">
              <img
                src="https://placehold.co/300x200/e2e8f0/1e293b?text=Tricycle+3"
                alt="Tricycle 3"
                class="aspect-[3/2] w-full object-cover transition-all group-hover:scale-105"
              />
            </a>
            <div class="p-4">
              <h3 class="font-semibold">Premium Tricycle Model 3</h3>
              <div class="flex items-center gap-2 mt-2">
                <span class="font-bold">₦180,000</span>
                <span class="text-sm text-muted-foreground line-through">₦210,000</span>
              </div>
              <div class="flex items-center gap-1 mt-2">
                <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
                <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
                <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
                <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
                <i data-lucide="star" class="h-4 w-4 text-muted-foreground"></i>
                <span class="text-xs text-muted-foreground ml-1">(24)</span>
              </div>
              <div class="mt-4">
                <a href="#" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-full">
                  View Details
                </a>
              </div>
            </div>
          </div>
          
          <!-- Product 4 -->
          <div class="group relative overflow-hidden rounded-lg border bg-background shadow-sm transition-all hover:shadow-md">
            <div class="absolute right-2 top-2 z-10">
              <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent border-border bg-background text-foreground">Used</span>
            </div>
            <a href="#" class="relative block overflow-hidden">
              <img
                src="https://placehold.co/300x200/e2e8f0/1e293b?text=Tricycle+4"
                alt="Tricycle 4"
                class="aspect-[3/2] w-full object-cover transition-all group-hover:scale-105"
              />
            </a>
            <div class="p-4">
              <h3 class="font-semibold">Premium Tricycle Model 4</h3>
              <div class="flex items-center gap-2 mt-2">
                <span class="font-bold">₦190,000</span>
              </div>
              <div class="flex items-center gap-1 mt-2">
                <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
                <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
                <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
                <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
                <i data-lucide="star" class="h-4 w-4 text-muted-foreground"></i>
                <span class="text-xs text-muted-foreground ml-1">(24)</span>
              </div>
              <div class="mt-4">
                <a href="#" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-full">
                  View Details
                </a>
              </div>
            </div>
          </div>
          
          <!-- Product 5 -->
          <div class="group relative overflow-hidden rounded-lg border bg-background shadow-sm transition-all hover:shadow-md">
            <div class="absolute right-2 top-2 z-10">
              <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary text-primary-foreground hover:bg-primary/80">New</span>
            </div>
            <a href="#" class="relative block overflow-hidden">
              <img
                src="https://placehold.co/300x200/e2e8f0/1e293b?text=Tricycle+5"
                alt="Tricycle 5"
                class="aspect-[3/2] w-full object-cover transition-all group-hover:scale-105"
              />
            </a>
            <div class="p-4">
              <h3 class="font-semibold">Premium Tricycle Model 5</h3>
              <div class="flex items-center gap-2 mt-2">
                <span class="font-bold">₦200,000</span>
              </div>
              <div class="flex items-center gap-1 mt-2">
                <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
                <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
                <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
                <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
                <i data-lucide="star" class="h-4 w-4 text-muted-foreground"></i>
                <span class="text-xs text-muted-foreground ml-1">(24)</span>
              </div>
              <div class="mt-4">
                <a href="#" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-full">
                  View Details
                </a>
              </div>
            </div>
          </div>
          
          <!-- Product 6 -->
          <div class="group relative overflow-hidden rounded-lg border bg-background shadow-sm transition-all hover:shadow-md">
            <div class="absolute right-2 top-2 z-10">
              <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent border-border bg-background text-foreground">Used</span>
            </div>
            <a href="#" class="relative block overflow-hidden">
              <img
                src="https://placehold.co/300x200/e2e8f0/1e293b?text=Tricycle+6"
                alt="Tricycle 6"
                class="aspect-[3/2] w-full object-cover transition-all group-hover:scale-105"
              />
            </a>
            <div class="p-4">
              <h3 class="font-semibold">Premium Tricycle Model 6</h3>
              <div class="flex items-center gap-2 mt-2">
                <span class="font-bold">₦210,000</span>
              </div>
              <div class="flex items-center gap-1 mt-2">
                <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
                <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
                <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
                <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
                <i data-lucide="star" class="h-4 w-4 text-muted-foreground"></i>
                <span class="text-xs text-muted-foreground ml-1">(24)</span>
              </div>
              <div class="mt-4">
                <a href="#" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-full">
                  View Details
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="flex justify-center mt-8">
          <a href="#" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2">
            View All Products <i data-lucide="chevron-right" class="ml-1 h-4 w-4"></i>
          </a>
        </div>
      </div>
    </section>

    <!-- How It Works -->
    <section class="w-full py-12 md:py-24 lg:py-32">
      <div class="container px-4 md:px-6">
        <div class="flex flex-col items-center justify-center space-y-4 text-center">
          <div class="space-y-2">
            <h2 class="text-3xl font-bold tracking-tighter md:text-4xl/tight">How It Works</h2>
            <p class="mx-auto max-w-[700px] text-muted-foreground md:text-xl/relaxed">
              Get your tricycle in four simple steps.
            </p>
          </div>
        </div>
        <div class="mx-auto grid max-w-5xl gap-6 py-12 md:grid-cols-2 lg:grid-cols-4">
          <!-- Step 1 -->
          <div class="flex flex-col items-center space-y-2 border rounded-lg p-6 shadow-sm relative">
            <div class="absolute -top-4 bg-primary text-primary-foreground rounded-full w-8 h-8 flex items-center justify-center font-bold">
              1
            </div>
            <h3 class="text-xl font-bold mt-4">Sign Up</h3>
            <p class="text-sm text-center text-muted-foreground">Create an account to get started with FK Riders.</p>
          </div>
          
          <!-- Step 2 -->
          <div class="flex flex-col items-center space-y-2 border rounded-lg p-6 shadow-sm relative">
            <div class="absolute -top-4 bg-primary text-primary-foreground rounded-full w-8 h-8 flex items-center justify-center font-bold">
              2
            </div>
            <h3 class="text-xl font-bold mt-4">Choose a Tricycle</h3>
            <p class="text-sm text-center text-muted-foreground">Browse our collection and select your preferred tricycle.</p>
          </div>
          
          <!-- Step 3 -->
          <div class="flex flex-col items-center space-y-2 border rounded-lg p-6 shadow-sm relative">
            <div class="absolute -top-4 bg-primary text-primary-foreground rounded-full w-8 h-8 flex items-center justify-center font-bold">
              3
            </div>
            <h3 class="text-xl font-bold mt-4">Make Payment</h3>
            <p class="text-sm text-center text-muted-foreground">Pay in full or choose an installment plan that works for you.</p>
          </div>
          
          <!-- Step 4 -->
          <div class="flex flex-col items-center space-y-2 border rounded-lg p-6 shadow-sm relative">
            <div class="absolute -top-4 bg-primary text-primary-foreground rounded-full w-8 h-8 flex items-center justify-center font-bold">
              4
            </div>
            <h3 class="text-xl font-bold mt-4">Get Verified & Receive</h3>
            <p class="text-sm text-center text-muted-foreground">Complete verification and receive your tricycle.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="w-full py-12 md:py-24 lg:py-32 bg-muted">
      <div class="container px-4 md:px-6">
        <div class="flex flex-col items-center justify-center space-y-4 text-center">
          <div class="space-y-2">
            <h2 class="text-3xl font-bold tracking-tighter md:text-4xl/tight">Customer Testimonials</h2>
            <p class="mx-auto max-w-[700px] text-muted-foreground md:text-xl/relaxed">
              Hear what our customers have to say about their experience with FK Riders.
            </p>
          </div>
        </div>
        <div class="mx-auto grid max-w-5xl gap-6 py-12 md:grid-cols-2 lg:grid-cols-3">
          <!-- Testimonial 1 -->
          <div class="flex flex-col space-y-4 border rounded-lg bg-background p-6 shadow-sm">
            <div class="flex items-center gap-1">
              <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
              <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
              <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
              <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
              <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
            </div>
            <p class="text-sm text-muted-foreground italic">"The installment plan made it possible for me to own a tricycle. The process was smooth and the customer service was excellent."</p>
            <div class="flex items-center gap-2 mt-auto pt-4 border-t">
              <div class="rounded-full bg-primary/10 text-primary w-10 h-10 flex items-center justify-center font-bold">
                J
              </div>
              <div>
                <p class="font-medium">John Doe</p>
                <p class="text-xs text-muted-foreground">Verified Customer</p>
              </div>
            </div>
          </div>
          
          <!-- Testimonial 2 -->
          <div class="flex flex-col space-y-4 border rounded-lg bg-background p-6 shadow-sm">
            <div class="flex items-center gap-1">
              <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
              <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
              <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
              <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
              <i data-lucide="star" class="h-4 w-4 text-muted-foreground"></i>
            </div>
            <p class="text-sm text-muted-foreground italic">"I was skeptical about buying a used tricycle, but FK Riders delivered a well-maintained vehicle that exceeded my expectations."</p>
            <div class="flex items-center gap-2 mt-auto pt-4 border-t">
              <div class="rounded-full bg-primary/10 text-primary w-10 h-10 flex items-center justify-center font-bold">
                J
              </div>
              <div>
                <p class="font-medium">Jane Smith</p>
                <p class="text-xs text-muted-foreground">Verified Customer</p>
              </div>
            </div>
          </div>
          
          <!-- Testimonial 3 -->
          <div class="flex flex-col space-y-4 border rounded-lg bg-background p-6 shadow-sm">
            <div class="flex items-center gap-1">
              <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
              <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
              <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
              <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
              <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-yellow-400"></i>
            </div>
            <p class="text-sm text-muted-foreground italic">"The verification process was quick and the delivery was prompt. I'm very satisfied with my purchase from FK Riders."</p>
            <div class="flex items-center gap-2 mt-auto pt-4 border-t">
              <div class="rounded-full bg-primary/10 text-primary w-10 h-10 flex items-center justify-center font-bold">
                M
              </div>
              <div>
                <p class="font-medium">Michael Johnson</p>
                <p class="text-xs text-muted-foreground">Verified Customer</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About FK Riders -->
    <section id="about" class="w-full py-12 md:py-24 lg:py-32">
      <div class="container px-4 md:px-6">
        <div class="grid gap-6 lg:grid-cols-2 lg:gap-12 items-center">
          <div class="flex flex-col justify-center space-y-4">
            <div class="space-y-2">
              <h2 class="text-3xl font-bold tracking-tighter md:text-4xl/tight">About FK Riders</h2>
              <p class="text-muted-foreground md:text-xl/relaxed">
                We're committed to making tricycle ownership accessible to everyone.
              </p>
            </div>
            <div class="space-y-4">
              <p>
                FK Riders was founded with a simple mission: to provide reliable transportation solutions with
                flexible payment options. We understand that not everyone can afford to pay for a tricycle upfront,
                which is why we offer installment plans of up to 12 months.
              </p>
              <p>
                Our team of experts carefully inspects each tricycle to ensure it meets our high standards of
                quality and safety. Whether you're looking for a brand new tricycle or a well-maintained used one,
                we have options to suit your needs and budget.
              </p>
            </div>
            <div class="flex flex-wrap gap-4 mt-4">
              <div class="flex items-center gap-2">
                <div class="rounded-full bg-primary/10 text-primary p-2">
                  <i data-lucide="truck" class="h-5 w-5"></i>
                </div>
                <p class="font-medium">1000+ Tricycles Sold</p>
              </div>
              <div class="flex items-center gap-2">
                <div class="rounded-full bg-primary/10 text-primary p-2">
                  <i data-lucide="credit-card" class="h-5 w-5"></i>
                </div>
                <p class="font-medium">Flexible Payment Plans</p>
              </div>
              <div class="flex items-center gap-2">
                <div class="rounded-full bg-primary/10 text-primary p-2">
                  <i data-lucide="headphones" class="h-5 w-5"></i>
                </div>
                <p class="font-medium">24/7 Customer Support</p>
              </div>
            </div>
          </div>
          <div class="mx-auto w-full max-w-[500px] lg:max-w-none">
            <img
              src="https://placehold.co/600x400/e2e8f0/1e293b?text=About+FK+Riders"
              alt="About FK Riders"
              class="w-full h-auto rounded-xl object-cover"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Banner -->
    <section class="w-full py-12 md:py-24 lg:py-32 bg-primary text-primary-foreground">
      <div class="container px-4 md:px-6">
        <div class="flex flex-col items-center justify-center space-y-4 text-center">
          <div class="space-y-2">
            <h2 class="text-3xl font-bold tracking-tighter md:text-4xl/tight">
              Ready to ride your dream tricycle?
            </h2>
            <p class="mx-auto max-w-[700px] md:text-xl/relaxed">Buy now or spread your payments easily.</p>
          </div>
          <div class="flex flex-col gap-2 min-[400px]:flex-row">
            <a href="#" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-secondary text-secondary-foreground hover:bg-secondary/80 h-11 px-8">
              Browse Products
            </a>
            <a href="#" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-primary-foreground bg-transparent text-primary-foreground hover:bg-primary-foreground hover:text-primary h-11 px-8">
              Create an Account
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section id="faqs" class="w-full py-12 md:py-24 lg:py-32">
      <div class="container px-4 md:px-6">
        <div class="flex flex-col items-center justify-center space-y-4 text-center">
          <div class="space-y-2">
            <h2 class="text-3xl font-bold tracking-tighter md:text-4xl/tight">Frequently Asked Questions</h2>
            <p class="mx-auto max-w-[700px] text-muted-foreground md:text-xl/relaxed">
              Find answers to common questions about our products and services.
            </p>
          </div>
        </div>
        <div class="mx-auto max-w-3xl space-y-4 py-12">
          <!-- FAQ Accordion -->
          <div class="w-full">
            <!-- FAQ Item 1 -->
            <div class="border-b">
              <button class="flex w-full items-center justify-between py-4 text-left font-medium transition-all hover:underline" id="faq-1-button" aria-expanded="false" aria-controls="faq-1-content">
                Can I pay in installments?
                <i data-lucide="chevron-down" class="h-4 w-4 shrink-0 transition-transform"></i>
              </button>
              <div class="pb-4 text-sm text-muted-foreground hidden" id="faq-1-content">
                Yes, we offer flexible installment plans of up to 12 months. You can choose the plan that works best
                for your budget during checkout.
              </div>
            </div>
            
            <!-- FAQ Item 2 -->
            <div class="border-b">
              <button class="flex w-full items-center justify-between py-4 text-left font-medium transition-all hover:underline" id="faq-2-button" aria-expanded="false" aria-controls="faq-2-content">
                What happens if I miss a payment?
                <i data-lucide="chevron-down" class="h-4 w-4 shrink-0 transition-transform"></i>
              </button>
              <div class="pb-4 text-sm text-muted-foreground hidden" id="faq-2-content">
                If you miss a payment, we'll send you a reminder. If you continue to miss payments, there may be
                late fees and it could affect your ability to complete your purchase. We recommend contacting our
                customer support team as soon as possible if you anticipate payment difficulties.
              </div>
            </div>
            
            <!-- FAQ Item 3 -->
            <div class="border-b">
              <button class="flex w-full items-center justify-between py-4 text-left font-medium transition-all hover:underline" id="faq-3-button" aria-expanded="false" aria-controls="faq-3-content">
                Are used tricycles guaranteed?
                <i data-lucide="chevron-down" class="h-4 w-4 shrink-0 transition-transform"></i>
              </button>
              <div class="pb-4 text-sm text-muted-foreground hidden" id="faq-3-content">
                Yes, all our used tricycles undergo a thorough inspection before being listed for sale. They come
                with a 3-month warranty covering major mechanical issues. We stand behind the quality of our
                products.
              </div>
            </div>
            
            <!-- FAQ Item 4 -->
            <div class="border-b">
              <button class="flex w-full items-center justify-between py-4 text-left font-medium transition-all hover:underline" id="faq-4-button" aria-expanded="false" aria-controls="faq-4-content">
                How does delivery work?
                <i data-lucide="chevron-down" class="h-4 w-4 shrink-0 transition-transform"></i>
              </button>
              <div class="pb-4 text-sm text-muted-foreground hidden" id="faq-4-content">
                We offer delivery services within the city for a small fee. For locations outside the city,
                additional charges may apply. You can also choose to pick up your tricycle from our showroom after
                completing your purchase.
              </div>
            </div>
            
            <!-- FAQ Item 5 -->
            <div class="border-b">
              <button class="flex w-full items-center justify-between py-4 text-left font-medium transition-all hover:underline" id="faq-5-button" aria-expanded="false" aria-controls="faq-5-content">
                Do you offer maintenance services?
                <i data-lucide="chevron-down" class="h-4 w-4 shrink-0 transition-transform"></i>
              </button>
              <div class="pb-4 text-sm text-muted-foreground hidden" id="faq-5-content">
                Yes, we have a team of experienced mechanics who can provide maintenance and repair services for
                your tricycle. Regular maintenance packages are available at competitive rates.
              </div>
            </div>
            
            <!-- FAQ Item 6 -->
            <div class="border-b">
              <button class="flex w-full items-center justify-between py-4 text-left font-medium transition-all hover:underline" id="faq-6-button" aria-expanded="false" aria-controls="faq-6-content">
                Can I trade in my old tricycle?
                <i data-lucide="chevron-down" class="h-4 w-4 shrink-0 transition-transform"></i>
              </button>
              <div class="pb-4 text-sm text-muted-foreground hidden" id="faq-6-content">
                Yes, we accept trade-ins for qualifying tricycles. The value of your old tricycle will be assessed
                and can be applied as a discount towards your new purchase.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer id="contact" class="w-full border-t bg-muted py-12 md:py-16 lg:py-20">
    <div class="container px-4 md:px-6">
      <div class="grid gap-8 lg:grid-cols-4">
        <div class="space-y-4">
          <a href="/" class="font-bold text-xl flex items-center">
            <span class="text-primary">FK</span> Riders
          </a>
          <p class="text-sm text-muted-foreground">
            Providing reliable tricycles with flexible payment options since 2018.
          </p>
          <div class="flex gap-4">
            <a href="#" class="text-muted-foreground hover:text-foreground">
              <i data-lucide="facebook" class="h-5 w-5"></i>
              <span class="sr-only">Facebook</span>
            </a>
            <a href="#" class="text-muted-foreground hover:text-foreground">
              <i data-lucide="twitter" class="h-5 w-5"></i>
              <span class="sr-only">Twitter</span>
            </a>
            <a href="#" class="text-muted-foreground hover:text-foreground">
              <i data-lucide="instagram" class="h-5 w-5"></i>
              <span class="sr-only">Instagram</span>
            </a>
          </div>
        </div>
        <div class="space-y-4">
          <h3 class="font-medium">Quick Links</h3>
          <nav class="flex flex-col gap-2">
            <a href="#" class="text-sm text-muted-foreground hover:text-foreground">
              Home
            </a>
            <a href="#products" class="text-sm text-muted-foreground hover:text-foreground">
              Products
            </a>
            <a href="#about" class="text-sm text-muted-foreground hover:text-foreground">
              About Us
            </a>
            <a href="#faqs" class="text-sm text-muted-foreground hover:text-foreground">
              FAQs
            </a>
          </nav>
        </div>
        <div class="space-y-4">
          <h3 class="font-medium">Contact Us</h3>
          <div class="flex flex-col gap-2 text-sm text-muted-foreground">
            <p class="flex items-center gap-2">
              <i data-lucide="phone" class="h-4 w-4"></i>
              +234 123 456 7890
            </p>
            <p class="flex items-center gap-2">
              <i data-lucide="mail" class="h-4 w-4"></i>
              info@fkriders.com
            </p>
            <p class="flex items-center gap-2">
              <i data-lucide="map-pin" class="h-4 w-4"></i>
              123 Main Street, Lagos, Nigeria
            </p>
          </div>
        </div>
        <div class="space-y-4">
          <h3 class="font-medium">Newsletter</h3>
          <p class="text-sm text-muted-foreground">
            Subscribe to our newsletter for updates on new products and promotions.
          </p>
          <form class="space-y-2">
            <input type="email" placeholder="Enter your email" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 max-w-lg" />
            <button type="submit" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 w-full">
              Subscribe
            </button>
          </form>
        </div>
      </div>
      <div class="mt-8 border-t pt-8 text-center">
        <p class="text-xs text-muted-foreground">
          &copy; <script>document.write(new Date().getFullYear())</script> FK Riders. All rights reserved.
        </p>
      </div>
    </div>
  </footer>

  <!-- JavaScript for Mobile Menu Toggle -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Initialize Lucide icons
      lucide.createIcons();
      
      // Mobile menu toggle
      const menuButton = document.getElementById('mobile-menu-button');
      const mobileMenu = document.getElementById('mobile-menu');
      
      menuButton.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
      });
      
      // FAQ accordion functionality
      const faqButtons = document.querySelectorAll('[id^="faq-"][id$="-button"]');
      
      faqButtons.forEach(button => {
        button.addEventListener('click', function() {
          const contentId = this.getAttribute('aria-controls');
          const content = document.getElementById(contentId);
          const isExpanded = this.getAttribute('aria-expanded') === 'true';
          
          this.setAttribute('aria-expanded', !isExpanded);
          content.classList.toggle('hidden');
          
          const icon = this.querySelector('[data-lucide="chevron-down"]');
          if (!isExpanded) {
            icon.classList.add('rotate-180');
          } else {
            icon.classList.remove('rotate-180');
          }
        });
      });
    });
  </script>
</body>
</html>