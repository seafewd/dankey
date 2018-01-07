<?php
require_once ( __DIR__ . '/functions.php');
require_once ( ABS_FILE . '/php/classes/db.php');

$name = str_replace('+', ' ', $_GET['search_text']);
$redirect = str_replace(' ', '_', $name);

$pdo = DB::getInstance();

$statement = $pdo->db->prepare("SELECT subcategory FROM processors WHERE name LIKE :name UNION SELECT subcategory FROM memory  WHERE name LIKE :name UNION SELECT subcategory FROM graphics_cards WHERE name LIKE :name");
$term = '%' . $name . '%';
$statement->bindParam(':name', $term);
$statement->execute();

while ($row = $statement->fetch()) {
  header("Location:" . ABS_URL . "public/product_list.php?search_text=$redirect");
  exit;
};
?>
