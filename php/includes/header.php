<?php
require_once ( __DIR__ . '/../scripts/functions.php');
?>

  <body>
  <header>
    <div class="container">
      <div id="utility_header">
        <div id="login_register-box">
					<?php
					if(isset($_SESSION["username"])){
						$username=$_SESSION["username"];
						echo 'Hello <a href="'. ABS_URL.'account.php">' . $username . '</a>, nice to see you!&nbsp;&nbsp;';
						echo '<a href="'. ABS_URL . 'php/scripts/logout.php">Log out</a>';
					} else {
						echo '<a href="#" data-featherlight="'. ABS_URL . 'php/includes/login.php">Login</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="'. ABS_URL . 'public/register.php">Register</a>';
					}?>
        </div>
        <h1 class="companyHeader"><a href="<?php rootDir();?>index.php"><span class="highlight">Dankey's</span> TecShop</a></h1>
        <div id="searchBar">
        <form action=redirect.php method=get>
          <input type="text" name="search_text" id="search_text" placeholder="Search for a product..." autocomplete="off"/>
          <div id="search_result"></div>
          <button type="submit" class="searchBar_button">Search</button>
        </form>
      </div>
      <nav>
        <ul>
          <li><a href="<?php rootDir();?>public/contact.php">Contact</a></li>
          <li><a href="index.html">Help</a></li>
          <li><a href="index.html">About us</a></li>
          <li><a href="index.html">Social Media</a></li>
        </ul>
      </nav>

    </div>
    </div>
  </header>
