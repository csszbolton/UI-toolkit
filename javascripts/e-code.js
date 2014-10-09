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

$('.col-fixed').on('click', function(){
	if ($(this).hasClass('col-fixed-collapsed')) {
		$(this).removeClass('col-fixed-collapsed', 150);
		$('.col-content').removeClass('col-content-expanded', 150);
	} else {
		$(this).addClass('col-fixed-collapsed', 150);
		$('.col-content').addClass('col-content-expanded', 150);
	}
});