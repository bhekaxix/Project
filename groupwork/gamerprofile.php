<?php
    include 'connect.php';
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Profile</title>
</head>
<body>
  <a href="signup.php">Sign Up</a><br>
  <a href="login.php">Login</a>
	<h1 class= "text-center">Gamer issues</h1>
   <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">UserName</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
      

    
      
    </tr>
  </thead>
  <tbody>
  	
    <?php
  	//retrieve data from database
  	$sql = "SELECT * FROM issues";
  	$result = mysqli_query($connect,$sql);
  	if ($result) {
      //while loop
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $username= $row['username'];
        $email= $row['email'];
        $password = $row['password'];
        /*echo $row['email'];
        echo $row['password'];
        echo "<br>";*/
        echo"<tr>
      <th scope='row'>$id</th>
      <td>$username</td>
      <td>$email</td>
      <td>$password</td>
      <td><button><a href='delete.php?deleteid=$id'>Delete</a></button></td>
      <td><button><a href='update.php?updateid=$id'>Update</a></button></td>
      
    </tr>";

      }
  		/*
      $row = mysqli_fetch_assoc($result);
       echo $row['email'];
       echo $row['password'];*/
      
    }

  
    




  	?>


    