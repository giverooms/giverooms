<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/hotel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/hotel_detail.css">
<script type="text/javascript" src="<?php echo base_url(); ?>js/jssor.slider.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/slide_script.js"></script>
<!-- use jssor.slider.debug.js instead for debug -->
<div class="container-fluid" id="page_content">
  <div class="container">

  <?php
    foreach($hotel_detail as $detail){
?>

  <!-- /hotel name and title -->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="hotel_name">

      <div class="col-xs-9 col-sm-9 col-md-10 col-lg-10" style="padding:0px;">
        <p>
          <b><?php print $detail->hotel_name; ?><sup><span class="glyphicon glyphicon-star"></span></sup></b><br/>
          <small>Myomakyaung Street, Dagon Tsp, Yangon.</small>
        </p>
      </div>

      <div class="col-xs-3 col-sm-3 col-md-2 col-lg-2" id="show_map">
        <span class="glyphicon glyphicon-star"></span><a href="">Show Map</a>
      </div>

    </div><!-- /end hotel name and title -->

<!-- / hotel detail content section -->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="hotel_detail_content">
      <!-- /left content -->
      <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3" id="left_content">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="left_inner">
            <form class="form" style="margin-top: 10px;margin-bottom: 10px;">
                <input type="text" class="form-control" placeholder="check in"><br/>
                <input type="text" class="form-control" placeholder="check out"><br/>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="number" min="1" class="form-control" placeholder="guest">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="number" min="1" class="form-control" placeholder="rooms">
                    </div>
                </div><br/>
                <input type="submit" name="submit" value="Search" class="form-control btn btn-warning btn-small">
            </form>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="left_inner">
            <div class="row header">Hotel Description</div>
            <p style="text-align: justify;"><br/>
               <?php print $detail->hotel_desc; ?>
            </p>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="left_inner">
            <div class="row header">Hotel Sevices</div>
            <table class="table">
                <?php  
                    $row = get_facilities();

                    foreach($row as $facilities):
                ?>
                    <tr>
                        <td><span class="fa fa-<?php echo $facilities->facilities_class; ?>"></span>&nbsp;<?php echo $facilities->facilities_name; ?></td>
                    </tr>
                <?php
                    endforeach;
                ?>
                <tr>
                    <td><small style="color: gray;">Click <a >Service and Facilities</a> for more information <span class="fa fa-hand-o-right"></span></small></td>
                </tr>
            </table>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="left_inner">
            <div class="row header">Other</div>
        </div>

    </div><!-- /end left content -->

      <!-- /right content -->
    <div class="col-xs-12 col-sm-4 col-md-9 col-lg-9" id="right_content_detail">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="right_inner">
                                 
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="slide_gallery_box">

                <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 853px; height: 456px; overflow: hidden; visibility: hidden;background: gray;">
                    <!-- Loading Screen -->
                    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                        <div style="position:absolute;display:block;background:url('<?php echo base_url(); ?>img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                    </div>
                    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 853px; height: 356px; overflow: hidden;">
                        <?php
                            $gal = slice_array($detail->gal_img);
                            foreach($gal as $val):
                        ?>
                        <div data-p="144.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>upload/hotel/<?php echo slug_url($detail->hotel_name); ?>/gallery/<?php echo $val; ?>" />
                            <img data-u="thumb" src="<?php echo base_url(); ?>upload/hotel/<?php echo slug_url($detail->hotel_name); ?>/gallery/<?php echo $val; ?>" />
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- Thumbnail Navigator -->
                    <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:853px;height:100px;" data-autocenter="1">
                        <!-- Thumbnail Item Skin Begin -->
                        <div data-u="slides" style="cursor: default;">
                            <div data-u="prototype" class="p">
                                <div class="w">
                                    <div data-u="thumbnailtemplate" class="t"></div>
                                </div>
                                <div class="c"></div>
                            </div>
                        </div>
                        <!-- Thumbnail Item Skin End -->
                    </div>
                    <!-- Arrow Navigator -->
                    <span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>
                    <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>
                    <a href="http://www.jssor.com" style="display:none">Slideshow Maker</a>
                </div>
                <script>
                    jssor_1_slider_init();
                </script>
            </div><!-- /end slider box -->

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="detail_info">
                <!-- dynamic tab for room and services -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 tabs">
                    <ul class="tab-links">
                        <li class="active"><a href="#tab1">Abailable Rooms</a></li>
                        <li><a href="#tab2">Services & Facilities</a></li>
                    </ul>
                 
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 tab-content">
                        <!-- tab1 for show rooms type -->
                        <div id="tab1" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 tab active">
                            <div class="row" id="room_detail_lb">
                                <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3" style="padding: 0px;">
                                    Room Type
                                </div>
                                <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3" style="padding: 0px;">
                                    Maximum Stay Here
                                </div>
                                <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3" style="padding: 0px;">
                                    Description
                                </div>
                            </div>
                            <?php  
                                $row = select_by_id($detail->hotel_id);
                                foreach($row as $room):
                            ?>
                            <div class="row" id="room_info_row">
                               <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="padding: 10px;border-right: 1px solid silver;">
                                    <a href="<?php base_url(); ?>my-test-hotel-name/excellent">
                                        <span id="type_lb"><?php print $room->room_name; ?></span>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="room_img">
                                            <img src="<?php echo base_url(); ?>upload/room/mgm-hotel/<?php echo $room->room_img; ?>" class="img-responsive">
                                        </div>
                                    </a>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="room_info">
                                        <span class="glyphicon glyphicon-signal"></span>
                                        <span class="glyphicon glyphicon-film"></span>
                                        <span class="glyphicon glyphicon-phone-alt"></span>
                                        <span class="glyphicon glyphicon-signal"></span>
                                        <a id="4" title="Edit this item" class="launch-modal" href="#editexpenses"><span class="glyphicon glyphicon-plus" class="launch-model" style="color: #f88e00;"></span></a>
                                    </div>

                               </div>

                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="info_box">
                                    <?php for($x = 1;$x < $room->room_stay+1;$x++): ?>
                                    <span class="fa fa-male"></span>
                                <?php endfor; ?>
                                    
                                </div>

                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="info_box" style="line-height: 18px;">
                                    <p style="text-align: justify;"><?php echo substr($room->room_desc_en, 0,200).".."; ?></p>
                                </div>

                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="info_box" style="line-height: 30px;">
                                    <h4><?php echo $room->price_us; ?>&nbsp;U$D</h4><br/>
                                    <button class="btn btn-warning btn-small">Book Now</button><br/><br/>
                                    <a href="<?php echo base_url(uri_string())."/".$room->room_name; ?>" class="btn btn-info btn-small">view detial</a>
                                </div>

                            </div>

                        <?php endforeach; ?>

                        </div><!-- /end tab1 -->
                 
                        <div id="tab2" class="col-xs-12 col-sm-12 col-md-12 tab" style="padding: 0px;">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding:0px;">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Hotel Rules</div>
                                    <div class="panel-body">
                                        <li>Check in After 12:00 PM</li>
                                        <li>Check out Before 11:00</li>
                                        <li>AMInternational Guests Friendly</li>
                                        <li>Pure Vegetarian Kitchen</li>
                                        <li>Option of Paying at Hotel</li>
                                        <li>Triple Occupancy is Allowed</li>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">Facilities and Service</div>
                                    <div class="panel-body">
                                        <table class="table">
                                            <tr>
                                                <td><span class="fa fa-car"></span>&nbsp;Packing</td>
                                                <td>-&nbsp;Car Packing</td>
                                            </tr>
                                            <tr>
                                                <td><span class="fa fa-cutlery"></span>&nbsp;Breakfast</td>
                                                <td>-&nbsp;Breakfast Include</td>
                                            </tr>
                                            <tr>
                                                <td><span class="fa fa-hotel"></span>&nbsp;Housekeeping</td>
                                                <td>-&nbsp;Housekeeping<br/>-&nbsp;Washiing Machine<br/>-&nbsp;Towels Include</td>
                                            </tr>
                                            <tr>
                                                <td><span class="fa fa-life-ring"></span>&nbsp;Air Conditioning</td>
                                                <td>-&nbsp;Available</td>
                                            </tr>
                                            <tr>
                                                <td><span class="fa fa-wifi"></span>&nbsp;Wifi / Internet</td>
                                                <td>-&nbsp;Free Wifi</td>
                                            </tr>
                                            <tr>
                                                <td><span class="fa fa-beer"></span>&nbsp;Bar</td>
                                                <td>-&nbsp;Available</td>
                                            </tr>
                                            <tr>
                                                <td><span class="fa fa-bank"></span>&nbsp;ATM / Bank</td>
                                                <td>-&nbsp;Available ATM / Currency Exchange</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding:0px;">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Hotel Rules</div>
                                    <div class="panel-body">
                                        <li>Check in After 12:00 PM</li>
                                        <li>Check out Before 11:00</li>
                                        <li>AMInternational Guests Friendly</li>
                                        <li>Pure Vegetarian Kitchen</li>
                                        <li>Option of Paying at Hotel</li>
                                        <li>Triple Occupancy is Allowed</li>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">How to Go?</div>
                                    <div class="panel-body">
                                        <table class="table">
                                            <tr>
                                                <th>From</th>
                                                <th>Traffic</th>
                                                <th>Time(About)</th>
                                                <th>Fee(About)</th>
                                            </tr>
                                            <tr>
                                                <td rowspan="3">Airport</td>
                                                <td><span class="fa fa-taxi"></span>&nbsp;Taxi</td>
                                                <td>30 Min</td>
                                                <td>5000 mmk / 4 $</td>
                                            </tr>
                                            <tr>
                                                <td><span class="fa fa-bus"></span>&nbsp;Bus</td>
                                                <td>1 : 30 hr</td>
                                                <td>300 mmk / 20 Cents</td>
                                            </tr>
                                            <tr>
                                                <td><span class="fa fa-bicycle"></span>&nbsp;Bicycle</td>
                                                <td>1 : 30 hr</td>
                                                <td>300 mmk / 20 Cents</td>
                                            </tr>

                                            <tr>
                                                <td rowspan="3">Highway Bus Stop</td>
                                                <td><span class="fa fa-taxi"></span>&nbsp;Taxi</td>
                                                <td>30 Min</td>
                                                <td>5000 mmk / 4 $</td>
                                            </tr>
                                            <tr>
                                                <td><span class="fa fa-bus"></span>&nbsp;Bus</td>
                                                <td>1 : 30 hr</td>
                                                <td>300 mmk / 20 Cents</td>
                                            </tr>
                                            <tr>
                                                <td><span class="fa fa-bicycle"></span>&nbsp;Bicycle</td>
                                                <td>1 : 30 hr</td>
                                                <td>300 mmk / 20 Cents</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /end tab 2 -->

                    </div>
                </div><!-- /end dynamic tab -->

            </div>

        </div><!-- /end right inner -->

      </div><!-- /end right content -->

    </div><!-- // end hotel detail content section -->

  </div><!--/end container -->
</div>
<?php
    }
?>
<script>
    jQuery(document).ready(function() {
        jQuery('.tabs .tab-links a').on('click', function(e)  {
            var currentAttrValue = jQuery(this).attr('href');
     
            // Show/Hide Tabs
            jQuery('.tabs ' + currentAttrValue).show().siblings().hide();
     
            // Change/remove current tab to active
            jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
     
            e.preventDefault();
        });
    });

    $(document).ready(function(){

        $(".launch-modal").click(function(){

            $("#editexpenses").modal({

                keyboard: false

            });

        }); 

    });
</script>