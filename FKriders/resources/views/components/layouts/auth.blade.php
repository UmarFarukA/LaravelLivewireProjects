{{-- <x-layouts.auth.simple :title="$title ?? null">
    {{ $slot }}
</x-layouts.auth.simple> --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FK Riders Customer Dashboard</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Include Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="">

    <main class="bg-gray-200">
        {{$slot}}
    </main>

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
</body>
</html>
