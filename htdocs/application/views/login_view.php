<!DOCTYPE html>
<html>
	<head> 
		<title><?php echo $title ?></title>
		<!-- Latest compiled and minified CSS -->
	        <link rel="stylesheet" href="http://localhost/css/bootstrap.min.css"/>
			
		<link rel="stylesheet" href="http://localhost/style/login_view.css" style="text/css"/>

    		<script src="http://localhost/js/jquery-1.11.0.min.js"></script>
		<script src="http://localhost/script/login_script.js"></script>

	</head>

<body style="background-color:<?php echo $color; ?>">
		<div class = "container">
			<div class = "col-sm-2"></div>
				<div class=" col-sm-8">
				<div class="banner" style="color: <?php echo $fontColor; ?>">
					Today, most of the Lasallians feel
					<h1><?php echo $mood; ?></h1>
				</div>
				<div class = "jumbotron" style = "background-color: <?php echo $jumboColor; ?>">
					<div id="login-search" class="form-group">
						<input type="text" class="form-control search-input" placeholder="Search for something..."/>
						<input type="submit" class="btn btn-info search-btn" value="Search"/>	
					</div>
					<div id="register-form-box" class="form-group">
						<h2>New to <b>ANIMOOD</b>?</h2>						
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
								<input type="text" class="form-control adj-input" id="regidnum" placeholder="ID Number" name="idnum" style=""/>
								<input type="password" class="form-control adj-input" id="regpassword" placeholder="Password" name="password" style=""/>
								<div class="clearfix"></div>								
							</div>
							<input type="submit" id="register-btn" class="btn btn-warning" value="Register"/>	
						</form>
					</div>
					<div id="login-form-box" class="form-group">
						<img id="login-title" src="<?php echo base_url();  ?>image/transtag_smaller.png" alt="" style="width: 100%;"/>		
						<form id="login-form" method="post" action="<?php echo base_url(); ?>index.php/account/log_in">
							<div class="form-group">
								<input type="text" class="form-control" id="idnum" placeholder="ID Number" name="idnum" style=""/>								
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="password" placeholder="Password" name="password" style=""/>
							</div>
							<input type="submit" id="login-btn" class="btn btn-success" value="Log In"/>	
						</form>
					</div>					
					<div class="clearfix"></div>
				</div>
				</div>
			<div class = "col-sm-2"></div>
		</div>		
	</body>
	
</html>