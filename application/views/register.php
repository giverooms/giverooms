<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/register.css">
<script type="text/javascript" src="<?php echo base_url(); ?>js/register.js"></script>
<div class="container-fluid">
	<div class="container">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-sm-offset-3  col-md-offset-3 col-lg-offset-3" id="register_box">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h3>Create account in GiveRooms</h3>
				<?php
					if($this->session->flashdata('register') != null) {
  					$message = $this->session->flashdata('register');
  				?>
				<div class="alert <?php echo $message['class'];?>"><?php echo $message['messages']; ?></div>
				<?php
					}
				?>
			
				<form class="form" action="<?php echo site_url('register/add_user');?>" method="POST">
				
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 user_choose">
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<input type="radio" name="user" value="traveller" checked>&nbsp;I am traveller
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<input type="radio" name="user" value="hotel">&nbsp;I am hotel
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<label for="name">Name :</label>
							<input type="text" name="name" placeholder="your name" class="form-control">
							<span class="text-danger"><?php echo form_error('name'); ?></span>
						</div>
					</div><br/>

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<label for="email">Email :</label>
							<input type="email" name="email" placeholder="email" class="form-control">
							<span class="text-danger"><?php echo form_error('email'); ?></span>
						</div>
					</div><br/>

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<label for="phone">Phone</label>
							<input type="text" name="phone" placeholder="phone" class="form-control">
							<span class="text-danger"><?php echo form_error('phone'); ?></span>
						</div>
					</div><br/>

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<label for="password">Password</label>
							<input type="password" name="password" id="pass" placeholder="password" class="form-control" onkeyup="CheckPasswordStrength(this.value)">
							<span id="password_strength"></span>
							<span class="text-danger"><?php echo form_error('password'); ?></span>
						</div>
					</div><br/>

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<label for="repassword">Confirm Password</label>
							<input type="password" id="repass" name="repassword" placeholder="re-enter password" class="form-control">
							<span class="text-danger"><?php echo form_error('repassword'); ?></span>
							<span id="pass_confirm">Password Match !</span>
							<span id="pass_error">Password do not match !</span>
						</div>
					</div><br/>

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<input type="checkbox" name="terms" />&nbsp;I accept the  <a href="<?php echo base_url(); ?>term-of-use.html">terms and conditions</a>.
							<span class="text-danger"><?php echo form_error('terms'); ?></span>
						</div>
					</div><br/>

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<input type="submit" name="register" class="btn btn-warning col-md-12 pull-right" />
						</div>
					</div><br/>

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							Already have an account? Sign in <a href="#" data-toggle="modal" data-target="#login">here</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>