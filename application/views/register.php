<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/register.css">
<script type="text/javascript" src="<?php echo base_url(); ?>js/register.js"></script>
<script type="text/javascript">

</script>
<div class="container-fluid">
	<div class="container">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-sm-offset-3  col-md-offset-3 col-lg-offset-3" id="register_box">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h3>Register in GiveRooms</h3>
				<?php
					if($this->session->flashdata('register') != null) {
  					$message = $this->session->flashdata('register');
  				?>
				<div class="alert <?php echo $message['class'];?>"><?php echo $message['messages']; ?></div>
				<?php
					}
				?>
				<?php
					if(validation_errors() != null):
				?>
				<div class="alert alert-warning"><?php echo validation_errors(); ?></div>
				<?php
					endif;
				?>
				<form class="form" action="<?php echo site_url('register/login');?>" method="POST">

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<label for="fname">Name :</label>
							<input type="text" name="name" placeholder="your name" class="form-control" required>
						</div>
					</div><br/>

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<label for="email">Email :</label>
							<input type="email" name="email" placeholder="email" class="form-control" required>
						</div>
					</div><br/>

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<label for="phone">Phone</label>
							<input type="text" name="phone" placeholder="phone" class="form-control" required>
						</div>
					</div><br/>

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<label for="password">Password</label>
							<input type="password" name="password" placeholder="password" class="form-control password" required>
						</div>
					</div><br/>

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<label for="repassword">Confirm Password</label>
							<input type="password" name="repassword" placeholder="re-enter password" class="form-control repassword" required>
							<span id="pass_confirm">Password Match !</span>
							<span id="pass_error">Password do not match !</span>
						</div>
					</div><br/>

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<input type="submit" name="register" class="btn btn-warning col-md-3 pull-right" />
						</div>
					</div><br/>

				</form>
			</div>
		</div>
	</div>
</div>