<?php
session_start();
//page title
$title = 'Contact & Customer Service';
require_once ( __DIR__ . '/../config/head.php' );
require_once ( ABS_FILE . '/php/includes/header.php' );
require_once ( ABS_FILE . '/php/includes/article_main_outer.php' );
?>

<!-- MAIN -->

<h1 class="contactHeader"><?php echo t("contact us") ?></h1>
<div class="line_separator"></div>
<p><?php echo t("contact_text") ?></p>

<img src="<?php rootDir();?>img/12899068451080pdkcr_1.jpg" class="img_fullWidth padding_topbot"/>

<h2><?php echo t("phone"); ?></h2>
<p>Tel: 1337 - 956 49 00</p></br>

<h3><?php echo t("chat_phone") ?></h3>
<ul class="buttonList">
  <li><b><?php echo t("monday_friday") ?>:</b> 09.00 - 18.00</li>
  <li><b><?php echo t("saturday") ?>:</b> 12.00 - 16.00</li>
  <li><b><?php echo t("sunday") ?>:</b> <?php  echo t("closed")?></li>
</ul>

<div class="line_separator"></div>

<h2><?php echo t("email") ?></h2>
<p>
  <?php echo t("customer_service") ?>: <a href="#">info@dankeystecshop.ch</a><br/>
  <?php echo t("company orders") ?>: <a href="#">company@dankeystecshop.ch</a>
</p>

<div class="line_separator"></div>

<h2><?php echo t("address") ?></h2>
<p>
  Dankey's TecShop<br/>
  Dank Trail 15</br>
  133 37 Danktown</br>
  Switzerdank
</p>

<div class="line_separator"></div>

<h2><?php echo t("company_registration") ?></h2>
<p>350923-1247</p>

<div class="line_separator"></div>

<h2><?php echo t("map") ?></h2>
<div id="mapWrapper">
  <iframe class="googleMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7676.576301468444!2d7.240250065608214!3d47.13670695487302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478e194dca41f891%3A0x7e168c06975f6b48!2zTWNEb25hbGTigJlz!5e0!3m2!1sen!2sch!4v1514640471926" width="100%" height="770" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>


<!-- END MAIN -->
<?php require_once( ABS_FILE . '/php/includes/footer.php'); ?>
