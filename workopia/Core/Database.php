<?php

namespace Core;

use App\Controllers\ErrorController;

class Database
{
  protected $connection;
  protected $statement;

  public function __construct($config, $user = "root", $pwd = "")
  {

    $dsn = "mysql:" . http_build_query($config, "", ";");

    $this->connection = new \PDO($dsn, $user, $pwd, [
      \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
      \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
    ]);
  }

  public function lastId()
  {
    return $this->connection->lastInsertId();
  }

  public function query($query, $params = [])
  {
    $this->statement = $this->connection->prepare($query);
    $this->statement->execute($params);
    return $this;
  }

  public function find()
  {
    return $this->statement->fetch();
  }

  public function findOrFail()
  {
    return $this->find() ?? ErrorController::error();
  }

  public function get()
  {
    return $this->statement->fetchAll();
  }
}