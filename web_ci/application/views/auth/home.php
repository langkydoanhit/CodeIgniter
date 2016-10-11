<!DOCTYPE html>
<html lang="">
	<header id="header" class="">
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url() ?>public/css/bootstrap.min.css">
	<style type="text/css" media="screen">
		marquee{
			text-align: center ;
			color: pink;
			font-size: 40px;
		}

	</style>
</header><!-- /header -->
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Title</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
			</ul>
			<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>

			<ul class="nav navbar-nav navbar-right">
				<h3><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Hello <?php if (isset($_SESSION['username'])) {
					echo $_SESSION['username'];
					}?> </h3>
			<li> 
				<!-- <form action ="<?php //echo base_url();?>Auth/register" method="POST">
				<input type="submit" class="btn btn-default" value="register" name="register" >
				</form> -->
			</li>
			<li>
				<form action ="<?php echo base_url();?>User/update" method="POST">
				<input type="submit" class="btn btn-default" value="Edit" name="edit" >
				</form>
				
			</li>
			<li>&nbsp;</li>
			<li>
				<form action ="<?php echo base_url();?>User/logout" method="POST">
				<input type="submit" class="btn btn-danger" value="Logout" name="logout" >
				</form>

			</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>
	<div class="container">
		<marquee scrollamount="5">Welcome to my website ! </marquee>
	</div>
	
	<script src="<?php echo base_url() ?>public/js/jquery/jquery-1.11.2.min.js"></script>
		<!-- Bootstrap JavaScript -->
	<script src="<?php echo base_url() ?>public/js/vendo/bootstrap.min.js"></script>
</body>
</html>