<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>DANH SÁCH SINH VIÊN</h1>
	<?php 
		// lấy danh sách thông qua biến sinhvien
		// echo "<pre>";
		// print_r($sinhvien) ;
		// echo "</pre>";

		// nếu tồn tại biến sinh viên và biến sinh viên khác null
		if(isset($sinhvien) && $sinhvien != null ) :
			echo "<table width='500px' border='1' >  " ;
			echo "<tr>";
			echo "<td>Tên sinh viên</td>";
			echo "<td>Sửa</td>";
			echo "<td>Xóa</td>";
			echo "</tr>";
			foreach ($sinhvien as $list ) {
				# code...
				echo "<tr>";
				echo "<td>".$list['name']."</td>";
				echo "<td><a href= ".base_url()."sinhvien/update/".$list['id']." ' >Sửa</a> </td>";
				echo "<td><a href= ".base_url()."sinhvien/delete/".$list['id']." ' >Xóa</a> </td>";
				echo "</tr>";
			}
			echo "</table>" ;
		endif;
	 ?>
</body>
</html>