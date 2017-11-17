<?php
require_once ( __DIR__ . '/php/includes/header.php');
?>

	<section id="main_outer">
    <section id="splash_box">
      <div class="container">
      <h1>The dankest PC parts on the web</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et pharetra justo. Quisque fermentum congue enim, eu consequat enim tincidunt nec. Proin accumsan nunc vitae turpis tempus porttitor. Integer aliquet orci sed libero tempor, id finibus velit laoreet.</p>
    </div>
  </section>


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
<?php include 'php/includes/footer.php'; ?>
