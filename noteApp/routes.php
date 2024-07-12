<?php

  $router->get("/", "index.php");
  $router->get("/about", "about.php")->only("guest");
  $router->get("/services", "services.php")->only("guest");
  $router->get("/contact", "contact.php")->only("guest");

  $router->get("/notes", "notes/index.php")->only("auth");
  $router->get("/note", "notes/show.php")->only("auth");
  
  $router->get("/note/edit", "notes/edit.php")->only("auth");
  $router->patch("/note/edit", "notes/update.php")->only("auth");

  $router->get("/notes/create", "notes/create.php")->only("auth");
  $router->post("/notes/create", "notes/store.php")->only("auth");
  
  $router->delete("/note", "notes/destroy.php")->only("auth");


  $router->get("/register", "registration/create.php")->only("guest");
  $router->post("/register", "registration/store.php")->only("guest");


  $router->get('/login', "sessions/create.php")->only("guest");
  $router->post("/login", "sessions/store.php")->only("guest");
  $router->delete("/logout", "sessions/destroy.php")->only("auth");