<?php
include 'connect.php';
  if (isset($_GET['deleteid'])){
  	$id = $_GET['deleteid'];
  	$sql = "DELETE FROM issues where id = $id";
  	$result = mysqli_query($connect,$sql);
    if ($result){
    	//echo "deleted successfully";
    	header ('location:userprofile.php');

    }else {
    	echo "not successful";
    }
  }

?>