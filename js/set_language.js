//sets language cookie on language option click
function setLanguage(language) {
    var date = new Date();
    var expires;
    var daysUntilExpire = 30;

    expires = "; expires="+date.toGMTString();
    date.setTime(date.getTime()+(daysUntilExpire*24*60*60*1000));
    document.cookie = "lang=language;expires=date;path=/";
};
