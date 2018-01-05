function validateForm() {
    var x = document.forms["register"]["username"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}
