<?php

declare(strict_types=1);

namespace Core;
use PDO;

class Database {

  public $connection;
  public $statement;

  public function __construct($config, $user = "root", $password = "")

  {
    $dsn = http_build_query($config, "", ";");
    $this->connection = new PDO("mysql:{$dsn}", $user, $password, [
      PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC
    ]);

  }

  public function query($query, $params = []) {
    $this->statement = $this->connection->prepare(($query));

    $this->statement->execute($params);

    return $this;
  }


  public function find() {
    return $this->statement->fetch();
  }


  public function findOrFail() {
    return $this->find() ?? abort();
  }

  public function get()
  {

    return $this->statement->fetchAll();
  }
}