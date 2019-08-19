<?php
session_start();
//page title
$title = 'Account creation success';
require_once ( __DIR__ . '/../config/head.php' );
require_once ( ABS_FILE . '/php/includes/header.php' );
require_once ( ABS_FILE . '/php/includes/article_main_outer.php' );
?>

<!-- MAIN -->
<div class="success-box-wrap">
    <h1><?php echo t("success_register1") ?></h1>
    <p><?php echo t("success_register2") ?>
        <a href="#" data-featherlight="<?php echo ABS_URL . 'public_html/login.php'?>">
            <?php echo t("success_register3") ?>
        </a>
    </p>
</div>

<!-- END MAIN -->
<?php require_once( ABS_FILE . '/php/includes/footer.php'); ?>
