$(document).ready(function(){
    var visible;
    //hide/show shopping cart depending on where the user clicks
    $(document).click(function(event){
        if ($(event.target).attr('id') == 'shopping-cart-icon' && !visible){
            $("#shopping-cart-window").fadeIn();
            visible = 1;
        } else if ($(event.target).attr('id') == 'shopping-cart-icon' && visible) {
            $("#shopping-cart-window").fadeOut();
            visible = 0;
        } else
            $("#shopping-cart-window").fadeOut();
            visible = 0;
    });
});
