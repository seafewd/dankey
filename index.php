<?php
$inc_dir = $_SERVER["DOCUMENT_ROOT"] . "/WebProg_Project/Project/php/includes/";
require ($inc_dir . 'header.php');
?>

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


	<?php
		include 'php/includes/sideMenu.php';
	?>

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
<!--- Featherlight -->
<script src="//code.jquery.com/jquery-latest.js"></script>
<script src="//cdn.rawgit.com/noelboss/featherlight/1.7.9/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
<!--- /Featherlight -->
</body>
<footer>
	<?php include 'php/includes/footer.php'; ?>
</footer>
</html>

<script src="http://thecodeplayer.com/uploads/js/jquery-1.7.1.min.js" type="text/javascript"></script>
