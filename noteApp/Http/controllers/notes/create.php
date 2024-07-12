<?php

views("notes/create.view.php", [
    "heading" => "Create Note",
    "title_errors" => $title_errors,
    "summary_errors" => $summary_errors
]);