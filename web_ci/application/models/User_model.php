<?php 
class User_model extends CI_Model {
	public $table = "user";
	public function __construct() {
	 	parent::__construct();
	}

	/**
	 * Greate user 
	 * @param $username , $password
	 * @return row true if insert database succsess 
	 * return FALSE if not insert success
	 */
	public function create($data) {
		if($this->db->insert($this->table, $data)) {
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

	/**
	 * Get user by id
	 * @param $username , $password
	 * @return row array
	 * returns false if no session username or password is founded
	 */
	public function login($username, $password) {
		if (!$username || !$password) {
			return FALSE;
		}
		$this->db->where(array('username' => $username, 'password' => $password));
		$query = $this->db->get($this->table); 
		if ($query->num_rows() > 0) {
			return $query->row();
		} else {
		    return FALSE;
		}
	}

	/**
	 * your note
	 * @param $id
	 * @return array 
	 */

	public function getlist() {
    	return $this->db->get($this->table)->result_array();
    }

    /**
	 * your note
	 * @param $id
	 * @return delete user by id
	 */
    public function delete($id) {
		$this->load->database();
		$this->db->where("id" ,$id );
		$this->db->delete($this->table);
	}

	/**
	 * Get user by id
	 * @param $user_id
	 * @return row array
	 * returns false if no id is founded
	 */
	public function get_user_by_id($id) {
		
		if (!$id) {
	        return FALSE;
	    }
	    else {
		   	$this->db->where("id" , $id );
		   	return $this->db->get($this->table)->row_array();
		}
	}

	/**
	 *edit user by id
	 *@param $id, $data
	 *@return result update
	 *return false if id not found
	 */ 
	public function edit($id , $data) {
		if (!$id) {
	        return FALSE;
	    } else {
			
			$this->db->where("id" , $id );
			$this->db->update($this->table,$data);
	    }
		
	}

	/**
	 *@return count user
	 */
	public function countAll() {
        return $this->db->count_all($this->table); 
    }
    

}

 ?>