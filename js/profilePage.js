/**
 * not used
 */


$(document).ready(function(){
    //tab view made from ul
    $('.profile-wrap').tabs();

    //set username with db query on focus out from input field
    var username = $("input[name='username']")
    username.focusout(function() {
        //$username = <?php $db->setUsername(username);?>
        $.toast("Username changed!");
    });
});