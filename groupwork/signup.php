<?php
include 'connect.php';
if($_SERVER['REQUEST_METHOD'] =='POST') {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "INSERT INTO issues(username,email,password) VALUES ('$username','$email','$password')";
	$result = mysqli_query($connect,$sql);
	if($result){
		//echo "Signup successful";
		header("location:login.php");

	} else{
		echo "not successful";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="signup.css">
	<script src="signup.js"></script>

	<title>Sign Up</title>
</head>
<body>
	<ul class="topList">
		<li><a href="home.php" class="topLinks">Home</a></li>
	</ul>
<div class="sign-up-form">
		<img src="usericon.png">
		<h1>SignUp</h1>
		
			
			<div class="SignUp">

    <form method = "post" id="signupForm" onsubmit="return validateForm()">
    	<div>
      <input type="username" class ="input-box" name="username" placeholder="Enter your UserName" id="username" required><br>
      <div class="error" id="errorusername"></div>
      </div>

     <div>
      <input type="email" class ="input-box" name="email" placeholder="Enter your Email" id="email" required><br>
      <div class="error" id="errorEmail"></div>
     </div>
      
      <input type="password" class ="input-box" name="password" placeholder="Enter your Password" id="password" required><br>
      <div class="error" id="errorPassword"></div>

      
    
  </div>
			<p><span><input type="checkbox"></span>I agree to the terms of services</p>
			<input type="submit" class ="input-box" name="SignUp" value="SignUp">
			<hr>
			<p class="or">OR</p>
			
			<p>Do you have an account?<a href="login.php">Login</a></p>
        
        </form>
</body>
</html>