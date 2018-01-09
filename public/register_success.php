<?php
session_start();
//page title
$title = 'Account creation success';
require_once ( __DIR__ . '/../config/head.php' );
require_once ( ABS_FILE . '/php/includes/header.php' );
require_once ( ABS_FILE . '/php/includes/article_main_outer.php' );
?>

<!-- MAIN -->
<h1>Success!</h1>
<p>Your account was successfully created. You can now <a href="#" data-featherlight="<?php echo ABS_URL . 'public/login.php'?>">log in.</a></p>

<!-- END MAIN -->
<?php require_once( ABS_FILE . '/php/includes/footer.php'); ?>
