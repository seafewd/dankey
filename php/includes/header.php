<?php
require_once __DIR__ . '/../scripts/functions.php';
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
  <body>
  <header>
    <div class="container">
      <div id="utility_header">
        <div id="login_register-box">
					<?php
					if(isset($_SESSION["username"])){
						$username=$_SESSION["username"];
						echo 'Hello ' . $username . ', nice to see you!&nbsp;&nbsp;';
						echo '<a href="'. ABS_URL . 'php/scripts/logout.php">Log out</a>';
					} else {
						echo '<a href="#" data-featherlight="'. ABS_URL . 'php/includes/login.php">Login</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="public/register.php">Register</a>';
					}?>
        </div>
        <a href="<?php rootDir();?>index.php"<h1 class="companyHeader"><span class="highlight">Dankey's</span> TecShop</h1></a>
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
