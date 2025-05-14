<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FK Riders Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
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
          <span class="ml-2 font-bold text-lg">FK Riders</span>
        </div>
      </div>
      <div class="flex items-center">
        <button class="relative p-2">
          <i class="fas fa-bell text-gray-700"></i>
          <span class="absolute top-0 right-0 h-4 w-4 bg-red-500 rounded-full text-xs text-white flex items-center justify-center">3</span>
        </button>
        <img src="https://placehold.co/40x40" alt="Admin" class="h-8 w-8 rounded-full ml-4">
      </div>
    </header>
