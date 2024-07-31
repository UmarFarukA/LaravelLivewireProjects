<?php

namespace App\Controllers;

use Core\App;
use Core\Authorization;
use Core\Session;
use Core\Validator;

class ListingsController
{
  protected $db;
  public function __construct()
  {
    $this->db = App::getContainer()->resolve("Core\Database");
  }


  public function index()
  {
    $listings = $this->db->query("select * from listings")->get();

    views("listings/index.view", [
      "listings" => $listings
    ]);
  }

  public function create()
  {
    views("listings/create.view");
  }

  public function show($params)
  {
    $id = $params["id"];
    $params = [
      "id" => $id
    ];

    $listing = $this->db->query("SELECT * FROM listings WHERE id=:id", $params)->findOrFail();

    if (!$listing) {
      return;
    }

    views("listings/show.view", [
      "listing" => $listing
    ]);

  }

  public function store()
  {
    $listingData = $_POST;
    $allowedFields = [
      "title",
      "description",
      "salary",
      "requirement",
      "benefits",
      "company",
      "address",
      "city",
      "state",
      "phone",
      "email",
      "tags"
    ];

    $newListingData = array_intersect_key($listingData, array_flip($allowedFields));

    $requiredFields = [
      "title",
      "description",
      "salary",
      "requirement",
      "benefits",
      "company",
      "address",
      "city",
      "state",
      "phone",
      "email",
      "tags"
    ];

    $newListingData["user_id"] = Session::get("user")["id"];

    $newListingData = array_map("sanitize", $newListingData);


    $errors = [];

    foreach ($requiredFields as $field) {
      if (empty($newListingData[$field]) || Validator::validate_string($newListingData[$field])) {
        $errors[$field] = ucfirst($field) . "is required";
      }
    }

    if (!empty($errors)) {
      views("listings/create.view", [
        "errors" => $errors,
        "listing" => $newListingData
      ]);
    } else {

      $fields = [];

      foreach ($newListingData as $field => $value) {
        $fields[] = $field;
      }

      $fields = implode(", ", $fields);

      $values = [];

      foreach ($newListingData as $field => $value) {
        if ($value === "") {
          $newListingData[$field] = null;
        }
        $values[] = ":{$field}";
      }

      $values = implode(", ", $values);

      $query = "INSERT into listings({$fields}) VALUES({$values})";

      $this->db->query($query, $newListingData);

      Session::flash("success", "Listing successfully created.");

      redirect("/listings");
    }

  }

  public function destroy($params)
  {

    $id = $params["id"];
    $current_user = Session::get("user")["id"];

    $params = [
      "id" => $id
    ];


    $listing = $this->db->query("SELECT * FROM listings WHERE id = :id", $params)->findOrFail();


    if (!Authorization::authorize($current_user === $listing["user_id"])) {

      Session::flash("error", "You are not authorize to delete this listing");

      return redirect("listing/" . $listing["id"]);

    } else {

      $this->db->query("DELETE FROM listings WHERE id = :id", $params);

      Session::flash("success", "Listing deleted successfully");

      return redirect("/listings");

    }

  }

  public function edit($params)
  {
    $id = $params["id"];

    $current_user = Session::get("user")["id"];

    $params = [
      "id" => $id
    ];

    $listing = $this->db->query("SELECT * FROM listings WHERE id = :id", $params)->findOrFail();

    if (!Authorization::authorize($current_user === $listing["user_id"])) {

      Session::flash("warning", "Unauthorize");

      return redirect('/listings/' . $listing['id']);
    }


    views("listings/edit.view", [
      "listing" => $listing
    ]);

  }

  public function update($params)
  {
    $id = $params["id"];

    $params = ["id" => $id];

    $listing = $this->db->query("SELECT * FROM listings WHERE id = :id", $params)->findOrFail();

    $current_user = Session::get("user")["id"];

    if (!Authorization::authorize($current_user === $listing["user_id"])) {

      Session::flash("error", "You are not authorize to update this");

      return redirect("/listings/{$listing['id']}");

    } else {
      $listingData = $_POST;

      $allowedFields = [
        "title",
        "description",
        "salary",
        "requirement",
        "benefits",
        "company",
        "address",
        "city",
        "state",
        "phone",
        "email"
      ];

      $updateValues = [];

      $updateValues = array_intersect_key($listingData, array_flip($allowedFields));

      $updateValues = array_map("sanitize", $updateValues);

      $requiredFields = [
        "title",
        "description",
        "salary",
        "requirement",
        "benefits",
        "company",
        "address",
        "city",
        "state",
        "phone",
        "email"
      ];

      $requiredFields["tags"] = "NULL";

      $errors = [];

      foreach ($requiredFields as $field) {
        if (empty($updateValues[$field]) || Validator::validate_string($updateValues[$field])) {
          $errors[$field] = ucfirst($field) . "is required";
        }
      }


      if (!empty($errors)) {
        views("listings/edit.view", [
          "errors" => $errors,
          "listing" => $listing
        ]);
      }

      $updateFields = [];

      foreach (array_keys($updateValues) as $field) {
        $updateFields[] = "{$field} = :{$field}";
      }

      $updateFields = implode(", ", $updateFields);

      $updateQuery = "UPDATE listings SET $updateFields WHERE id = :id";

      $updateValues["id"] = $id;

      $this->db->query($updateQuery, $updateValues);

      Session::flash("success", "Listing successfully updated.");

      return redirect("/listings");
    }

  }

}