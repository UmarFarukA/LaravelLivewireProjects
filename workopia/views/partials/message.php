<?php

use Core\Session;

?>

<?php $successMsg = Session::getFlashMessage("success") ?>

<?php if ($successMsg !== null): ?>
<div class="p-3 my-2 rounded text-white bg-green-300">
    <?= $successMsg ?>
</div>
<?php endif; ?>


<?php $errorMsg = Session::getFlashMessage("error") ?>

<?php if ($errorMsg !== null): ?>
<div class="p-3 my-2 rounded text-white bg-red-300">
    <?= $errorMsg ?>
</div>
<?php endif; ?>

<?php $warningMsg = Session::getFlashMessage("warning") ?>

<?php if ($warningMsg !== null): ?>
<div class="p-3 my-2 rounded text-white bg-yellow-300">
    <?= $warningMsg ?>
</div>
<?php endif; ?>