<!DOCTYPE html>
<html>
	<head> 
		<title><?php echo $title ?></title>
		<!-- Latest compiled and minified CSS -->
	        <link rel="stylesheet" href="http://localhost/css/bootstrap.min.css"/>
			
		<link rel="stylesheet" href="http://localhost/style/register.css" style="text/css"/>
		<script src="http://localhost/js/jquery-1.11.0.min.js"></script>
		
	</head>

	<body style="background-color:<?php echo $color[0]->bgcolor; ?>">
		<div class = "container">
			<div class = "col-sm-4"></div>
				<div class=" col-sm-4">
			
				<div id = "register-form-box" class = "jumbotron" style = "margin-top: 100px; background-color: <?php echo $jumboColor; ?>">
						<img id="login-title" src="<?php echo base_url();  ?>image/transtag_smaller.png" alt="" style="width: 100%;"/>
						<h5 style = "color: #FFF;"><br>Congratulations! You are now registered to ANIMOOD!<br></h5>					
						<form id="login-form" method="post" action="<?php echo base_url(); ?>index.php/account/login">
							<div class="form-group">
								<input type="text" class="form-control" id="idnum" placeholder="ID Number" name="idnum" style=""/>
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="password" placeholder="Password" name="password" style=""/>
							</div>
							<input type="submit" id="login-btn" class="btn btn-success" value="Log In"/>	
						</form>
						<div class=" col-sm-4"></div>
					<div class="clearfix"></div>
				</div>
				</div>
			<div class = "col-sm-4"></div>
		</div>		
	</body>
	
</html>