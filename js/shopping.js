$(document).ready(function(){
  function addToCart() {
    if (isset($_SESSION['cart'])) {
      var cart = $_SESSION['cart'];
    } else {
      var cart = new ShoppingCart();
    }
  }
  $("#addToBasket").click(addToCart);
});
