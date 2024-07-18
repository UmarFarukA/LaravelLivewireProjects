<?php

use Core\Response;

/**
 * Aborting an Error
 * @param int $code
 * @param string $message
 * @return view
 */
function abort($code = Response::NOT_FOUND, $message = "Resource Not found") {
    return $code . " - ". $message;
}

/**
 * Base path
 * @return void
 */
function base_path($path) {
    return BASE_PATH . $path;
}


/**
 * View function
 * @param string $path
 * @return void
 */
function views($file_name, $attributes = []) {
    extract($attributes);
    require base_path("App/views/{$file_name}.view.php");
}

/**
 * Redirect function
 * @param $location
 * @return void
 */
function redirect($location){
    header("Location: {$location}");
    exit();
}