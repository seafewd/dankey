<?php
  //2nd level navs

echo "\n<ul>\n";
foreach ($menuItem['subMenu'] as $branch) {
  if ( $branch['url'] === $current_url ) {
    echo "<li class=\"current_lvl2 " . $branch['class'] . "\"> <a href=\"" . $branch['url'] . "\">" . $branch['text'] . "</a>";
  } else {
    echo "<li class=\"" . $branch['class'] . "\"><a href=\"" . $branch['url'] . "\">" . $branch['text'] . "</a>";
  }

  if( is_array( $branch['subMenu'] )) {
    //TODO: build 3rd level menu if needed
  }
  echo "</li>\n";
}

echo "</ul>\n";

echo "</li>\n";

?>
