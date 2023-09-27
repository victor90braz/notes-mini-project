<?php
$config = require __DIR__ . "/../config/config.php";
$dataBase = new DataBase($config["dataBase"]);



include __DIR__ . "/../views/noteCreate.php";
?>
