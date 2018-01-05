<?php
session_start();

require_once ( __DIR__ . '/../config/head.php' );
require_once ( ABS_FILE . '/php/includes/header.php' );
require_once ( ABS_FILE . '/php/includes/article_main_outer.php' );

?>
<link rel="stylesheet" href="<?php rootDir(); ?>css/checkout.css">

<h1>Checkout</h1>
<div class="line_separator"></div>
<form id="checkout-form" action="" method="post" accept-charset="UTF-8">
    <table id="checkout-table">
        <?php
            if (isSet($_SESSION)) {
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

                //Billing information
                echo '
                    <tr>
                        <th>Billing information</th>
                    </tr>
                    <tr>
                        <input type="hidden" name="submitted" id="submitted" value="1"/>
                        <td><input type="text" placeholder="First name" name="firstname" id="firstname" maxlength="50" value="' . $firstname . '"/></td>
                        <td><input type="text" placeholder="Last name" name="lastname" id="lastname" maxlength="50" value="' . $lastname . '"/></td>
                    </tr>
                    <tr>
                        <td><input type="text" placeholder="Address" name="address" id="address" maxlength="50" value="' . $address . '"/></td>
                        <td><input type="text" placeholder="City" name="city" id="city" maxlength="50" value="' . $city . '"/></td>
                    </tr>
                    <tr>
                        <td><input type="tel" placeholder="Phone" name="phone" id="phone" maxlength="50" value="' . $phone . '"/></td>
                        <td><input type="email" placeholder="E-mail" name="email" id="email" maxlength="50" value="' . $email . '"/></td>
                    </tr>
                ';
            } else {
                echo '
                <tr>
                    <input type="hidden" name="submitted" id="submitted" value="1"/>
                    <td><input type="text" placeholder="First name" name="firstname" id="firstname" maxlength="50/></td>
                    <td><input type="text" placeholder="Last name" name="lastname" id="lastname" maxlength="50"/></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Address" name="address" id="address" maxlength="50"/></td>
                    <td><input type="text" placeholder="City" name="city" id="city" maxlength="50"/></td>
                </tr>
                <tr>
                    <td><input type="tel" placeholder="Phone" name="phone" id="phone" maxlength="50"/></td>
                    <td><input type="email" placeholder="E-mail" name="email" id="email" maxlength="50"/></td>
                </tr>
                ';
            }
        ?>

        <!-- Payment information -->
        <tr>
            <th>Payment type</th>
        </tr>
        <tr>
            <td><input type="radio" name="payment-type" value="invoice"/>Invoice</td>
        </tr>
        <tr>
            <td><input type="radio" name="payment-type" value="credit-card"/>Credit card</td>
        </tr>

    </table>
</form>

<?php require_once ( ABS_FILE . '/php/includes/header.php' ); ?>
