<?php

$router->get("/", "index.php")->only("guest");
$router->post("/", "home/store.php")->only("guest");

$router->get("/contact", "contact/index.php")->only("guest");;
$router->post("/contact", "contact/store.php")->only("guest");

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
$router->patch("/users", "admin/users/update.php")->only("auth");

$router->get("/sessions", "admin/forums/index.php")->only("auth");
$router->post("/sessions", "admin/forums/store.php")->only("auth");
$router->patch("/sessions", "admin/forums/update.php")->only("auth");
$router->delete("/sessions", "admin/forums/destroy.php")->only("auth");

$router->get("/submissions", "admin/submissions/index.php")->only("auth");
// $router->get("/submission", "admin/submissions/submissions.php");
$router->post("/submissions", "admin/submissions/search.php");
$router->patch("/submissions", "admin/submissions/update.php")->only("auth");

$router->get("/inquiry", "admin/inquiry/index.php");
$router->delete("/inquiry", "admin/inquiry/destroy.php");
