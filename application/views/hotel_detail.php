<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/hotel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/hotel_detail.css">
<script type="text/javascript" src="<?php echo base_url(); ?>js/jssor.slider.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/slide_script.js"></script>
<!-- use jssor.slider.debug.js instead for debug -->
<div class="container-fluid" id="page_content">
  <div class="container">

  <!-- /hotel name and title -->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="hotel_name">

      <div class="col-xs-9 col-sm-9 col-md-10 col-lg-10" style="padding:0px;">
        <p>
          <b>My Test Hotel Name<sup><span class="glyphicon glyphicon-star"></span></sup></b><br/>
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
                My Test Hotelကေတာ့ ဗိုလ္တစ္ေထာင္ဘုရား၊ ဗိုလ္တစ္ေထာင္ဆိပ္ကမ္းနဲ႔ နီးပါတယ္။ ATM,Elevator & free Wifi ရပါတယ္။ အခန္းတုိင္းကို ေသခ်ာျပင္ဆင္ထားျပီး ထုိင္စရာေနရာ ၊ အဲကြန္း၊ ေရခဲေသတၱာ၊ တီဗီ၊ ေရခ်ိဳးခန္းပါပါတယ္။ ဟုိတယ္တြင္းစားေသာက္ဆုိင္မွာ ယူရုိ၊ ထုိင္း၊ တရုတ္၊ ျမန္မာ အစားအစာေတြရႏုိင္ျပီး နံနက္စာ အခမဲ့ေကြ်းပါတယ္။ စီးပြားေရးအတြက္ေကာင္းသလုိ အခန္းသန္႔ရွင္းေရး၊ ကားပါကင္၊ ကားအငွား၊ လံုျခံဳေရးတုိ႔ရွိပါတယ္။ ဗိုလ္တစ္ေထာင္ဘုရား၊ ဆိပ္ကမ္းကေန ၅မိနစ္လမ္းေလွ်ာက္ရျပီး City Centre နဲ႔ဆုိ ၅ မိနစ္ေလာက္ ကားေမာင္းရင္ေရာက္ပါတယ္ ၊ လမ္းငါးဆယ္ ကားဂိတ္နဲ႔နီးပါတယ္။
            </p>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="left_inner">
            <div class="row header">Hotel Sevices</div>
            <table class="table">
                <tr>
                    <td><span class="fa fa-cutlery"></span>&nbsp;Restaurant</td>
                </tr>
                <tr>
                    <td><span class="fa fa-beer"></span>&nbsp;Bar</td>
                </tr>
                <tr>
                    <td><span class="fa fa-life-ring"></span>&nbsp;Air Conditioning</td>
                </tr>
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
                        <div data-p="144.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>upload/hotel/hotel-name-of-pathein-1/gallery/01.jpg" />
                            <img data-u="thumb" src="<?php echo base_url(); ?>upload/hotel/hotel-name-of-pathein-1/gallery/thumb/thumb-01.jpg" />
                        </div>
                        <div data-p="144.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>upload/hotel/hotel-name-of-pathein-1/gallery/02.jpg" />
                            <img data-u="thumb" src="<?php echo base_url(); ?>upload/hotel/hotel-name-of-pathein-1/gallery/thumb/thumb-02.jpg" />
                        </div>
                        <div data-p="144.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>upload/hotel/hotel-name-of-pathein-1/gallery/03.jpg" />
                            <img data-u="thumb" src="<?php echo base_url(); ?>upload/hotel/hotel-name-of-pathein-1/gallery/thumb/thumb-03.jpg" />
                        </div>
                        <div data-p="144.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>upload/hotel/hotel-name-of-pathein-1/gallery/04.jpg" />
                            <img data-u="thumb" src="<?php echo base_url(); ?>upload/hotel/hotel-name-of-pathein-1/gallery/thumb/thumb-04.jpg" />
                        </div>
                        <div data-p="144.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>upload/hotel/hotel-name-of-pathein-1/gallery/05.jpg" />
                            <img data-u="thumb" src="<?php echo base_url(); ?>upload/hotel/hotel-name-of-pathein-1/gallery/thumb/thumb-05.jpg" />
                        </div>
                        <div data-p="144.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>upload/hotel/hotel-name-of-pathein-1/gallery/06.jpg" />
                            <img data-u="thumb" src="<?php echo base_url(); ?>upload/hotel/hotel-name-of-pathein-1/gallery/thumb/thumb-06.jpg" />
                        </div>
                        <div data-p="144.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>upload/hotel/hotel-name-of-pathein-1/gallery/07.jpg" />
                            <img data-u="thumb" src="<?php echo base_url(); ?>upload/hotel/hotel-name-of-pathein-1/gallery/thumb/thumb-07.jpg" />
                        </div>
                        <div data-p="144.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>upload/hotel/hotel-name-of-pathein-1/gallery/08.jpg" />
                            <img data-u="thumb" src="<?php echo base_url(); ?>upload/hotel/hotel-name-of-pathein-1/gallery/thumb/thumb-08.jpg" />
                        </div>
                        <div data-p="144.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>upload/hotel/hotel-name-of-pathein-1/gallery/09.jpg" />
                            <img data-u="thumb" src="<?php echo base_url(); ?>upload/hotel/hotel-name-of-pathein-1/gallery/thumb/thumb-09.jpg" />
                        </div>
                        <div data-p="144.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>upload/hotel/hotel-name-of-pathein-1/gallery/10.jpg" />
                            <img data-u="thumb" src="<?php echo base_url(); ?>upload/hotel/hotel-name-of-pathein-1/gallery/thumb/thumb-10.jpg" />
                        </div>
                        <div data-p="144.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>upload/hotel/hotel-name-of-pathein-1/gallery/11.jpg" />
                            <img data-u="thumb" src="<?php echo base_url(); ?>upload/hotel/hotel-name-of-pathein-1/gallery/thumb/thumb-11.jpg" />
                        </div>
                        <div data-p="144.50" style="display: none;">
                            <img data-u="image" src="<?php echo base_url(); ?>upload/hotel/hotel-name-of-pathein-1/gallery/12.jpg" />
                            <img data-u="thumb" src="<?php echo base_url(); ?>upload/hotel/hotel-name-of-pathein-1/gallery/thumb/thumb-12.jpg" />
                        </div>
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

                            <div class="row" id="room_info_row">
                               <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="padding: 10px;border-right: 1px solid silver;">
                                    <span id="type_lb">Excellent</span>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="room_img">
                                        <img src="<?php echo base_url(); ?>images/test.jpg" class="img-responsive">
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="room_info">
                                        <span class="glyphicon glyphicon-signal"></span>
                                        <span class="glyphicon glyphicon-film"></span>
                                        <span class="glyphicon glyphicon-phone-alt"></span>
                                        <span class="glyphicon glyphicon-signal"></span>
                                        <a id="4" title="Edit this item" class="launch-modal" href="#editexpenses"><span class="glyphicon glyphicon-plus" class="launch-model" style="color: #f88e00;"></span></a>
                                    </div>

                                    <div class="modal fade" id="editexpenses" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                          </div>
                                          <div class="modal-body">
                                         
                                         
                                         
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                          </div>
                                        </div><!-- /.modal-content -->
                                      </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                               </div>

                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="info_box">
                                    <span class="fa fa-male"></span>
                                    <span class="fa fa-female"></span>
                                </div>

                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="info_box" style="line-height: 18px;">
                                    <p style="text-align: justify;">My Test Hotelကေတာ့ ဗိုလ္တစ္ေထာင္ဘုရား၊ ဗိုလ္တစ္ေထာင္ဆိပ္ကမ္းနဲ႔ နီးပါတယ္။ ATM,Elevator & free Wifi ရပါတယ္။ အခန္းတုိင္းကို ေသခ်ာျပင္ဆင္ထားျပီး ထုိင္စရာေနရာ ၊ အဲကြန္း၊ ေရခဲေသတၱာ၊ တီဗီ၊ ေရခ်ိဳးခန္းပါပါတယ္။ </p>
                                </div>

                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="info_box" style="line-height: 30px;">
                                    <h4>30000 mmk / $27000</h4><br/>
                                    <button class="btn btn-warning btn-small">Book Now</button><br/><br/>
                                    <button class="btn btn-info btn-small">view detail</button>
                                </div>

                            </div>

                            <div class="row" id="room_info_row">
                               <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="padding: 10px;border-right: 1px solid silver;">
                                    <span id="type_lb">Excellent</span>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="room_img">
                                        <img src="<?php echo base_url(); ?>images/test.jpg" class="img-responsive">
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="room_info">
                                        <span class="glyphicon glyphicon-signal"></span>
                                        <span class="glyphicon glyphicon-film"></span>
                                        <span class="glyphicon glyphicon-phone-alt"></span>
                                        <span class="glyphicon glyphicon-signal"></span>
                                        <span class="glyphicon glyphicon-plus" style="color: #f88e00;"></span>
                                    </div>
                               </div>

                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="info_box">
                                     <span class="fa fa-male"></span>
                                    <span class="fa fa-female"></span>
                                </div>

                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="info_box">
                                    <span class="fa fa-usd" style="font-size: 16px;"></span>&nbsp;3333
                                </div>

                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="info_box">
                                    <button class="btn btn-warning btn-lg">Book Now</button>
                                </div>

                            </div>

                            <div class="row" id="room_info_row">
                               <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="padding: 10px;border-right: 1px solid silver;">
                                    <span id="type_lb">Excellent</span>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="room_img">
                                        <img src="<?php echo base_url(); ?>images/test.jpg" class="img-responsive">
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="room_info">
                                        <span class="glyphicon glyphicon-signal"></span>
                                        <span class="glyphicon glyphicon-film"></span>
                                        <span class="glyphicon glyphicon-phone-alt"></span>
                                        <span class="glyphicon glyphicon-signal"></span>
                                        <span class="glyphicon glyphicon-plus" style="color: #f88e00;"></span>
                                    </div>
                               </div>

                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="info_box">
                                     <span class="fa fa-male"></span>
                                    <span class="fa fa-female"></span>
                                </div>

                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="info_box">
                                    <span class="fa fa-usd" style="font-size: 16px;"></span>&nbsp;3333
                                </div>

                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="info_box">
                                    <button class="btn btn-warning btn-lg">Book Now</button>
                                </div>

                            </div>

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