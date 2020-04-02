<?php include('functions1.php');
//start of first if
           if(isset($_POST['register_btn']))
{
		$username    = $_POST['username'];
		$email       = $_POST['email'];
		$password_1  = $_POST['password_1'];
		$password_2  = $_POST['password_2'];

		
	
			$password = md5($password_1);//encrypt the password before saving in the database

				
				$query = mysqli_query($db,"INSERT INTO users (username, email, user_type, password) 
						  VALUES('$username', '$email', 'user', '$password')");
				
                
				// get id of the created user
				$logged_in_user_id = mysqli_insert_id($db);

				 // put logged in user in session
				$_SESSION['success']  = "You are now logged in";
				if($query==true){
				header('location: index1.php');
}
		
	
}







?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register1.php">

		

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" required>
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" required>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1" required>
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2" required>
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>