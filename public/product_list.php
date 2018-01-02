<?php
//page title
$title = 'Products';
$para = $_GET['name'];
echo $para;
require_once ( __DIR__ . '/../config/head.php' );
require_once ( ABS_FILE . '/php/includes/header.php' );
require_once ( ABS_FILE . '/php/includes/splash_image_box.php' );
require_once ( ABS_FILE . '/php/includes/article_main_outer.php' );
require_once ( ABS_FILE . '/php/scripts/fillProductList.php');
?>

<link rel="stylesheet" href="<?php rootDir(); ?>css/product_list.css">

<?php require_once( ABS_FILE . '/php/includes/footer.php'); ?>
