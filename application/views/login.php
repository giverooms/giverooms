<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/register.css">
<div class="container-fluid" id="content_rg">
	<div class="container">
		<div class="col-sm-offset-3 col-md-offset-3 col-xs-12 col-sm-6 col-md-6 col-lg-6" id="login_box">
		   	<?php echo validation_errors(); ?>
		   	<?php echo form_open('register/login'); ?>
		   	<form class="form">
		     <label for="username">Username:</label>
		     <input type="text" size="20" id="username" class="form-control" name="username"/>
		     <br/>
		     <label for="password">Password:</label>
		     <input type="password" size="20" id="passowrd" class="form-control" name="password"/>
		     <br/>
		     <input type="submit" class="form-control btn btn-warning" value="Login"/>
		   	</form>
		   	<br/>------------- or ----------------<br/>
		   	<a href="" class="btn btn-block btn-social btn-facebook">
			    <span class="fa fa-facebook"></span> Sign in with Facebook
			</a>
		</div>
	</div>
</div>