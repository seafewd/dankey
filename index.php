<?php
session_start();
$title = "Browse & buy PC parts";

require_once ( __DIR__ . '/config/head.php' );
require_once ( ABS_FILE . '/php/classes/db.php');
require_once ( ABS_FILE . '/php/scripts/mail.php');


//start login script
$pdo = DB::getInstance();

if(isSet($_POST["login"])){
  $username = $_POST["username"];
  $password = $_POST["password"];

  $statement = $pdo->db->prepare("SELECT * FROM users WHERE username = :username");
  $result = $statement->execute(array('username' => $username));
  $user = $statement->fetch();

  if($user !== false && password_verify($password, password_hash($user["password"], PASSWORD_DEFAULT))){
    $_SESSION["userid"] = $user["id"];
    $_SESSION["username"] = $username;
    $_SESSION['email']=$user['email'];
    $_SESSION['firstname']=$user['firstname'];
    $_SESSION['lastname']=$user['lastname'];
    $_SESSION['address']=$user['address'];
    $_SESSION['city']=$user['city'];
    $_SESSION['phone']=$user['phone'];
    $_SESSION['language']=$user['language'];
    $_SESSION['birthday']=$user['birthday'];
    $_SESSION['sex']=$user['sex'];
    $_SESSION['avatar']=$user['avatar'];
  }else{
    echo "<script>
            $(document).ready(function() {    
                alert('Wrong username or password. Try again.')
            });
            </script>";
  }
}
//end login script



//start confirmation script
if(isset($_COOKIE['order'])){
  createConfirmationMail();
  unset($_SESSION['cart']);
  setcookie('order','',time()-3600);
}
//end confirmation script

require_once ( ABS_FILE . '/php/includes/header.php' );
require_once ( ABS_FILE . '/php/includes/splash_image_box.php' );
require_once ( ABS_FILE . '/php/includes/article_main_outer.php' );

?>
<section id="boxes">
    <div class="box">
      <div class="box_image_wrap">
          <img src="<?php rootDir();?>img/1.png"></div>
      <div class="box-text-wrap">
          <div class="box-text-wrap-inner">
              <h2><?php echo t("pc parts") ?></h2>
              <p><?php echo t("description_parts") ?></p>
          </div>
      </div>
    </div>
    <div class="box">
        <div class="box_image_wrap">
            <img src="<?php rootDir();?>img/2.jpg"></div>
        <div class="box-text-wrap">
            <div class="box-text-wrap-inner">
                <h2><?php echo t("accessories") ?></h2>
                <p><?php echo t("description_accessories") ?></p>
            </div>
        </div>
    </div>
    <div class="box">
        <div class="box_image_wrap">
            <img src="<?php rootDir();?>img/3.jpg"></div>
        <div class="box-text-wrap">
            <div class="box-text-wrap-inner">
                <h2><?php echo t("stuff") ?></h2>
                <p><?php echo t("description_stuff") ?></p>
            </div>
        </div>
    </div>
</section>


<div class="line_separator"></div>

<section>
    <h1>Latest hardware news by PC Gamer</h1>
    <?php require_once ( ABS_FILE . '/php/scripts/domParser.php' ); ?>
</section>


<?php require_once __DIR__ . '/php/includes/footer.php'; ?>
