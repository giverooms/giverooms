<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
      <title>GiveRooms - Find and Book Accommodations, Guest House, Inn, Budget Hotel Rooms in Myanmar</title>
      <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="GiveRooms is Online Hotel Booking Website for Guest House, Inn, Accommodations and Budget Hotel Rooms in Myanmar. Find and Book Hotels in Yangon, Hotels in Madalay, Hotels in Nay Pyi Taw, Hotels in Bagan, Hotels in Ngapali at Low Rate">
      <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
      <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
      <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/index.css">
      <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.flexisel.js"></script>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/slide_item.css">
      <script type="text/javascript" src="<?php echo base_url(); ?>js/jssor.core.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/jssor.utils.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/jssor.slider.js"></script>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/font-awesome.css"/>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap-social.css"/>
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>favicon.ico"/>
      <script type="text/javascript">
        $(document).ready(function(){
          $("#flexiselDemo3").flexisel({
              visibleItems: 5,
              animationSpeed: 1000,
              autoPlay: true,
              autoPlaySpeed: 3000,            
              pauseOnHover: true,
              enableResponsiveBreakpoints: true,
              responsiveBreakpoints: { 
                  portrait: { 
                      changePoint:480,
                      visibleItems: 1
                  }, 
                  landscape: { 
                      changePoint:640,
                      visibleItems: 2
                  },
                  tablet: { 
                      changePoint:768,
                      visibleItems: 3
                  }
              }
          });
        });

      </script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/slide_region_state.js"></script>
</head>
<body>
<div class="container-fluid">
<!--************* Head **********************-->
  <header class="row">
    <div class="col-md-2">
      <!-- <img src="<?php echo base_url(); ?>images/giverooms.jpg" width="150px" height="60px"> -->
      <b>GiveRooms</b>
    </div>

<!--************* NAV **********************-->
    <div class="col-md-10">
      <nav class="navbar" style="border-radius:0px;" id="nav">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
             
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class=""><a href="<?php echo base_url(); ?>">Home</a></li>
                <li id="hotel"><a href="navbar-static-top/">Hotel</a></li>
                <li><a href="<?php echo base_url(); ?>place.html">Place</a></li>
                <li><a href="<?php echo base_url(); ?>guide.html">Guide</a></li>
                <li><a href="<?php echo base_url(); ?>login.html">Login</a></li>
                <li><a href="<?php echo base_url(); ?>register.html">Register</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.container-fluid -->
        </nav>
    </div>
    <div class="container" id="hover_menu">
      <div class="col-md-12">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </div>
    </div>
  </header>