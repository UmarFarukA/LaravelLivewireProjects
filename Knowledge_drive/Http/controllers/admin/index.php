<?php

use Core\Session;

$user = null;

if (Session::has("user")) {
    $user = Session::get("user");
}

views("admin/index.view.php", [
    "user" => $user
]);
