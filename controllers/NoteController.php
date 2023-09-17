<?php

$config = require __DIR__ . "/../config/config.php";
$dataBase = new DataBase($config["dataBase"]);

$selectQuery = "SELECT * from notes where id = :id";
$note = $dataBase->query($selectQuery, ['id' => $_GET['id']])->fetch();

if (!$note) {
  $notFoundErrorCode = 404;
  abort($notFoundErrorCode);
}

if ($note['user_id'] !== 1) {
  $unauthorizedErrorCode = 403;
  abort($unauthorizedErrorCode);
}

include __DIR__ . "/../views/note.php";

