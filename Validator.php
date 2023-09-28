<?php

class Validator {

  function string($value) {
    return strlen(trim(($value))) === 0;
  }
}
