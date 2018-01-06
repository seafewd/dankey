$(document).ready(function(){
  function addToCart() {
    var cart = getCookie("cart");
    if(cart != ""){
      alert("there is already a cart");
    }else{
      alert("there is no cart yet");
      document.cookie = "cart=hello";

    }

  }
  $("#addToBasket").click(addToCart);
});
