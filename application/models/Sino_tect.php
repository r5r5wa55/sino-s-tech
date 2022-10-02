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
	public function add_produst_sino($data){

		  	// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			// exit();
		$st = array('st'=>0);
	
		if(is_array($data) && $data['ProductID']!="" && $data['ProductID']!=""){
		  $data = array(
			'ProductID' => $data['ProductID'],
			'ProductName' => $data['ProductName'],
			'CategoryID' => $data['CategoryID'],
			'Price' => $data['Price'], 

		
		  );
		 
		  
			//   echo "<pre>";
			//   print_r($data);
			//   echo "</pre>";
			//   echo "<pre>";
			//   print_r($data['RESEARCHER_ID']);
			//   echo "</pre>";
			//   exit();
			
		  $data = $this->db->insert('productid', $data);
		  $st = array('st'=>1);
	
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			// echo "<pre>";
			// print_r($st);
			// echo "</pre>";
			// exit();
		}
	  
		return $st;
	}
	public function edit_produst_sion($data){

		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
   
  
	  $st = array('st'=>0);
   
  
  
  
	  $this->db->where('ProductID', $data['ProductID']);
	  $this->db->set('ProductID', $data['ProductID']);
	  $this->db->set('ProductName',  $data['ProductName']);
	  $this->db->set('CategoryID', $data['CategoryID']);
	  $this->db->set('Price', $data['Price']);
	
	  $this->db->update('productid');
	  $st = array('st'=>1);
	  	// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
	  	// echo "<pre>";
		// print_r($st);
		// echo "</pre>";
		// exit(); 
   
  
	
  
	  return $st;
	}
	public function delete_produst($data){
		$st = array('st'=>0);
		if(is_array($data) && $data['ProductID']!=""){
		  $this->db->delete('productid', array('ProductID' => $data['ProductID'])); 
		  $st = array('st'=>1);
		}
		return $st;
	}
	
	public function select_customer(){
		$this->db->select('*');
		$this->db->from('customer');

	
		$customer = $this->db->get();
		$count  = $customer->num_rows();
		

		// echo "<pre>";
		// print_r($customer);
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
		$this->db->from('customer');

		$pages = 0;
		if($page > 1){
		  $pages = (int)($page-1) * 5;
		}
		$this->db->limit(5, $pages);
		$customer = $this->db->get();
		$customer = $customer->result_array();
	

		$DATA = array(
		  'customer'=>$customer,
		  'create_links' => $create_links
		);
		  // echo "<pre>";
			// print_r($st);
			// echo "</pre>";
			// exit();
		return $DATA;
	}
	public function add_customer_sino($data){

		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit();

		$st = array('st'=>0);

		if(is_array($data) && $data['CusID']!="" && $data['CusID']!=""){
			$data = array(
			'CusID' => $data['CusID'],
			'Name' => $data['Name'],
			'Surname' => $data['Surname'],
			'Status' => $data['Status'], 
			

		
			);
		
			
			//   echo "<pre>";
			//   print_r($data);
			//   echo "</pre>";
			//   echo "<pre>";
			//   print_r($data['RESEARCHER_ID']);
			//   echo "</pre>";
			//   exit();
			
			$data = $this->db->insert('customer', $data);
			$st = array('st'=>1);

			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			// echo "<pre>";
			// print_r($st);
			// echo "</pre>";
			// exit();
		}

		return $st;
	}
	public function edit_customer_sion($data){

		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
   
  
	  $st = array('st'=>0);
   
  
  
  
	  $this->db->where('CusID', $data['CusID']);
	  $this->db->set('CusID', $data['CusID']);
	  $this->db->set('Name',  $data['Name']);
	  $this->db->set('Surname', $data['Surname']);
	  $this->db->set('Status', $data['Status']);
	
	
	  $this->db->update('customer');
	  $st = array('st'=>1);
	  	// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
	  	// echo "<pre>";
		// print_r($st);
		// echo "</pre>";
		// exit(); 
   
  
	
  
	  return $st;
	}
	public function delete_customer($data){
		$st = array('st'=>0);
		if(is_array($data) && $data['CusID']!=""){
		  $this->db->delete('customer', array('CusID' => $data['CusID'])); 
		  $st = array('st'=>1);
		}
		return $st;
	}
	
	
	public function select_user(){
		$this->db->select('*');
		$this->db->from('user');

	
		$user = $this->db->get();
		$count  = $user->num_rows();
		

		// echo "<pre>";
		// print_r($customer);
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
		$this->db->from('user');

		$pages = 0;
		if($page > 1){
		  $pages = (int)($page-1) * 5;
		}
		$this->db->limit(5, $pages);
		$user = $this->db->get();
		$user = $user->result_array();
	

		$DATA = array(
		  'user'=>$user,
		  'create_links' => $create_links
		);
		  // echo "<pre>";
			// print_r($st);
			// echo "</pre>";
			// exit();




			// $we = array(
			// 	'*   *****',
			// 	'**   ****',
			// 	'***   ***',
			// 	'****   **',
			// 	'*****   *',
				
			//   );
			//   $we2 = array(
			// 	'*',
			// 	'*',
			// 	'',
			// 	'',
			// 	'',
			// 	'*'
			//   );
		  
			
			//   $DATA = array(
			// 	'we'=>$we,
			// 	'we2'=>$we2
		  
			//   );
			 
		  
		  
			//   echo "<pre>";
			//   print_r($DATA);
			//   echo "</pre>";
			//   exit();
		  

			  

		return $DATA;
	}
	public function add_user($data){

		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit();

		$st = array('st'=>0);

		if(is_array($data) && $data['UserID']!="" && $data['UserID']!=""){
			$data = array(
			
			'UserID' => $data['UserID'],
			'Name' => $data['Name'],
			'Surname' => $data['Surname'],
			'Username' => $data['Username'],
			'Password' => $data['Password'],
			'Status' => $data['Status'], 
			

		
			);
		
			
			//   echo "<pre>";
			//   print_r($data);
			//   echo "</pre>";
			//   echo "<pre>";
			//   print_r($data['RESEARCHER_ID']);
			//   echo "</pre>";
			//   exit();
			
			$data = $this->db->insert('user', $data);
			$st = array('st'=>1);

			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			// echo "<pre>";
			// print_r($st);
			// echo "</pre>";
			// exit();
		}

		return $st;
	}
	public function edit_user($data){

		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
   
  
	  $st = array('st'=>0);
   
  
  
  
	  $this->db->where('UserID', $data['UserID']);
	  $this->db->set('UserID', $data['UserID']);
	  $this->db->set('Name',  $data['Name']);
	  $this->db->set('Surname', $data['Surname']);
	  $this->db->set('Username',  $data['Username']);
	  $this->db->set('Password', $data['Password']);
	  $this->db->set('Status', $data['Status']);

	
	  $this->db->update('user');
	  $st = array('st'=>1);
	  	// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
	  	// echo "<pre>";
		// print_r($st);
		// echo "</pre>";
		// exit(); 
   
  
	
  
	  return $st;
	}
	public function delete_user($data){
		$st = array('st'=>0);
		if(is_array($data) && $data['UserID']!=""){
		  $this->db->delete('user', array('UserID' => $data['UserID'])); 
		  $st = array('st'=>1);
		}
		return $st;
	}


	public function select_order($data_search = ""){
		
	
		
	
	
 	 		



		$this->db->select('*');
		$this->db->from('customer');
		
		if($data_search != ""){
			$this->db->like('customer.CusID', $data_search);
			$this->db->or_like('customer.Name', $data_search);
			$this->db->or_like('customer.Username', $data_search);

		};
	
			// echo "<pre>";
			// print_r($data_search);
			// echo "</pre>";
			// exit();
		$customer = $this->db->get();
		$customer = $customer->row_array();
		$productid = $this->select_produst();
		

		if($customer == ""){
			$this->db->select('*');
			$this->db->from('customer');
			$this->db->order_by("customer.CusID", "asc");  
			$customer = $this->db->get();
			$customer = $customer->row_array();
			
		};
			// echo "<pre>";
			// print_r($customer);
			// echo "</pre>";
			// echo "<pre>";
			// print_r($productid);
			// echo "</pre>";
			// exit();

		  
		$DATA = array(
		  'productid'=>$productid['productid'],
		  'customer'=>$customer
		);

		// echo "<pre>";
		// print_r($DATA);
		// echo "</pre>";
		// exit();
		
		return $DATA;
	}

	
	
}






	

