<?php

use Core\Session;

$successMsg = Session::get("success");
?>

<!-- Toast for Success messages -->
<?php if ($successMsg !== null): ?>
<div class="toast align-items-center text-bg-success border-0 position-fixed top-0 end-0 mt-2" role="alert"
    aria-live="assertive" aria-atomic="true">
    <div class="d-flex" id="myToast">
        <div class="toast-body">
            <?= $successMsg; ?>
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
            aria-label="Close"></button>
    </div>
    <?php Session::unflash("success"); ?>
</div>

<?php endif; ?>

<!-- Toast for error messages -->
<?php $errorMsg = Session::get("error") ?>
<?php if ($errorMsg !== null): ?>
<div class="toast align-items-center text-bg-danger border-0 position-fixed top-0 end-0 mt-2" role="alert"
    aria-live="assertive" aria-atomic="true">
    <div class="d-flex" id="myToast">
        <div class="toast-body">
            <?= $errorMsg; ?>
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
            aria-label="Close"></button>
    </div>
    <?php Session::unflash("error"); ?>
</div>

<?php endif; ?>