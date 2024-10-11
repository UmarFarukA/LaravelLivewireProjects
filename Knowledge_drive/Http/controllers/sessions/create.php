<?php

use Core\Session;

views("sessions/create.view.php", [
    "errors" => Session::get("errors")
]);
