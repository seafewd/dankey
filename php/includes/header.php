<?php
require_once ( __DIR__ . '/../scripts/functions.php');
$title = 'Welcome!';
?>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
    <meta name="description" content="The dankest PC parts on the web">
    <meta name="keywords" content="Computer parts, Components, Webshop">
    <meta name="author" content="Patrick Werlen and Alexander Korpas">
    <title>Dankey's TecShop | <?php print $title ?></title>
    <link rel="stylesheet" href="<?php rootDir(); ?>css/style.css">
		<link href="//cdn.rawgit.com/noelboss/featherlight/1.7.9/release/featherlight.min.css" type="text/css" rel="stylesheet" /> <!--- featherlight lightbox CSS --->
		<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded|Montserrat|Open+Sans:300,400" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="./js/sideMenu.js"></script>

		<!---	Favicon	--->
		<link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
		<link rel="icon" href="img/favicon/favicon.ico" type="image/ico">
		<link rel="manifest" href="img/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<!---	Favicon end --->

	</head>
  <body>
  <header>
    <div class="container">
      <div id="utility_header">
        <div id="login_register-box">
          <a href="#" data-featherlight="php/includes/login.php">Login</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="php/includes/register.php">Register</a>
        </div>
        <h1 class="companyHeader"><span class="highlight">Dankey's</span> TecShop</h1>

        <div id="searchBar">
        <form>
          <input type="email" placeholder="Search for a product...">
          <button type="submit" class="searchBar_button">Search</button>
        </form>
      </div>
      <nav>
        <ul>
          <li><a href="index.html">Contact</a></li>
          <li><a href="index.html">Help</a></li>
          <li><a href="index.html">About us</a></li>
          <li><a href="index.html">Social Media</a></li>
        </ul>
      </nav>

    </div>
    </div>
  </header>
