<?php
session_start();
$title = "Account overview";
require_once(__DIR__ . '/../config/head.php');
require_once(ABS_FILE . '/php/includes/header.php');
require_once(ABS_FILE . '/php/includes/article_main_outer.php');
require_once(ABS_FILE . '/php/classes/db.php');


$username = (isset($_SESSION["username"]) ? $_SESSION["username"] : NULL);
$firstname = (isset($_SESSION["firstname"]) ? $_SESSION["firstname"] : NULL);
$lastname = (isset($_SESSION["lastname"]) ? $_SESSION["lastname"] : NULL);
$city = (isset($_SESSION["city"]) ? $_SESSION["city"] : NULL);
$email = (isset($_SESSION["email"]) ? $_SESSION["email"] : NULL);
$phone = (isset($_SESSION["phone"]) ? $_SESSION["phone"] : NULL);
$dateofbirth = (isset($_SESSION["dateofbirth"]) ? $_SESSION["dateofbirth"] : NULL);
$language = (isset($_SESSION["language"]) ? $_SESSION["language"] : NULL);
$sex = (isset($_SESSION["sex"]) ? $_SESSION["sex"] : NULL);
$address = (isset($_SESSION["address"]) ? $_SESSION["address"] : NULL);
$avatar = (isset($_SESSION["avatar"]) ? $_SESSION["avatar"] : NULL);


if(isSet($_POST['upload'])){
  if( $_FILES['image']['name'] <> ""){
    $validation = array("image/png", "image/jpeg", "image/gif");
    if(! in_array($_FILES["image"]["type"], $validation)){
      echo "<p>".t("picture_error")."<p>";
    }else{
      $temp = explode(".", $_FILES["image"]["name"]);
      $newfilename = round(microtime(true)) . '.' . end($temp);
      move_uploaded_file($_FILES["image"]["tmp_name"], __DIR__ . '/img/avatars/' . $newfilename);

      $_SESSION["avatar"] = $newfilename;

      $pdo = DB::getInstance();

      $statement = $pdo->db->prepare("UPDATE users SET avatar='$newfilename' WHERE id = :userid");
      $result = $statement->execute(array('userid' => $_SESSION['userid']));
      $user = $statement->fetch();
    }
  }
}
?>
<script>
    $(document).ready(function(){
        $('.profile-wrap').tabs();
    });
</script>

<!-- change name of that class contactHeader -->
<h1 class="contactHeader"><?php echo t("account_overview") ?></h1>
<div class="line_separator"></div>

<section class="profile-wrap">
    <!--// todo: implement language translations -->
    <ul class="list-wrap">
        <li>
            <a href="#profile-settings">Profile settings</a>
        </li>
        <li>
            <a href="#security-privacy">Security and privacy</a>
        </li>
        <li>
            <a href="#notifications">Notifications</a>
        </li>
    </ul>

    <div id="profile-settings">
        <div class="userinfo">
            <h2><?php echo t("username") ?></h2>
            <p><?php echo $username ?></p>
        </div>
        <div class="userinfo">
            <h2><?php echo t("first_name") ?></h2>
            <p><?php echo $firstname ?></p>
        </div>
        <div class="profile-image-wrap">
            <div class="profile-overview"
            <h2><?php echo t("avatar") ?></h2>
        </div>
        <div class="profile-image">
            <img alt="Your profile picture" src="<?php rootDir(); ?>img/avatars/<?php echo $_SESSION['avatar'] ?>"/>
        </div>
        <form name="imageUpload" enctype="multipart/form-data" action="account.php" method="post">
            <input type="file" name="image" size="60" maxlength="255">
            <input type="submit" name="upload" value="Upload">
        </form>
    </div>
    <div id="security-privacy">
        <div class="userinfo">
            <h2><?php echo t("address") ?></h2>
            <p><?php echo $address ?></p>
        </div>
        <div class="userinfo">
            <h2><?php echo t("email") ?></h2>
            <p><?php echo $email ?></p>
        </div>
        <div class="userinfo">
        <h2><?php echo t("phone") ?></h2>
            <p><?php echo $phone ?></p>
        </div>
    </div>
    <div id="notifications">
        <div class="userinfo">
            <h2><?php echo t("language") ?></h2>
            <p><?php echo $language ?></p>
        </div>
        <div class="userinfo">
            <h2><?php echo t("last_name") ?></h2> <p><?php echo $lastname ?></p>
        </div>
        <div class="userinfo">
            <h2><?php echo t("city") ?></h2> <p><?php echo $city ?></p>
        </div>
    </div>

</section>

<?php require_once(ABS_FILE . '/php/includes/footer.php'); ?>
