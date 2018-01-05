function validateForm() {
  alert("THE FUCK IS GOING ON?")
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}
