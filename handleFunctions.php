<?php

function printArray($data) {
  echo "<pre>";
  echo json_encode($data, JSON_PRETTY_PRINT);
  echo "</pre>";
}

function authorize($condition, $status = Response::UNAUTHORIZED) {
  if(!$condition) {
    abort($status);
  }
}

?>