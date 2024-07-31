<?php

namespace App\Controllers;

use Core\App;

class HomeController
{
  protected $db;

  public function __construct()
  {
    $this->db = App::getContainer()->resolve("Core\Database");
  }

  public function index()
  {
    $listings = $this->db->query("select * from listings")->get();
    views("index.view", [
      "listings" => $listings
    ]);
  }

}