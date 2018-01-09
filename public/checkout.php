<?php
session_start();

require_once ( __DIR__ . '/../config/head.php' );
require_once ( ABS_FILE . '/php/includes/header.php' );
require_once ( ABS_FILE . '/php/includes/article_main_outer.php' );

print '<script src="' . ABS_URL . 'js/toggleElementVisibility.js' . '"></script>';

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
<link rel="stylesheet" href="<?php rootDir(); ?>css/checkout.css">

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

<h1>Checkout</h1>
<div class="line_separator"></div>
<form id="checkout-form" action="" method="post" accept-charset="UTF-8">
    <table id="checkout-table">
        <?php
            if (isSet($_SESSION['username'])) {
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
                        <th>1. Billing & shipping information</th>
                    </tr>';

                    if (isSet($_SESSION)) {
                        echo '
                        <tr>
                            <p class="gray-bg-notification">Your personal information was filled out automatically because you\'re logged in. Please take a minute to check that the information is correct and up to date.</p>
                        </tr>';
                    }
                    echo '</tr>
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
                <p class="gray-bg-notification">You\'re not logged in. You can still use our shop, but your orders won\'t be saved. Consider <a href="' . ABS_URL . 'public/register.php">' .  'registering an account!</a></p>
                <tr>
                    <input type="hidden" name="submitted" id="submitted" value="1"/>
                    <td><input type="text" placeholder="First name" name="firstname" id="firstname" maxlength="50"/></td>
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
            <th>2. Payment type</th>
        </tr>
        <tr>
            <td><input type="radio" id="invoice" name="payment-type" value="invoice" onclick="toggleElement()"/><label for="invoice">Invoice</label></td>
        </tr>
        <tr>
            <td><input type="radio" id="paypal" name="payment-type" value="paypal" onclick="toggleElement()"/><label for="paypal">PayPal</label></td>
        </tr>
        <tr>
            <td><input type="radio" id="skrill" name="payment-type" value="skrill" onclick="toggleElement()"/><label for="skrill">Skrill</label></td>
        </tr>
        <tr>
            <td><input type="radio" id="credit-card" name="payment-type" value="credit-card" onclick="toggleElement()"/><label for="credit-card">Credit card</label></td>
        </tr>
    </table>
</form>

<div id="credit-card-information">
    <input type="text" id="nameoncard" placeholder="Name on card" name="name" id="nameoncard" maxlength="50"/>
    <input type="text" id="cardnumber" placeholder="XXXX-XXXX-XXXX-XXXX" name="cardnumber" id="" maxlength="50"/>
    <div id="third-row-wrapper">
        <input type="text" id="expiry" placeholder="MM / YY" name="expiry" id="" maxlength="5"/>
        <input type="text" id="cvc" placeholder="CVC" name="cvc" id="" maxlength="4"/>
        <div id="credit-cards">
            <img src="<?php echo ABS_URL . 'img/visa.jpg'?>"/>
            <img src="<?php echo ABS_URL . 'img/mastercard.png'?>"/>
        </div>
    </div>
</div>

<div id="order-review">
    <h2>3. Review order</h2>
    <?php if(isset($_SESSION['cart'])){
      $cart = unserialize($_SESSION['cart']);
      foreach($cart as $arr){
        $item = $arr['item'];?>
      <div class="checkout-cart-item">
          <div class="image-wrapper">
              <img src="<?php echo rootDir(); ?>img/product_images/<?php echo $pdo->getPictureByProduct($item->getName()) ?>">
          </div>
          <table id="order-review-finalize">
              <thead>
                  <th>Name</th>
                  <th>Quantity</th>
                  <th>Price</th>
              </thead>
              <tr>
                  <td><a href="<?php echo ABS_URL . 'public/products/' . $pdo->getCategoryByProduct($item->getName()) . '.php?product=' . $item->getName() ?>"><?php echo $item->getName()?></a></td>
                  <td><?php echo $arr['qty'] ?></td>
                  <td><?php echo $item->getPrice() ?> .-</td>
              </tr>
          </table>
      </div>
    <?php }}else{ ?>
      <p>Your cart is empty!</p>
    <?php } ?>
</div>

<div class="line_separator"></div>

<div id="grand-total">
    <table>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Subtotal</td>
            <td><?php echo $subtotal ?>.-</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>incl. Tax</td>
            <td><?php echo $subtotal*$tax ?>.-</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Shipping</td>
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
    <input type="submit" id="confirm" value="Confirm order" data-featherlight="https://dankeytec.internet-box.ch/public/confirmation.php/">
    <p class="disclaimer">By confirming this order you are entering a binding agreement. If you don't pay us, we'll fuck your shit up.</p>
</div>

<script>
document.getElementById('confirm').onclick = function() {
  alert("called");
  document.cookie = "order=true;;path=/";
  setTimeout(function(){
    window.location.replace("https://dankeytec.internet-box.ch/index.php");
  },1000);
}
</script>

<?php require_once ( ABS_FILE . '/php/includes/footer.php' ); ?>
