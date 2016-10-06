<?php 
class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		 // load helper to user : form_error 
		$this->load->helper('url');
		$this->load->helper('html');
		//$this->load->library('database');
		$this->load->database();
		
		$this->load->model('User_model');
	}
	public function login(){
		//Neu nguoi dung submit.
		if ($this->input->post()) {
			$this->form_validation->set_rules('email', 'Email', 
				'required');
			$this->form_validation->set_rules('pass', 'Password', 'required');
			if ($this->form_validation->run() == FALSE) 
			{
			}
			else{

				$email    = $this->input->post('email') ;
		    	$password = $this->input->post('pass') ;
		    	$password = md5($password);
		    	$results   = $this->User_model->get_info_db($email, $password ) ;
		    	if($results) {
		    		echo 'dang nhap thanh cong';
		    		 $sessiondata = array(
	                              'email'    => $email,
	                              'password' => $password
	                         );
	            	$this->session->set_userdata($sessiondata);
	            	echo "<script> alert('successful logined ') </script>" ;
	           		redirect(admin_url('demo'));
	            	//edirect('succes')
	            } else {
	            	echo "<script> alert(' error login form , please try again ') </script>" ;
		    		redirect(admin_url('login'));
	            }
			}
			
		}
		$this->load->view("login");
	}
			

}


 ?>