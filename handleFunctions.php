<?php

function printArray($data) {
  echo "<pre>";
  echo json_encode($data, JSON_PRETTY_PRINT);
  echo "</pre>";
}

?>