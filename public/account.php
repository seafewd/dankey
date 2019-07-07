<?php
/**
 * Profile page with image upload and instant change input fields with ajax
 */

session_start();
$title = "Account overview";
require_once(__DIR__ . '/../config/head.php');
require_once(ABS_FILE . '/php/includes/header.php');
require_once(ABS_FILE . '/php/includes/article_main_outer.php');
require_once(ABS_FILE . '/php/classes/db.php');

//todo: language translations

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
//$ = (isset($_SESSION["avatar"]) ? $_SESSION["avatar"] : NULL);

$db = DB::getInstance();


//upload a new profile picture
if(isSet($_POST['upload'])){
  if( $_FILES['image']['name'] <> ""){
    $validation = array("image/png", "image/jpeg", "image/gif");
    if(! in_array($_FILES["image"]["type"], $validation)){
      echo "<p>".t("picture_error")."<p>";
    }else{
      $temp = explode(".", $_FILES["image"]["name"]);
      $newfilename = round(microtime(true)) . '.' . end($temp);
      move_uploaded_file($_FILES["image"]["tmp_name"], ABS_URL.'img/avatars/'.$newfilename);
      $_SESSION["avatar"] = $newfilename;
      $statement = $db->db->prepare("UPDATE users SET avatar='$newfilename' WHERE id = :userid");
      $result = $statement->execute(array('userid' => $_SESSION['userid']));
      $user = $statement->fetch();
    }
  }
}
?>

<!-- Profile Page JS script -->
<script src="<?php echo ABS_URL.'js/profilePage.js'?>"></script>
<!-- ********************** -->

<h1 class="contactHeader"><?php echo t("account_overview") ?></h1>
<div class="line_separator"></div>

<section class="profile-wrap">
    <ul class="list-wrap">
        <li>
            <a href="#profile-settings">Profile settings</a>
        </li>
        <li>
            <a href="#contact-shipping-information">Contact & shipping information</a>
        </li>
        <li>
            <a href="#security-privacy">Security and privacy</a>
        </li>
        <li>
            <a href="#notifications_language">Notifications & language</a>
        </li>
    </ul>
    <div id="profile-settings">
        <h2>You can change your username and profile picture here, as well as deactivate your account.</h2>
        <div class="profile-settings-text">
            <form action="<?php echo ABS_URL . 'public/processProfile.php';?>" method="post" class="form-userinfo userinfo username">
                <h3><?php echo t("username") ?></h3>
                <input name="username" value="<?php echo $username ?>"/>
            </form>
        </div>
        <div class="profile-image-wrap">
            <div class="profile-image">
                <a href="#" data-featherlight="<?php rootDir();?>img/avatars/<?php echo $_SESSION['avatar'];?>">
                    <img src="<?php rootDir();?>img/avatars/<?php echo $_SESSION['avatar']?>"/>
                </a>
                <form class="form-img" name="imageUpload" enctype="multipart/form-data" action="<?php echo ABS_URL.'public/account.php';?>" method="post">
                    <input class="upload-img" type="file" name="image" size="60" maxlength="255">
                    <input class="submit-img" type="submit" name="upload" value="Upload">
                </form>
            </div>
        </div>
    </div>
    <div id="contact-shipping-information">
        <h2>Change your personal information.</h2>
        <div class="userinfo-wrapper">
            <form action="<?php echo ABS_URL . 'public/processProfile.php';?>" method="post" class="form-userinfo userinfo firstname">
                <h3><?php echo t("first_name") ?></h3>
                <input class="f-firstname" name="firstname" value="<?php echo $firstname;?>"/>
            </form>
        </div>
        <div class="userinfo-wrapper">
            <form action="<?php echo ABS_URL . 'public/processProfile.php';?>" method="post" class="form-userinfo userinfo lastname">
                <h3><?php echo t("last_name") ?></h3>
                <input form="profile-form" class="f-lastname" name="lastname" value="<?php echo $lastname;?>"/>
            </form>
        </div>
        <div class="userinfo-wrapper email">
            <form action="<?php echo ABS_URL . 'public/processProfile.php';?>" method="post" class="form-userinfo userinfo email">
                <h3><?php echo t("email") ?></h3>
                <input form="profile-form" class="f-email" name="email" value="<?php echo $email;?>"/>
            </form>
        </div>
        <div class="userinfo-wrapper">
            <form action="<?php echo ABS_URL . 'public/processProfile.php';?>" method="post" class="form-userinfo userinfo city">
                <h3><?php echo t("city") ?></h3>
                <input form="profile-form" class="f-city" name="city" value="<?php echo $city;?>"/>
            </form>
        </div>
        <div class="userinfo-wrapper address">
            <form action="<?php echo ABS_URL . 'public/processProfile.php';?>" method="post" class="form-userinfo userinfo address">
                <h3><?php echo t("address") ?></h3>
                <input form="profile-form" class="f-address" name="address" value="<?php echo $address;?>"/>
            </form>
        </div>
        <div class="userinfo-wrapper phone">
            <form action="<?php echo ABS_URL . 'public/processProfile.php';?>" method="post" class="form-userinfo userinfo phone">
                <h3><?php echo t("phone") ?></h3>
                <input form="profile-form" class="f-phone" name="phone" value="<?php echo $phone;?>"/>
            </form>
        </div>
    </div>
    <div id="security-privacy">
        <h2>Change your password and review the data we have about your account.</h2>
        <p>We value your privacy! We won't sell information about your browsing habits or about your person to third-party advertisement companies.</p>
        <div class="userinfo-wrapper">
        </div>
    </div>
    <div id="notifications_language">
        <h2>Change your preferred language and your notification settings.</h2>
        <div class="userinfo-wrapper">
            <form action="<?php echo ABS_URL . 'public/processProfile.php';?>" method="post" class="form-userinfo userinfo language">
                <h3><?php echo t("language") ?></h3>
                <input form="profile-form" class="f-language" name="language" value="<?php echo $language;?>"/>
            </form>
        </div>
    </div>
</section>

<?php require_once(ABS_FILE . '/php/includes/footer.php'); ?>
