<?php
$config = require __DIR__ . "/../config/config.php";
$dataBase = new DataBase($config["dataBase"]);
require __DIR__ . "/../Validator.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $errors = [];
    $noteBody = $_POST["body"];
    $userId = 1;

    $query = "INSERT INTO notes (body, user_id) VALUES (:body, :user_id)";
    $params = [":body" => $noteBody, ":user_id" => $userId];

    if (!Validator::string($noteBody, 1, 1000)) {
        $errors['body'] = 'A body of no more then 1,000 characters is required.';
    }

    if (empty($errors)) {
        try {
            $dataBase->query($query, $params);
            http_response_code(Response::CREATED);
            echo "Note successfully created.";
        } catch (PDOException $e) {
            http_response_code(Response::INTERNAL_SERVER_ERROR);
            echo "Error creating note: " . $e->getMessage();
        }
    }

}

include __DIR__ . "/../views/noteCreate.php";
?>
