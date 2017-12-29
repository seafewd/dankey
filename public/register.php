<?php
//page title
$title = 'Register an account';

require_once ( __DIR__ . '/../config/head.php' );
require_once ( __DIR__ . '/../php/includes/header.php' );
require_once ( __DIR__ . '/../php/includes/article_main_outer.php' );
require_once ( __DIR__ . '/../php/classes/db.php');

//initialize DB
$db = DB::getInstance();

if(isSet($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $address = $_POST['address'];

  $db -> doQuery("INSERT INTO users (username, email, password, firstname, lastname, address) VALUES ('$username', '$email', '$password', '$firstname', '$lastname', '$address')");

}
?>

<form id="register" action="register.php" method="post" accept-charset="UTF-8">
  <h2>Register</h2>
  <input type="hidden" name="submitted" id="submitted" value="1"/>

  <input type="text" placeholder="Username" name="username" id="username" maxlength="50"/></br>

  <input type="text" placeholder="E-mail" name="email" id="email" maxlength="50"/></br>

  <input type="text" placeholder="First name" name="firstname" id="firstname" maxlength="50"/></br>

  <input type="text" placeholder="Last name" name="lastname" id="lastname" maxlength="50"/></br>

  <input type="text" placeholder="Address" name="address" id="address" maxlength="50"/></br>

  <input type="password" placeholder="Password" name="password" id="password" maxlength="50"/></br>

  <input type="password" placeholder="Confirm password" name="password-conf" id="password-conf" maxlength="50"/></br>

  <input type="submit" name="submit" value="Submit"/>
</form>

<?php require_once( __DIR__ . '/../php/includes/footer.php'); ?>
