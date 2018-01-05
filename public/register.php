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
<script>
function changeFontOpacity(value) {
  //alert($(this).find("option:selected").attr('id'));
  //alert($(this + "option:selected").text());
  if ($(this + "option:selected").text() != value) {
    $('#register #sexOption').css('opacity', '1');
    //$('#register #languageOption').css('opacity', '1');
  } else {
    $('#register #sexOption').css('opacity', '0.5');
    //$('#register #languageOption').css('opacity', '0.5');

  }
}
</script>

<div id="registerFormWrapper">
  <h1>Register</h1>
  <form id="register" name="myForm" onsubmit="return validateForm()" method="post" accept-charset="UTF-8">
    <input type="hidden" name="submitted" id="submitted" value="1"/>

    <input type="text" placeholder="Username" name="username" id="username" maxlength="50" required/><br/>

    <input type="email" placeholder="E-mail" name="email" id="email" maxlength="50" required/><br/>

    <input type="text" placeholder="First name" name="firstname" id="firstname" maxlength="50" required/><br/>

    <input type="text" placeholder="Last name" name="lastname" id="lastname" maxlength="50" required/><br/>

    <input type="text" placeholder="Address" name="address" id="address" maxlength="50" required/><br/>

    <input type="text" placeholder="City" name="city" id="city" maxlength="50" required/><br/>

    <input type="tel" placeholder="Phone" name="phone" id="phone" maxlength="50" required/><br/>

    <select id="sexOption" name="sexOption" onclick="changeFontOpacity('GenderEnglish')">
      <option value="">Gender</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>

    <select id="languageOption" name="languageOption" onclick="changeFontOpacity('Language')">
      <option value="">Language</option>
      <option value="deutsch">Deutsch</option>
      <option value="english">English</option>
    </select>

    <input type="date" name="birthday" id="birthday" maxlength="50" required/><br/>

    <input type="password" placeholder="Password" name="password" id="password" maxlength="50" required/><br/>

    <input type="password" placeholder="Confirm password" name="password-conf" id="password-conf" maxlength="50" required/><br/>

    <input type="submit" name="submit" value="Submit"/>
  </form>
</div>

<?php require_once( ABS_FILE . '/php/includes/footer.php'); ?>
