<?php
session_start();

require_once ( __DIR__ . '/../config/head.php' );
require_once ( ABS_FILE . '/php/includes/header.php' );
require_once ( ABS_FILE . '/php/includes/article_main_outer.php' );

print '<script src="' . ABS_URL . 'public_html/js/toggleElementVisibility.js' . '"></script>';

$pdo = DB::getInstance();

$subtotal = 0;
//maybe make rule to set shipping price (subtotal > 1000 = free shipping etc.)
$shipping = 15;
$tax = 0.08;

if(isset($_SESSION['cart'])){
  $cart = unserialize($_SESSION['cart']);
  foreach ($cart as $arr) {
    $item = $arr['item'];
    $subtotal += $arr['qty']*$item->getPrice();
  }
}

?>
<link rel="stylesheet" href="<?php rootDir(); ?>public_html/css/checkout.css">
<script src="<?php rootDir();?>public_html/js/jquery.validate.js"></script>

<script>
$(document).ready(function() {
    $('#cardnumber').keyup(function() {
      var input = $(this).val().split("-").join(""); // remove dashes
      if (input.length > 0) {
        input = input.match(new RegExp('.{1,4}', 'g')).join("-");
      }
      $(this).val(input);
    });

    $('#expiry').keyup(function() {
      var input = $(this).val().split("/").join(""); // remove slashes
      if (input.length > 0) {
        input = input.match(new RegExp('.{1,2}', 'g')).join("/");
      }
      $(this).val(input);
    });
});
</script>

<h1><?php echo t("checkout_title"); ?></h1>
<div class="line_separator"></div>

    <table id="checkout-table">
        <form id="shippingInfoForm">

        <?php
            if (isSet($_SESSION['username'])) {
                $username = isset($_SESSION["username"]) ? $_SESSION["username"] : null ;
                $firstname = isset($_SESSION["firstname"]) ? $_SESSION["firstname"] : null;
                $lastname = isset($_SESSION["lastname"]) ? $_SESSION["lastname"] : null;
                $city = isset($_SESSION["city"]) ? $_SESSION["city"] : null;
                $email = isset($_SESSION["email"]) ? $_SESSION["email"] : null;
                $phone = isset($_SESSION["phone"]) ? $_SESSION["phone"] : null;
                $birthday = isset($_SESSION["birthday"]) ? $_SESSION["birthday"] : null;
                $language = isset($_SESSION["language"]) ? $_SESSION["language"] : null;
                $sex = isset($_SESSION["sex"]) ? $_SESSION["sex"] : null;
                $address = isset($_SESSION["address"]) ? $_SESSION["address"] : null;

                //Billing information
                echo '
                    <tr>
                        <th>1. Billing & shipping information</th>
                    </tr>';

                    if (isSet($_SESSION)) {
                        echo '
                        <tr>
                            <p class="gray-bg-notification">' . t("autofill_notification_checkout") . '</p>';
                    }
                    echo '</tr>
                    <tr>
                        <input type="hidden" name="submitted" id="submitted" value="1"/>
                        <td><input required type="text" placeholder="' . t("first_name") . '" name="firstname" id="firstname" maxlength="50" value="' . $firstname . '"/></td>
                        <td><input type="text" placeholder="' . t("last_name") . '" name="lastname" id="lastname" maxlength="50" value="' . $lastname . '"/></td>
                    </tr>
                    <tr>
                        <td><input type="text" placeholder="' . t("address") . '" name="address" id="address" maxlength="50" value="' . $address . '"/></td>
                        <td><input type="text" placeholder="' . t("city") . '" name="city" id="city" maxlength="50" value="' . $city . '"/></td>
                    </tr>
                    <tr>
                        <td><input type="tel" placeholder="' . t("phone") . '" name="phone" id="phone" maxlength="50" value="' . $phone . '"/></td>
                        <td><input type="email" placeholder="' . t("email") . '" name="email" id="email" maxlength="50" value="' . $email . '"/></td>
                    </tr>
                ';
            } else {
                echo '
                <p class="gray-bg-notification">' . t("not_logged") . '<a href="' . ABS_URL . 'public_html/register.php">' . t("consider_reg") . '</a></p>
                <tr>
                    <input type="hidden" name="submitted" id="submitted" value="1"/>
                    <td><input type="text" placeholder="' . t("first_name") . '" name="firstname" id="firstname" maxlength="50"/></td>
                    <td><input type="text" placeholder="' . t("last_name") . '" name="lastname" id="lastname" maxlength="50"/></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="' . t("address") . '" name="address" id="address" maxlength="50"/></td>
                    <td><input type="text" placeholder="' . t("zip_city") . '" name="city" id="city" maxlength="50"/></td>
                </tr>
                <tr>
                    <td><input type="tel" placeholder="' . t("phone") . '" name="phone" id="phone" maxlength="50"/></td>
                    <td><input type="email" placeholder="E-mail" name="email" id="email" maxlength="50"/></td>
                </tr>
                ';
            }
            echo '</form>';
        ?>


        <!-- Payment information -->
        <tr>
            <th>2. <?php echo t("payment_type") ?></th>
        </tr>
        <tr>
            <td><input type="radio" id="invoice" name="payment-type" value="invoice" onclick="toggleElement()"/><label for="invoice"><?php echo t("invoice") ?></label></td>
        </tr>
        <tr>
            <td><input type="radio" id="paypal" name="payment-type" value="paypal" onclick="toggleElement()"/><label for="paypal">PayPal</label></td>
        </tr>
        <tr>
            <td><input type="radio" id="skrill" name="payment-type" value="skrill" onclick="toggleElement()"/><label for="skrill">Skrill</label></td>
        </tr>
        <tr>
            <td><input type="radio" id="credit-card" name="payment-type" value="credit-card" onclick="toggleElement()"/><label for="credit-card"><?php echo t("credit_card") ?></label></td>
        </tr>
    </table>

<form id="credit-card-information">
    <input required type="text" id="nameoncard" placeholder="<?php echo t("name_on_card")?>" name="name" id="nameoncard" maxlength="50" title="Please enter a valid name."/>
    <input required type="text" id="cardnumber" placeholder="XXXX-XXXX-XXXX-XXXX" name="cardnumber" id="" maxlength="50" title="Please enter a valid card number."/>
    <div id="third-row-wrapper">
        <input required type="text" id="expiry" placeholder="MM / YY" name="expiry" id="" maxlength="5" title="Please enter a valid expiry date."/>
        <input required type="text" id="cvc" placeholder="CVC" name="cvc" id="" maxlength="4" title="Please enter a valid CVC code."/>
        <div id="credit-cards">
            <img src="<?php echo ABS_URL . 'public_html/img/visa.jpg'?>"/>
            <img src="<?php echo ABS_URL . 'public_html/img/mastercard.png'?>"/>
        </div>
    </div>
    <!-- credit card validation -->
    <script>
    var creditCardForm = $("#credit-card-information");
    var shippingInfoForm = $("#shippingInfoForm");
    $.validator.addMethod("regex", function(value, element, regexpr) {
    return regexpr.test(value);
    }, "REGEX FAIL");

    shippingInfoForm.validate();
    creditCardForm.validate();

    function validateForms() {
        (function($) {
            if ($('#credit-card').is(':checked')) {
                creditCardForm.validate();
                var inputOK = creditCardForm.valid();
                if (!inputOK) {
                    $('html, body').animate({ 'scrollTop':   creditCardForm.offset().top - 40 }, 400);
                }
            }
        })($);
    }
    </script>
</form>


<div id="order-review">
    <h2>3. <?php echo t("review_order") ?></h2>
    <?php if(isset($_SESSION['cart'])){
      $cart = unserialize($_SESSION['cart']);
      foreach($cart as $arr){
        $item = $arr['item'];?>
      <div class="checkout-cart-item">
          <div class="image-wrapper">
              <img src="<?php echo rootDir(); ?>public_html/img/product_images/<?php echo $pdo->getPictureByProduct($item->getName()) ?>">
          </div>
          <table id="order-review-finalize">
              <thead>
                  <th><?php echo t("name") ?></th>
                  <th><?php echo t("quantity") ?></th>
                  <th><?php echo t("price") ?></th>
              </thead>
              <tr>
                  <td><a href="<?php echo ABS_URL . 'public_html/products/' . $pdo->getCategoryByProduct($item->getName()) . '.php?product=' . $item->getName() ?>"><?php echo $item->getName()?></a></td>
                  <td><?php echo $arr['qty'] ?></td>
                  <td><?php echo $item->getPrice() ?> .-</td>
              </tr>
          </table>
      </div>
    <?php }}else{ ?>
      <p><?php echo t("shopping_cart_empty") ?></p>
    <?php } ?>
</div>

<div class="line_separator"></div>

<div id="grand-total">
    <table>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><?php echo t("subtotal") ?></td>
            <td><?php echo $subtotal ?>.-</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><?php echo t("tax") ?></td>
            <td><?php echo $subtotal*$tax ?>.-</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><?php echo t("shipping") ?></td>
            <td><?php echo $shipping ?>.-</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="total">
            <td></td>
            <td></td>
            <td></td>
            <td>Total</td>
            <td><?php echo $subtotal+$shipping ?>.-</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</div>

<div class="line_separator"></div>


<div id="confirm-order">
    <input type="submit" id="confirm" value="<?php echo t("confirm_order") ?>" onclick="validateForms()" data-featherlight="<?php echo rootDir(); ?>public_html/confirmation.php/">
    <p class="disclaimer"><?php echo t("checkout_disclaimer") ?></p>
</div>

<script>
document.getElementById('confirm').onclick = function() {
  document.cookie = "order=true;;path=/";
  setTimeout(function(){
    window.location.replace("<?php echo ABS_URL . '/index.php'?>");
  },1000);
}
</script>

<?php require_once ( ABS_FILE . '/php/includes/footer.php' ); ?>
