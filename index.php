<?php

include __DIR__ . "/handleFunctions.php";
include __DIR__ . "/router/router.php";
include __DIR__ . "/DataBase/DataBase.php";

$config = require __DIR__ . "/config/config.php";

$dataBase = new DataBase($config["dataBase"]);

$query = "SELECT * from posts where id= ?";
$id = $_GET['id'];

$posts = $dataBase->query($query,[$id])->fetch();

echo $posts['title'];
printArray($_GET['id']);










