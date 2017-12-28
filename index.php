<?php
//page title
$title = 'Welcome!';

require_once ( __DIR__ . '/config/head.php' );
require_once ( __DIR__ . '/php/includes/header.php' );
require_once ( __DIR__ . '/php/includes/splash_image_box.php' );
require_once ( __DIR__ . '/php/includes/article_main_outer.php' );
?>

<section id="boxes">
    <div class="container">
        <div class="box">
            <img src="<?php rootDir();?>img/1.png">
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
