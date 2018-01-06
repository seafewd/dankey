//TODO: rebuild for general purpose

function toggleElement() {
    var element = $("input[id$='credit-card']");
    if (element.prop("checked")) {
        $("#credit-card-information").slideDown(200, "linear");
    } else {
        $("#credit-card-information").slideUp(200, "linear");
    }
};
