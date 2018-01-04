<?php
$name = str_replace('+', ' ', $_GET['search_text']);
$redirect = str_replace(' ', '_', $name);

$pdo = new PDO('mysql:host=localhost;dbname=dankeyswebshop', 'dankey', 'J2DGi7Ql#XG&u^');
$statement = $pdo->prepare("SELECT subcategory FROM processors WHERE name LIKE :name UNION SELECT subcategory FROM memory  WHERE name LIKE :name UNION SELECT subcategory FROM graphics_cards WHERE name LIKE :name");
$result = $statement->execute(array('name'=>$name));
$subcategory = $statement->fetchAll(PDO::FETCH_COLUMN);

echo "<script type='text/javascript'>alert('$subcategory');</script>";

foreach ($subcategory as $subcat) {
  echo "<script type='text/javascript'>alert('$subcat');</script>";
  $query = "SELECT category FROM products WHERE subcategory LIKE :subcategory";
  $statement = $pdo->prepare($query);
  $result = $statement->execute(array('subcategory'=>$subcat));
  $category = $statement->fetchAll(PDO::FETCH_COLUMN);

  foreach ($category as $cat) {
    echo "<script type='text/javascript'>alert('$cat');</script>";
    header("Location: http://dankeytec.internet-box.ch/public/products/$cat.php?product=$redirect");
    exit;
  }

};

?>
