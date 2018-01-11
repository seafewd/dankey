function getText(key){
    //read cookie
    var language = 'en';
    //get the right json file
    file = $.getJSON('language/' + language + '.json');
    //return text
    return file.indexOf(key);
}
