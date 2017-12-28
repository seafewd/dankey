<?php
require_once ( __DIR__ . '/../scripts/functions.php');
$title = 'Welcome!';
?>


  <body>
  <header>
    <div class="container">
      <div id="utility_header">
        <div id="login_register-box">
          <a href="#" data-featherlight="<?php rootDir(); ?>php/includes/login.php">Login</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="public/register.php">Register</a>
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
