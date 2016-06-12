<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
      <title>GiveRooms - Find and Book Accommodations, Guest House, Inn, Budget Hotel Rooms in Myanmar</title>
      <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="GiveRooms is Online Hotel Booking Website for Guest House, Inn, Accommodations and Budget Hotel Rooms in Myanmar. Find and Book Hotels in Yangon, Hotels in Madalay, Hotels in Nay Pyi Taw, Hotels in Bagan, Hotels in Ngapali at Low Rate">
      <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
      <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>css/booNavigation.css">
      
      <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
      <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/index.css">
      <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.flexisel.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/jssor.slider.min.js"></script>
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
      <script src="<?php echo base_url(); ?>js/booNavigation.js"></script> 
</head>
<body>
<!-- popup modal for login -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true" style="background: rgba(44, 62, 80,0.7);">
      <div class="modal-dialog modal-lg" style="width: 30%;">
        <div class="modal-content">
          <div class="modal-header" style="background: #112e5e;color: white;">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Login in GiveRooms</h4>
          </div>
          <div class="modal-body">
              <form class="form" action="<?php echo site_url('register/login');?>" method="POST">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <label for="email">Email :</label>
                    <input type="email" name="username" placeholder="username or email" class="form-control" required>
                  </div>
                </div><br/>

                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="password" class="form-control password" required>
                  </div>
                </div><br/>

               <input type="submit" class="form-control btn btn-info" value="Sing In for GiveRooms"/>
              </form><br/>

              <p>Forget your password ?<a href="">Click Here</a></p>
          </div>
        </div>
      </div>
    </div>
<!-- /end login -->

<div class="container-fluid">
<!--************* Head **********************-->
  <div class="row header">
    <!-- Static navbar -->
    <nav class="navbar ">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <b>GiveRooms<small style="font-size: 16px;">.com</small></b>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="<?php echo base_url(); ?>">Home<span class="sr-only">(current)</span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hotel <span class="caret"></span></a>
              <ul class="dropdown-menu hover-menu-edit">
                <?php

                  $regions = get_region();
                  foreach($regions as $region):

                ?>
                <li><a href="hotels-in-<?php echo slug_url($region->region_name_en); ?>">Hotels in <?php echo $region->region_name_en; ?><span class="badge pull-right"><?php echo get_total_hotel($region->region_id); ?></span></a></li>
                <?php
                  endforeach;
                ?>
              </ul>
            </li>
            <li><a href="<?php echo base_url(); ?>place.html">Place</a></li>
            <li><a href="<?php echo base_url(); ?>guide.html">Guide</a></li>
            <li><a href="#" data-toggle="modal" data-target="#login">Login</a></li>
            <li><a href="<?php echo base_url(); ?>register.html">Register</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/.container-fluid -->
    </nav>
  </div><!-- /header menu end -->

