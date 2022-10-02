<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        $this->load->view('tem/inc_css');
    ?>
    <link rel="stylesheet" href="<?php echo base_url()?>public/css/home.css">
    <title>Sino_home</title>
</head>
<body>


<div class="overlay-navigation overlay-active overlay-slide-down">
  <nav role="navigation">
    <ul>
        <li class="slide-in-nav-item"><a href="<?php echo base_url()?>index.php/Controll_soft/produst" data-content="ผลิตภัณฑ์">Product</a></li>
        <li class="slide-in-nav-item-delay-1"><a href="<?php echo base_url()?>index.php/Controll_soft/user" data-content="ผู้ใช้งาน">User</a></li>
        <li class="slide-in-nav-item-delay-2"><a href="<?php echo base_url()?>index.php/Controll_soft/customer" data-content="ลูกค้า">Customer</a></li>
        <li class="slide-in-nav-item-delay-3"><a href="<?php echo base_url()?>index.php/Controll_soft/order" data-content="สินค้า">Order</a></li>
        <li class="slide-in-nav-item-delay-4">
            <a href="<?php echo base_url()?>index.php/Controll_soft/logout" data-content="ออกจากระบบ" onclick="return confirm('ยืนยันการออกจากระบบ')" >
                Logout
            </a>
        </li>
    </ul>
  </nav>
</div>
</section>



</body>
</html>