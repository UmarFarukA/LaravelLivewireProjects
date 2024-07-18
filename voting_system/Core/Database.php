<?php

namespace Core;

use PDO;

class Database {
    protected $con;
    protected $stmt;

    public function __construct($config, $user = "root", $pwd = "")
    {
        $dsn = "mysql:".http_build_query($config, "", ";");

        $this->con = new PDO($dsn, $user, $pwd, [
            PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ
        ]);

        return $this;
    }

    public function query($query, $params = []) {
        $this->stmt = $this->con->prepare($query);
        $this->stmt->execute($params);
        return $this;
    }

    public function find() {
        return $this->stmt->fetch();
    }

    public function findOrFail() {
        return $this->stmt->fetchAll() ?? abort();
    }

    public function get() {
        return $this->stmt->fetchAll();
    }
}