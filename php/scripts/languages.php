<?php
function t($key) {
  global $language;

  $arrContextOptions=array(
    "ssl"=>array(
      "verify_peer"=>false,
      "verify_peer_name"=>false,
    ),
  );

  $file = file_get_contents("https://dankeytec.internet-box.ch/languages/en.json", false, stream_context_create($arrContextOptions));

  $json = json_decode($file, true);

  return $json[$key];
}
?>
