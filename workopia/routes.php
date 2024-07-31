<?php

$router->get("/", "HomeController@index");

$router->get("/listings", "ListingsController@index");
$router->get("/listings/{id}", "ListingsController@show");
$router->get("/listings/create", "ListingsController@create")->only("auth");
$router->post("/listings", "ListingsController@store")->only("auth");
$router->get("/listings/edit/{id}", "ListingsController@edit")->only("auth");
$router->put("/listings/{id}", "ListingsController@update")->only("auth");
$router->delete("/listings/{id}", "ListingsController@destroy")->only("auth");

$router->get("/auth/register", "UserController@register")->only("guest");
$router->post("/auth/register", "UserController@store")->only("guest");
$router->get("/auth/login", "UserController@login")->only("guest");
$router->post("/auth/login", "UserController@auth")->only("guest");
$router->post("/auth/logout", "UserController@logout")->only("auth");