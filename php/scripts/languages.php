<?php
function t($key) {
  global $language;
  $json = file_get_contents("https://dankeytec.internet-box.ch/languages/en.json");
  $texts = json_decode($string, true);
  if (isset($texts[$key])) {
    return $texts[$key];
  } else {
    return "[$key]";
  }
}
?>
