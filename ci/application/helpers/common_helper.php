<?php 
function public_url($url=""){
	return base_url("public/".$url) ;
}
function admin_url($url= '')
{
	return base_url('admin/'.$url);
}
 ?>
