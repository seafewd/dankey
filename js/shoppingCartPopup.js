var visible;
var root = 'http://localhost/' + document.location.hostname;

$(document).ready(function(){
    //hide/show shopping cart depending on where the user clicks
    $(document).click(function(event){
        if ($(event.target).attr('id') == 'shopping-cart-icon' && !visible){
            $("#shopping-cart-window").fadeIn();
            //$('#shopping-cart-icon').css('padding-bottom', '5px', 'border-bottom', '0', 'border-bottom-left-radius', '0','border-bottom-right-radius', '0');
            $('#shopping-cart-icon').css('border-bottom', '2px solid transparent');
            $('#shopping-cart-icon').css('border-bottom-left-radius', '0');
            $('#shopping-cart-icon').css('border-bottom-right-radius', '0');
            $('#shopping-cart-icon').css('background', 'url(root + "/img/cart_dark.png") center center no-repeat');
            $('#shopping-cart-icon').css('background-color', 'white');
            $('#shopping-cart-icon').css('border-top', '2px solid var(--main_blue_font-color)');
            $('#shopping-cart-icon').css('border-right', '2px solid var(--main_blue_font-color)');
            $('#shopping-cart-icon').css('border-left', '2px solid var(--main_blue_font-color)');
            visible = 1;
        } else if ($(event.target).attr('id') == 'shopping-cart-window' || $(event.target).parents('#shopping-cart-window').length > 0){
            //window stays open
        } else
            $("#shopping-cart-window").fadeOut();
            visible = 0;
    });
});
