	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_soft extends CI_Model {

	public function select_soft(){

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
	public function add_soft($data){

	  	//   echo '<pre>';
		//   print_r ($data);
		//   echo '</pre>';
		//   exit;
		$st = array('st'=>0);
		if(is_array($data) && $data['w_name_closet']!=""){
		
		  $data = array(
			'w_name_closet' => $data['w_name_closet'],
			'price_closet' => $data['price_closet'],
			'num_closet' => $data['num_closet'],
		  ) ;
		
		  $data = $this->db->insert('water_closet', $data);
		  $st = array('st'=>1);
		}
		return $st;
		
		
	}
	public function edit_soft($data){
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit(); 
		$st = array('st'=>0);
		if(is_array($data) && $data['w_closet_id']!=""){
		  $this->db->where('w_closet_id', $data['w_closet_id']);
		  $this->db->set('w_name_closet', $data['w_name_closet']);
		  $this->db->set('price_closet', $data['price_closet']);
		  $this->db->set('num_closet', $data['num_closet']);
		  $this->db->update('water_closet');
		  $st = array('st'=>1);
		}
	  
	
		return $st;
	}
	public function delete_soft($data){
		$st = array('st'=>0);
		if(is_array($data) && $data['w_closet_id']!=""){
		  $this->db->delete('water_closet', array('w_closet_id' => $data['w_closet_id'])); 
		  $st = array('st'=>1);
		}
		return $st;
	}


	public function select_test_show(){
		// $this->db->select('closet_id,color_closet,name_1');

		// $test_show = $this->db->get('closet');

		// $test_show = $test_show->result_array();

		// $DATA = array(
		// 	'show'=>$test_show	
		// );

		// return $DATA;
		$this->db->select('*');
		$this->db->from('closet');
	
		$show = $this->db->get();
		$show = $show->result_array();
	
	
			$DATA = array(
				'show'=>$show
			);
			
		// echo '<pre>';
		// print_r($DATA);
		// echo '</pre>';
		// exit;
			return $DATA;
		}
	
}


	

