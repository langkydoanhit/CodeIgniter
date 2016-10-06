<?php 
class Sinhvien extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form'); // load helper để sd các hàm : form_error 
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->database();
		$this->load->library('form_validation');
		// load model
		$this->load->model("Sinhvien_model") ;
		$this->load->view("Sinhvien/update"); 
	}
	public function index(){
		
		// tao ra bien data= sinhvien
		$data["sinhvien"] = $this->Sinhvien_model->listSV() ;
		$this->load->view("sinhvien/list" ,$data) ; // truyen data vao 
 	}
	public function insert(){
		
		
		// lấy dữ liệu của các thẻ input trong form 
		if($this->input->post("ok")) // kiểm tra xem người dùng đã nhấn submit form chưa . th này người dùng đã nhấn
		{
			// tiến hành validate các thẻ input 
			// name khong duoc de trong
			$this->form_validation->set_rules("txtname" ,"Tên Sinh Viên" ,"required" );
			 // email không được để trống và phải viết đúng định dạng 
			$this->form_validation->set_rules("txtemail" ,"Email" ,"required" );
			//địa chỉ ko đc để trống
			$this->form_validation->set_rules("txtaddress" ,"Địa chỉ " ,"required" );
			// sdt không được để trống và phải là số 
			$this->form_validation->set_rules("txtphone" ,"Số điện thoại " ,"required|numeric|max_length[11]" );
			// sửa lại câu validate cho thân thiện
			$this->form_validation->set_message("required" , "%s  không được để trống ! Thử lại nhé  ");
			//$this->form_validation->set_message("valid_email" , "%s Không đúng định dạng ! Thử lại nhé ");
			$this->form_validation->set_message("numeric" , "%s Phải là số ! Thử lại nhé  ");
			$this->form_validation->set_message("max_length" , "%s Không được lớn hơn %d kí tự ! Thử lại nhé  ");
			
			$this->form_validation->set_error_delimiters("<span class = 'error'> ","</span>");
			 
			
			
			if($this->form_validation->run())
			{
				/* khi thông tin đăng kí hợp lệ thì lấy ra data*/
				$data = array(
					"name"    => $this->input->post("txtname"),
                    "email"   => $this->input->post("txtemail"),
                    "address" => $this->input->post("txtaddress"),
                    "phone"   => $this->input->post("txtphone")	
                    );
				
				// echo "<pre>";
				// print_r($data);
				// echo "</pre>";
				// khi dữ liệu đăng ký tất cả đều hợp lệ và gọi đến model để import vào csdl

				//$this->load->model("Sinhvien_model") ; // gọi model 
				$this->Sinhvien_model->insert($data); 
				//sau đó đẩy về trang danh sách sinh viên 
				/*redirect về 1 trang*/
				redirect(base_url("Sinhvien/index")) ; // duong dan ve trang 
			} ;
		}
	}
	public function update(){
		
		// $id = $this->uri->segment(3);
		// $data['sinhvien'] =$this->Sinhvien_model->getSV($id) ;
		// $this->load->view("sinhvien/update" , $data) ;
 	}
	public function delete(){
		// truyền vào 3 vì tính từ controller = 1 ; action = 3 và vitri = 3 
		$id = $this->uri->segment(3);
		//$this->load->model("Sinhvien_model") ; 
		$this->Sinhvien_model->delete($id) ;
		redirect(base_url("Sinhvien/index")) ; // duong dan ve trang
 	}
}

 ?>