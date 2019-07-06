/**
 * Profile page JS
 */


$(document).ready(function(){
    //tab view made from ul
    $('.profile-wrap').tabs();

    //set username with db query on focus out from input field
    let form = $('.form-userinfo');
    let usernameInput = $("input[name='username']");
    let oldUsername;

    //don't let the user submit the form by pressing enter
    usernameInput.keydown(function(event){
        if(event.keyCode === 13) {
            if (usernameInput.val() === '') {
                alert("Your username can't be empty!");
                usernameInput.val(oldUsername);
                event.preventDefault();
                usernameInput.blur();
                return false;
            }
        event.preventDefault();
        usernameInput.blur();
        } else if (event.keyCode === 27) { //escape key
            usernameInput.val(oldUsername);
            event.preventDefault();
            usernameInput.blur();
            return false;
        }
    });

    usernameInput.focus(function () {
        oldUsername = usernameInput.val();
    });
    usernameInput.focusout(function(event) {

        let newUsername = usernameInput.val();
        //return if nothing has changed
        if (oldUsername === newUsername)
            return false;

        $.ajax({
            url: $(form).attr('action'),
            type: "post",
            data: {
                username: newUsername
            },
            dataType: 'text',
            encode: true
        }).done(function(data) {
            console.log(data);
            // success
        }).fail(function(data) {
            // fail
        });
        event.preventDefault();
        $('#login_register-box a:first').text(newUsername);
        $.toast("Username changed!");
    });
});