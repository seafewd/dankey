<?php
  //2nd level navs

  //define current location
  if ( isSet($_GET['name']) ) {
      $current_url = $_GET['name'];
  }

  $menuItem = $GLOBALS['menuItem'];

echo "\n<ul class='level2'>\n";
foreach ($menuItem['subMenu'] as $branch) {
  if ( isSet($_GET['name']) && $current_url === $branch['class'] ) {
    echo "<li class=\"current_lvl2 menu-item " . $branch['class'] . "\"> <a href=\"" . $branch['url'] . "\">" . $branch['text'] . "</a>";
  } else {
    echo "<li class=\"" . $branch['class'] . " menu-item\"><a href=\"" . $branch['url'] . "\">" . $branch['text'] . "</a>";
  }

  if( is_array( $branch['subMenu'] )) {
    //TODO: build 3rd level menu if needed
  }
  echo "</li>\n";
}

echo "</ul>\n";

echo "</li>\n";

unset($GLOBALS['menuItem']);
