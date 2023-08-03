<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM issues WHERE id = $id";
$result = mysqli_query($connect,$sql);
    if ($result){
    	$row = mysqli_fetch_assoc($result);
    	 $username = $row['username'];
        $email = $row['email'];
        $password =$row['password'];
} 

    if($_SERVER['REQUEST_METHOD']=='POST'){
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$sql = "UPDATE issues set username = '$username',email ='$email',password='$password' WHERE id=$id"; 
    $result = mysqli_query($connect,$sql);
	if ($result){
	//echo "updated successfully";
	header('location:userprofile.php');
} else {
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
	<title>Update</title>
</head>
<body>
	<div class="sign-up-form">
		<img src="usericon.png">
		<h1>Update</h1>
		
			
			<div class="Update">
	
	<form method = "post" id="signupForm" onsubmit="return validateForm()">
     <div>
      <input type="username" class ="input-box" name="username" placeholder="Enter your UserName" id="username" required><br>
      <div class="error" id="errorusername"></div>
      </div>
      <div>
      <input type="email" class ="input-box" name="email" placeholder="Enter your Email" id="email"  value = "<?php echo $email; ?>" ><br>
      <div class="error" id="errorEmail"></div>
     </div>
      
      <input type="password" class ="input-box" name="password" placeholder="Enter your Password" id="password"  value = "<?php echo $password; ?>"><br>
      <div class="error" id="errorPassword"></div>
      <input type="submit" class ="input-box" name="Update" value="Update">

</form>
</body>
</html>