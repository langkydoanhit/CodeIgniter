<?php 
class User extends CI_Controller {
	public function __construct(){
		parent::__construct() ;
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model("user_model") ;
	}

	public function index() {}

	public function register() {
		if($this->input->post()) {
	    	$this->form_validation->set_rules(
		        'username', 'Username',
		        'required|is_unique[user.username]',
		        array(
		                'required'      => 'You have not provided %s.',
		                'is_unique'     => 'This %s already exists.'
		        ));
	    	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	    	$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
	    	// run if true
	       	if($this->form_validation->run()) {
	    	$data = array(
	    		'username'     => $this->input->post('username'),
	    		'email'        => $this->input->post('email'),
	    		'password'     => $this->input->post('password'),	
               );

	    		if($this->user_model->create($data))
          		{
                    $this->session->set_flashdata('flash_message', 'Dang ky thanh vien thanh cong');
                	redirect(base_url("User/login"));
           		} else {
            		redirect(base_url("User/register"));
            	}
	    	
	    	}
	   }
		$this->load->view("auth/register");
	}

	/**
	 * login
	 */
	public function login() {
		
		$username_session = $this->session->userdata('username')  ;
		if (isset($username_session)) {
			redirect("Auth/home");

		} else  { 
	    	if ($this->input->post("btn_login")) {
		    	$this->form_validation->set_rules('username', 'Username', 
		                        'required');
		     	$this->form_validation->set_rules('password', 'Password',
		        'required|min_length[6]');

		    	if ($this->form_validation->run()) {
			        $username = $this->input->post('username');
			        $password = $this->input->post('password');
			        $results  = $this->user_model->login($username, $password);

		            if(!$results) {
		            	// create session username
		                $this->session->set_userdata('username', $results->username);
		                // redirect home if have $result 
		                redirect (base_url('User/home'));
		            }
		        }
	    	}
	    }
    	$this->load->view("auth/login"); 	
	}
	// home
	public function home() {
		$this->load->view("auth/home");
	}
	
	// logout
	public function logout() {
		$this->session->sess_destroy();
        redirect(base_url('User/login'));
	}

	public function list_user() {
			$data["user"] = $this->user_model->getlist();
			$this->load->view("admin/list_user" ,$data); 
	}

	// delete user
	public function delete() {
			// controller = 1 ; action = 3 và vitri = 3 
			$id = $this->uri->segment(3); 
			$this->user_model->delete($id) ;
			redirect(base_url("User/list_user")); // duong dan ve trang
 	}

	// edit user redirect list_user if true
 	public function update() {
 		$id = $this->uri->segment(3);
 		$id = (int)$id ;
 			    
 		$data['user'] = $this->user_model->get_user_by_id($id);
 		
 		if($this->input->post()) {
 			// create rule
	    	$this->form_validation->set_rules(
		        'username', 'Username',
		        'required|is_unique[user.username]',
		        array(
		                'required'      => 'You have not provided %s.',
		                'is_unique'     => 'This %s already exists.'
		        ));
	    	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	    	$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
	    	// if validat true
	       if($this->form_validation->run()) {
	    		$data_update = array(
		    		'username' => $this->input->post('username'),
		    		'email' => $this->input->post('email'),
		    		'password' => $this->input->post('password'),	
	               );
	    		//var_dump($data_update); die();
	    		$this->user_model->edit($id, $data_update);
	    		$this->session->set_flashdata('flash_message', 'Dang ky thanh vien thanh cong');
	    			// redirect list_user
                	redirect(base_url("User/list_user"));
           	} else {
           			// redirect update if validad not true 
            		redirect(base_url("User/update"));
            	}
	    }
	    $this->load->view("admin/update",$data);
 	}
}