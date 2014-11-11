
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UIUX Bootstrap</title>

    <!-- jQuery UI CSS -->
     <link rel="stylesheet" type="text/css" href="stylesheets/jquery-ui-1.10.0.custom.css">

    <!-- Bootstrap -->
    <!-- <link href="stylesheets/bootstrap/bootstrap.css" rel="stylesheet"> -->

    <!-- SASS splits of standard bootstrap
    // Include either the <link> above or the two <link>s below -->
    <link href="stylesheets/sizing-sass/bootstrap-sizing.css" rel="stylesheet">
    <link href="stylesheets/theme-sass/bootstrap-theme.css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="stylesheets/layout.css">
    <!-- <link rel="stylesheet" type="text/css" href="stylesheets/template.css"> --> <!-- Removed as it's duplicated in bootstrap-theme.css -->
    <!-- <link rel="stylesheet" type="text/css" href="stylesheets/icomoon.css"> -->

    <link rel="stylesheet" type="text/css" href="stylesheets/jquery.dataTables.min.css">
    
    <link rel="stylesheet" type="text/css" href="stylesheets/themes/default.css">
    <link rel="stylesheet" type="text/css" id="switch-css" class="switch" href="stylesheets/themes/blue.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/density/normal.css">
    <link rel="stylesheet" type="text/css" id="switch-density" class="switch-css-density" href="">
    <script src="javascripts/jquery-1.11.1.min.js"></script>
    <script src="javascripts/jquerycookie.js"></script>
    <script src="javascripts/themeswitch.js"></script>

    <style type="text/css">
    </style>
    <!-- Custom styles -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="javascripts/respond.min.js"></script>
    <![endif]-->

  </head>
  <body id="top">

      <div class="col-fixed">
        <?php include("includes/branding.html") ?>
        
        <!-- <div class="col-expander">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </div> -->
        
        <?php include("includes/nav.html") ?>

        <?php include("includes/footer.html") ?>
      </div>
      <div class="col-content">
        <?php include("includes/topbar.html") ?>
        <div class="container-fluid">
          <div class="row">
           <?php include("includes/content.html") ?>

  

          </div>
        </div>
      </div>
    <?php include("includes/about-modal.html") ?>
      



    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="javascripts/bootstrap.js"></script>
    
    <script src="javascripts/bootstrap-datepicker.js"></script>
    <script src="javascripts/bootstrap-timepicker.js"></script>
    <script src="javascripts/metisMenu.min.js"></script>
    <script src="javascripts/jquery.jscrollpane.min.js"></script>
    <script src="javascripts/jquery.dataTables.min.js"></script>

    <!-- jQuery UI JS -->
    <script src="javascripts/jquery-ui.min.js"></script>

    <script src="javascripts/e-code.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <script type="text/javascript">

    $(document).ready(function() {

      // Initiate tree menu js
      $('#side-menu').metisMenu({
          toggle: false
      });

      function navbarHeight() {
        var otherHeight = $('.left-header').outerHeight() + $('.left-footer').outerHeight();
        var paneHeight = $(window).height() - otherHeight;
        $('.navbar-default.sidebar').css({
          'height': paneHeight
        });
        console.log($('.left-header').outerHeight());
      }

    navbarHeight();
    $(window).resize(navbarHeight);

    });
    </script>

    <script type="text/javascript">

    $(function () {

    // Accordion
    $("#accordion").accordion({
        header: "h3"
    });

    // Tabs
    $('#tabs2, #tabs, #tabs3').tabs();

    // Buttons
    $('button').button();

    // Anchors, Submit
    $('.button,#sampleButton').button();

    // Buttonset
    $('#radioset').buttonset();
    $("#format").buttonset();


    // Dialog
    $('#dialog').dialog({
        autoOpen: false,
        width: 600,
        buttons: {
            "Ok": function () {
                $(this).dialog("close");
            },
            "Cancel": function () {
                $(this).dialog("close");
            }
        }
    });

    // Dialog Link
    $('#dialog_link').click(function () {
        $('#dialog').dialog('open');
        return false;
    });

    // Modal Link
    $('#modal_link').click(function () {
        $('#dialog-message').dialog('open');
        return false;
    });

    // Datepicker
    $('#datepicker').datepicker({
        inline: true
    });

    // Slider
    $('#slider').slider({
        range: true,
        values: [17, 67]
    });

    // Progressbar
    $("#progressbar").progressbar({
        value: 20
    });

    //hover states on the static widgets
    $('#dialog_link, #modal_link, ul#icons li').hover(

    function () {
        $(this).addClass('ui-state-hover');
    }, function () {
        $(this).removeClass('ui-state-hover');
    });

    // Autocomplete
    var availableTags = ["ActionScript", "AppleScript", "Asp", "BASIC", "C", "C++", "Clojure", "COBOL", "ColdFusion", "Erlang", "Fortran", "Groovy", "Haskell", "Java", "JavaScript", "Lisp", "Perl", "PHP", "Python", "Ruby", "Scala", "Scheme"];

    $("#tags").autocomplete({
        source: availableTags
    });


    // Dialogs
    $("#dialog-message").dialog({
        autoOpen: false,
        modal: true,
        buttons: {
            Ok: function () {
                $(this).dialog("close");
            }
        }
    });


    // Remove focus from buttons
    $('.ui-dialog :button').blur();



    // Vertical slider
    $("#slider-vertical").slider({
        orientation: "vertical",
        range: "min",
        min: 0,
        max: 100,
        value: 60,
        slide: function (event, ui) {
            $("#amount").val(ui.value);
        }
    });
    $("#amount").val($("#slider-vertical").slider("value"));

    //Menu
    $("#menu").menu();

    //Spinner
    var spinner = $( "#spinner" ).spinner();

    $( "#disable" ).click(function() {
        if ( spinner.spinner( "option", "disabled" ) ) {
            spinner.spinner( "enable" );
        } else {
            spinner.spinner( "disable" );
        }
    });
    $( "#destroy" ).click(function() {
        if ( spinner.data( "ui-spinner" ) ) {
            spinner.spinner( "destroy" );
        } else {
            spinner.spinner();
        }
    });
    $( "#getvalue" ).click(function() {
        alert( spinner.spinner( "value" ) );
    });
    $( "#setvalue" ).click(function() {
        spinner.spinner( "value", 5 );
    });

    $( "button" ).button();

    //Tooltip

    $( "#tooltip" ).tooltip();

    // Split button
    $("#rerun").button().click(function () {
        alert("Running the last action");
    }).next().button({
        text: false,
        icons: {
            primary: "ui-icon-triangle-1-s"
        }
    }).click(function () {
        alert("Could display a menu to select an action");
    }).parent().buttonset();


    // Filament datepicker
    $('#rangeA').daterangepicker();
    $('#rangeBa, #rangeBb').daterangepicker();


    // Dynamic tabs
    var tabTitle = $( "#tab_title" ),
            tabContent = $( "#tab_content" ),
            tabTemplate = "<li><a href='#{href}'>#{label}</a> <span class='ui-icon ui-icon-close'>Remove Tab</span></li>",
            tabCounter = 2;
 
    var tabs = $( "#tabs2" ).tabs();

    // modal dialog init: custom buttons and a "close" callback reseting the form inside
    var dialog = $( "#dialog2" ).dialog({
        autoOpen: false,
        modal: true,
        buttons: {
            Add: function() {
                addTab();
                $( this ).dialog( "close" );
            },
            Cancel: function() {
                $( this ).dialog( "close" );
            }
        },
        close: function() {
            form[ 0 ].reset();
        }
    });

    // addTab form: calls addTab function on submit and closes the dialog
    var form = dialog.find( "form" ).submit(function( event ) {
        addTab();
        dialog.dialog( "close" );
        event.preventDefault();
    });

    // actual addTab function: adds new tab using the input from the form above
    function addTab() {
        var label = tabTitle.val() || "Tab " + tabCounter,
            id = "tabs-" + tabCounter,
            li = $( tabTemplate.replace( /#\{href\}/g, "#" + id ).replace( /#\{label\}/g, label ) ),
            tabContentHtml = tabContent.val() || "Tab " + tabCounter + " content.";

        tabs.find( ".ui-tabs-nav" ).append( li );
        tabs.append( "<div id='" + id + "'><p>" + tabContentHtml + "</p></div>" );
        tabs.tabs( "refresh" );
        tabCounter++;
    }

    // addTab button: just opens the dialog
    $( "#add_tab" )
        .button()
        .click(function() {
            dialog.dialog( "open" );
        });

    // close icon: removing the tab on click
    $( "#tabs2" ).on( "click",'span.ui-icon-close', function() {
        
        var panelId = $( this ).closest( "li" ).remove().attr( "aria-controls" );
        $( "#" + panelId ).remove();
        tabs.tabs( "refresh" );
    });

    //Combination examples (tabs) and open dialog
    $('#sampleButton').on('click', function(event){
        event.preventDefault();
        $('#dialog').dialog({
            autoOpen: true,
            modal: true,
            width: 600,
            buttons: {
                "Save": function () {
                    $(this).dialog("close");
                },
                "Cancel": function () {
                    $(this).dialog("close");
                }
            }
        });
    });
    // File input (using http://filamentgroup.com/lab/jquery_custom_file_input_book_designing_with_progressive_enhancement/)
    $('#file').customFileInput({
        button_position : 'right'
    });


    //Wijmo
    $("#menu1").wijmenu({ trigger: ".wijmo-wijmenu-item", triggerEvent: "click" });
    //$(".wijmo-wijmenu-text").parent().bind("click", function () {
    //    $("#menu1").wijmenu("hideAllMenus");
    //});
    //$(".wijmo-wijmenu-link").hover(function () {
    //    $(this).addClass("ui-state-hover");
    //}, function () {
    //    $(this).removeClass("ui-state-hover");
    //});

    //Toolbar
    $("#play, #shuffle").button();
    $("#repeat").buttonset();


});

</script>
  </body>
</html>
