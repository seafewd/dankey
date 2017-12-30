<?php
//page title
$title = 'Register an account';

require_once ( __DIR__ . '/../config/head.php' );
require_once ( ABS_FILE . '/php/includes/header.php' );
require_once ( ABS_FILE . '/php/includes/article_main_outer.php' );
require_once ( ABS_FILE . '/php/classes/db.php');

//initialize DB
$db = DB::getInstance();

if(isSet($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $phone = $_POST['phone'];
  $language = $_POST['languageOption'];
  $birthday = $_POST['birthday'];
  $sex = $_POST['sexOption'];

  $db -> doQuery("INSERT INTO users (username, email, password, firstname, lastname, address, city, phone, language, birthday, sex) VALUES
   ('$username', '$email', '$password', '$firstname', '$lastname', '$address', '$city', '$phone', '$language', '$birthday', '$sex')");

}
?>
<div id="registerFormWrapper">
  <h1>Register</h1>
<form id="register" action="register.php" method="post" accept-charset="UTF-8">
  <input type="hidden" name="submitted" id="submitted" value="1"/>

<input type="text" placeholder="Username" name="username" id="username" maxlength="50"/></br>

<input type="email" placeholder="E-mail" name="email" id="email" maxlength="50"/></br>

<input type="text" placeholder="First name" name="firstname" id="firstname" maxlength="50"/></br>

<input type="text" placeholder="Last name" name="lastname" id="lastname" maxlength="50"/></br>

<input type="text" placeholder="Address" name="address" id="address" maxlength="50"/></br>

<input type="text" placeholder="City" name="city" id="city" maxlength="50"/></br>

<input type="tel" placeholder="Phone" name="phone" id="phone" maxlength="50"/></br>

<select id="sexOption" name="sexOption">
  <option value="" disabled selected>Select your gender</option>
  <option value="male"><span>male</span></option>
  <option value="female"><span>female</span></option>
</select>

<select id="languageOption" name="languageOption">
  <option value="" disabled selected>Select your language</option>
  <option value="deutsch"><span>deutsch</span></option>
  <option value="english"><span>english</span></option>
</select>

<input type="date" name="birthday" id="birthday" maxlength="50"/></br>

<input type="password" placeholder="Password" name="password" id="password" maxlength="50"/></br>

<input type="password" placeholder="Confirm password" name="password-conf" id="password-conf" maxlength="50"/></br>

<input type="submit" name="submit" value="Submit"/>
</form>
</div>

<?php require_once( ABS_FILE . '/php/includes/footer.php'); ?>
