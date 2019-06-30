//AJAX script for live search
var root = document.location.hostname;
var noMatchesMsg = "No matches found.";

$(document).ready(function(){

    //hide/show search result depending on where the user clicks
    $(document).click(function(event){
        if ($(event.target).attr('id') !== 'search_text' || $('#searchBar form input[type="text"]').val().length === 0) {
            $("#search_result").fadeOut();

        } else
            $("#search_result").fadeIn();
    });


    $('#searchBar form input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings("#search_result");
        if(inputVal.length){
          $.get("/dankey/public/livesearch.php",{term:inputVal, noMatchesMsg:noMatchesMsg}).done(function(data){
              // Display the returned data in browser
              $('#search_result').css('height', 'auto');
              $("#search_result").fadeIn();
              resultDropdown.html(data);
          });
        } else{
            $('#search_result').css('height', '0');
            $("#search_result").fadeOut();
            resultDropdown.empty();
        }
    });

    // Set search input value on click of result item
    $(document).on("click", "#search_result li", function(){
      if ($('#search_result li').text() != noMatchesMsg) {
        $(this).parents("#searchBar").find('input[type="text"]').val($(this).text());
        $(this).parents("#searchBar form").submit();
        //$('form[name=test]').submit();
      }
      $(this).parent("#search_result").empty();
      $('#search_result').css('display', 'none');

    });

});
