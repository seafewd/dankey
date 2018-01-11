<?php
function t($key) {
  global $language;
  $str = '{ "contact" : "kontakt", "help" : "hilfe", "about us" : "über uns", "social media" : "soziale medien", "login" : "Anmelden", "register" : "Registrieren" }';

  $json = json_decode($str, true);


  return $json[$key];
}
?>
