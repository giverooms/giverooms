<?php
  $slug = trim(str_replace('hotels-in-', '', $this->uri->segment(1)));
  
?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/hotel.css">
<div class="container-fluid" id="page_content">
  <div class="container">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
              <div class="col-md-12" id="left_menu_header">
                <h4>PLACE AROUND <?php echo strtoupper($slug); ?> (MYANMAR)</h4>
              </div>
              <div class="col-md-12" id="left_menu">
                <ul>
                  <?php
                    foreach($hotel_info as $info):
                  ?>
                  <li>
                  <span class="glyphicon glyphicon-hand-right"></span>
                  <?php print $info->hotel_name; ?>
                  </li>
                  <?php
                    endforeach;
                  ?>
                </ul>
              </div>
              <div class="col-md-12" id="left_menu">
                <ul>
                  
                </ul>
              </div>
              <div class="col-md-12" id="left_menu_header">
                <h4> PROPERTY TYPE</h4>
              </div>
              <div class="col-md-12" id="left_menu">
                <form class="form" action="" method="POST">
                  
                  <input type="checkbox" name=""/><span>5 Star</span><span class="pull-right">(235)</span><br/>

                  <input type="checkbox" name=""/><span>4 Star</span><br/>

                  <input type="checkbox" name=""/><span>3 Star</span><br/>

                  <input type="checkbox" name=""/><span>2 Star</span><br/>

                  <input type="checkbox" name=""/><span>2 Star</span><br/>

                </form>
              </div>
              <div class="col-md-12" id="left_menu_header">
                <h4> FACILITIES</h4>
              </div>
              <div class="col-md-12 facilities" id="left_menu">
                <form class="form" action="" method="POST">
                  
                  <table>
                     <?php  
                    $row = get_facilities();

                    foreach($row as $facilities):
                ?>
                    <tr>
                        <td>
                          <input type="checkbox" name="">&nbsp; 
                          <span class="fa fa-<?php echo $facilities->facilities_class; ?>"></span>&nbsp;<?php echo $facilities->facilities_name; ?>
                        </td>
                    </tr>
                <?php
                    endforeach;
                ?>
                  </table>

                </form>
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
                  foreach($hotel_info as $info):
                    $slug1 = strtolower(str_replace(" ", "-", trim($info->hotel_name)));
                ?>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="one_item">
                    <a href="<?php echo base_url();?>hotels-in-<?php echo $slug; ?>/<?php echo $slug1;?>">
                    <img src="<?php print base_url().$info->hotel_image; ?>" class="img-responsive center-block">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="text">
                      <small><?php print $info->hotel_type; ?></small>
                      <h4><?php print $info->hotel_name; ?></h4>
                      <p>
                       Towering above the city centre competition, this new hotel has super smart rooms at an affordable price. Standard rooms are small but include many of the features found in the higher class rooms...
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