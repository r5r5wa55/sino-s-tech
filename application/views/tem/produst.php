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
<body class="">
    <div class="wrapper"> 

      <!-- Preloader -->
      

 
      <div class="col-sm-12 hiden-hearder">
              
      </div>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-12">
                <h1 class="m-0" >Product</h1>
              </div><!-- /.col -->
          
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <div class="content">
      
      <div class="btn-add-sino">
        <div class="row col-lg-12">
          <div class="col-lg-1 col-md-1 col-sm-1"></div>
          <button type="button" class="btn btn-outline-info" onclick="$('#add_produst_sion').modal('show');">+Add</button>
          <div class="col-lg-9 col-md-9 col-sm-9"></div>
          <a type="button" class="btn btn-outline-info" href="<?php echo base_url()?>index.php/Controll_soft/sino_home">ย้อนกลับ</a>

        </div>
      
      
      </div>
    

          <!-- /.content-header -->
          
        <div class="content product">
      
          <div class="row hearder">
            <div class="col-lg-1 col-md-1 col-sm-1 hade-show id-show">ProductID</div>
            <div class="col-lg-3 col-md-3 col-sm-3 hade-show id-show">Product Name</div>
            <div class="col-lg-3 col-md-3 col-sm-3 hade-show id-show">Product Category</div>
            <div class="col-lg-2 col-md-2 col-sm-2 hade-show id-show">Price</div>
            <div class="col-lg-3 col-md-3 col-sm-3 hade-show id-show">Action</div>

          </div>
          
          <?php foreach($productid as $key=>$value):?>
            <div class="row body-show-long">
            
                <div class="col-lg-1 col-md-1 col-sm-1  hade-show id-show"><?php echo $value['ProductID'];?></div>
                <div class="col-lg-3 col-md-3 col-sm-3  hade-show id-show"><?php echo $value['ProductName'];?></div>
                <div class="col-lg-3 col-md-3 col-sm-3  hade-show id-show"><?php echo $value['CategoryID'];?></div>
                <div class="col-lg-2 col-md-2 col-sm-2  hade-show id-show"><?php echo $value['Price'];?></div>
                
                <div class="col-lg-3 col-md-3 col-sm-3  hade-show id-show"><!-- get_edit_personnels -->
                  <a href="javascript:void(0)" class="col-lg-6 col-md-6 col-sm-6"   onclick="main.get_edit_produst(
                  '<?php echo $value['ProductID'];?>',
                  '<?php echo $value['ProductName'];?>',
                  '<?php echo $value['CategoryID'];?>',
                  '<?php echo $value['Price'];?>');">
                    Edit
                  </a>
                  <a href="javascript:void(0)" class="btn-delete"  onclick="main.delete_produst('<?php echo $value['ProductID'];?>')">
                    Delete
                  </a>  
                </div>
           
            </div>
          <?php endforeach; ?>
          <?php echo $create_links; ?>
        </div>
      </div>
    </div>

      
    

 

    <div class="modal fade" id="add_produst_sion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <h1 class="modal-title" id="exampleModalLabel">Add Product</h1>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form>
            <div class="modal-body">
              <div class="form-group">
                <div class="row form-group">
                  <label for="text" class="col-md-2"></label>
                  <label for="text" class="col-md-4">ProductID</label>
                  <input type="text" class="form-control col-md-4" name="ProductID" placeholder="P0001">
                  <label for="text" class="col-md-2"></label>
                </div>
                <div class="row form-group">
                  <label for="text" class="col-md-2"></label>
                  <label for="text" class="col-md-4">Product Name</label>
                  <input type="text" class="form-control col-md-4" name="Product_Name" placeholder="iphone 12">
                  <label for="text" class="col-md-2"></label>
                </div>
                <div class="row form-group">
                  <label for="text" class="col-md-2"></label>
                  <label for="text" class="col-md-4">Product Category</label>
                  <input type="text" class="form-control col-md-4" name="Product_Category"  placeholder="Electronic">
                  <label for="text" class="col-md-2"></label>
                </div>
                <div class="row form-group">
                  <label for="text" class="col-md-2"></label>
                  <label for="text" class="col-md-4">Price</label>
                  <input type="email" class="form-control col-md-4" name="Price" placeholder="25900">
                  <label for="text" class="col-md-2"></label>
                </div>
              </div>
         
            </div>
            <div class="modal-footer border-top-0 d-flex justify-content-center">
              <button type="button" class="btn btn-primary" onclick="main.add_produst_sino();">Save</button>
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
     
          </form>
        </div>
      </div>
    </div>

    <div class="modal fade" id="edit_produst_sion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <h1 class="modal-title" id="exampleModalLabel">Add Product</h1>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form>
            <div class="modal-body">
              <div class="form-group">
                <div class="row form-group">
                  <label for="text" class="col-md-2"></label>
                  <label for="text" class="col-md-4">ProductID</label>
                  <input type="text" class="form-control col-md-4" name="ProductID" placeholder="กรุณากรอกข้อมูล">
                  <label for="text" class="col-md-2"></label>
                </div>
                <div class="row form-group">
                  <label for="text" class="col-md-2"></label>
                  <label for="text" class="col-md-4">Product Name</label>
                  <input type="text" class="form-control col-md-4" name="Product_Name" placeholder="กรุณากรอกข้อมูล">
                  <label for="text" class="col-md-2"></label>
                </div>
                <div class="row form-group">
                  <label for="text" class="col-md-2"></label>
                  <label for="text" class="col-md-4">Product Category</label>
                  <input type="text" class="form-control col-md-4" name="Product_Category"  placeholder="กรุณากรอกข้อมูล">
                  <label for="text" class="col-md-2"></label>
                </div>
                <div class="row form-group">
                  <label for="text" class="col-md-2"></label>
                  <label for="text" class="col-md-4">Price</label>
                  <input type="email" class="form-control col-md-4" name="Price" placeholder="กรุณากรอกข้อมูล">
                  <label for="text" class="col-md-2"></label>
                </div>
              </div>
         
            </div>
            <div class="modal-footer border-top-0 d-flex justify-content-center">
              <button type="button" class="btn btn-primary" onclick="main.edit_produst_sion();">Save</button>
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
     
          </form>
        </div>
      </div>
    </div>


  <!-- ./wrapper -->

  <?php $this->load->view('tem/inc_js')?>

  <script>

    $(document).ready(function() {
  
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
