function validateForm() {
    var username = document.forms["myForm"]["username"].value;
    var email = document.forms["myForm"]["email"].value;
    var firstname = document.forms["myForm"]["firstname"].value;
    var lastname = document.forms["myForm"]["lastname"].value;
    var address = document.forms["myForm"]["address"].value;
    var city = document.forms["myForm"]["city"].value;
    var phone = document.forms["myForm"]["phone"].value;
    var sexOption = document.forms["myForm"]["sexOption"].value;
    var languageOption = document.forms["myForm"]["languageOption"].value;
    var birthday = document.forms["myForm"]["birthday"].value;
    var password = document.forms["myForm"]["password"].value;

    if (username == "") {
        alert("please type in a valid username");
        return false;
    };
}
