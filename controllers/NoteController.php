<?php

$config = require __DIR__ . "/../config/config.php";
$dataBase = new DataBase($config["dataBase"]);

$selectQuery = "SELECT * from notes where id = :id";

$notes = $dataBase->query($selectQuery, ['id' => $_GET['id']])->fetchAll();

include __DIR__ . "/../views/note.php";

