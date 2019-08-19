<?php
require_once( __DIR__ . '/../php/scripts/functions.php');
require_once( __DIR__ . '/../php/scripts/languages.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The dankest PC parts on the web">
    <meta name="keywords" content="Computer parts, Components, Webshop">
    <meta name="author" content="Patrick Werlen and Alexander Korpas">

    <title>Dankey's TecShop | <?php pageTitle(); ?></title>

    <!--Media query styles in footer -->
    <link rel="stylesheet" href="<?php echo ABS_URL . 'public_html/css/featherlight.css'; ?>">
    <link rel="stylesheet" href="<?php echo ABS_URL . 'public_html/css/article-post.css'; ?>">
    <link rel="stylesheet" href="<?php echo ABS_URL . 'public_html/js/toast/src/jquery.toast.css'; ?>">
    <link rel="stylesheet" href="<?php echo ABS_URL . 'public_html/js/slider/css/style.css'; ?>">
    <link rel="stylesheet" href="<?php echo ABS_URL . 'public_html/css/profile_page.css'; ?>">
    <link rel="stylesheet" href="<?php echo ABS_URL . 'public_html/css/jquery-ui.css'; ?>">
    <link rel="stylesheet" href="<?php echo ABS_URL . 'public_html/css/sideMenu.css'; ?>">
    <link rel="stylesheet" href="<?php echo ABS_URL . 'public_html/css/style.css'; ?>">

    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded|Montserrat|Open+Sans:300,400|Roboto|Raleway" rel="stylesheet">

    <script src="<?php rootDir();?>public_html/js/jquery-3.2.1.min.js"></script>
    <script src="<?php rootDir();?>public_html/js/parallax.js"></script>
    <script src="<?php rootDir();?>public_html/js/sideMenu.js"></script>
    <script src="<?php rootDir();?>public_html/js/livesearch.js"></script>
    <script src="<?php rootDir();?>public_html/js/shoppingCartPopup.js"></script>
    <script src="<?php rootDir();?>public_html/js/featherlight.js"></script>
    <script src="<?php rootDir();?>public_html/js/jquery.validate.js"></script>
    <script src="<?php rootDir();?>public_html/js/set_language.js"></script>
    <script src="<?php rootDir();?>public_html/js/toast/dist/jquery.toast.min.js"></script>
    <script src="<?php rootDir();?>public_html/js/shopping_functions/utility.js"></script>
    <script src="<?php rootDir();?>public_html/js/slider/js/slider.js"></script>
    <script src="<?php rootDir();?>public_html/js/slider/js/hammer.js"></script>
    <script src="<?php rootDir();?>public_html/js/effects.js"></script>
    <script src="<?php rootDir();?>public_html/js/js.cookie.js"></script>
    <script src="<?php rootDir();?>public_html/js/jquery-ui.js"></script>
    <!--fix the damn alert-->
    <script>
        function alert(msg) {
            return $.toast(msg);
        }
    </script>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php rootDir(); ?>public_html/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php rootDir(); ?>public_html/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php rootDir(); ?>public_html/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php rootDir(); ?>public_html/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php rootDir(); ?>public_html/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php rootDir(); ?>public_html/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php rootDir(); ?>public_html/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php rootDir(); ?>public_html/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php rootDir(); ?>public_html/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php rootDir(); ?>public_html/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php rootDir(); ?>public_html/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php rootDir(); ?>public_html/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php rootDir(); ?>public_html/img/favicon/favicon-16x16.png">
    <link rel="icon" href="<?php rootDir(); ?>public_html/img/favicon/favicon.ico" type="image/ico">
    <link rel="manifest" href="<?php rootDir(); ?>public_html/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php rootDir(); ?>public_html/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Favicon end -->

</head>
