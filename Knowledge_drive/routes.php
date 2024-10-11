<?php

$router->get("/", "index.php")->only("guest");
$router->get("/about", "about.php")->only("guest")->only("guest");
$router->get("/knowledge_sessions", "knowledge_sessions.php")->only("guest");



// Login
$router->get("/login", "sessions/create.php")->only("guest");
$router->post("/login", "sessions/store.php")->only("guest");
$router->delete("/logout", "sessions/destroy.php")->only("auth");


// Admin Dashboard
$router->get("/dashboard", "admin/index.php")->only("auth");
$router->get("/users", "admin/users/index.php")->only("auth");
$router->post("/users", "admin/users/store.php")->only("auth");

$router->get("/sessions", "admin/forums/index.php")->only("auth");
$router->post("/sessions", "admin/forums/store.php")->only("auth");
$router->patch("/sessions", "admin/forums/update.php")->only("auth");
$router->delete("/sessions", "admin/forums/destroy.php")->only("auth");
