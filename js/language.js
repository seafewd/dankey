function getText(key){
    //read cookie
    var language = 'en';
    //get the right json file
    file = $.getJSON('language/' + language + '.json', function(json){
      document.write(json[key]);
    });
} 
