var visible;
var root = 'http://' + document.location.hostname + '/dankey/';

$(document).ready(function(){
    //hide/show shopping cart depending on where the user clicks
    $(document).click(function(event){
        if ($(event.target).attr('id') == 'shopping-cart-icon' && !visible){
            //set styles and fade in shopping cart
            $('#shopping-cart-icon').css('border-bottom', '2px solid transparent');
            $('#shopping-cart-icon').css('border-bottom-left-radius', '0');
            $('#shopping-cart-icon').css('border-bottom-right-radius', '0');
            $('#shopping-cart-icon').css('background', 'white url("img/cart_dark.png") center center no-repeat');
            $('#shopping-cart-icon').css('background-size', '30px 30px');
            $('#shopping-cart-icon').css('border-top', '2px solid var(--main_blue_font-color)');
            $('#shopping-cart-icon').css('border-right', '2px solid var(--main_blue_font-color)');
            $('#shopping-cart-icon').css('border-left', '2px solid var(--main_blue_font-color)');
            $("#shopping-cart-window").fadeIn();
            visible = 1;

            //check if the element that the user clicks on is the cart window or if the cart window is a parent of clicked element
        } else if ($(event.target).attr('id') == 'shopping-cart-window' || $(event.target).parents('#shopping-cart-window').length > 0) {
            //window stays open
            visible = 1;
        } else if ($(event.target).attr('id') != 'shopping-cart-window' && visible === 1) {
            $('#shopping-cart-icon').css('border-color', 'transparent');
            $('#shopping-cart-icon').css('border-bottom-left-radius', '3px');
            $('#shopping-cart-icon').css('border-bottom-right-radius', '3px');

            $("#shopping-cart-window").fadeOut();
            visible = 0;
        }
    });

});
