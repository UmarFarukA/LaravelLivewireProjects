<?php

loadPatials("head");
loadPatials("nav");

?>

<section>
  <div class="container mx-auto p-4 mt-4">
    <div class="flex justify-center align-center mt-8">
      <div class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3"><?= $code ?> Error</div>
      <p class="text-center text-2xl mb-4">
        <?= $message ?>
      </p>
    </div>
  </div>
</section>

<?php loadPatials("bottom") ?>