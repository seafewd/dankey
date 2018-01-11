function getText(key){
    //read cookie
    var language = 'en';
    //path to translation json
    var file = 'https://dankeytec.internet-box.ch/languages/' + language + '.json';
    //get translation
    $.getJSON(file, function(json){
          alert(json[key]);
           document.write(json[key]);
})
}
