<?php
session_start();

//start login script
$pdo = new PDO('mysql:host=localhost;dbname=dankeyswebshop', 'dankey', 'xyz');

if(isSet($_POST["login"])){
  $username = $_POST["username"];
  $password = $_POST["password"];

  $statement = $pdo->prepare("SELECT * FROM users WHERE username = :username");
  $result = $statement->execute(array('username' => $username));
  $user = $statement->fetch();

  if($user !== false && password_verify($password, password_hash($user["password"], PASSWORD_DEFAULT))){
    $_SESSION["userid"] = $user["id"];
    $_SESSION["username"] = $username;
  }else{
    echo "<script type='text/javascript'>alert('bad');</script>";
  }
}
//end login script

require_once ( 'php/includes/header.php' );
require_once ( 'php/includes/splash_image_box.php' );
require_once ( 'php/includes/article_main_outer.php' );
?>

<section id="boxes">
    <div class="container">
        <div class="box">
            <img src="<?php rootDir();?>img/1.png">
            <h3>PC parts</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et pharetra justo.</p>
        </div>
        <div class="box">
            <img src="<?php rootDir();?>img/2.jpg">
            <h3>Accessories</h3>
            <p>Mauris iaculis in dolor in egestas.</p>
        </div>
        <div class="box">
            <img src="<?php rootDir();?>img/3.jpg">
            <h3>Other stuff</h3>
            <p>Mauris iaculis in dolor in egestas.</p>
        </div>
    </div>
</section>


<?php require_once __DIR__ . '/php/includes/footer.php'; ?>
