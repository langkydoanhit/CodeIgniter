
<div class="container">
<h1>DANH SACH USER</h1>
<?php 
	//var_dump($user);
	if(isset($user) && $user != null ) :
			echo "<table width='500px' border='1' >  " ;
			echo "<tr>";
			echo "<td>Username</td>";
			echo "<td>Sửa</td>";
			echo "<td>Xóa</td>";
			echo "</tr>";
			foreach ($user as $list ) {
				echo "<tr>";
				echo "<td>".$list['username']."</td>";
				echo "<td><a href= ".base_url()."Auth/update/".$list['id']." ' >Sửa</a> </td>";
				echo "<td><a href= ".base_url()."Auth/delete/".$list['id']." ' >Xóa</a> </td>";
				echo "</tr>";
			}
			echo "</table>" ;
		endif;
 ?>
 </div>