<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
    <meta name="description" content="The dankest PC parts on the web">
    <meta name="keywords" content="Computer parts, Components, Webshop">
    <meta name="author" content="Patrick Werlen and Alexander Korpas">
    <title>Dankey's TecShop | Welcome!</title>
    <link rel="stylesheet" href="./css/style.css">
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
    <section id="splash_box">
      <div class="container">
      <h1>The dankest PC parts on the web</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et pharetra justo. Quisque fermentum congue enim, eu consequat enim tincidunt nec. Proin accumsan nunc vitae turpis tempus porttitor. Integer aliquet orci sed libero tempor, id finibus velit laoreet.</p>
    </div>
  </section>
<!---
  <section id="searchBar">
    <div class="container">
      <h1>What are you looking for? We got it all!</h1>
      <form>
        <input type="email" placeholder="Search for a product...">
        <button type="submit" class="searchBar_button">Search</button>
      </form>
    </div>
  </section>
  --->
	<section id="main_outer">
		<section id="main_inner">

	<nav id="sideMenu">
		<h3>Products</h3>
		<?php
			include('php/scripts/menuLoop.php');
		 ?>
		<!---
		<ul class="sideMenu_l1">
			<li>Graphics cards</li>
			<ul class="sideMenu_l2">
				<li><a href="#">Nvidia GeForce</a></li>
				<li><a href="#">AMD Radeon</a></li>
			</ul>
			<li>Cooling</li>
			<ul class="sideMenu_l2">
				<li><a href="#">Case fans</li>
				<li><a href="#">Processor cooling</a></li>
				<li><a href="#">Hard drive cooling</a></li>
				<li><a href="#">Thermal paste</a></li>
			</ul>
			<li>Processors</li>
			<ul class="sideMenu_l2">
				<li><a href="#">Socket 1151 (Intel)</a></li>
				<li><a href="#">Socket 2011-3 (Intel)</a></li>
				<li><a href="#">Socket 2066 (Intel)</a></li>
				<li><a href="#">Socket 1150 (Intel)</a></li>
				<li><a href="#">Socket AM4 (AMD)</a></li>
				<li><a href="#">Socket TR4 (AMD)</a></li>
				<li><a href="#">Socket AM3 (AMD)</a></li>
				<li><a href="#">Socket FM2 (AMD)</a></li>
			</ul>
			<li>Hard drives</li>
			<ul class="sideMenu_l2">
				<li><a href="#">SATA 2.5”</a></li>
				<li><a href="#">SATA 3.5"</a></li>
				<li><a href="#">SSD SATA</a></li>
				<li><a href="#">External SSD</a></li>
				<li><a href="#">External USB 2.5"</a></li>
				<li><a href="#">External USB 3.5"</a></li>
				<li><a href="#">Accessories</a></li>
			</ul>
			<li>Cases</li>
			<ul class="sideMenu_l2">
				<li><a href="#">Mini-ITX</a></li>
				<li><a href="#">Minitower</a></li>
				<li><a href="#">Miditower</a></li>
				<li><a href="#">Fulltower</a></li>
				<li><a href="#">Accessories</a></li>
			</ul>
			<li>Memory</li>
			<ul class="sideMenu_l2">
				<li><a href="#">DDR4</a></li>
				<li><a href="#">DDR3</a></li>
				<li><a href="#">DDR2</a></li>
				<li><a href="#">DDR</a></li>
			</ul>
			<li>Motherboards</li>
			<ul class="sideMenu_l2">
				<li><a href="#">Socket 1151</a></li>
				<li><a href="#">Socket 2011-3</a></li>
				<li><a href="#">Socket 2066</a></li>
				<li><a href="#">Socket AM4</a></li>
				<li><a href="#">Socket FM2+</a></li>
				<li><a href="#">Socket TR4</a></li>
				<li><a href="#">Socket 1150</a></li>
				<li><a href="#">Socket AM3+</a></li>
			</ul>
			<li><a href="#">Power supplies</a></li>
			<li>Sound cards</li>
			<ul class="sideMenu_l2">
				<li><a href="#">Internal</a></li>
				<li><a href="#">External</a></li>
			</ul>
			<li>DVD & BD-units</li>
			<ul class="sideMenu_l2">
				<li><a href="#">Blu-Ray</a></li>
				<li><a href="#">DVDR</a></li>
				<li><a href="#">External Blu-Ray</a></li>
				<li><a href="#">External DVDR</a></li>
			</ul>
			<li>Accessories</li>
			<ul class="sideMenu_l2">
				<li><a href="#">Adapters</a></li>
				<li><a href="#">Cables</a></li>
			</ul>
			<li><a href="#">New products</a></li>
			<li><a href="#">Promotions</a></li>
		</ul>-->
	</nav>

  <section id="boxes">
    <div class="container">

      <div class="box">
        <img src="./img/1.png">
        <h3>PC parts</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et pharetra justo.</p>
      </div>
      <div class="box">
        <img src="./img/2.jpg">
        <h3>Accessories</h3>
        <p>Mauris iaculis in dolor in egestas.</p>
      </div>
      <div class="box">
        <img src="./img/3.jpg">
        <h3>Other stuff</h3>
        <p>Mauris iaculis in dolor in egestas.</p>
      </div>
    </div>
  </section>
</section>
</section>
</body>
<footer>
  <h1>Dankey's TecShop &copy; 2017</h1>
</footer>
</html>

<script src="http://thecodeplayer.com/uploads/js/jquery-1.7.1.min.js" type="text/javascript"></script>
