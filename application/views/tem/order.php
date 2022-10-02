<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sino-Customer</title>
  
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
                <h1 class="m-0" >Order</h1>
              </div><!-- /.col -->
          
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <div class="content">
      
      <div class="btn-add-sino">
        <div class="row col-lg-12">
            <div class="col-lg-1 col-md-1 col-sm-1"><h5 type="text" ></h5></div>
            <div class="col-lg-1 col-md-1 col-sm-1"><h5 type="text" >CustomerID:</h5></div>
            
            <div class="col-lg-3 col-md-3 col-sm-3">

              <div class="input-group col-md-12">
                  <form class="form-inline" id="search_all" method="GET" >
                      <input class="form-control py-2" type="search" value="search" id="example-search-input"  aria-label="Search" name="search_all">
                      <span class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                      </span>
                  </form>
                </div>
              
            </div>


      
            <div class="col-lg-5 col-md-5 col-sm-5">

            


            </div>
            <div class="col-lg-2 col-md-2 col-sm-2">   
             <a type="button" class="btn btn-outline-info" href="<?php echo base_url()?>index.php/Controll_soft/sino_home">ย้อนกลับ</a>
            </div>
      
        </div>
      
      
      </div>
    

          <!-- /.content-header -->
          
        <div class="content product row">
            <div class="order-1 col-lg-5 modal-body">
                <div class="row hearder-heigth">
                  <div class="row col-lg-12">
                      <div class="col-lg-4 ">Name</div>
                      <div class="col-lg-8 ">    
                          <?php echo $customer['Name'];?> 
                      </div>
                  </div>
                  
                  <div class="row col-lg-12">
                      <div class="col-lg-4 ">Surname</div>
                      <div class="col-lg-8 "> <?php echo $customer['Surname'];?> </div>
                  </div>
                     
                  <div class="row col-lg-12">
                      <div class="col-lg-4 ">Status</div>
                      <div class="col-lg-8 ">     
                        <?php
                          if ($customer['Status'] == "1") {
                              echo "Active";
                              } else {
                              echo "Inactive";
                          }
                        ?>
                        </div>
                  </div>
                 
                </div>
            </div>
            
          
       
            <div class="order-1 col-lg-7">
                <div class="row hearder-heigth">
                    <div class="row col-lg-4">
                        <div></div>
                    </div>
                    <div class="row col-lg-4">
                        <div class="col-lg-12 center-text">User ID</div>
                    </div>
                    <div class="row col-lg-4">
                        <div></div>
                    </div>
                </div>
            </div>



        </div>
        <div class="content product row">
            <div class="order-1 col-lg-5">
                <div class="row hearder-all modal-content">
                    <div class="row col-lg-12">
                          <div class="col-lg-12 center-text">รายการสินค้าทั้งหมด</div>
                          <div class="col-lg-12 center-text">ประเภทสินค้า</div>
                          
                          <div class="css-table modal-body">
                            <div class="row body-show-long">
                                <div class="col-lg-2 col-md-2 col-sm-2  hade-show id-show">รหัส</div>
                                <div class="col-lg-6 col-md-6 col-sm-6  hade-show id-show">ชื่อสินค้า</div>
                                <div class="col-lg-2 col-md-2 col-sm-2  hade-show id-show">ราคา</div>
                                <div class="col-lg-2 col-md-2 col-sm-2  hade-show id-show"></div>
                            </div>
                            <?php foreach($productid as $key=>$value):?>
                              <div class="row body-show-long">
                              
                                  <div class="col-lg-2 col-md-2 col-sm-2  hade-show id-show" id="ProductID"><?php echo $value['ProductID'];?></div>
                                  <div class="col-lg-6 col-md-6 col-sm-6  hade-show id-show"><?php echo $value['ProductName'];?></div>
                                  <div class="col-lg-2 col-md-2 col-sm-2  hade-show id-show"><?php echo $value['Price'];?></div>
                                  <div class="col-lg-2 col-md-2 col-sm-2  hade-show id-show">
                                    <input type="checkbox" id="vehicle1" name="vehicle1" href="javascript:void(0)" data-ProductID="<?php echo $value['ProductID'];?>" 
                                     data-ProductName="<?php echo $value['ProductName'];?>"  data-Price="<?php echo $value['Price'];?>"  onclick="main.show_order(this)"> 
                                  </div>
                              </div>
                            <?php endforeach; ?>
                        
                          </div>
                    </div> 
                </div>
                
            </div>

       
            <div class="order-1 col-lg-7">
            <div class="row hearder-add-heard">
  
              <div  id="add_show-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-content col-md-12 col-12">
                    <form>
                      <div class="modal-body hearder-add">
                        <div class="row">
                          <div class="col-lg-1 col-md-1 col-sm-1 hade-show id-show">รหัส</div>
                          <div class="col-lg-3 col-md-3 col-sm-3 hade-show id-show">ชื่อ</div>
                          <div class="col-lg-2 col-md-2 col-sm-2 hade-show id-show">ราคาเต็ม</div>
                          <div class="col-lg-2 col-md-2 col-sm-2 hade-show id-show">จำนวน</div>
                          <div class="col-lg-2 col-md-2 col-sm-2 hade-show id-show">ราคาขาย</div>
                          <div class="col-lg-1 col-md-1 col-sm-1 hade-show id-show">ยอด</div>
                          <div class="col-lg-1 col-md-1 col-sm-1 hade-show id-show"></div>
                        </div>
                      </div>
                    </form>
                  </div>
            
              </div>

              <div  id="add_show" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-content col-md-12 col-12">
                              
                      <div class="modal-body hearder-add2">
                       
                      </div>
                
                  </div>
            
              </div>
            </div>


          
            </div>



        </div>
      </div>
    </div>

      
    

 


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
