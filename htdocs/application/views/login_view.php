<!DOCTYPE html>
<html>
	<head> 
		<title><?php echo $title ?></title>
<<<<<<< HEAD
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
	
=======
		<link rel="stylesheet" href="http://localhost/style/styles.css" style="text/css"/>
		<script src="http://localhost/script/script.js"></script>
	</head>

	<body class="login"> 
		<div id="login-box">
			<div class="search-box">
				<form class="search-form">
							<input type="text" placeholder="Search" name="query"/>
							<input type="submit" value=""/>
				</form>
			</div>
			
			<div class = "sign-up">
			New to <b>ANIMOOD</b>? Register.
			</div>
			
			<div class = "animood"> </div>
			
			<div id = "login">
				<form action="http://localhost/index.php/sites/main" method="post" class="login-form">
					<p class="input-holder">
						<input type="text" placeholder="Username" name="username"/>
					</p>
					<p class="input-holder">	
						<input type="password" placeholder="Password" name="password"/>
					</p>

					<p class = "button-holder">					
						<input type="submit" value="Log In" name = "loginBtn"/>
					</p>
				</form>

			</div>

				<div id = "register">
				<form action="http://localhost/index.php/sites/main" method="post" class="login-form">
					<p class="input-holder">
						<input type="text" placeholder="First Name" name="firstname"/>
					</p>
					<p class="input-holder">
						<input type="text" placeholder="Last Name" name="lastname"/>
					</p>
					<p class="input-holder">
						<input type="text" placeholder="DLSU E-mail" name="email"/>
					</p>
									
					<p class="input-holder">	
						<input type="text" placeholder="ID Number" name="idnumber"/>
					</p>

					<p class="input-holder">	
						<input type="password" placeholder="Password" name="password2"/>
					</p>
					<p class = "button-holder">						
						<input type="submit" value="Register" name = "registerBtn"/>
					</p>
				</form>

			</div>


		</div>	
		<script> 
				
			</script>

			
	</body>
>>>>>>> 544f9ece8955b97bd363387097b4301cca7a0071
</html>