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
		parent.removeClass('col-fixed-collapsed', 0);
		$('.col-content').removeClass('col-content-expanded', 0);
		$('#side-menu i').css({'padding-right': '0px'}, 0);
	} else { // else collapse it
		parent.addClass('col-fixed-collapsed', 0);
		$('.col-content').addClass('col-content-expanded', 0);
		$('#side-menu i').css({'padding-right': '15px'}, 0);
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
    update: function (event, ui) {
        var data = $(this).sortable('serialize');
        console.log(data);
    }
});

$('.data-table').DataTable({
  "initComplete": function(settings, json) { 
  // When the table has finished loading, find the table info and pagination and put a wrapper around them, essentially creating a contol footer
  	$(this).parent('.dataTables_wrapper').find('.dataTables_info, .dataTables_paginate').each(function() {
		$(this).addClass("table-options-bottom");
	});
  	$(this).parent('.dataTables_wrapper').find(".table-options-bottom").wrapAll("<div class='table-options-bottom-wrapper' />");
  
  // Same logic applies for table header, except for Electric we want to appear as a control band
  	$(this).parent('.dataTables_wrapper').find('.dataTables_length, .dataTables_filter').each(function() {
		$(this).addClass("table-options-top");
	});
  	$(this).parent('.dataTables_wrapper').find(".table-options-top").wrapAll("<div class='ui-c-band cf' />");
  }
});

// Magical line-height adjustments 

/*var usernameAreaHeight = $('.username-area').height() + "px";
$('.e-breadcrumb').css({"line-height":usernameAreaHeight});*/