<?php
require_once ( __DIR__ . '/../config/head.php' );
require_once ( ABS_FILE . '/php/classes/db.php');

$pdo = DB::getInstance();
?>

<h1>This is the admin page</h1>
<h3>All users</h3>
