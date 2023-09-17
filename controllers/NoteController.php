<?php
require_once 'Response.php';
$config = require __DIR__ . "/../config/config.php";
$dataBase = new DataBase($config["dataBase"]);


$selectQuery = "SELECT * from notes where id = :id";
$note = $dataBase->query($selectQuery, ['id' => $_GET['id']])->fetch();

$currentUserId = 1;

if (!$note) {
  abort(Response::NOT_FOUND);
}

if ($note['user_id'] !== $currentUserId) {
  abort(Response::UNAUTHORIZED);
}

include __DIR__ . "/../views/note.php";

