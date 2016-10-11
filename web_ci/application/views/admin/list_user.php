<?php $this->load->view('shared/header', ['title' => 'Page Home']) ?>
<div class="container">
<h1>DANH SACH USERs</h1>
<style type="text/css">
	table{
		width: 500px;
		padding-left: 500px;
	}
</style>
<?php 
	if(isset($user) && $user != null ) :
			echo "<div class='container' >" ;
			echo "<table width='500px' border='1' >  " ;
			echo "<tr>";
			echo "<td>Username</td>";
			echo "<td>Sửa</td>";
			echo "<td>Xóa</td>";
			echo "</tr>";
			foreach ($user as $list ) {
				# code...
				echo "<tr>";
				echo "<td>".$list['username']."</td>";
				echo "<td><a href= ".base_url()."User/update/".$list['id']." ' >Sửa</a> </td>";
				echo "<td><a href= ".base_url()."User/delete/".$list['id']." ' >Xóa</a> </td>";
				echo "</tr>";
			}
			echo "</table>" ;
			echo "</div>" ;
		endif;
?>
</div>
<?php $this->load->view("shared/footer") ?>