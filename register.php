<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>   
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3 align="center">Register</h3>
			</div>
			<div class="card-body">
				<form method="post" action="register.php">
					<div class="input-group form-group">
						<input type="text" name="username" class="form-control" placeholder="Enter Username" required value="<?php echo $username; ?>">
					</div>
					<div class="input-group form-group">
						<input type="email" name="email" class="form-control" placeholder="Enter Email" required value="<?php echo $email; ?>">
					</div>
					<div class="input-group form-group">
						<input type="password" name="password" class="form-control" placeholder="Password" id="password" required>
					</div>
					<div class="input-group form-group">
						<input type="password" name="cnfpassword" class="form-control" placeholder="Confirm Password" id="cnfpassword" required >
					</div>
					<div class="form-group">
						<input type="submit" name="register" class="btn float-right login_btn" >
					</div>
					<a href="index.php"><font align="center" style="color: white">Already a member?</font></a>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
				</div>
				<div class="d-flex justify-content-center">
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	var password=document.getElementById('password');
	var cnfpassword=document.getElementById('cnfpassword');

	function validate() {
		if (password.value!=cnfpassword.value) {
			cnfpassword.setCustomValidity("Passwords don't Match!");
		}
		else{
			cnfpassword.setCustomValidity("");

		}
	}
	password.onchange=validate;
	cnfpassword.onkeyup=validate;
	
</script></body>
</html>
