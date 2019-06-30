<?php
session_start();
$title = "Account overview";
require_once ( __DIR__ . '/config/head.php' );
require_once ( ABS_FILE . '/php/includes/header.php' );
require_once ( ABS_FILE . '/php/includes/article_main_outer.php' );
require_once ( ABS_FILE . '/php/classes/db.php');

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
      echo "<p>".t("picture_error")."<p>";
    }else{
      $temp = explode(".", $_FILES["image"]["name"]);
      $newfilename = round(microtime(true)) . '.' . end($temp);
      move_uploaded_file($_FILES["image"]["tmp_name"], __DIR__.'/img/avatars/' . $newfilename);

      $_SESSION["avatar"] = $newfilename;

      $pdo = DB::getInstance();

      $statement = $pdo->db->prepare("UPDATE users SET avatar='$newfilename' WHERE id = :userid");
      $result = $statement->execute(array('userid' => $_SESSION['userid']));
      $user = $statement->fetch();
    }
  }
}
?>
<!-- change name of that class contactHeader -->
<h1 class="contactHeader"><?php echo t("account_overview") ?></h1>
<div class="line_separator"></div>

<div class="row">
  <div class="column left">
    <div class="userinfo">
      <h2><?php echo t("username") ?></h2> <p><?php echo $username ?></p>
    </div>
    <div class="userinfo">
      <h2><?php echo t("first_name") ?></h2> <p><?php echo $firstname ?></p>
    </div>
    <div class="userinfo">
      <h2><?php echo t("address") ?></h2> <p><?php echo $address ?></p>
    </div>
    <div class="userinfo">
      <h2><?php echo t("email") ?></h2> <p><?php echo $email ?></p>
    </div>
    <div class="userinfo">
      <h2><?php echo t("phone") ?></h2> <p><?php echo $phone ?></p>
    </div>
    <div class="userinfo">
      <h2><?php echo t("language") ?></h2> <p><?php echo $language ?></p>
    </div>
  </div>
  <div class="column middle">
    <div class="userinfo">
      <h2></h2> <p></p>
    </div>
    <div class="userinfo">
      <h2><?php echo t("last_name") ?></h2> <p><?php echo $lastname ?></p>
    </div>
    <div class="userinfo">
      <h2><?php echo t("city") ?></h2> <p><?php echo $city ?></p>
    </div>
  </div>
  <div class="column right">
    <div>
      <h2><?php echo t("avatar") ?></h2>
      <img src="<?php rootDir(); ?>img/avatars/<?php echo $_SESSION['avatar'] ?>" width="250" height="250" border='1'>
    </div>
    <form name="imageUpload" enctype="multipart/form-data" action="account.php" method="post">
      <input type="file" name="image" size="60" maxlength="255">
      <input type="submit" name="upload" value="Upload">
    </form>
  </div>
</div>

<?php require_once (ABS_FILE . '/php/includes/footer.php'); ?>
