<?php 
session_start(); 
include "connect.php";

if (isset($_POST['submit'])) {

	$role = 'user';
	$username = $_POST['username'];
	$password = $_POST['password'];
	

	    $sql = "SELECT * FROM login WHERE username='$username'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			echo'<script type="text/javascript"> alert("Error: No dATA") </script>';
			
	        exit();
		}else {

           $sql2 = "INSERT INTO login(username, password, role)VALUES('$username','$password','$role')";
           $result2 = mysqli_query($conn, $sql2);

           if ($result2) {
           	 header("Location: login.php");
	         exit();
           }else {
	           
	           	echo'<script type="text/javascript"> alert("Error: where dayta") </script>';
		        exit();
           }
		}
}else{
	
	echo'<script type="text/javascript"> alert("Error: Data Not Saved") </script>';
	exit();
}
