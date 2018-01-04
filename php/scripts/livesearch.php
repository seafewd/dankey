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
    if(isset($_GET['term'])){
        // create prepared statement
        $sql = "SELECT * FROM graphics_cards WHERE name LIKE :term";
        $stmt = $pdo -> prepare($sql);
        $term = $_REQUEST['term'] . '%';
        // bind parameters to statement
        $stmt -> bindParam(':term', $term);
        // execute the prepared statement
        $stmt -> execute();
        if($stmt -> rowCount() > 0){
            while($row = $stmt -> fetch()){
              echo "<p>" . $row['name'] . "</p>";
            }
        } else{
            echo "<p>No matches found</p>";
        }
    }
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}


// Close statement
unset($stmt);
// Close connection
unset($pdo);
?>
