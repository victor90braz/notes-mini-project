<?php
$config = require __DIR__ . "/../config/config.php";
$dataBase = new DataBase($config["dataBase"]);

$selectQuery = "SELECT * from notes where id = :id";
$note = $dataBase->query($selectQuery, ['id' => $_GET['id']])->findOrFail();

$currentUserId = 1;

if ($note['user_id'] !== $currentUserId) {
  abort(Response::UNAUTHORIZED);
}

include __DIR__ . "/../views/note.php";

