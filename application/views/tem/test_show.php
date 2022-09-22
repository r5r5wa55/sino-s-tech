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


  

</head>
<body>

		<div id="container">	
			<h1 class="text-header">ลิ้งหน้า2</h1>
		</div>



		<?php foreach($show as $show){ ?>
			<td><?php echo $show['closet_id'];?></td>
		
0		<?php } ?>

		
		<?php $this->load->view('tem/inc_js.php')?>

</body>
</html>
