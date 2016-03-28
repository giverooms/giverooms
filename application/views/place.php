<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/place.css">
<div class="row" id="page_content">
  <div class="container" id="content">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="left_menu">
            <h4>Our Tour Itineraries</h4>
            <ul>
              <li>A Classic Tour of Myanmar</li>
              <li>The Essence of Myanmar</li>
              <li>Wonderland</li>
              <li>A Myanmar Pilgrimage</li>
              <li>Off The Beaten Track</li>
              <li>Magical Mystery Myanmar</li>
              <li>Ngapali Beach</li>
              <li>Ngwe Saung Beach</li>
            </ul>
          </div>
        </div>

        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9" id="right_content">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
              <h3 id="header">Top 10 Myanmar Travels Destination</h3>
              <p style="text-indent: 50px;">
                Explore the TOP 10 best tourist destinations, tourist spots, attractions in Myanmar (Burma) for your holiday! Myanmar is one of the mysterious country in South East Asia and because of its cultural and geographical diversity has retained much of its historic and unique character. Discover the great attractions in Myanmar and the country's wonderful uniqueness.
              </p>
            </div>
            <div class="row" id="list_show">
            <?php
              $x = "";
              foreach($places as $place):
                $x = $x +1;
            ?>
              <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3" id="place_item">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px;">
                  <h4><?php echo $place->place_name_mm; ?></h4>
                  <img src="<?php echo base_url();echo $place->place_img; ?>">
                  <p>
                    <?php
                      $place_desc = $place->place_desc;

                      if(strlen($place_desc) > 150){
                    ?>
                    <?php echo substr($place_desc, 0,150) ;?>
                    <a href="#" data-toggle="modal" data-target="#model<?php echo $x; ?>">.. Read More</a>
                    <?php
                      }
                    ?>
                  </p>
                </div>
              </div>

              <!-- popup modal code -->
              <div class="modal fade" id="model<?php echo $x; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel"><?php echo $place->place_name_mm; ?></h4>
                    </div>
                    <div class="modal-body">
                        <img src="<?php echo $place->place_img; ?>" class="img-responsive">
                      
                        <p style="text-indent: 50px;text-align: justify;margin-top: 30px;">
                          <?php echo $place->place_desc; ?>
                        </p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
              <!-- /end popup modal code -->
            </div><!-- /end list row -->
          </div>
        </div><!--/end right content -->

      </div>
  </div><!--/end container -->
</div><!-- /end container-fluid -->
<style type="text/css">
  .modal{
    background: rgba(44, 62, 80,0.7);
  }
</style>
