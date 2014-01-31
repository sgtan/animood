<!DOCTYPE html>
<html>
	<head> 
		<title><?php echo $title ?></title>
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
</html>