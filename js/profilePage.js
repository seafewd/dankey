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
    let formInput = $('.form-userinfo input');
    //let inputName = .attr('name');
    //alert(inputName);
    let oldValue;

    //save old input value
    $(formInput).focus(function () {
        oldValue = $(this).val();
    });

    //don't let the user submit the form by pressing enter, or let them cancel with esc
    formInput.keydown(function(event){
        if(event.keyCode === 13) { //enter key
            if (formInput.val() === '') {
                alert("Your username can't be empty!");
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
    formInput.focusout(function(event) {
        let newValue = formInput.val();
        let field = $(this).attr('name');
        //alert(field);
        //return if nothing has changed
        if (oldValue === newValue)
            return false;

        $.ajax({
            url: $(form).attr('action'),
            type: "post",
            data: {
                field: field,
                value: newValue
            },
            dataType: 'text',
            encode: true
        }).done(function(data) {
            console.log(data);
            // success
        }).fail(function(data) {
            console.log(data)
            // fail
        });
        event.preventDefault();
        if( $(this).attr('name') === 'username' )
            $('#login_register-box a:first').text(newValue);
        $.toast("Profile saved!");
    });
});