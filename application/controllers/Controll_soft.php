<?php


class Controll_soft extends CI_Controller {


	public function __construct() {
		parent::__construct();
		$this->load->model('Model_soft','mhome');
		$this->load->helper('url');
		
		
	}  
	public function index(){
		$data = $this->mhome->select_soft();
		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;
		$this->load->view('tem/welcome_message',$data);

	}
	public function add_soft(){
		$data = $this->mhome->add_soft($_POST);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	} 
	public function edit_soft(){
		$data = $this->mhome->edit_soft($_POST);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		echo json_encode($data);
	} 
	public function delete_soft(){
		$data = $this->mhome->delete_soft($_POST);
		echo json_encode($data);
	}
	
	public function test_show(){
		$data = $this->mhome->select_test_show();
		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;
		$this->load->view('tem/test_show',$data);
	}

}
