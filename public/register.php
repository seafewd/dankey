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
<script src="<?php rootDir();?>js/jquery.validate.js"></script>

<div id="registerFormWrapper">
    <h1>Register</h1>
    <form id="register" action="register.php" name="myForm" method="post" accept-charset="UTF-8">
        <input type="hidden" name="submitted" id="submitted" value="1"/>

        <input required type="text" placeholder="Username" pattern="[0-9a-zA-ZöäüÜÄÖ_-]{3,}" title="Must have a length of at least 3 characters." name="username" id="username" maxlength="50"/><br/>
        <input required type="email" placeholder="E-mail" name="email" id="email" title="Please enter a valid e-mail address." maxlength="50"/><br/>
        <input required type="text" placeholder="First name" pattern="[a-zA-ZöäüÜÄÖ-]{1,}" title="Please enter a valid first name" name="firstname" id="firstname" maxlength="50"/><br/>
        <input required type="text" placeholder="Last name" pattern="[a-zA-ZöäüÜÄÖ-]{1,}" name="lastname" title="Please enter a valid last name." id="lastname" maxlength="50"/><br/>
        <input required type="text" placeholder="Address" name="address" pattern="[a-zA-Z\söäüÜÄÖ]+[0-9]{1,}" title="Please enter a valid address. (street & number)" id="address" maxlength="50"/><br/>
        <input required type="text" placeholder="ZIP City" pattern="[0-9]{4}[\s]{1}[a-zA-Z-\söäüÜÄÖ]+" title="Please enter a valid city. (ZIP-code & city)" name="city" id="city" maxlength="50"/><br/>
        <input required type="tel" placeholder="Phone" name="phone" id="phone" maxlength="50"/><br/>

        <select id="sexOption" name="sexOption" onclick="changeFontOpacity('GenderEnglish')">
            <option value="">Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>

        <select id="languageOption" name="languageOption" onclick="changeFontOpacity('Language')">
            <option value="">Language</option>
            <option value="deutsch">Deutsch</option>
            <option value="english">English</option>
        </select>

        <input required title="Please enter a valid date." type="date" name="birthday" id="birthday" maxlength="50"/><br/>
        <input required type="password" placeholder="Password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" maxlength="255"/><br/>
        <input required type="password" placeholder="Confirm password" name="password-again" id="password-conf" maxlength="50" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/><br/>
        <input type="submit" name="submit" value="Submit"/>
    </form>
    <script>
        $(function() {
            $.validator.addMethod("regex", function(value, element, regexpr) {
            return regexpr.test(value);
            }, "REGEX FAIL");

            $("#register").validate({
                rules: {
                    username: {
                        minlength: 3
                    },
                    firstname: {
                        regex: /[a-zA-ZöäüÜÄÖ-]{1,}/
                    }
                }
            });
        });
        </script>
</div>

<?php require_once( ABS_FILE . '/php/includes/footer.php'); ?>
