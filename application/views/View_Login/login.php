<?php
//echo base_url();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Slim Developer - Assignment</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<META NAME="robots" CONTENT="noindex,nofollow">
<!--===============================================================================================-->	
	<link rel="icon" type="image/ico" href="<?php echo base_url();?>application/views/assets/images/favicon.ico">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."application/views/Login/";?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."application/views/Login/";?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."application/views/Login/";?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."application/views/Login/";?>vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."application/views/Login/";?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."application/views/Login/";?>vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."application/views/Login/";?>vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."application/views/Login/";?>vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."application/views/Login/";?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."application/views/Login/";?>css/main.css">
<!--===============================================================================================-->
<style type="text/css">

	.menubtn:hover {
		border-radius: 8px;
		border: 4px #BADAFB solid;
	}

	.menubtn {
		border-radius: 8px;
		border: 4px transparent solid;
	}



	.text-left {
		text-align: left;
	}

	.footer-wave {
		width: 100%;
		height: 100%;
	}

	.footer-body {
		width: 100%;
		background-color: #E5BB01;
	}

	.list-group {
		border: none;
	}
	.txt1 {
		color: black;
	}
	.txt3 {
		color: black;	
	}

	.list-group li {
		background-color: #E5BB01 !important;
		border: none;
		padding: 5px;
	}

	a {
		color: #383869;
	}

	.footer {
		position: absolute;
		bottom: 0;
		left: 0;
		width: 100%;
		background-color: #f5f5f5;
	}

	#wrapper {
		min-height: 100%;
		position: relative;
	}

	#content {
		padding: 10px;
		padding-bottom: 80px;
	}



	.font-red {
		color: #FF0000;
	}
	.ready-sublbl {
		text-align: center !important;
		font-family: arial;
		font-size: 17px !important;
	}
	.input100 {
		border: 1px black solid;
		height: 40px;
	}
</style>
</head>
<body>
	<div id="header">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-md bg-light navbar-light">
				<div class="col-sm col-sm-12">
					<div class="row">
						<div class="col-sm-9 col-md-10">
			        	</div>
			        	<div class="col-sm-3 col-md-2">
			        		<a href="<?php echo base_url('login');?>" class="nav-item nav-link" id="login"><button type="button" class="btn btn-lg btn-light">Log in</button></a>
			        	</div>
					</div>
				</div>
			</nav>
			<br>
		</div>
	</div>
	<div class="limiter" >
		<div class="container-login100" style="padding: 0; margin: 0; background-color: white;">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">

				    	 <?php if(isset($error)){ ?>
				    	 	<div class="alert alert-danger">
									<button class="close" data-dismiss="alert">×</button>
									<strong>Error!</strong> <?php echo $error;?>
								</div>
				    	 <?php } ?> 
						<form action="<?php echo base_url()."login";?>" method="post" class="login100-form validate-form flex-sb flex-w" >
							<span class="login100-form-title p-b-32">
								<div class="ready-lbl">Account Login</div>
							</span>


							<span class="txt1 p-b-11" >
								Username
							</span>
							<div class="wrap-input100 validate-input m-b-36" data-validate = "Username required">
								<input class="input100" type="text" name="txtusername" value="<?php echo $username;?>">
								<span class="focus-input100"></span>
							</div>
							
							<span class="txt1 p-b-11">
								Password
							</span>
							<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
								<span class="btn-show-pass">
									<i class="fa fa-eye"></i>
								</span>
								<input class="input100" type="password" name="pass">
								<span class="focus-input100"></span>
							</div>

							<div class="flex-sb-m w-full p-b-20" style=""	>
								<button class="login100-form-btn" style="width: 100%;">
										Login
									</button>
							</div>
						</form>
					</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url()."application/views/Login/";?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()."application/views/Login/";?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()."application/views/Login/";?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url()."application/views/Login/";?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()."application/views/Login/";?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()."application/views/Login/";?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url()."application/views/Login/";?>vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()."application/views/Login/";?>vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()."application/views/Login/";?>js/main.js"></script>

</body>
</html>