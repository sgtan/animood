<!DOCTYPE html>
<html>
	<head> 
		<title><?php echo $title ?></title>
		<!-- Latest compiled and minified CSS -->
	        <link rel="stylesheet" href="http://localhost/css/bootstrap.min.css"/>
			
		<link rel="stylesheet" href="http://localhost/style/register_invalid.css" style="text/css"/>
		<script src="http://localhost/js/jquery-1.11.0.min.js"></script>
		<script src="http://localhost/script/loginvalidation.js"></script>
	</head>

	<body style="background-color:<?php echo $color[0]->bgcolor; ?>">
		<div class = "container">
			<div class = "col-sm-4"></div>
				<div class=" col-sm-4">
			
				<div id = "register-form-box" class = "jumbotron" style = "background-color: <?php echo $jumboColor; ?>">
						<img id="login-title" src="<?php echo base_url();  ?>image/transtag_smaller.png" alt="" style="width: 100%;"/>
						<h5 style = "color:red"><br>Account already exists.<br></h5>						
						<form id="register-form" method="post" action="<?php echo base_url(); ?>index.php/account/register">
							<div class="form-group adj-form">
								<input type="text" class="form-control adj-input" id="firstname" placeholder="First Name" name="firstname" style=""/>
								<input type="text" class="form-control adj-input" id="lastname" placeholder="Last Name" name="lastname" style=""/>
								<div class="clearfix"></div>								
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="email" placeholder="DLSU E-mail" name="email" style=""/>
							</div>
							<div class="form-group adj-form">
								<input type="text" class="form-control adj-input" id="regidnum" placeholder="ID Number" name="regidnum" style=""/>
								<input type="password" class="form-control adj-input" id="regpassword" placeholder="Password" name="regpassword" style=""/>
								<div class="clearfix"></div>								
							</div>
							<input type="submit" id="register-btn" class="btn btn-warning" value="Register"/>	
						</form>
					
					<div class="clearfix"></div>
				</div>
				</div>
			<div class = "col-sm-4"></div>
		</div>		
	</body>
	
</html>