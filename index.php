<?php

include __DIR__ . "/handleFunctions.php";
include __DIR__ . "/router/router.php";
include __DIR__ . "/DataBase/DataBase.php";

$config = require __DIR__ . "/config/config.php";

$dataBase = new DataBase($config["dataBase"]);

$posts = "SELECT * from posts";
$allPosts = $dataBase->query($posts)->fetchAll();

printArray($allPosts);

// remember to add the id to the url
// http://localhost:8888/?id=2
$id = $_GET['id'];
$post = "SELECT * from posts where id= ?";
$myPost = $dataBase->query($post,[$id])->fetch();

echo $myPost['title'];












