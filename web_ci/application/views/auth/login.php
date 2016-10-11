<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>
		<link rel="stylesheet" type="text/css"  href="<?php echo base_url() ?>public/css/bootstrap.min.css">
		<!-- Bootstrap CSS -->
		<style type="text/css" media="screen">
			form{
				width: 500px;
				margin: 50px auto ;
			}
			legend{
				color: red ;
			}
		</style>
		
	<body>
		<form   method="POST" action="<?php echo base_url('User/login')?>">
			<legend>Login</legend>
		
			<div class="form-group">
				<label for="">Username</label>
				<input type="text" name="username" class="form-control" value="<?php echo set_value('username')?>">
				<?php echo form_error("username") ?>
			</div>

			<div class="form-group">
				<label for="">Password</label>
				<input type="password" name="password" class="form-control" value="value="<?php echo set_value('password')?>"  >
				<?php echo form_error("password") ?>
			</div>
			<input type="submit" name="btn_login" class="btn btn-primary" value=" Login" />
		
		</form>
		<!-- jQuery -->
		<script src="<?php echo base_url() ?>public/js/jquery/jquery-1.11.2.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url() ?>public/js/vendo/bootstrap.min.js"></script>
		
	</body>
</html>