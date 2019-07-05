$(document).ready(function() {


    var options = {
        url: "/path/to/your.php",
        type: "post",
        dataType: "json",
        data: "country=" + $(this).val(), //build your data string here
        success: function (json) {
            $("#textbox").val(json.country);
        }
    };
    $.ajax(options);


});