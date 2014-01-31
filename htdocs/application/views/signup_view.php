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
			<h1>ANIMOOD</h1>
				<form action="http://localhost/feedback.php" method="post" class="login-form">
					<p class="input-holder">
						<input type="text" placeholder="username" name="username"/>
					</p>
					<p class="input-holder">	
						<input type="password" placeholder="password" name="password"/>
					</p>

					<p class = "button-holder">	
						<a href="http://localhost/index.php/sites/login">Back</a>
						<input type="submit" value="Sign Up"/>
					</p>
				</form>

				

		</div>	
		<script> 
				
			</script>

			
	</body>
</html>