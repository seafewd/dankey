<?php
require_once ( __DIR__ . '/../config/head.php' );
require_once ( ABS_FILE . '/php/classes/db.php');

$pdo = DB::getInstance();
$user_list = $pdo->getAllEntriesByTable("users");
$graphics_cards_list = $pdo->getAllEntriesByTable("graphics_cards");
$processors_list = $pdo->getAllEntriesByTable("processors");
$memory_list = $pdo->getAllEntriesByTable("memory");

?>

<h1>Welcome, ADMIN</h1>
<p>You accessed the admin page in trial mode. If you decide to upgrade your plan to premium features as editing, deleting and adding products will be made accessible to you.</p>
<h3>All users</h3>

<table>
  <tr>
    <th>Username</th>
    <th>First name</th>
    <th>Last name</th>
    <th>Address</th>
    <th>City</th>
    <th>Birthday</th>
  </tr>
<?php foreach ($user_list as $users) { ?>
  <tr>
  <td><?php echo $users['username']?></td>
  <td><?php echo $users['firstname']?></td>
  <td><?php echo $users['lastname']?></td>
  <td><?php echo $users['address']?></td>
  <td><?php echo $users['city']?></td>
  <td><?php echo $users['birthday']?></td>
</tr>
<?php }?>
</table>
<h3>All Graphic Cards<h3>
  <?php foreach ($graphics_cards_list as $graphics) { ?>
    <td><?php echo $graphics['username']?></td>
    <td><?php echo $graphics['firstname']?></td>
    <td><?php echo $graphics['lastname']?></td>
    <td><?php echo $graphics['address']?></td>
    <td><?php echo $graphics['city']?></td><br>
  <?php }?>
<h3>All Processors<h3>
  <?php foreach ($processors_list as $processor) { ?>
    <td><?php echo $processor['username']?></td>
    <td><?php echo $processor['firstname']?></td>
    <td><?php echo $processor['lastname']?></td>
    <td><?php echo $processor['address']?></td>
    <td><?php echo $processor['city']?></td><br>
  <?php }?>
<h3>All Memory<h3>
  <?php foreach ($memory_list as $memory) { ?>
    <td><?php echo $memory['username']?></td>
    <td><?php echo $memory['firstname']?></td>
    <td><?php echo $memory['lastname']?></td>
    <td><?php echo $memory['address']?></td>
    <td><?php echo $memory['city']?></td><br>
  <?php }?>
