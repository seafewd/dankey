/**
 * Profile page JS
 */

$(document).ready(function(){

    /**
     * Create tab view out of ul list items ************************************
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
     * *************************************************************************
     */

    /**
     * Upload new profile picture ***************************************************************
     */
    $('.form-img').submit(function(event){
        event.preventDefault();
        let oldPicName = $('.profile-image a img').attr('src').split('/').pop(); //get filename

        $.ajax({
            url: $(this).attr('action'),
            type: "post",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: 'text',
            encode: true
        }).done(function(data) {
            // success
            //document.location.hostname + '/dankey/img/avatars/' + newValue
            $('.profile-image a img').attr('src', data);
            $('.profile-image a').attr('data-featherlight', data);
            $.toast('Image uploaded!');
        }).fail(function(data) {
            // fail
            $.toast('Failed to upload image. Try again!')
        });
        return true;
    });

    /**
     * ******************************************************************************************
     */

    /**
     * set user information with db query when focusing out from input field
     */
    //save old input value
    let oldValue;
    $('.form-userinfo input').focus(function() {
        oldValue = $(this).val();

        //don't let the user submit the form by pressing enter, or let them cancel with esc
        $(this).keydown(function(event){
            if(event.keyCode === 13) { //enter key
                if ($(this).val() === '') {
                    $(this).val(oldValue);
                    event.preventDefault();
                    $(this).blur();
                    return false;
                }
                event.preventDefault();
                $(this).blur();
            } else if (event.keyCode === 27) { //escape key
                $(this).val(oldValue);
                event.preventDefault();
                $(this).blur();
                return false;
            }
        });

        //everything ok - send post request to server
        $(this).focusout(function(event) {
            event.preventDefault();
            let newValue = $(this).val();
            let fieldName = $(this).attr('name');
            //return if nothing has changed
            if (oldValue === newValue)
                return false;

            $.ajax({
                url: $(this).parent('form').attr('action'),
                type: "post",
                data: {
                    field: fieldName,
                    value: newValue,
                    fieldEdit: true
                },
                dataType: 'text',
                encode: true
            }).done(function(data) {
                // success
            }).fail(function(data) {
                // fail
                $.toast('Failed to change information. Try again.')
            });
            if( $(this).attr('name') === 'username' )
                $('#login_register-box a:first').text(newValue);
        });
    });

    /**
     * Set a new password with client side + server side validation *****************
     */

    $('.form-userinfo-password').submit(function(event){
        event.preventDefault();
        let pwValue = $('.f-password').val();
        let pwValueConfirm = $('.f-password-conf').val();
        if(!(pwValue === pwValueConfirm)) {
            $.toast("The passwords must match.");
            return false;
        } else if (pwValue === '' || pwValueConfirm === '') {
            $.toast("Please enter a value!");
            return false;
        }
        $.ajax({
            url: $(this).parent('form').attr('action'),
            type: "post",

        });
    });


    /**
     * ******************************************************************************
     */

});