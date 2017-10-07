<?php
  include("utility.php");
  include("./php/includes/categories.php");

  //define current location
  $current_url = $_SERVER['PHP_SELF'];
  //alertbox($current_url);

  //menu list
  print( "<!--- begin menu include -->

    <ul>\n");

  foreach( $menu as $menuItem) {
    if ( isset( $menuItem ['url'] ) === $current_url ) { //check if current url
      echo "<li class=\"current " . $menuItem['class'] . "\"><title=\"You are here\">" . $menuItem['text'] . "</title>";
    } else {
      //check if item has children (['subMenu']). if so, it's a parent class
      if ( is_array( $menuItem['subMenu'] )) {
        $classParent = "parent group";
      } else {
        $classParent = "";
      }
        echo "<li class=\"" . $menuItem['class'] . " " . $classParent . "\"><a href=\"" . $menuItem['url'] . "\">" . $menuItem['text'] . "</a>";
      }

      if ( is_array( $menuItem ['subMenu'])) { // check whether submenu has any content
        include( "submenuLoop.php" );
      } else {
        echo "</li>\n";
      }
  }

  echo "</ul>\n"; // close menu
?>
