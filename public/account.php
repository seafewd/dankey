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


if(isset($_SESSION['username'])) {
    echo '
        <script src="'.ABS_URL.'js/profilePage.js"></script>
        
        <h1 class="contactHeader">'.t("account_overview").'</h1>
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
            <div class="line_separator"></div>
            <div id="profile-settings">
                <h2>Change your username and profile picture, or deactivate your account.</h2>
                <div class="profile-settings-text">
                    <form action="'.ABS_URL.'public/processProfile.php" method="post" class="form-userinfo userinfo username">
                        <h3>'.t("username").'</h3>
                        <input name="username" value="'.$username.'"/>
                    </form>
                </div>
                <div class="profile-image-wrap">
                    <div class="profile-image">
                        <a href="#" data-featherlight="'.ABS_URL.'img/avatars/'.$_SESSION["avatar"].'">
                            <img src="'.ABS_URL.'img/avatars/'.$_SESSION["avatar"].'"/>
                        </a>
                        <form action="'.ABS_URL.'public/processProfile.php" method="post" class="form-img profile-picture" name="imageUpload" enctype="multipart/form-data">
                            <input class="f-upload-img" type="file" name="image" size="60" maxlength="255">
                            <input class="f-submit-img" type="submit" name="upload" value="Upload">
                        </form>
                    </div>
                </div>
            </div>
            <div id="contact-shipping-information">
                <h2>Change your personal information.</h2>
                <div class="userinfo-wrapper">
                    <form action="'.ABS_URL.'public/processProfile.php" method="post" class="form-userinfo userinfo firstname">
                        <h3>'.t("first_name").'</h3>
                        <input class="f-firstname" name="firstname" value="'.$firstname.'"/>
                    </form>
                </div>
                <div class="userinfo-wrapper">
                    <form action="'.ABS_URL.'public/processProfile.php" method="post" class="form-userinfo userinfo lastname">
                        <h3>'.t("last_name").'</h3>
                        <input class="f-lastname" name="lastname" value="'.$lastname.'"/>
                    </form>
                </div>
                <div class="userinfo-wrapper email">
                    <form action="'.ABS_URL.'public/processProfile.php" method="post" class="form-userinfo userinfo email">
                        <h3>'.t("email").'</h3>
                        <input class="f-email" name="email" value="'.$email.'"/>
                    </form>
                </div>
                <div class="userinfo-wrapper phone">
                    <form action="'.ABS_URL.'public/processProfile.php" method="post" class="form-userinfo userinfo phone">
                        <h3>'.t("phone").'</h3>
                        <input class="f-phone" name="phone" value="'.$phone.'"/>
                    </form>
                </div>
                <div class="userinfo-wrapper">
                    <form action="'.ABS_URL.'public/processProfile.php" method="post" class="form-userinfo userinfo city">
                        <h3>'.t("zip_and_city").'</h3>
                        <input class="f-city" name="city" value="'.$city.'"/>
                    </form>
                </div>
                <div class="userinfo-wrapper address">
                    <form action="'.ABS_URL.'public/processProfile.php" method="post" class="form-userinfo userinfo address">
                        <h3>'.t("address").'</h3>
                        <input class="f-address" name="address" value="'.$address.'"/>
                    </form>
                </div>
            </div>
            <div id="security-privacy">
        
                <h2>Change your password and get an overview of the data we have about your account.</h2>
                <p>We value your privacy! We won\'t sell information about your browsing habits or about your person to third-party advertisement companies.</p>
                <div class="userinfo-wrapper">
                    <h3>Change your password</h3>
                    <form action="'.ABS_URL.'public/processProfile.php\';?>" method="post" class="form-userinfo-password userinfo password">
                        <input type="password" class="f-password"  name="password" value="" placeholder="Enter a new password..."/>
                        <input type="password" class="f-password-conf"  name="password-conf" value="" placeholder="Repeat password..."/>
                        <input class="f-password-submit" type="submit" name="password-submit" value="Save"/>
                    </form>
                </div>
            </div>
            <div id="notifications_language">
                <h2>Change your preferred language and your notification settings.</h2>
                <div class="userinfo-wrapper">
                    <form action="'.ABS_URL.'public/processProfile.php" method="post" class="form-userinfo userinfo language">
                        <h3>'.t("language").'</h3>
                        <input form="profile-form" class="f-language" name="language" value="'.$language.'"/>
                    </form>
                </div>
            </div>
        </section>
    
    ';
} else {
    echo '
        <h2>To view and edit your profile, log in first!</h2>
    ';
}

require_once(ABS_FILE . '/php/includes/footer.php');
