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

<h1><?php echo t("bye") ?></h1>
<p><?php echo t("logged_out") ?> <a href="<?php rootDir();?>index.php"></br></br><?php echo t("back_to_start") ?></a></p>
<div style="width:100%;height:0;padding-bottom:75%;position:relative;">
  <iframe id="sadDank" src="https://giphy.com/embed/LPouSsdIp6Wgo" width="80%" height="80%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen>
  </iframe>
</div>
<p>
  <a href="https://giphy.com/gifs/donkey-kong-country-LPouSsdIp6Wgo"></a>
</p>

<!-- END MAIN -->
<?php require_once( ABS_FILE . '/php/includes/footer.php'); ?>
