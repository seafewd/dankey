<?php
require_once( __DIR__ . '/../php/scripts/functions.php');
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="The dankest PC parts on the web">
    <meta name="keywords" content="Computer parts, Components, Webshop">
    <meta name="author" content="Patrick Werlen and Alexander Korpas">
    <title>Dankey's TecShop | <?php pageTitle(); ?></title>
    <link rel="stylesheet" href="<?php echo ABS_URL . '/css/style.css'; ?>">
    <link href="<?php echo ABS_URL; ?>\js\featherlight-1.7.9\src\featherlight.css" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded|Montserrat|Open+Sans:300,400" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php rootDir();?>js/parallax.js-1.5.0/parallax.js"></script>
    <script src="<?php rootDir(); ?>/js/sideMenu.js"></script>

    <!---	Favicon	--->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php rootDir(); ?>img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php rootDir(); ?>img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php rootDir(); ?>img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php rootDir(); ?>img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php rootDir(); ?>img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php rootDir(); ?>img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php rootDir(); ?>img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php rootDir(); ?>img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php rootDir(); ?>img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php rootDir(); ?>img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php rootDir(); ?>img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php rootDir(); ?>img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php rootDir(); ?>img/favicon/favicon-16x16.png">
    <link rel="icon" href="<?php rootDir(); ?>img/favicon/favicon.ico" type="image/ico">
    <link rel="manifest" href="<?php rootDir(); ?>img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!---	Favicon end --->
</head>
