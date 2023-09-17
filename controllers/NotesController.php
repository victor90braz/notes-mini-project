<?php

$config = require __DIR__ . "/../config/config.php";
$dataBase = new DataBase($config["dataBase"]);

$notes = $dataBase->query("SELECT * from notes where user_id = 1")->findAll();

include __DIR__ . "/../views/notes.php";

