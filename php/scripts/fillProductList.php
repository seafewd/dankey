<?php
require_once ( __DIR__ . '/functions.php');

$para = $_GET['name'];

echo $para;

$pdo = new PDO('mysql:host=localhost;dbname=dankeyswebshop', 'dankey', 'J2DGi7Ql#XG&u^');
$statement = $pdo->prepare("SELECT DISTINCT category FROM products WHERE subcategory = :subcategory");
$result = $statement->execute(array('subcategory'=>$para));
$category = $statement->fetchAll(PDO::FETCH_COLUMN);

foreach ($category as $cat) {
  $tmp = $cat;
  $query = "SELECT * FROM $cat WHERE subcategory = :subcategory";
  $statement = $pdo->prepare($query);
  $result = $statement->execute(array('subcategory'=>$para));
  $product_list = $statement->fetchAll();
};
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
          <?php echo '<a href="' . ABS_URL . 'public/products/' . $cat . '.php?product=' . $name . '"><h2> echo $product['name'] </h2></a>'; ?>
          <!--<a href="http://dankeytec.internet-box.ch/public/products/graphics_cards.php?product=<?php// echo $name ?>"><h2><?php// echo $product['name']; ?></h2></a>-->
        </div>
        <div class="product_price">
          <h3><?php echo $product['price']; ?>.-</h3>
        </div>
      </div>
    </a>
  </li>
<?php } ?>

</ul>
