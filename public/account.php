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
//$ = (isset($_SESSION["avatar"]) ? $_SESSION["avatar"] : NULL);

$db = DB::getInstance();


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
      $statement = $db->db->prepare("UPDATE users SET avatar='$newfilename' WHERE id = :userid");
      $result = $statement->execute(array('userid' => $_SESSION['userid']));
      $user = $statement->fetch();
    }
  }
}
?>
<script>
    $(document).ready(function(){
        let root = 'https://' + document.location.hostname + '/dankey/';

        //tab view made from ul
        $('.profile-wrap').tabs();

        //set username with db query on focus out from input field
        let usernameInput = $("input[name='username']");
        let oldUsername;

        usernameInput.focus(function () {
            oldUsername = usernameInput.val();
        });
        usernameInput.focusout(function() {
            let newUsername = usernameInput.val();
            //return if nothing has changed
            if (oldUsername === newUsername)
                return false;

            //ajax data array
            let data = {
                'name' : newUsername
            };
            $('#login_register-box a:first').text(newUsername);
            $.toast("Username changed!");
        });
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
        <div class="profile-settings-text">
            <form action="<?php echo ABS_URL . 'php/scripts/processProfile.php' ?>" method="post" class="form-userinfo userinfo username">
                <h3><?php echo t("username") ?></h3>
                <input name="username" value="<?php echo $username ?>"/>
            </form>

        </div>
        <div class="profile-image-wrap">
            <div class="profile-image">
                <a href="#" data-featherlight="<?php echo ABS_URL.'img/avatars/'.$_SESSION['avatar']?>">
                <img alt='Your profile picture' src="<?php rootDir(); ?>img/avatars/<?php echo $_SESSION['avatar'] ?>"/>
                </a>
            </div>
            <form class="form-img" name="imageUpload" enctype="multipart/form-data" action="account.php" method="post">
                <input class="upload-img" type="file" name="image" size="60" maxlength="255">
                <input class="submit-img" type="submit" name="upload" value="Upload">
            </form>
        </div>

    </div>
    <div id="contact-shipping-information">
        <div class="userinfo">
            <h3><?php echo t("first_name") ?></h3> <p><?php echo $firstname ?></p>
        </div>
        <div class="userinfo">
            <h3><?php echo t("last_name") ?></h3> <p><?php echo $lastname ?></p>
        </div>

        <div class="userinfo email">
            <h3><?php echo t("email") ?></h3>
            <p><?php echo $email ?></p>
        </div>
        <div class="userinfo">
            <h3><?php echo t("city") ?></h3>
            <p><?php echo $city ?></p>
        </div>
        <div class="userinfo address">
            <h3><?php echo t("address") ?></h3>
            <p><?php echo $address ?></p>
        </div>
        <div class="userinfo phone">
            <h3><?php echo t("phone") ?></h3>
            <p><?php echo $phone ?></p>
        </div>
    </div>
    </div>
    <div id="security-privacy">

    </div>
    <div id="notifications_language">
        <div class="userinfo">
            <h3><?php echo t("language") ?></h3>
            <p><?php echo $language ?></p>
        </div>


    </div>

</section>

<?php require_once(ABS_FILE . '/php/includes/footer.php'); ?>
