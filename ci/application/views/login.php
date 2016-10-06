<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Page Login</title>
		<link rel="stylesheet" type="text/css"  href="<?php echo base_url() ?>public/css/bootstrap.min.css">
		<!-- Bootstrap CSS -->
		<style type="text/css" media="screen">
			form{
				width: 500px;
				margin: 50px auto ;
			}
		</style>
		
	<body>
		<h1 class="text-center">Hello !!! </h1>
		<form action="" method="POST">
			<legend>Form Login</legend>
		
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" name="email" class="form-control" id="" placeholder="username">
				<?php echo form_error("email") ?>
			</div>

			<div class="form-group">
				<label for="">Password</label>
				<input type="password" name="pass" class="form-control" id="" placeholder="password" >
				<?php echo form_error("pass") ?>
			</div>
			<input type="submit" name="btn_login" class="btn btn-primary" value=" Login" />
		
		</form>
		<!-- jQuery -->
		<script src="<?php echo base_url() ?>public/js/jquery/jquery-1.11.2.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url() ?>public/js/vendo/bootstrap.min.js"></script>
		
	</body>
</html>