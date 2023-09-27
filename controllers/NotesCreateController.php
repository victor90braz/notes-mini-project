<?php
$config = require __DIR__ . "/../config/config.php";
$dataBase = new DataBase($config["dataBase"]);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $noteBody = $_POST["body"];
    $userId = 1;

    $query = "INSERT INTO notes (body, user_id) VALUES (:body, :user_id)";
    $params = [":body" => $noteBody, ":user_id" => $userId];

    try {
        $dataBase->query($query, $params);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();  // Handle the error appropriately
    }
}

include __DIR__ . "/../views/noteCreate.php";
?>
