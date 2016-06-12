<?php

  	$slug = trim(str_replace('hotels-in-', '', $this->uri->segment(1)));
  
?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/hoteldashboard.css">

<div class="container-fluid hotel_admin_content"> 
  <div class="row">
    <div class="col-md-2 left-panel-shell">
      <li class="menu-header"></li>
      <ul id="tabs">

        <li class="menu-item"><a href="#" name="tab1">
        	<span class="glyphicon glyphicon-user icon-label"></span><span class="text-label">Profile</span>
        </a></li>

        <li class="menu-item"><a href="#" name="tab2">
        <span class="glyphicon glyphicon-list icon-label"></span><span class="text-label">Create Hotel</span> 
        </a></li>

        <li class="menu-item"><a href="#" name="tab3">
        <span class="glyphicon glyphicon-edit icon-label"></span><span class="text-label">Edit Hotel</span>
        </a></li>
        <li class="menu-item"><a href="#" name="tab4"><span class="glyphicon glyphicon-plus">&nbsp;Add Rooms</span> </a></li>
        <li class="menu-item"><a href="#" name="tab5"><span class="glyphicon glyphicon-eye-open">&nbsp;View Hotel Page</span> </a></li>
      

        <li class="menu-header" style="margin-top: 50px;">View Contact User</li>
        <li class="menu-item"><a href="#" name="tab3">Inbox </a></li>
        <li class="menu-item"><a href="#" name="tab4">Reply </a></li>
        <li class="menu-item"><a href="#" name="tab5">No Reply </a></li>

        <li class="menu-header" style="margin-top: 50px;">Job Title / Category</li>
        <li class="menu-item"><a href="#" name="tab6">Manage Job Title / Category</a></li>

        <li class="menu-header" style="margin-top: 50px;"><span class="glyphicon glyphicon-cog"></span>&nbsp;Account Setting</li>
        <li class="menu-item"><a href="#" name="tab6">Create Account</a></li>
        <li class="menu-item"><a href="#" name="tab7">Manage Account</a></li>
        <li class="menu-item"><a href="#" name="tab8">Manage Other Accounts</a></li>
        <li class="menu-item"><a href="#" name="tab9">Login Information</a></li>

      </ul>

    </div>
    <div class="col-md-10 right-panel-shell">
      <div class="col-md-12" id="content"> 

<!-- ==================== profile code ==================== -->
        <div class="col-md-12" id="tab1">
            <div class="col-md-offset-3 col-md-6 profile-form-shell">
            	<div class="col-md-12 profile-header">Porfile</div>
            	<?php
            		$attr = array('class' => 'form', 'name' => 'profile'); 
            		echo form_open('HotelDashboard/profile',$attr); 

            		if ($this->session->flashdata('profile') != null) {
            			$message = $this->session->flashdata('profile');
            	?>
            	<div class="col-md-12 <?php echo $message['class'] ?>"><?php echo $message['messages'] ?></div>
            	<?php
            		}
            	?>
            	
            	<label for="name">Name :</label>
            	<input type="text" name="name" class="form-control" value="">
            	<span class="text-danger"><?php echo form_error('name'); ?></span><br/>

            	<label for="email">Email :</label>
            	<input type="email" name="email" class="form-control" value="">
            	<span class="text-danger"><?php echo form_error('email'); ?></span><br/>

            	<label for="phone">Phone :</label>
            	<input type="text" name="phone" class="form-control" value="">
            	<span class="text-danger"><?php echo form_error('phone'); ?></span><br/>

            	<label for="hotel-name">Your Hotel Name :</label>
            	<input type="text" name="hotel-name" class="form-control">
            	<span class="text-danger"><?php echo form_error('hotel-name'); ?></span><br/>

            	<label for="region">State/Region :</label>
            	<select name="region" class="form-control">
            		<?php echo get_all_region(); ?>
            	</select>
            	<span class="text-danger"><?php echo form_error('region'); ?></span><br/>

            	<label for="city">City :</label>
            	<select name="city" class="form-control">
            		<?php echo get_all_city(); ?>
            	</select>
            	<span class="text-danger"><?php echo form_error('city'); ?></span><br/>

            	<input type="submit" name="save" class="form-control btn-primary" value="Save">
            	<?php
            		echo form_close();
            	?>
            </div>
        </div><!-- /end profile code -->

<!-- =================== create hotel page =================== --> 
        <div class="col-md-12" id="tab2">
        	<div class="col-md-12 hotel-header">Create Your Hotel</div>
            <?php

            	$attr2 = array('class' => 'form', 'name' => 'create_hotel');
            	echo form_open('HotelDashboard/create_hotel',$attr2);

            ?>
            <div class="col-md-6 left-panel">
            	<label for="hotel_name">Hotel Name :</label>
            	<input type="text" name="hotel_name" class="form-control" value="">
            	<span class="text-danger"><?php echo form_error('hotel_name'); ?></span><br/>

            	<label for="hotel_email">Hotel Email :</label>
            	<input type="email" name="hotel_email" class="form-control" value="">
            	<span class="text-danger"><?php echo form_error('hotel_email'); ?></span><br/>

            	<label for="hotel_phone">Hotel Phone :</label>
            	<input type="text" name="hotel_phone" class="form-control" value="">
            	<span class="text-danger"><?php echo form_error('hotel_phone'); ?></span><br/>

            	<label for="region">Region / State :</label>
            	<select name="region" class="form-control">
            		<?php echo get_all_region(); ?>
            	</select>
            	<span class="text-danger"><?php echo form_error(); ?></span><br/>

            	<label for="city">City :</label>
            	<select name="city" class="form-control">
            		<?php echo get_all_city(); ?>
            	</select>
            	<span class="text-danger"><?php echo form_error(); ?></span><br/>

            	<label for="address">Address :</label>
            	<textarea name="address" class="form-control" rows="3"></textarea>
            	<span class="text-danger"><?php echo form_error('address'); ?></span>
            </div>
            <div class="col-md-6 right-panel">
            	<div class="col-md-3 padding0">
            		<label for="service">Facilities :</label>
            	</div>
            	<div class="col-md-9">
            	<?php
            		$value = get_facilities();
            		foreach($value as $service):
            	?>
            	<input type="checkbox" name="service"> <?php echo $service->facilities_name; ?><br/>
            	<?php
            		endforeach;
            	?>
            	<?php echo form_error('service'); ?>
            	</div>

            	<label for="description">Description :</label>
            	<textarea name="description" class="form-control" rows="5"></textarea>
            	<span class="text-danger"><?php echo form_error('description'); ?></span><br/>

            	<label for="image">Image Gallery :</label>
            	<input type="file" name="image" class="form-control">
            	<span class="text-danger"><?php echo form_error('image'); ?></span><br/>

            	<label for="other">Other :</label>
            	<textarea name="other" rows="5" class="form-control"></textarea><br/>

            </div>

            <div class="col-md-12">
            	<input type="submit" value="Create" class="btn btn-primary pull-right">
            </div>
            <?php echo form_close(); ?>
        </div><!-- end create hotel -->

          <div id="tab3">All contact User List</div>
          <div id="tab4">All contact Reply User List</div>
          <div id="tab5">All contact No reply User List</div>
          <div id="tab6">Add | Remove | Edit job title / category function</div>
      </div>
    </div>
  </div>
</div>