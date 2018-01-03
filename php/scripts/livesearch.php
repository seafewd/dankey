<?php
require_once ( __DIR__ . '/functions.php');

try{
    $pdo = new PDO("mysql:host=localhost;dbname=dankeyswebshop", "dankey", "xyz");
    // Set the PDO error mode to exception
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e -> getMessage());
}

// Attempt search query execution
try{
  // create prepared statement
  $sql = "SELECT * FROM graphics_cards WHERE name LIKE :term";
  $stmt = $pdo -> prepare($sql);
  $term = $_GET['term'] . '%';
  // bind parameters to statement
  $stmt -> bindParam(':term', $term);
  // execute the prepared statement
  $stmt -> execute();
  if($stmt -> rowCount() > 0){
      while($row = $stmt -> fetch()){
        echo '<div class="search_result_listItem">' . $row["name"] . '</div>';
      }
  } else{
      echo "<p>" . $_GET['noMatchesMsg'] . "</p>";
  }

} catch(PDOException $e){
    die("ERROR: Could not execute $sql. " . $e->getMessage());
}


// Close statement
unset($stmt);
// Close connection
unset($pdo);
?>
