
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Lola Dolly's Kitchen</title>
	<style type="text/css">
		body{
			color: white;
			background: black;
		}
	</style>

</head>
<body>

<form action="" method="POST">
	<label for="message">Enter message</label>
	<input type="text" name="message" id="message">
	
</form>

</body>

</html>


<?php
$message = $_POST['message'];
require 'connect.php';
$query = $conn->query("SELECT * FROM `costumer` WHERE `ID` = '$_REQUEST[ID]'") or die(mysqli_error());
$fetch = $query->fetch_array();
 
$email = $fetch['email'];
$to = "berncharrieg@gmail.com";
$subject = "Reservation Confirmation";
$txt ="Name = ". $fetch['name'] . "\r\n Email = " . $fetch['email'] . "\r\n message: " . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" . "CC: reseravtion@example.com";

if ($fetch['email']!=NULL) {
	mail($to, $subject, $txt,  $headers);
}

header("Location: email.php");
?>