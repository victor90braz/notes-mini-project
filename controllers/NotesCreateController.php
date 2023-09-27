<?php

if($_SERVER['REQUEST_METHOD'] === "POST") {
  printArray($_POST);
}

include __DIR__ . "/../views/noteCreate.php";
?>