
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UIUX Bootstrap</title>

    <!-- jQuery UI CSS -->
     <link rel="stylesheet" type="text/css" href="stylesheets/jquery-ui.css">

    <!-- Bootstrap -->
    <link href="stylesheets/bootstrap/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="stylesheets/layout.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/template.css">
    <!-- <link rel="stylesheet" type="text/css" href="stylesheets/icomoon.css"> -->
    <link rel="stylesheet" type="text/css" href="stylesheets/datepicker3.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/timepicker.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/themes/default.css">
    <link rel="stylesheet" type="text/css" id="switch-css" class="switch" href="">
<!-- <link rel="stylesheet" type="text/css" href="stylesheets/density/normal.css">
<link rel="stylesheet" type="text/css" id="switch-density" class="switch-css-density" href=""> -->
    <script src="javascripts/jquery-1.11.1.min.js"></script>
    <script src="javascripts/jquerycookie.js"></script>
    <script src="javascripts/themeswitch.js"></script>
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
        
        <div class="col-expander">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </div>
        
        <?php include("includes/nav.html") ?>
      </div>
      <div class="col-content">
        <div class="container-fluid">
          <div class="row">
           <?php include("includes/topbar.html") ?>
           <?php include("includes/content.html") ?>

          </div>
        </div>
      </div>

    <!-- jQuery UI JS -->
    <script src="javascripts/jquery-ui.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="javascripts/bootstrap.js"></script>
    
    <script src="javascripts/bootstrap-datepicker.js"></script>
    <script src="javascripts/bootstrap-timepicker.js"></script>
    <script src="javascripts/metisMenu.min.js"></script>

    <script src="javascripts/e-code.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <script type="text/javascript">

    $(document).ready(function() {

      // Initiate tree menu js
      $('#side-menu').metisMenu({
          toggle: false
      });
      // Table row keyboard use
      $( "table tbody td a" ).focus(function() {  
        $( this ).parents('tr').addClass( "hover-state" );
      });
      $( "table tbody td a" ).focusout(function() {
          $("table tbody tr").removeClass( "hover-state");
      });  

      // scrollspy
      $('body').scrollspy({ target: '#spymenu' });

      // timepicker
      $('.input-group.date').datepicker({
          format: "yyyy/mm/dd",
          todayBtn: "linked",
          autoclose: true,
          todayHighlight: true
      });

      // datepicker
      $('#timepicker').timepicker({
        showMeridian: false
      });
      

    });
    </script>
  </body>
</html>
