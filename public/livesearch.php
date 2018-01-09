<?php
require_once ( __DIR__ . '/../php/scripts/functions.php' );
require_once ( ABS_FILE . '/php/classes/db.php');

$pdo = DB::getInstance();

// Attempt search query execution
try {
    // create prepared statement
    $sql = "SELECT name FROM graphics_cards WHERE name LIKE :term UNION SELECT name FROM memory WHERE name LIKE :term UNION SELECT name FROM processors WHERE name LIKE :term";
    $stmt = $pdo->db->prepare($sql);
    $term = '%' . $_GET['term'] . '%';
    // bind parameters to statement
    $stmt->bindParam(':term', $term);
    // execute the prepared statement
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        echo '<ul id="search_results">';
        while ($row = $stmt->fetch()) {
            echo '<li>' . $row["name"] . '</li>';
        }
    } else {
        echo '<li>' . $_GET['noMatchesMsg'] . '</li>';
    }
    echo '</ul>';

} catch (PDOException $e) {
    die("ERROR: Could not execute $sql. " . $e->getMessage());
}


// Close statement
unset($stmt);
// Close connection
unset($pdo);
?>
