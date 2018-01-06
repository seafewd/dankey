<?php
require_once ( __DIR__ . '/functions.php');

$pdo = new PDO('mysql:host=localhost;dbname=dankeyswebshop', 'dankey', 'J2DGi7Ql#XG&u^');

//is set if user comes from sidemenu choice
if(isSet($_GET['name'])){
  $para = $_GET['name'];

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


  if (sizeOf($product_list) === 0) {
    echo '<h2>No products found.</h2>';
  }

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
            <?php echo '<a href="' . ABS_URL . 'public/products/' . $cat . '.php?product=' . $name . '">' . '<h2>' . $product['name'] . '</h2>' . '</a>'; ?>
          </div>
          <div class="product_price">
            <h3><?php echo $product['price']; ?>.-</h3>
          </div>
        </div>
      </a>
    </li>
    <?php //if user comes from search bar
  }}else{
    $para = $_GET['search_text'];
    $statement = $pdo->prepare("SELECT name, picture, price, subcategory FROM processors WHERE name LIKE :name UNION SELECT name, picture, price, subcategory FROM memory  WHERE name LIKE :name UNION SELECT name, picture, price, subcategory FROM graphics_cards WHERE name LIKE :name");
    $term = '%' . $para . '%';
    $statement->bindParam(':name', $term);
    $statement->execute();

    $copy = unserialize(serialize($statement));
    $product_list = $copy->fetchAll();
    if (sizeOf($product_list) === 1) {
      echo '<h2>HELLO THERE</h2>';
    };

    while ($row = $statement->fetch()) {
      $newstatement = $pdo->prepare("SELECT DISTINCT category FROM products WHERE subcategory = :subcategory");
      $result = $newstatement->execute(array('subcategory'=>$row['subcategory']));
      $category = $newstatement->fetchAll(PDO::FETCH_COLUMN);
      foreach ($category as $cat) {
        ?>
        <ul id="productList">
          <li>
            <?php $name = str_replace(' ', '_', $row['name']); ?>
            <div class="product_wrapper">
              <div class="product_tnail">
                <img src="<?php rootDir(); ?>img/product_images/<?php echo $row['picture'] ?>">
              </div>
              <div class="product_main">
                <?php echo '<a href="' . ABS_URL . 'public/products/' . $cat . '.php?product=' . $name . '">' . '<h2>' . $row['name'] . '</h2>' . '</a>'; ?>
              </div>
              <div class="product_price">
                <h3><?php echo $row['price']; ?>.-</h3>
              </div>
            </div>
          </a>
        </li>

      <?php }};

    } ?>

  </ul>
