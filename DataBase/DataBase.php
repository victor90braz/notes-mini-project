<?php

class DataBase {

  public $connection;
  public $statement;

  public function __construct($config, $username = "root", $password = "") {
    $dsn = 'mysql:' . http_build_query($config, '', ';');
    $this->connection = new PDO($dsn, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Set error handling mode to exceptions
  }

  public function query($query, $params = []) {
    $this->statement = $this->connection->prepare($query);
    $this->statement->execute($params);

    return $this;
  }

  public function find() {
    return $this->statement->fetch();
  }

  public function findOrFail() {
    $result = $this->find();

    if (!$result) {
      throw new Exception("Record not found", RESPONSE::NOT_FOUND);
    }

    return $result;
  }

  public function findAll() {
    return $this->statement->fetchAll();
  }
}
