<?php
  $slug = trim(str_replace('hotels-in-', '', $this->uri->segment(1)));
  
?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/hotel_admin_profile.css">
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="left_panel">
				<div id="tab_panel">
					<ul>
						<a href=""><li><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Profile</li></a>
						<a href=""><li><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;Create Page</li></a>
						<a href=""><li><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;Edit Page</li></a>
						<a href=""><li><span class="glyphicon glyphicon-bed"></span>&nbsp;&nbsp;Add Rooms</li></a>
						<a href=""><li><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Edit Rooms</li></a>
					</ul>
				</div>

				<div id="tab_panel">
					<ul>
						<a href=""><li><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Booking List</li></a>
						<a href=""><li><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Reply</li></a>
						<a href=""><li><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Not Reply</li></a>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9" style="padding: 0px;">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="right_content">
				
			</div>
		</div>
	</div>
</div>