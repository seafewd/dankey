<?php
require_once ( __DIR__ . '/functions.php');

//this script is used to query the DB and get all products for this category
require_once ( ABS_FILE . '/php/classes/db.php');
//require_once ( ABS_URL . 'php/classes/db.php');
$para = $_GET['name'];

$pdo = new PDO('mysql:host=localhost;dbname=dankeyswebshop', 'dankey', 'J2DGi7Ql#XG&u^');
$statement = $pdo->prepare("SELECT DISTINCT category FROM products WHERE subcategory = :subcategory");
$statement->bindParam(1, $para, PDO::PARAM_STR);
$result = $statement->execute();
$category = $statement->fetchAll();

echo $category;


$query = "SELECT * FROM $category WHERE subcategory = :subcategory";
$statement = $pdo->prepare($query);
$result = $statement->execute(array('subcategory'=>$para));
$product_list = $statement->fetchAll();

?>

<ul id="productList">
<?php foreach($product_list as $product) { ?>
  <?php $name = str_replace(' ', '_', $product["name"]) ?>
  	<li>
  		<div class="product_wrapper">
  			<div class="product_tnail">
          <img src="<?php rootDir(); ?>img/product_images/<?php echo $product['picture'] ?>">
  			</div>
  			<div class="product_main">
  				<a href="http://dankeytec.internet-box.ch/public/products/graphics_cards.php?product=<?php echo $name ?>"><h2><?php echo $product['name']; ?></h2></a>
  			</div>
  			<div class="product_price">
  				<h3><?php echo $product['price']; ?>.-</h3>
  			</div>
  		</div>
  	</a>
  </li>
<?php } ?>

</ul>
