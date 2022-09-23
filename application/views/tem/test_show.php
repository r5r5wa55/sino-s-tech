<html>
	<head>
	<meta charset="utf-8">
	<title>Sino-s-tech</title>
	
	<?php 
    	$this->load->view('tem/inc_css');
  	?>
	
	</head>
	<title></title>
	<body class="bg-color">

	
		<div id="login">
			<!-- <h3 class="text-center text-white pt-5">Login to Website</h3> -->
			<br></br>
			<br></br>
			<br></br>
			<div class="container">
				<div id="login-row" class="row justify-content-center align-items-center">
					<div id="login-column" class="col-md-6">
						<div id="login-box" class="col-md-12">
							<form id="login-form" class="form" action="" method="post">
								<h3 class="text-center text-info">Login to Website</h3>
								<div class="form-group">
									<label for="username" class="text-info">Username:</label><br>
									<input type="text" name="ADMIN_USER" id="ADMIN_USER" class="form-control">
								</div>
								<div class="form-group">
									<label for="password" class="text-info">Password:</label><br>
									<input type="text" name="ADMIN_PASS" id="ADMIN_PASS" class="form-control">
								</div>
								<div class="form-group">
									<label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
									<button type="button" class="btn btn-block btn-info  btn-lg"  onclick="main.check_login_user()">เข้าสู่ระบบ</button>
								</div>
								<div id="register-link" class="text-right">
							
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>






	</body>
			
	<?php $this->load->view('tem/inc_js.php')?>
</html>