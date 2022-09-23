<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sino-Home</title>
  
  <?php 
    $this->load->view('tem/inc_css');
  ?>
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" >ข้อมูลบุคคลากร</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
              <li class="breadcrumb-item active">บุคคลากร</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

      <!-- /.content-header -->
    <div class="content">
  
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show id-show">รหัส</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show id-show">สถานะการทำงาน</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show id-show">ขื่อ</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show id-show">นามสกุล</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show id-show">แก้ไขข้อมูล</div>
        <div class="col-lg-2 col-md-2 col-sm-2 hade-show id-show">ลบข้อมูล</div>
      </div>
      
      <?php foreach($productid as $key=>$value):?><!-- show_personnels -->
        <div class="row row body-show-long">
         
            <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-left"><?php echo $value['ProductID'];?></div>
            <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-left"><?php echo $value['ProductName'];?></div>
            <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-left"><?php echo $value['CategoryID'];?></div>
            <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center"><!-- get_edit_personnels -->
              <a href="javascript:void(0)" class="btn-edit " onclick="main.get_edit_personnels(
              '<?php echo $value['ProductID'];?>',
              '<?php echo $value['ProductName'];?>',
        
                '<?php echo $value['CategoryID'];?>');">
                แก้ไขข้อมูล
              </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 body-show box-btn-center"><!-- delete_personnels -->
              <a href="javascript:void(0)" class="btn-delete"  onclick="main.delete_personnels('<?php echo $value['ProductID'];?>')">
                ลบข้อมูล
              </a>  
            </div>
        </div>
      <?php endforeach; ?>
      <?php echo $create_links; ?>
    </div>
  </div>
</div>

    



<!-- ./wrapper -->

<?php $this->load->view('tem/inc_js')?>

<script>
=
  $(document).ready(function() {
  // $('.id-show').text("").text('we')

  $('.id-show').each(function(index,val){
  
  })
  $('.page-link').each(function(index ,val){
    if($(val).text() == "First"){
      $(val).text("").text("ย้อนกลับ")
    }
    if($(val).text() == "Last"){
      $(val).text("").text("ถัดไป")
    }
  
  })


  
  
  });
</script>

</body>
</html>
