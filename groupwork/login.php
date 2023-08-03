<?php
include 'connect.php';
if($_SERVER['REQUEST_METHOD'] =='POST') {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM issues WHERE username ='$username' AND email ='$email' AND password = '$password'";
  $result = mysqli_query($connect,$sql);
  if($result) {
    $rownumber = mysqli_num_rows($result);
    if($rownumber > 0 ) {
      //echo "login successful";
      
      //session

      session_start();
      $_SESSION['username'] = $username;
      $_SESSION['email'] = $email;
      $_SESSION['password'] = $password;
      header("location:home2.php");
    }else{
      echo "incorrect input";
    }
  }
 // else {
   // echo "not sucessful";
  //}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="signup.css">
	<script src="signup.js"></script>

	<title>Login</title>
</head>
<body>
<div class="sign-up-form">
		<img src="usericon.png">
		<h1>Login</h1>
		
			
			<div class="SignUp">

    <form method = "post" id="signupForm" onsubmit="return validateForm()">
     <div>
      <input type="username" class ="input-box" name="username" placeholder="Enter your UserName" id="username" required><br>
      <div class="error" id="errorgamename"></div>
      </div>

      <div>
      <input type="email" class ="input-box" name="email" placeholder="Enter your Email" id="email" required><br>
      <div class="error" id="errorEmail"></div>
     </div>
      
      <input type="password" class ="input-box" name="password" placeholder="Enter your Password" id="password" required><br>
      <div class="error" id="errorPassword"></div>

      
    
  </div>
			
			<input type="submit" class ="input-box" name="Login" value="Login">
			<hr>
			<p class="or">OR</p>
			<button type="button" class="appleid-btn"><a href = "userprofile.php">Update or Delete Account</button>
			<p>Don't have an account?<a href="signup.php">Sign Up</a></p>
        
        </form>
</body>
</html>