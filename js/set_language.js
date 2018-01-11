//sets language cookie on language option click
function setLanguage(language) {
    var date = new Date();
    var expires;
    var daysUntilExpire = 30;

    date.setTime(date.getTime()+(daysUntilExpire*24*60*60*1000));
    expires = "; expires=" + date.toGMTString();
    document.cookie = "lang=" + language + expires+";path=/";
};
