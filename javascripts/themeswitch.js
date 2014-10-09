if($.cookie("css")) {
     $(".switch[rel='stylesheet']").attr("href",$.cookie("css"));
}

if($.cookie("css-padding")) {
     $(".switch-css-density[rel='stylesheet']").attr("href",$.cookie("css-padding"));
}

$(document).ready(function() { 

var stylesheets = [
        {
            "styleSheetName":"Blue",
            "styleSheetID":"blue",
            "styleSheetURL":"stylesheets/themes/blue.css"
        },
        {
            "styleSheetName":"High Contrast",
            "styleSheetID":"highcontrast",
            "styleSheetURL":"stylesheets/themes/hi-contrast.css"
        }
];

var paddingSheet = [
        {
            "paddingSheetName":"Compact",
            "paddingSheetID":"compact",
            "paddingSheetURL":"stylesheets/density/compact.css"
        },
        {
            "paddingSheetName":"Normal",
            "paddingSheetID":"normal",
            "paddingSheetURL":"stylesheets/density/normal.css"
        },
        {
            "paddingSheetName":"Comfortable",
            "paddingSheetID":"comfortable",
            "paddingSheetURL":"stylesheets/density/comfortable.css"
        }
];


$.each(stylesheets, function(idx, obj) {
    stylesheetli = '<li id="'+ obj.styleSheetID +'" rel="'+ obj.styleSheetURL +'"><a href="#">'+ obj.styleSheetName +'</a></li>'
    $('ul#theme-switcher').append(stylesheetli);
});

$('ul#theme-switcher li').on('click', function(){
       $(".switch[rel='stylesheet']").attr("href",$(this).attr('rel'));
       $.removeCookie('css', path, { path: '/' }); // => true
       var path = $(this).attr('rel')
       $.cookie("css", path , { expires: 365 * 10, path: '/' });
       return false;
});


$.each(paddingSheet, function(idx, obj) {
    paddingsheetli = '<li id="'+ obj.paddingSheetID +'" rel="'+ obj.paddingSheetURL +'"><a href="#">'+ obj.paddingSheetName +'</a></li>'
    $('ul#padding-switcher').append(paddingsheetli);
});

$('ul#padding-switcher li').on('click', function(){
       $(".switch-css-density[rel='stylesheet']").attr("href",$(this).attr('rel'));
       $.removeCookie('css-padding', path, { path: '/' }); // => true
       var path = $(this).attr('rel')
       $.cookie("css-padding", path , { expires: 365 * 10, path: '/' });
       return false;
});


});