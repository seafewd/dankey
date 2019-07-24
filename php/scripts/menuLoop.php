<?php

require_once ( __DIR__ . '/functions.php');
require_once(ABS_FILE . "/php/scripts/categories.php");

//define current location
$current_url = ABS_URL . '/dankey/' .  $_SERVER['PHP_SELF'];

//menu list
echo ( "<!--- begin menu include -->

<ul class=\"level1\">\n");

foreach( $menu as $menuItem ) {
  //check if item has children (['subMenu']). if so, it's a parent class
    if ( is_array( $menuItem['subMenu'] ))
        $classParent = "parent";
    else
        $classParent = "";
    echo ($menuItem ['url'] );
    if ( $menuItem ['url'] === $current_url ) //check if current url
        echo "<li class=\"current " . $menuItem['class'] . $classParent . "\"> " . $menuItem['text'];
    else {
      //first level li's with spans to fix padding issue when submenu exists
      echo "<li class=\"menu-item " . $menuItem['class'] .' '. $classParent . "\">" . "<div class=\"toggler\">" . $menuItem['text'] . "</div>";
      echo $menuItem['url'];
    }

    if ( is_array( $menuItem ['subMenu'])) { // check whether submenu has any content
      $GLOBALS['menuItem'] = $menuItem;
      include ( ABS_FILE .  "/php/scripts/submenuLoop.php" );
    } else {
      echo "</li>\n";
    }
}

echo "</ul>\n"; // close level 1 menu
