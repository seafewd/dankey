<?php
//page title
$title = 'Welcome!';

require_once ( __DIR__ . '/config/head.php' );
require_once ( __DIR__ . '/php/includes/header.php' );
require_once ( __DIR__ . '/php/includes/splash_image_box.php' );
require_once ( __DIR__ . '/php/includes/article_main_outer.php' );


//initialize DB - TEST - REMOVE AFTERWARDS!!!!!
require_once ( __DIR__ . '/php/classes/db.php');
$db = DB::getInstance();

//$db -> doQuery("DELETE FROM products");
//generate 25 products
for($i = 1; $i <= 24; $i++) {
  //$db -> doQuery("INSERT INTO products (name, price, category, stock, manufacturer, thumbnail_img) VALUES ('product " . $i . "', '255', 'Nvidia GeForce', '8', 'Intel', 'LOAD_FILE(" . ABS_URL . "img/product_images/nvidia_geforce/gtx-1080-ti.jpg)'); ");
}
?>

<section id="boxes">
    <div class="container">
        <div class="box">
            <img src="<?php rootDir();?>/img/1.png">
            <h3>PC parts</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et pharetra justo.</p>
        </div>
        <div class="box">
            <img src="<?php rootDir();?>img/2.jpg">
            <h3>Accessories</h3>
            <p>Mauris iaculis in dolor in egestas.</p>
        </div>
        <div class="box">
            <img src="<?php rootDir();?>img/3.jpg">
            <h3>Other stuff</h3>
            <p>Mauris iaculis in dolor in egestas.</p>
        </div>
    </div>
</section>


<?php require_once __DIR__ . '/php/includes/footer.php'; ?>
