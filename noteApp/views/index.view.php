<?php

$heading = "Home";

require ("partials/head.php");
require ("partials/navigation.php");
require ("partials/banner.php");

?>

<main>
    <?php
    echo $_SESSION["user"] ? "Welcome ".  $_SESSION["user"]["email"] : "Welcome Guest"; 
  ?>
</main>

<?php require ("partials/footer.php"); ?>