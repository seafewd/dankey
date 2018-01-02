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

function showAlert( $message ) {
  echo '
    <script>
      alert(' . $message . ');
    </script>
  ';
}

function fillProductListWithQuery( $query ) {
  $query = $_query;
  require_once ( ABS_FILE . 'php/scripts/fillProductList.php');
}


?>
