<?php
session_start();
session_unset();
session_destroy();
$title ="Logout";

require_once ( __DIR__ . '/../config/head.php' );
require_once ( ABS_FILE . '/php/includes/header.php' );
require_once ( ABS_FILE . '/php/includes/article_main_outer.php' );
?>

<!-- BEGIN MAIN -->

<h1>Bye!</h1>
<p>You have successfully been logged out.</br> We hope you had a dank visit and that we'll see you again soon! <a href="<?php rootDir();?>index.php"></br></br>Back to start page</a></p>
<div style="width:100%;height:0;padding-bottom:75%;position:relative;">
  <iframe id="sadDank" src="https://giphy.com/embed/LPouSsdIp6Wgo" width="80%" height="80%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen>
  </iframe>
</div>
<p>
  <a href="https://giphy.com/gifs/donkey-kong-country-LPouSsdIp6Wgo"></a>
</p>

<!-- END MAIN -->
<?php require_once( ABS_FILE . '/php/includes/footer.php'); ?>
