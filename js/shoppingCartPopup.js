var visible;
$(document).ready(function(){
    //hide/show shopping cart depending on where the user clicks
    $(document).click(function(event){
        if ($(event.target).attr('id') == 'shopping-cart-icon' && !visible){
            $("#shopping-cart-window").fadeIn();
            visible = 1;
        } else if ($(event.target).attr('id') == 'shopping-cart-window' || $(event.target).parents('#shopping-cart-window').length > 0){
            //window stays open
        } else
            $("#shopping-cart-window").fadeOut();
            visible = 0;
    });
});
