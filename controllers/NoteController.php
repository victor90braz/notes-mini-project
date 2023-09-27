<?php
$config = require __DIR__ . "/../config/config.php";
$dataBase = new DataBase($config["dataBase"]);

$selectQuery = "SELECT * from notes where id = :id";
$note = $dataBase->query($selectQuery, ['id' => $_GET['id']])->findOrFail();

$currentUserId = 1;
$checkUser = $note['user_id'] === $currentUserId;
authorize($checkUser);

include __DIR__ . "/../views/note.php";

