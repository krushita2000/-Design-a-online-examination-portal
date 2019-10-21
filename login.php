<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>   
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3 align="center">Login</h3>
			</div>
			<div class="card-body">
				<form method="post" action="index.php">
					<div class="input-group form-group">
						<input type="text" name="username" class="form-control" placeholder="Enter Username" required>
					</div>
					<script type="text/javascript">
						var s = "<?php echo $error ?>";
						if (s!=="") {alert(s);}
						else {}
					</script>
					<div class="input-group form-group">
						<input type="password" name="password" class="form-control" placeholder="Enter Password" required>
					</div>
					<div class="form-group">
						<input type="submit" name="login" value="login" class="btn float-right login_btn">
					</div>
					<a href="register.php"><font align="center" style="color: white">Not a member yet?</font></a>
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
</body>
</html>
