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

	
}
