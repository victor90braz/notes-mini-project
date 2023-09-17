<?php

$config = require __DIR__ . "/../config/config.php";
$dataBase = new DataBase($config["dataBase"]);

$selectQuery = "SELECT * from notes where id = :id";
$note = $dataBase->query($selectQuery, ['id' => $_GET['id']])->fetch();

$notFoundErrorCode = 404;
$unauthorizedErrorCode = 403;
$currentUserId = 1;

if (!$note) {
  abort($notFoundErrorCode);
}

if ($note['user_id'] !== $currentUserId) {
  abort($unauthorizedErrorCode);
}

include __DIR__ . "/../views/note.php";

