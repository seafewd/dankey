<?php
session_start();

//page title
$title = 'Products';

require_once ( __DIR__ . '/../config/head.php' );
require_once ( ABS_FILE . '/php/includes/header.php' );
require_once ( ABS_FILE . '/php/includes/article_main_outer.php' );
require_once ( ABS_FILE . '/php/scripts/fillProductList.php');
?>

<script>
$(document).ready(function() {
    $('.product_wrapper').hover(function() {
        $(this).children('.product_tnail').css('border-color', 'transparent', 'border-right', '1px solid lightgray', 'border-radius', '0');
    }, function() {
        $('.product_tnail').css('border-color', 'lightgray', 'border-radius', '20px');
    });
});
</script>

<link rel="stylesheet" href="<?php rootDir(); ?>css/product_list.css">



<?php require_once( ABS_FILE . '/php/includes/footer.php'); ?>
