$(document).ready(function(){
  function addToCart() {
    var cart = new ShoppingCart();
    document.cookie = cart;
    alert("called that cancer bullshit crap ficken");
  }
  $("#addToBasket").click(addToCart);
});
