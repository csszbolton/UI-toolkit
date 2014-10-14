// Gets the widnow height and sets it to the left hand bar
function defineBarHeight() {
	var windowHeight = $(window).height();
	$('.col-fixed').css({"height": windowHeight});
}

// Run functions at start
defineBarHeight();

$(window).resize(function() {
	defineBarHeight(); // Resize left bar every time window size is changed
});

$('.col-expander').on('click', function(){

	var parent = $(this).parent('.col-fixed'); // Get buttons parent, the whole left column
	if (parent.hasClass('col-fixed-collapsed')) { // if it's collapsed, expand it
		parent.removeClass('col-fixed-collapsed', 150);
		$('.col-content').removeClass('col-content-expanded', 150);
		$('#side-menu li a span').toggle(25);
	} else { // else collapse it
		parent.addClass('col-fixed-collapsed', 150);
		$('.col-content').addClass('col-content-expanded', 150);
		$('#side-menu li a span').toggle();
	}
});

/*$(".ui-container").accordion({
collapsible: true,
icons: { "header": "glyphicon glyphicon-chevron-up", "activeHeader": "glyphicon glyphicon-chevron-down" }
});*/

$( ".sortable" ).sortable({
	cursor: "move",
	handle: ".move-handler",
	items: "> >",
	axis: "x",
    update: function (event, ui) {
        var data = $(this).sortable('serialize');
        console.log(data);
    }
});