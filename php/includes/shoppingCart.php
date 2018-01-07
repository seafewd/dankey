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
  var id = "qty_" + name;
  var qty = document.getElementById(id).value;
  var new_qty = parseInt(qty,10) + val;
  if (new_qty < 0) {
    new_qty = 0;
  }
  document.getElementById(id).value = new_qty;

  var url = "<?php rootDir();?>php/scripts/shopping.php?";
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

<div id="shopping-cart-icon"></div>

<div id="shopping-cart-window">
  <h2>Your shopping cart</h2>
  <?php if(!isset($_SESSION['cart'])){ ?>
    <div class="cart-item">
      <p>Your cart is unfortunately empty, BIATCH!</p>
    </div>
    <?php }else{
      foreach ($cart as $arr) {
        $item = $arr['item'];
        $pdo->getCategoryByProduct($item->getName())?>
        <div class="cart-item">
          <img src="<?php echo rootDir(); ?>img/products/<?php echo $pdo->getPictureByProduct($item->getName()) ?>"/>
          <a href="<?php echo ABS_URL . 'public/products/' . $pdo->getCategoryByProduct($item->getName()) . '.php?product=' . $item->getName() ?>"><?php echo $item->getName() ?></a>
          <div class="qtyCounter">
            <label for="qty"><abbr title = "Quantity">Qty</abbr></label>
            <input id="qty_<?php echo str_replace(' ','_',$item->getName())?>" value="<?php echo $arr['qty'] ?>" />
            <?php echo '<button id="down" onclick="modify_qty('. "-1" . "," . '\'' . str_replace(' ', '_',$item->getName()) . '\'' . "," . $arr['qty'] . ')">-1</button>' ?>
            <?php echo '<button id="up" onclick="modify_qty('. "1" . "," . '\'' . str_replace(' ', '_',$item->getName()) . '\'' . "," . $arr['qty'] . ')">+1</button>' ?>
          </div>
          <span class="price"><?php echo $item->getPrice()?>CHF</span>
        </div>
      <?php }} ?>
  </div>
