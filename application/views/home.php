<!--************* SEARCH **********************-->
    <img src="<?php echo base_url(); ?>images/Bagan.original.3730.jpg" id="background">
    <div id="search-container-wrap" class="row">
        <div class="col-sm-1"></div>
        <div id="search-container" class="col-xs-12 col-sm-10 col-md-10 col-lg-10" >
            <div class="row">
                <div id="video-holder" class="col-sm-6">
                    
                </div>

                <div id="search-box" class="col-xs-12 col-sm-6">
                    
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h3>Find The Best Hotel Rooms Here</h3>
                        </div>
                        <form class="form">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <input type=search results=5 name="location" id="location" placeholder="location or city" autosave=unique class="form-control"><br/>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px;">
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">In-Date :</span>
                                        <input type="text" class="form-control" placeholder="start date" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">Out-Date:</span>
                                        <input type="text" class="form-control" placeholder="end date" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px;">
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">Guests</span>
                                        <input type="number" min="1" class="form-control" placeholder="guest" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">Rooms</span>
                                        <input type="number" min="1" class="form-control" placeholder="room" aria-describedby="basic-addon1">
                                    </div>
                                </div>                                                              
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <input type="submit" value="Search" name="search" class="btn btn-default pull-left" style="width:100%;">
                            </div>
                        </form>
                    


                </div>
            </div>

            <div id="search-by-region" class="row">
                    <span id="label">Search By Region :</span>
                    <a href="<?php echo base_url(); ?>hotels-in-yangon">Yangon</a>
                    <a href="<?php echo base_url(); ?>hotels-in-mandalay">Mandalay</a>
                    <a href="<?php echo base_url(); ?>hotels-in-naypyitaw">Nay Pyi Taw</a>
                    <a href="<?php echo base_url(); ?>hotels-in-bago">Bagan</a>
                    <a href="<?php echo base_url(); ?>hotels-in-pyinoolwin">Pyin Oo Lwin</a>
                    <a href="<?php echo base_url(); ?>hotels-in-ngapali">Ngapali</a>
                    <a href="<?php echo base_url(); ?>hotels-in-ngwesaung">Ngwe Saung</a>
                    <a href="<?php echo base_url(); ?>hotels-in-chaungthar">Chaung Thar</a>
                    <a href="<?php echo base_url(); ?>hotels-in-kyaikhteyoe">Kyaik Hte Yoe</a>
                    <a href="<?php echo base_url(); ?>hotels-in-taunggyi">Taung Gyi</a>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>

<!--************* SLIDES **********************-->
    <div class="row" id="slide">
    	<div class="row" id="slide-header"><h3>The most popular hotels in <b>Give Rooms</b></h3></div>
    	<div class="container">
        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="top_hotel">
                <ul id="flexiselDemo3">
                    <?php foreach($top_hotels as $top_hotel): ?>
                    <li>
                        <a href="<?php echo base_url(); ?>hotels-in-<?php echo slug_url($top_hotel->region_name_en); ?>/<?php echo slug_url($top_hotel->hotel_name); ?>">
                        <img src="<?php echo $top_hotel->hotel_image; ?>" class="img-responsive center-block">
                            <p>
                                <b style="font-size:16px;"><?php echo $top_hotel->hotel_name; ?></b><br/>
                                <?php echo $top_hotel->hotel_type; ?><br/>
                                Good 7.4 based on 757 reviews
                            </p>
                        </a>
                    </li>
                    <?php endforeach; ?>                                     
                </ul>  
            </div>
        </div>
    </div>


<!--************* BODAY PARTS **********************-->
    <div class="row" style="background:white;">
        <div class="container" id="text_region">
            <h3>You can search hotel easily by <b>Region/State</b> in Myanmar</h3>
        </div>
    </div>
    <div class="row body-parts">
    	<div class="container" style="border:1px solid #f7f7f7;padding-bottom: 20px;margin-bottom: 10px;">
        <?php 
            $x="";
            foreach($regions as $region):
                $x += 1 ;
                $class = "";
                if($x > 4){
                    $class = "hide_class";
                }
        ?>

        <div class="col-sm-6 <?php echo $class; ?>" id="body-info-parts">
            <div class="col-sm-12" id="body-info-head">
                <h4><?php echo $region->region_name_en." ".$region->region_type; ?></h4>
            </div>
            <div class="col-sm-12" id="body-info-holder">
                <div class="col-sm-5" id="body-info-btns">
                    <ul id="panel">

                        <?php

                            //print select_by_id();

                            $quy = 'SELECT * FROM city WHERE ct_region_id='. $region->region_id;
                            $quy .= ' LIMIT 0,5';
                            $query = $this->db->query($quy);
                            $r = "";
                            foreach ($query->result_array() as $row){  
                                $r += 1; 
                                if($r < 6){
                        ?>
                        <li class="animation">
                            <a href="<?php echo base_url(); ?>hotels-in-<?php echo slug_url($row['ct_name_en']); ?>">
                                <?php echo $row['ct_name_en']; ?>
                            </a>
                        </li>
                        <?php
                            }
                            else{
                        ?>
                        <li class="animation">
                            <a href="<?php echo base_url(); ?>hotels-in-<?php echo slug_url($row['ct_name_en']); ?>">
                                more city <span class="fa fa-arrow"></span>
                            </a>
                        </li>
                        <?php
                            }
                           }
                        ?>
                    </ul>
                </div>
                <div class="col-sm-7" id="body-info-pic">

                    <div  id="sliderb_container<?php print $x; ?>" style="position: relative; width: 400px; height: 200px; overflow: hidden;">

                    <!-- Slides Container -->
                    <div u="slides" style="cursor: pointer; position: absolute; left: 0px; top: 0px; width: 400px; height: 200px;
                        overflow: hidden; z-index:-1;">
                        <?php 
                            $h_quy = 'SELECT * FROM hotel  WHERE hotel_r_id = '.$region->region_id;
                            $h_query = $this->db->query($h_quy);

                            foreach($h_query->result_array() as $h_row){
                        ?>
                        <div>
                            <img u=image src="<?php echo $h_row['hotel_image']; ?>" />
                            <div u="thumb">
                                <a href="hotels-in-<?php echo slug_url($region->region_name_en); ?>/<?php slug_url($h_row['hotel_name']); ?>">
                                    <?php echo $h_row['hotel_name']; ?>
                                </a>
                            </div>
                        </div>

                        <?php 
                            }
                        ?>
                    </div>
                    
                    <!-- ThumbnailNavigator Skin Begin -->
                    <div u="thumbnavigator" class="sliderb-T" style="position: absolute; bottom: 0px; left: 0px; height:45px; width:400px;">
                        <div style="filter: alpha(opacity=40); opacity:0.4; position: absolute; display: block;
                            background-color: #000000; top: 0px; left: 0px; width: 100%; height: 100%;">
                        </div>
                        <!-- Thumbnail Item Skin Begin -->
                        <div u="slides">
                            <div u="prototype" style="position: absolute; width: 400px; height: 45px; top: 0; left: 0;">
                                <thumbnailtemplate style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; font-family: verdana; font-weight: normal; color:#fff; line-height: 45px; font-size:20px; padding-left:10px;"></thumbnailtemplate>
                            </div>
                        </div>
                        <!-- Thumbnail Item Skin End -->
                    </div>
                    <!-- Arrow Left -->
                    <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 123px; left: 8px;">
                    </span>
                    <!-- Arrow Right -->
                    <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 123px; right: 8px">
                    </span>
                    <!-- Trigger -->
                    <script>
                        jssor_sliderb_starter('sliderb_container<?php print $x; ?>');
                    </script>
                    </div>
                </div>
            </div>
        </div>
    
        <?php endforeach; ?>
        <div class="row">
          <button type="button" class="btn btn-primary see pull-right">See More</button>
          <button type="button" class="btn btn-primary less pull-right">Less</button>
        </div>
        </div>

    </div>

    <!--********** HOW DO WE WORK *****************-->
    <div class="row" id="how-work">
        <div class="col-sm-12" id="how-work-head"><h3>How do we work ?</h3></div>

        <div class="col-sm-1"></div>
        <div class="col-sm-3" id="how-work-pic">
            <img src="images/how-work-pic1.png">
        </div>
        <div class="col-sm-3" id="how-work-pic">
            <img src="images/how-work-pic2.png">
        </div>
        <div class="col-sm-3" id="how-work-pic">
            <img src="images/how-work-pic3.png">
        </div>
        <div class="col-sm-1"></div>
    </div>

<!--********** ASSOCIATE *****************-->
    <div class="row" id="associate">
        <div class="col-sm-12" id="associate-head"><h3>We are associate with - - </h3></div>

        <div class="col-sm-2"></div>
        <div class="col-sm-8" id="associate-pic">
           
        </div>
        <div class="col-sm-2"></div>
    </div>
    <style type="text/css">
        #seemore{
            display: none;
        }
    </style>
    <script type="text/javascript">
    $(document).ready(function(){
        $('.see').click(function(){
            $('.hide_class').slideDown();
            $('.less').show();
            $('.see').hide();
        });
        $('.less').click(function(){
            $('.hide_class').slideUp();
            $('.less').hide();
            $('.see').show();
        });
    });
    </script>