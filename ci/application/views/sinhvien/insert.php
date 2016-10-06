<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert sINH VIÊN</title>
	<style type="text/css" media="screen">
		form{
			margin: 50px auto;
			padding-left: 500px;
		}
		label{
			color: #00CC00;

			width: 120px;

		}
		h1{
			color: pink;
			text-align: center;
		}
		.error{
			color: red;
		}
		input{
			width: 400px;
			height: 40px;
		}
	</style>
</head>
<body>
		<h1>THÊM MỚI SINH VIÊN</h1>
	<form action="" method="POST" accept-charset="utf-8">
		
	<label>Tên sinh viên</label></br>
	<input type="text" name="txtname" value="<?php echo set_value("txtname") ?> "></br>
	<div>&nbsp;</div>
	<?php echo form_error("txtname") ?></br>

	<label>Email   </label></br>
	<input type="text" name="txtemail" value="<?php echo set_value("txtemail")?> "></br>
	<div>&nbsp;</div>
	<?php echo form_error("txtemail") ?></br>

	<label>Địa chỉ</label></br>
	<input type="text" name="txtaddress" value="<?php echo set_value("txtaddress") ?>"></br>
	<div>&nbsp;</div>
	<?php echo form_error("txtaddress") ?></br>
		
	<label>Số điện thoại</label></br>
	<input type="text" name="txtphone" value="<?php echo set_value("txtphone") ?>"></br>
	<div>&nbsp;</div>
	<?php echo form_error("txtphone") ?></br>
	<div>&nbsp;</div>

	<input type="submit" name="ok" value="Thêm mới">
		</br>
	</form>

</body>
</html>