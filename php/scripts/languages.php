<?php
function t($key) {
  if(isset($_COOKIE['lang'])){
    $language = $_COOKIE['lang'];
  }else{
    $language = "en";
  }

  $arrContextOptions=array(
    "ssl"=>array(
      "verify_peer"=>false,
      "verify_peer_name"=>false,
    ),
  );

  $url = ABS_FILE . "/languages//" . $language . ".json";

  $file = file_get_contents($url, false, stream_context_create($arrContextOptions));

  $json = json_decode($file, true);

  return $json[$key];
}
?>
