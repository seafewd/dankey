<?php
session_start();

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
    echo "<script type='text/javascript'>alert('bad');</script>";
  }
}
//end login script

//start confirmation script
if(isset($_COOKIE['order'])){
  if($_COOKIE['order'] === 'yes'){
  echo "<script type='text/javascript'>alert('called');</script>";
  createConfirmationMail();
  $_COOKIE['order']='no';
  unset($_SESSION['cart']);
}
}
//end confirmation script



//page title
$title = 'Welcome!';

require_once ( __DIR__ . '/config/head.php' );
require_once ( ABS_FILE . '/php/includes/header.php' );
require_once ( ABS_FILE . '/php/includes/splash_image_box.php' );
require_once ( ABS_FILE . '/php/includes/article_main_outer.php' );

?>

<section id="boxes">
  <div class="container">
    <div class="box">
      <img src="<?php rootDir();?>/img/1.png">
      <h2>PC parts</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et pharetra justo.</p>
    </div>
    <div class="box">
      <img src="<?php rootDir();?>img/2.jpg">
      <h2>Accessories</h2>
      <p>Mauris iaculis in dolor in egestas.</p>
    </div>
    <div class="box">
      <img src="<?php rootDir();?>img/3.jpg">
      <h2>Other stuff</h2>
      <p>Mauris iaculis in dolor in egestas.</p>
    </div>
  </div>
</section>


<?php require_once __DIR__ . '/php/includes/footer.php'; ?>
