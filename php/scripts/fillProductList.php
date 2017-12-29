<?php
require_once ( __DIR__ . '/functions.php');

//this script is used to query the DB and get all products for this category
require_once ( __DIR__ . '/../classes/db.php');
//require_once ( ABS_URL . 'php/classes/db.php');


$db = DB::getInstance();

$product_list = $db -> doQuery("SELECT * FROM `products` WHERE `category` = 'Nvidia GeForce'");

?>

<ul id="productList">
<?php while ($row = mysqli_fetch_array($product_list)) { ?>
  	<li>
  		<div class="product_wrapper">
  			<div class="product_tnail">
          <img src="<?php echo ABS_URL . '/' . $row['thumbnail_url'] . '"/>'; ?>
  			</div>
  			<div class="product_main">
  				<a href="#"><h2><?php echo $row['name']; ?></h2></a>
  				<p><?php echo $row['description']; ?></p>
  			</div>
  			<div class="product_price">
  				<h3><?php echo $row['price']; ?>.-</h3>
  			</div>
  		</div>
  	</a>
  </li>
<?php } ?>

</ul>
