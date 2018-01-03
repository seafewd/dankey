//AJAX script for live search
var root = document.location.hostname;
var noMatchesMsg = "No matches found.";

$(document).ready(function(){
    $('#searchBar form input[type="text"]').on("keyup input", function(){
              /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings("#search_result");
        if(inputVal.length){
          $.get("/dankey/php/scripts/livesearch.php",{term:inputVal, noMatchesMsg:noMatchesMsg}).done(function(data){
              // Display the returned data in browser
              resultDropdown.html(data);
              $('#search_result').css('display', 'block');
          });
        } else{
            resultDropdown.empty();
            $('#search_result').css('display', 'none');
        }
    });

    // Set search input value on click of result item
    $(document).on("click", "#search_result li", function(){
      if ($('#search_result li').text() != noMatchesMsg) {
        $(this).parents("#searchBar").find('input[type="text"]').val($(this).text());

      }
      $(this).parent("#search_result").empty();
      $('#search_result').css('display', 'none');

    });

});
