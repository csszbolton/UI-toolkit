if($.cookie("css")) {
     $(".switch[rel='stylesheet']").attr("href",$.cookie("css"));
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
})

});