<?php
//page title
$title = 'Register an account';

require_once ( __DIR__ . '/../config/head.php' );
require_once ( ABS_FILE . '/php/includes/header.php' );
require_once ( ABS_FILE . '/php/includes/article_main_outer.php' );
require_once ( ABS_FILE . '/php/classes/db.php');

//todo make this work again
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

    $pdo = DB::getInstance();

    $pdo->createUser($username, $email, $password, $firstname, $lastname, $address, $city, $phone, $language, $birthday, $sex);
    echo '
        <script type="text/javascript">
            window.location.href = "https://dankeytec.internet-box.ch/public/register_success.php";
        </script>
    ';


}
?>
<script>
function changeFontOpacity(value) {
    //unfinished its all bullshit ignore this
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
    <h1><?php echo t("register") ?></h1>
    <form id="register" action="register.php" name="myForm" method="post" accept-charset="UTF-8">
        <input type="hidden" name="submitted" id="submitted" value="1"/>

        <input required type="text" placeholder="<?php echo t("username")?>" pattern="[0-9a-zA-ZöäüÜÄÖ_-]{3,}" title="<?php echo t("val_username")?>" name="username" id="username" maxlength="50"/><br/>
        <input required type="email" placeholder="<?php echo t("email")?>" name="email" id="email" title="<?php echo t("val_email")?>" maxlength="50"/><br/>
        <input required type="text" placeholder="<?php echo t("first_name")?>" pattern="[a-zA-ZöäüÜÄÖ-]{1,}" title="<?php echo t("val_firstname")?>" id="firstname" maxlength="50"/><br/>
        <input required type="text" placeholder="<?php echo t("last_name")?>" pattern="[a-zA-ZöäüÜÄÖ-]{1,}" name="lastname" title="<?php echo t("val_lastname")?>" id="lastname" maxlength="50"/><br/>
        <input required type="text" placeholder="<?php echo t("address")?>" name="address" pattern="[a-zA-Z\söäüÜÄÖ]+[0-9]{1,}" title="<?php echo t("val_address")?>" id="address" maxlength="50"/><br/>
        <input required type="text" placeholder="<?php echo t("zip_city")?>" pattern="[0-9]{4}[\s]{1}[a-zA-Z-\söäüÜÄÖ]+" title="<?php echo t("val_city")?>" name="city" id="city" maxlength="50"/><br/>
        <input required type="tel" placeholder="<?php echo t("phone")?>" name="phone" id="phone"  title="<?php echo t("val_phone")?>" maxlength="50"/><br/>

        <select id="sexOption" name="sexOption" onclick="changeFontOpacity('GenderEnglish')">
            <option value=""><?php echo t("gender") ?></option>
            <option value="male"><?php echo t("male") ?></option>
            <option value="female"><?php echo t("female") ?></option>
        </select>

        <select id="languageOption" name="languageOption" onclick="changeFontOpacity('Language')">
            <option value=""><?php echo t("language") ?></option>
            <option value="deutsch">Deutsch</option>
            <option value="english">English</option>
        </select>

        <input required title="<?php echo t("val_date")?>" type="date" name="birthday" id="birthday" maxlength="50"/><br/>
        <input required type="password" placeholder="<?php echo t("password")?>" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="<?php echo t("val_password")?>" maxlength="255"/><br/>
        <input required type="password" placeholder="<?php echo t("conf_passowrd")?>" name="password2" id="password-conf" maxlength="50" title="<?php echo t("val_password")?>"/><br/>
        <input type="submit" name="submit" value="<?php echo t("submit")?>"/>
    </form>
    <script>
        $(function() {
            $.validator.addMethod("regex", function(value, element, regexpr) {
            return regexpr.test(value);
            }, "REGEX FAIL");

            $("#register").validate({
                rules: {
                    username: {
                        regex: /[0-9a-zA-ZöäüÜÄÖ_-]{3,}/
                    },
                    firstname: {
                        regex: /^[a-z ,.-]+$/i
                    },
                    lastname: {
                        regex: /^[a-z ,.-]+$/i
                    },
                    address: {
                        regex: /[a-zA-Z\söäüÜÄÖ]+[0-9]{1,}/
                    },
                    city: {
                        regex: /[0-9]{4}[\s]{1}[a-zA-Z-\söäüÜÄÖ]+/
                    },
                    phone: {
                        regex: /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im
                    },
                    email: {
                        regex: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                    },
                    password: {
                        regex: /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/
                    },
                    password2: {
                        equalTo: '#password'
                    }
                },
                messages: {
                    password2: "The passwords must match!"
                }
            });
        });
        </script>
</div>

<?php require_once( ABS_FILE . '/php/includes/footer.php'); ?>
