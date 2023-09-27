<?php
$config = require __DIR__ . "/../config/config.php";
$dataBase = new DataBase($config["dataBase"]);

$selectQuery = "SELECT * from notes where id = :id";
$note = $dataBase->query($selectQuery, ['id' => $_GET['id']])->findOrFail();

$currentUserId = 1;

authorize($note['user_id'] === $currentUserId);

include __DIR__ . "/../views/note.php";

