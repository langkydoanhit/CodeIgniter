<?php 
class User_model extends CI_Model
{
	public function __construct(){
	 	parent::__construct() ;
	}

	public function get_info_db ($email, $password) {
		$query = $this->db->get('user'); 
		$this->db->select('email,password');
		 $bk  = array('email' => $email,
		 	             'password' => $password) ; 
		$this->db->where($bk) ;
		//$query = $this->db->get() ; 
		if ($query->num_rows() > 0) {
			return $query->row();
		} else {
		    return false;
		}
	}
 }

 ?> 
