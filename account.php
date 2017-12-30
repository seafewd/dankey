<?php
session_start();
$title = "Account overview";
require_once ( __DIR__ . '/config/head.php' );
require_once ( ABS_FILE . '/php/includes/header.php' );
require_once ( ABS_FILE . '/php/includes/splash_image_box.php');

$username = $_SESSION["username"];
$firstname = $_SESSION["firstname"];
$lastname = $_SESSION["lastname"];
$city = $_SESSION["city"];
$email = $_SESSION["email"];
$phone = $_SESSION["phone"];
$birthday = $_SESSION["birthday"];
$language = $_SESSION["language"];
$sex = $_SESSION["sex"];
$address = $_SESSION["address"];
if(isSet($_SESSION['avatar'])){
  $avatar = $_SESSION["avatar"];
}

if(isSet($_POST['upload'])){
  if( $_FILES['image']['name'] <> ""){
    $validation = array("image/png", "image/jpeg", "image/gif");
    if(! in_array($_FILES["image"]["type"], $validation)){
      echo "<p>This type is not allowed. Please choose a diffrent file! (.png, .jpeg, .gif)";
    }else{
      $temp = explode(".", $_FILES["image"]["name"]);
      $newfilename = round(microtime(true)) . '.' . end($temp);
      move_uploaded_file($_FILES["image"]["tmp_name"], __DIR__.'/img/avatars/' . $newfilename);

      $_SESSION["avatar"] = $newfilename;

      $pdo = new PDO('mysql:host=localhost;dbname=dankeyswebshop', 'dankey', 'xyz');
      $statement = $pdo->prepare("UPDATE users SET avatar='$newfilename' WHERE id = :userid");
      $result = $statement->execute(array('userid' => $_SESSION['userid']));
      $user = $statement->fetch();
    }
  }
}
?>

<?php if(file_exists(rootDir() . 'img/avatars/' . $_SESSION['avatar'])){
  <img src="<?php rootDir(); ?>img/avatars/<?php echo $_SESSION['avatar'] ?>">
}else{
  //put default picture in here
}?>

<p><strong>Username</strong></br> <?php echo $username ?></p>
<p><strong>First name</strong></br> <?php echo $firstname ?></p>
<p><strong>Last name</strong></br> <?php echo $lastname ?></p>
<p><strong>Address</strong></br> <?php echo $address ?></p>
<p><strong>City</strong></br> <?php echo $city ?></p>
<p><strong>E-Mail</strong></br> <?php echo $email ?></p>
<p><strong>Phone</strong></br> <?php echo $phone ?></p>
<p><strong>Language</strong></br> <?php echo $language ?></p>
<p><strong>Avatar</strong></br> <?php echo $avatar ?></p>

<form name="imageUpload" enctype="multipart/form-data" action="account.php" method="post">
  <input type="file" name="image" size="60" maxlength="255">
  <input type="submit" name="upload" value="Upload">
</form>

<?php require_once (ABS_FILE . '/php/includes/footer.php'); ?>
