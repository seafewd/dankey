<?php
require_once ( __DIR__ . '/functions.php');

//this script is used to query the DB and get all products for this category
require_once ( ABS_FILE . '/php/classes/db.php');
//require_once ( ABS_URL . 'php/classes/db.php');
$para = $_GET['name'];

$pdo = new PDO('mysql:host=localhost;dbname=dankeyswebshop', 'dankey', 'J2DGi7Ql#XG&u^');
$statement = $pdo->prepare("SELECT * FROM graphics_cards WHERE subcategory = :subcategory");
$result = $statement->execute(array('subcategory'=>$para));
$product_list = $statement->fetchAll();

?>

<ul id="productList">
<?php foreach($product_list as $product) { ?>
  	<li>
  		<div class="product_wrapper">
  			<div class="product_tnail">
          <img src="<?php rootDir(); ?>img/product_images/<?php echo $product['picture'] ?>">
  			</div>
  			<div class="product_main">
  				<a href="<?php echo $row['productURL']?>"><h2><?php echo $product['name']; ?></h2></a>
  				<p><?php echo $product['description']; ?></p>
  			</div>
  			<div class="product_price">
  				<h3><?php echo $product['price']; ?>.-</h3>
  			</div>
  		</div>
  	</a>
  </li>
<?php } ?>

</ul>
