<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	
	<?php 
    	$this->load->view('tem/inc_css');
  	?>

	////<?php include 'C:\xampp\htdocs\adasoft\application\views\tem\inc_css.php';?>
  

</head>
<body>

			<div id="container">	
			<h1 class="text-header">แบบทดสอบ Ada-Soft</h1>
		</div>
		<div class="container">
			<?php foreach($water_closet as $key=>$value): ?>
				<div class="row body-show-long">
					<div class="col-lg-4 hight"><?php echo $value['w_name_closet'];?></div>
					<div class="col-lg-2 hight"><?php echo $value['price_closet'];?></div>
					<div class="col-lg-1 hight"><?php print_r($value['num_closet']);?></div>
					<div class="col-lg-2 hight">
						<a href="javascript:void(0)" class="box-btn-add" onclick="main.get_edit_soft(
							'<?php echo $value['w_closet_id'];?>',
							'<?php echo $value['w_name_closet'];?>',	
							'<?php echo $value['price_closet'];?>',
							'<?php echo $value['num_closet'];?>');">
							แก้ไขข้อมูล
						</a>
					</div>
					
					<div class="col-lg-2 hight">
						<a href="javascript:void(0)" class="box-btn-add" onclick="main.delete_soft(
							'<?php echo $value['w_closet_id'];?>');">
							ลบข้อมูล
						</a>
				
					</div>
				
				
				</div>
			<?php endforeach;?>
	
			<!-- <?php echo $water_closet[0]['w_name_closet'];?>	 -->
			
		</div>
		<div id="container-add">	
			<a href="javascript:void(0)" class="box-btn-add center" onclick="$('#add_soft').modal('show');">
				เพิ่มข้อมูล
			</a>
		</div>
		
		<div id="container-show">	
			<h1 class="text-header-water">เครื่องดื่มทั้งหมด</h1>
		</div>
		
		<!-- <a href="<?php echo base_url("index.php/Controll_soft/test_show");?>">Some Name</a>  -->
		<a href="<?php echo base_url()?>index.php/Controll_soft/test_show">Some Name</a> 
		<div class="modal fade" id="add_soft" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูลสินค้า</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div> 
				<div class="modal-body">
					<div class="form-group">
						
						<label for="formGroupExampleInput">ชื่อสินค้า</label>
						<input type="text" class="form-control"  name="w_name_closet" placeholder="ชื่อ">

						<label for="formGroupExampleInput">ราคา</label>
						<input type="text" class="form-control"  name="price_closet" placeholder="ราคา">
						
						<label for="formGroupExampleInput">จำนวนทั้งหมด</label>
						<input type="text" class="form-control"  name="num_closet" placeholder="จำนวนทั้งหมด">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary" onclick="main.add_soft();">Save changes</button>
					</div>
				</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="edit_soft" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">เเก้ไขข้อมูลสินค้า</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div> 
				<div class="modal-body">
					<div class="form-group">
						<input type="hidden" class="form-control"  name="w_closet_id">
						<label for="formGroupExampleInput">ชื่อสินค้า</label>
						<input type="text" class="form-control"  name="w_name_closet" placeholder="ชื่อ">

						<label for="formGroupExampleInput">ราคา</label>
						<input type="text" class="form-control"  name="price_closet" placeholder="ราคา">
						
						<label for="formGroupExampleInput">จำนวนทั้งหมด</label>
						<input type="text" class="form-control"  name="num_closet" placeholder="จำนวนทั้งหมด">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary" onclick="main.edit_soft();">Save changes</button>
					</div>
				</div>
				</div>
			</div>
		</div>
	

		
		<?php $this->load->view('tem/inc_js.php')?>

</body>
</html>
