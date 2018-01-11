<?php
function t($key) {
  global $language;
  $str = '{ "contact" : "kontakt", "help" : "hilfe", "about us" : "über uns", "social media" : "soziale medien", "login" : "Anmelden", "register" : "Registrieren" }';

  $str2 = file_get_contents("en.json");

  $json = json_decode($str2, true);


  return $json[$key];
}
?>
