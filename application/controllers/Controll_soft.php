<?php


class Controll_soft extends CI_Controller {


	public function __construct() {
		parent::__construct();
		$this->load->model('Sino_tect','Sinohome');
	
		$this->load->library('session');
		
	}  
	public function index(){
		

		// $a = '123';
		// $b = MD5($a);
		// $c = sha1($b);

		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;
		$this->load->view('tem/test_show');

	}

	public function sino_home(){

		$this->load->view('tem/sino_home');

	}
	public function check_login_user(){
	
		$data = $this->Sinohome->check_login_user($_POST);
		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;
		echo json_encode($data);
	}

	public function produst(){
		// $this->check_login_session();

		// $a = '123';
		// $b = MD5($a);
		// $c = sha1($b);

		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;
	
		$data = $this->Sinohome->select_produst();
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit();

		$this->load->view('tem/produst',$data);

	}
	public function logout(){
		unset($_SESSION['Username']);
		unset($_SESSION['Password']);
		redirect('http://sino-s-tech.com/', 'refresh');
		
	}

	public function add_produst_sino(){
	
		$data = $this->Sinohome->add_produst_sino($_POST);
		echo json_encode($data);
		
	}
	
	public function edit_produst_sion(){
	
		$data = $this->Sinohome->edit_produst_sion($_POST);
		echo json_encode($data);
		
	}

	public function delete_produst(){
	
		$data = $this->Sinohome->delete_produst($_POST);
		echo json_encode($data);
		
	}


	public function customer(){
		// $this->check_login_session();

		// $a = '123';
		// $b = MD5($a);
		// $c = sha1($b);

		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;
	
		$data = $this->Sinohome->select_customer();
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit();

		$this->load->view('tem/customer',$data);

	}
	public function add_customer_sino(){
	
		$data = $this->Sinohome->add_customer_sino($_POST);
		echo json_encode($data);
		
	}
	public function edit_customer_sion(){
	
		$data = $this->Sinohome->edit_customer_sion($_POST);
		echo json_encode($data);
	}
	public function delete_customer(){
	
		$data = $this->Sinohome->delete_customer($_POST);
		echo json_encode($data);
		
	}

	public function user(){
		// $this->check_login_session();

		// $a = '123';
		// $b = MD5($a);
		// $c = sha1($b);

		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;
	
		$data = $this->Sinohome->select_user();
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit();

		$this->load->view('tem/user',$data);

	}
	public function add_user(){
	
		$data = $this->Sinohome->add_user($_POST);
		echo json_encode($data);
		
	}
	public function edit_user(){
	
		$data = $this->Sinohome->edit_user($_POST);
		echo json_encode($data);
	}
	public function delete_user(){
	
		$data = $this->Sinohome->delete_user($_POST);
		echo json_encode($data);
		
	}

	public function order(){
		// $this->check_login_session();

		// $a = '123';
		// $b = MD5($a);
		// $c = sha1($b);

		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;
		$data_search = $this->search_all(); 


		$data = $this->Sinohome->select_order($data_search);

		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit();	

		$this->load->view('tem/order',$data);

	}

	public function search_all(){

		$search_all = "";
	
		if(isset($_GET['search_all']) && $_GET['search_all'] != ""){
			$search_all = $_GET['search_all'];
		};
		
		// echo '<pre>';
		// print_r ($search_all);
		// echo '</pre>';
		// exit;
	
		return $search_all ;
	}
	

	

	


	
}
