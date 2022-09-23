	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sino_tect extends CI_Model {


	public function login(){

		$this->db->select('w_closet_id,w_name_closet,price_closet,num_closet');
		$water_closet = $this->db->get('water_closet');


		// $this->db->select('w_closet_id,w_name_closet,price_closet,num_closet');
		// $this->db->from('water_closet');
		
		// $water_closet = $this->db->get();
		$water_closet = $water_closet->result_array();

		$DATA = array(
		  'water_closet'=>$water_closet
		);

		// echo '<pre>';
		// print_r($water_closet);
		// echo '</pre>';
		// exit;
	
		return $DATA;
		
		
	}
	
	public function check_login_user($data){


    
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit;
	   
	
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('Username', $data['Username']);
		$this->db->where('Password', $data['Password']);
	
	
		$check_login_user = $this->db->get();
		$check_login_user = $check_login_user->row_array();
	
		// echo "<pre>";
		// print_r($check_login_user);
		// echo "</pre>";
		// exit();
	
	
	
	
		
		$Username_check = isset($check_login_user['Username'])?$check_login_user['Username']:"";
		$Password_check = isset($check_login_user['Password'])?$check_login_user['Password']:"";

	
	
	
		// echo "<pre>";
		// print_r($check_login['level']);
		// echo "</pre>";
		// exit();
	
	
		$_SESSION['Username'] = $Username_check;
		$_SESSION['Password'] = $Password_check;

	
	   
	   
		// echo "<pre>";
		// print_r($_SESSION['Username']);
		// echo "</pre>";
		// echo "<pre>";
		// print_r($_SESSION['Password']);
		// echo "</pre>";
		// exit();
	
		$sino = array(
		  'sino'=>0,
		  'msg'=>'ไม่มี user ในระบบ หรือ กรอกรหัสผ่านผิด กรุณาตรวจสอบ'
		); 
	
		if($Username_check != "" && $Password_check != ""){
		  $sino = array(
			'sino'=>1,
			'msg'=>'login สำเร็จ'
		  );
		}
		return $sino;
	}

	public function paginate_custom($totalpage,$curentpage,$rount){
		$First_page = $rount;
		$Last_page =$rount;
		$html_page = "";
		if($totalpage == 0){
		  $totalpage = 1;
		}
		$url = $rount;
		$pag = 0;
		$search = isset($_GET['search_all'])?$_GET['search_all']:"";
		$search_url = "";
		if($search != ""){
		  $search_url = '&search_all='.$search;
		}
		if($totalpage>0){
		  for ($i=0; $i <$totalpage ; $i++) { 
			
			$active = '';
			if(($i+1)==$curentpage){
			  $active = 'active-1';
			}
			$html_page .= '
			  <li class="page-item" data-page="'.($i+1).'"><a class="page-link '.$active.'" href="'.$url.'?page='.($i+1).$search_url.'">'.($i+1).'</a></li>
			';
			$pag++;
		  }
		}
		
		$html_paginate = '
		  <nav aria-label="Page navigation example" class="page-custom" data-curentpage="'.$curentpage.'">
			<ul class="pagination justify-content-center">
			  <li class="page-item ">
				<a class="page-link" href="'.$First_page.'" tabindex="-1">First</a>
			  </li>
			  '.$html_page.'
			  <li class="page-item">
				<a class="page-link" href="'.$url.'?page='.($pag).$search_url.'">Last</a>
			  </li>
			</ul>
		  </nav>
		';
		
		return $html_paginate;
	}

	public function select_produst(){
		$this->db->select('*');
		$this->db->from('productid');

	
		$productid = $this->db->get();
		$count  = $productid->num_rows();
		

		// echo "<pre>";
		// print_r($productid);
		// echo "</pre>";
		// exit();
	
		$rount =$_SERVER['PHP_SELF'];
		$page = 1;
		if(isset($_GET['page']) && $_GET['page'] !=""){
		  $page = $_GET['page'];
		}
		$totalpage = CEIL($count/5);
	  
		// echo "<pre>";
		// print_r($totalpage);
		// echo "</pre>";
		// exit();
	
		$create_links = $this->paginate_custom($totalpage,$count,$rount);
	  
		// echo "<pre>";
		// print_r($create_links);
		// echo "</pre>";
		// exit();
		$this->db->select('*');
		$this->db->from('productid');

		$pages = 0;
		if($page > 1){
		  $pages = (int)($page-1) * 5;
		}
		$this->db->limit(5, $pages);
		$productid = $this->db->get();
		$productid = $productid->result_array();
	

		$DATA = array(
		  'productid'=>$productid,
		  'create_links' => $create_links
		);
		  // echo "<pre>";
			// print_r($st);
			// echo "</pre>";
			// exit();
		return $DATA;
	}
	
}





	

