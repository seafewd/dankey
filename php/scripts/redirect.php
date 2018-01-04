<?php
$name = str_replace('+', ' ', $_GET['search_text']);

$pdo = new PDO('mysql:host=localhost;dbname=dankeyswebshop', 'dankey', 'J2DGi7Ql#XG&u^');
$statement = $pdo->prepare("SELECT subcategory FROM processors WHERE name LIKE :name UNION SELECT subcategory FROM memory  WHERE name LIKE :name UNION SELECT subcategory FROM graphics_cards WHERE name LIKE :name");
$result = $statement->execute(array('name'=>$name));
$subcategory = $statement->fetchAll(PDO::FETCH_COLUMN);

foreach ($subcategory as $subcat) {
  echo "subcat: " . $subcat;
  $query = "SELECT category FROM products WHERE subcategory LIKE :subcategory";
  $statement = $pdo->prepare($query);
  $result = $statement->execute(array('subcategory'=>$subcat));
  $category = $statement->fetchAll(PDO::FETCH_COLUMN);

  foreach ($category as $cat) {
    echo " category: " . $cat;
  }

};

?>
