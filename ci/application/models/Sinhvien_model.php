<?php
class Sinhvien_model extends CI_Model
{
	
	// định nghĩ table cần làm việc
	protected $table = "tbl_usrs" ;
	// viet ham lay ra danh sach sinh vien
	public function listSV(){
		$this->load->database() ;
	    // trả về bảng danh sách sinh viên
		return $this->db->get($this->table)->result_array();
	}
	
	// viết hàm insert vào database
	public function insert($data) {
		$this->load->database() ;
		$this->db->insert($this->table,$data) ;
	}
	public function delete($id) {
		$this->load->database() ;
		$this->db->where("id" ,$id ) ;
		$this->db->delete($this->table) ;
	}
}

 ?>