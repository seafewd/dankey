//AJAX script for live search
var root = document.location.hostname;

$(document).ready(function(){
    $('#searchBar form input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings("#search_result");
        if(inputVal.length){
            $.get(root + "/dankey/php/scripts/livesearch.php",{term:inputVal}).done(function(data){
                // Display the returned data in browser
                alert("it works");
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });

    // Set search input value on click of result item
    $(document).on("click", "#search_result", function(){
      alert("link here");
        $(this).parents("#search_result").find('input[type="text"]').val($(this).text());

        $(this).parent(".result").empty();

    });

});
