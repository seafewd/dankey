<?php
require_once ( __DIR__ . '/../config/head.php' );
require_once ( ABS_FILE . '/php/classes/db.php');

$pdo = DB::getInstance();
$user_list = $pdo->getAllUsers();
?>

<h1>This is the admin page</h1>
<h3>All users</h3>
<?php foreach ($user_list as $users) {
  echo "<p>$users['username'] $users['firstname'] $users['lastname'] $users['address'] $users['city'] </p><br>";
}?>
