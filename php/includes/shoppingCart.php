<?php
require_once ( ABS_FILE . '/php/classes/ShoppingCart.php');
require_once ( ABS_FILE . '/php/classes/Item.php');
require_once ( ABS_FILE . '/php/classes/db.php');

$totalprice = 0;

$pdo = DB::getInstance();

if(isset($_SESSION['cart'])){
  $cart = unserialize($_SESSION['cart']);
  foreach ($cart as $arr) {
    $item = $arr['item'];
    $totalprice += $arr['qty']*$item->getPrice();
  }
}
?>

<script>
function modify_qty(val, name, price) {
  //remove the new_qty != 0 once the product removing works
  var id = "qty_" + name;
  var id_button = "down_" + name;
  var qty = document.getElementById(id).value;
  var subtotal = parseInt(document.getElementById('subprice').innerHTML);
  var new_qty = parseInt(qty,10) + val;
  if (new_qty < 0) {
    new_qty = 0;
  }
  if (val < 0){
    subtotal -= price;
    if(new_qty === 0){
      document.getElementById(id_button).disabled = true;
    }
  }else{
    subtotal += price;
    document.getElementById(id_button).disabled = false;
  }
  document.getElementById(id).value = new_qty;
  document.getElementById('subprice').innerHTML = subtotal+' .-';

  var url = "<?php rootDir();?>public/shopping.php?";
  var params = "price=" + price + "&name=" + name + "&qty=" + new_qty;
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    }
  };
  xmlhttp.open("GET", url+params , true);
  xmlhttp.send();

  return new_qty;
}
</script>

<link rel="stylesheet" href="<?php rootDir(); ?>css/shopping-cart.css">

<div id="shopping-cart-icon">
    <div id="shopping-cart-window">
      <?php if(!isset($_SESSION['cart'])){ ?>
        <h2><?php echo t("empty_cart") ?></h2>
      <?php }elseif($cart->isEmpty()){ ?>
        <h2><?php echo t("empty_cart") ?></h2>
      <?php }else{
        echo '<h2>'.t("shopping_cart_title").'</h2>';
        foreach ($cart as $arr) {
          $item = $arr['item'];?>
          <div class="cart-item">
            <div id="cart-img">
              <img src="<?php echo rootDir(); ?>img/product_images/<?php echo $pdo->getPictureByProduct($item->getName()) ?>" width="50px" height="50px"/>
            </div>
            <div id=product-name>
              <p><a href="<?php echo ABS_URL . 'public/products/' . $pdo->getCategoryByProduct($item->getName()) . '.php?product=' . $item->getName() ?>"><?php echo $item->getName() ?></a></p>
            </div>
            <div class="qtyCounter">
              <?php echo '<button class="border-radius-left" id="' . 'down_' . str_replace(' ', '_',$item->getName()) .'" onclick="modify_qty('. "-1" . "," . '\'' . str_replace(' ', '_',$item->getName()) . '\'' . "," . $item->getPrice() . ')">-</button>' ?>
              <div class="qty-input-wrap"><input id="qty_<?php echo str_replace(' ','_',$item->getName())?>" value="<?php echo $arr['qty'] ?>" readonly disabled /></div>
              <?php echo '<button class="border-radius-right" id="up" onclick="modify_qty('. "1" . "," . '\'' . str_replace(' ', '_',$item->getName()) . '\'' . "," . $item->getPrice() . ')">+</button>' ?>
            </div>
            <div id="price"><p><?php echo $item->getPrice()?> .-</p></div>
          </div>
        <?php }} ?>

        <?php if(isSet($_SESSION['cart']) && !$cart->isEmpty()) { ?>
          <div id="subtotal-section">
          <div id="subtotal-price">
          <h2><?php echo t("subtotal")?></h2>
          <p id="subprice"><?php echo $totalprice ?>.-</p>
          </div>
          <div id="subtotal-checkout">
          <input id="checkout-button" type="button" onclick="<?php echo 'location.href=' . '\'' . ABS_URL . 'public/checkout.php' . '\'' ?>" name="checkout" value="<?php echo t("checkout_button")?>" />
          </div>
          </div>
        <?php } ?>

      </div>
</div>
