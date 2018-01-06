<?php
session_start();

require_once ( ABS_FILE . '/php/classes/ShoppingCart.php');
require_once ( ABS_FILE . '/php/classes/Item.php');

if(isset($_SESSION['cart'])){
  $cart = unserialize($_SESSION['cart']);
}
?>


<div id="shopping-cart-icon"></div>

<div id="shopping-cart-window">
  <h2>Your shopping cart</h2>
  <?php if(isset($_SESSION['cart'])){
  if($cart->isEmpty()){ ?>
    <div class="cart-item">
      <p>Your cart is unfortunately empty, BIATCH!</p>
    </div>
  <?php }else{
    foreach ($cart as $arr) {
      $item = $arr['item']; ?>
      <div class="cart-item">
        <p>
          <?php $arr['qty'] ?>
          <a href="#"><?php $item->getName() ?></a><br/>
          <span class="price"><?php $item->getPrice() ?></span>
        </p>
      </div>
    <?php }}}; ?>
  </div>
