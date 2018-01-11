function getText(key){
    //read cookie
    var language = 'en';
    //get the right json file
    file = $.getJSON('https://dankeytec.internet-box.ch/languages/' + language + '.json', function(json){
      document.write(json[key]);
    });
}
