<?php

$config = require __DIR__ . "/../config/config.php";

$dataBase = new DataBase($config["dataBase"]);
$notes = $dataBase->query("SELECT * from notes")->fetchAll();
printArray($notes);

include __DIR__ . "/../views/notes.php";