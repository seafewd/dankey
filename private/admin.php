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
<p>You accessed the admin page in trial mode. If you decide to upgrade your plan to premium, features as editing, deleting and adding products will be made accessible to you.</p>
<h2>All users</h2>

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
<h2>All Graphic Cards</h2>
  <table>
    <tr>
      <th>Name</th>
      <th>Subcategory</th>
      <th>Brand</th>
      <th>Model</th>
      <th>Price</th>
    </tr>
  <?php foreach ($graphics_cards_list as $graphics) { ?>
    <tr>
    <td><?php echo $graphics['name']?></td>
    <td><?php echo $graphics['subcategory']?></td>
    <td><?php echo $graphics['brand']?></td>
    <td><?php echo $graphics['model']?></td>
    <td><?php echo $graphics['price']?></td>
  </tr>
  <?php }?>
</table>
<h2>All Processors</h2>
  <table>
    <tr>
      <th>Name</th>
      <th>Socket</th>
      <th>Brand</th>
      <th>Model</th>
      <th>Price</th>
    </tr>
  <?php foreach ($processors_list as $processor) { ?>
    <tr>
    <td><?php echo $processor['name']?></td>
    <td><?php echo $processor['subcategory']?></td>
    <td><?php echo $processor['brand']?></td>
    <td><?php echo $processor['model']?></td>
    <td><?php echo $processor['price']?></td>
  </tr>
  <?php }?>
</table>
<h2>All Memory</h2>
  <table>
    <tr>
      <th>Name</th>
      <th>Chip</th>
      <th>Brand</th>
      <th>Storage Capacity</th>
      <th>Price</th>
    </tr>
  <?php foreach ($memory_list as $memory) { ?>
    <tr>
    <td><?php echo $memory['name']?></td>
    <td><?php echo $memory['memory_chip']?></td>
    <td><?php echo $memory['brand']?></td>
    <td><?php echo $memory['storage']?></td>
    <td><?php echo $memory['price']?></td>
  </tr>
  <?php }?>
</table>
