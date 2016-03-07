<?php
  $slug = trim(str_replace('-region', '', $this->uri->segment(1)));
  
?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/hotel.css">
<div class="container-fluid" id="page_content">
  <div class="container">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
              <div class="col-md-12" id="left_menu_header">
                <h4>PLACE AROUND  (MYANMAR)</h4>
              </div>

              <div class="col-md-12" id="left_menu">
                <ul>
                  <?php foreach($regioncity as $cities): ?>
                    <li><a href="<?php echo base_url(); ?>hotels-in-<?php echo $cities->ct_name_en; ?>">
                      <span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;
                      <?php print $cities->ct_name_en; ?>
                      <span class="pull-right" style="color: #f88e00;"><?php echo get_total_hotel($cities->ct_id); ?>&nbsp;hotels</span></a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>

              <div class="col-md-12" id="left_menu">
                <ul>
                  <?php
                    foreach($regionhotel as $regionhotels):
                      $id = 1;
                  ?>
                  <a href="hotels-in-<?php ?>">
                  <li>
                    <span class="glyphicon glyphicon-hand-right"></span>
                    <?php print $regionhotels->hotel_name; ?>
                  </li></a>
                  <?php
                    endforeach;
                  ?>
                </ul>
              </div>
              
              <div class="col-md-12" id="left_menu_header">
                <h4> PROPERTY TYPE</h4>
              </div>
              <div class="col-md-12" id="left_menu">
               
                 
              </div>
              <div class="col-md-12" id="left_menu_header">
                <h4> FACILITIES</h4>
              </div>
              <div class="col-md-12" id="left_menu">
               
              </div>
            </div>
    <!-- /end left menu section -->
    <!-- START RIGHT CONTENT SECTION -->
            <div class="col-xs-12 col-sm-4 col-md-9 col-lg-9">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="right_content">
                <!-- map row -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="map_box">
                  <?php include 'map.php';  ?>
                </div>
                <!-- /end map row -->
                <!-- search box and nofification text section -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="search_box_page">
                  <form class="form">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px;">
                      <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">In:</span>
                          <input type="text" class="form-control" placeholder=" in-date" aria-describedby="basic-addon1">
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px;">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">Out:</span>
                            <input type="text" class="form-control" placeholder="out-date" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px;">
                      <div class="col-sm-6" style="padding:0px;">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">Guests</span>
                            <input type="number" class="form-control" placeholder="guest" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div class="col-sm-6" style="padding:0px;">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">Rooms</span>
                            <input type="number" class="form-control" placeholder="room" aria-describedby="basic-addon1">
                        </div>
                      </div>                                
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <input type="submit" value="Search" name="search" class="btn btn-info pull-right">
                    </div>
                  </form>
                  </div>
                </div>
                <!-- /end search box section -->
              </div>

            <!-- start content show -->
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="right_content_show">
                <?php
                  foreach($regionhotel as $hotelinfo):
                    $slug1 = strtolower(str_replace(" ", "-", trim($hotelinfo->hotel_name)));
                ?>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="one_item">
                    <a href="<?php echo base_url();?>hotels-in-<?php echo $slug; ?>/<?php echo $slug1;?>">
                    <img src="<?php print base_url().$hotelinfo->hotel_image; ?>" class="img-responsive center-block">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="text">
                      <small><?php print $hotelinfo->hotel_type; ?></small>
                      <h4><?php print $hotelinfo->hotel_name; ?></h4>
                      <p>
                       <?php print $hotelinfo->hotel_desc; ?>
                      </p>
                    </div>
                    </a>
                  </div>
                </div>
                <?php
                  endforeach;
                ?>
              </div>
            <!-- /end content show -->
            </div>
            <!-- /end right content section -->
          </div>
        </div><!--/end container -->
</div>