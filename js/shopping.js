function addToCart(){
  echo "<script type='text/javascript'>alert('called that shit');</script>";
  if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
  } else {
    echo "<script type='text/javascript'>alert('cart created');</script>";
    $cart = new ShoppingCart();
  }
}
