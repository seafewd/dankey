/**
 * Profile page JS
 */




$(document).ready(function(){

    /**
     * Create tab view out of ul list items
     */
    let $profileWrap = $('.profile-wrap');
    $profileWrap.tabs();

    //fade in effect
    $profileWrap.tabs({
        select: function(event, ui) {
            $(ui.panel).animate({opacity:0.1});
        },
        show: function(event, ui) {
            $(ui.panel).animate({opacity:1.0},1000);
        }
    });
    /**
     **
     */


    /**
     * set value with db query on focus out from input field
     */
    let form = $('.form-userinfo');
    let formInput = null;
    let oldValue;

    //save old input value
    $('.form-userinfo input').focus(function () {
        oldValue = $(this).val();
        formInput = $(this);

        //don't let the user submit the form by pressing enter, or let them cancel with esc
        $(this).keydown(function(event){
            if(event.keyCode === 13) { //enter key
                if (formInput.val() === '') {
                    $.toast("Your username can't be empty!");
                    formInput.val(oldValue);
                    event.preventDefault();
                    formInput.blur();
                    return false;
                }
                event.preventDefault();
                formInput.blur();
            } else if (event.keyCode === 27) { //escape key
                formInput.val(oldValue);
                event.preventDefault();
                formInput.blur();
                return false;
            }
        });

        //everything ok - send post request to server
        $(this).focusout(function(event) {
            let newValue = formInput.val();
            let fieldName = $(this).attr('name');
            //return if nothing has changed
            if (oldValue === newValue)
                return false;

            $.ajax({
                url: $(form).attr('action'),
                type: "post",
                data: {
                    field: fieldName,
                    value: newValue
                },
                dataType: 'text',
                encode: true
            }).done(function(data) {
                $.toast("Profile saved!");
                // success
            }).fail(function(data) {
                // fail
            });
            event.preventDefault();
            if( $(this).attr('name') === 'username' )
                $('#login_register-box a:first').text(newValue);
        });
    });




});