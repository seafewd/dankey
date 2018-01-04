<?php
$name = str_replace('+', ' ', $_GET['search_text']);
echo $name;

$para = $name;

$pdo = new PDO('mysql:host=localhost;dbname=dankeyswebshop', 'dankey', 'J2DGi7Ql#XG&u^');
$statement = $pdo->prepare("SELECT subcategory FROM processors WHERE name LIKE :name UNION SELECT subcategory FROM memory  WHERE name LIKE :name UNION SELECT subcategory FROM graphics_cards WHERE name LIKE :name");
$result = $statement->execute(array('name'=>$name));
$category = $statement->fetchAll(PDO::FETCH_COLUMN);

echo $category;

foreach ($category as $cat) {
  echo $cat;
  echo " round ";
  /*$tmp = $cat;
  $query = "SELECT * FROM $cat WHERE subcategory = :subcategory";
  $statement = $pdo->prepare($query);
  $result = $statement->execute(array('subcategory'=>$para));
  $product_list = $statement->fetchAll();*/
};

?>
