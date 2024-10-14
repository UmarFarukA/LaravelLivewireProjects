<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script> -->

<script>
document.addEventListener("DOMContentLoaded", function() {
    var toastElement = document.querySelector('.toast'); // Select the toast element
    var toast = new bootstrap.Toast(toastElement); // Initialize the toast
    toast.show(); // Show the toast
});
</script>
</body>

</html>