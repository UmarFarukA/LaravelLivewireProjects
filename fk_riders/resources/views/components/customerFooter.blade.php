
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