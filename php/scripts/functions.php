<?php

//get config file
require_once __DIR__ . '/config.php';


function rootDir() {
  echo ABS_URL;
}

function pageTitle() {
  global $title;
  echo $title;
}

?>
