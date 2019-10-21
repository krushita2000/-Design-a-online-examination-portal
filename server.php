<?php 
	session_start();
	$username="";
	$email="";
	$error = "";
	$db = mysqli_connect('localhost','root','','registration');

	if(isset($_POST['register']))
	{
		$username=mysqli_real_escape_string($db, $_POST['username']);
		$email=mysqli_real_escape_string($db, $_POST['email']);
		$password=mysqli_real_escape_string($db, $_POST['password']);
		$cnfpassword=mysqli_real_escape_string($db, $_POST['cnfpassword']);	

		if (true) {
		  		$password=md5($password); //encryption
		  		$sql="INSERT INTO users(username, email, password) VALUES ('$username', '$email', '$password')";
		  		mysqli_query($db, $sql);
		  		$_SESSION['username'] = $username;
		  		$_SESSION['success'] = "You are logged in";
		  		header('location: index.php');
  				}

	}
	//login
	if (isset($_POST['login'])) {
		$username=mysqli_real_escape_string($db, $_POST['username']);
		$password=mysqli_real_escape_string($db, $_POST['password']);
		$password=md5($password);
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$result = mysqli_query($db, $query);
		if (mysqli_num_rows($result)==1) {
			$_SESSION['username']=$username;
			$_SESSION['success']="You are logged in";
			header('location: website.php');
		} 
		else{
			$error="Username and password combination is wrong";

		}
	}



	//logout
	if(isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: index.php');
		exit();

	}
 ?>
