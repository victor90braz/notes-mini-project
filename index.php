<?php

include __DIR__ . "/handleFunctions.php";
include __DIR__ . "/router/router.php";
include __DIR__ . "/DataBase/DataBase.php";

$config = require __DIR__ . "/config/config.php";

$dataBase = new DataBase($config["dataBase"]);













