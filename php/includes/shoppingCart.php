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

<link rel="stylesheet" href="<?php rootDir(); ?>css/shopping-cart.css">

<div id="shopping-cart-icon"></div>

<div id="shopping-cart-window">
    <h2>Your shopping cart</h2>
    <?php if(!isset($_SESSION['cart'])){ ?>
        <div class="cart-item">
            <h2>Your cart is currently empty.</h2>
        </div>
    <?php }else{
        foreach ($cart as $arr) {
            $item = $arr['item'];
            $pdo->getCategoryByProduct($item->getName())?>
            <div class="cart-item">
                <div id="cart-img">
                    <img src="<?php echo rootDir(); ?>img/product_images/<?php echo $pdo->getPictureByProduct($item->getName()) ?>" width="50px" height="50px"/>
                </div>
                <div id=product-name>
                    <p><a href="<?php echo ABS_URL . 'public/products/' . $pdo->getCategoryByProduct($item->getName()) . '.php?product=' . $item->getName() ?>"><?php echo $item->getName() ?></a></p>
                </div>
                <div class="qtyCounter">
                    <?php echo '<button id="down" onclick="modify_qty('. "-1" . "," . '\'' . str_replace(' ', '_',$item->getName()) . '\'' . "," . $arr['qty'] . ')">-</button>' ?>
                    <p><input id="qty_<?php echo str_replace(' ','_',$item->getName())?>" value="<?php echo $arr['qty'] ?>" readonly disabled /></p>
                    <?php echo '<button id="up" onclick="modify_qty('. "1" . "," . '\'' . str_replace(' ', '_',$item->getName()) . '\'' . "," . $arr['qty'] . ')">+</button>' ?>
                </div>
                <div id="price"><p><?php echo $item->getPrice()?> .-</p></div>
            </div>
        <?php }} ?>
        <div id="subtotal-section">
            <div id="subtotal-price">
                <h2>Subtotal</h2>
                <p><?php echo $totalprice ?> .-</p>
            </div>

            <div id="subtotal-checkout">
                <input id="checkout-button" type="submit" name="checkout" value="Checkout"/>
            </div>
        </div>
    </div>
