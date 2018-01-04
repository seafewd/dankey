<?php
$name = str_replace('+', ' ', $_GET['search_text']);
$redirect = str_replace(' ', '_', $name);

$pdo = new PDO('mysql:host=localhost;dbname=dankeyswebshop', 'dankey', 'J2DGi7Ql#XG&u^');
$statement = $pdo->prepare("SELECT subcategory FROM processors WHERE name LIKE :name UNION SELECT subcategory FROM memory  WHERE name LIKE :name UNION SELECT subcategory FROM graphics_cards WHERE name LIKE :name");
$term = '%' . $name . '%';
$statement->bindParam(':name', $term);
$statement->execute();

  while ($row = $statement->fetch()) {
    header("Location: http://dankeytec.internet-box.ch/public/product_list.php?search_text=$redirect");
    exit;
  };
?>
