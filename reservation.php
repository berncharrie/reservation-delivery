<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reservation Page</title>
	<style type="text/css">
		body{
			color: white;
			background: black;
		}
	</style>

</head>

<body>
   <h2>Reservation</h2>
   <form action="" method="POST">
   <h3>Schedule (Monday-Sat, 10am- 9pm)</h3>
   <p>1 hour Policy</p>

    Enter Name:<br><input type="text" name="name" required/> <br/>
    Enter Email:<br> <input type="text" name="email" required> <br/>

  
   <label >Business Days</label> 
   <br>
   <select name="schedule">
   	<option value="" selected>--SELECT--</option>
   	<option value="Monday">Monday</option>
   	<option value="Teusday">Teusday</option>
   	<option value="Wednesday">Wednesday</option>
   	<option value="Thursday">Thursday</option>
   	<option value="Friday">Friday</option>
   	<option value="Saturday">Saturday</option>

   </select><br>
   
   <label >Available Time</label><br>
   <select name="time">
   <option value="" selected>--SELECT--</option>
   	<option value="10am">10am</option>
   	<option value="11am">11am</option>
   	<option value="12pm">12pm</option>
   	<option value="1pm">1pm</option>
   	<option value="2pm">2pm</option>
   	<option value="3pm">3pm</option>
   	<option value="4pm">4pm</option>
   	<option value="5pm">5pm</option>
   	<option value="6pm">6pm</option>
   	<option value="7pm">7pm</option>
   	<option value="8pm">8pm</option>
   	<option value="">Closing Time</option>
 
   </select><br>

  


   
   	 <input type="submit" class="txt" name="insert" value="INSERT DATA">
   	 <a href="index.php"><p>Go Back....</p>        

</body>
</html>

<?php 
require 'connect.php';
 
if(isset($_POST['insert']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$schedule=$_POST['schedule'];
	$time=$_POST['time'];


	$query= "INSERT INTO costumer(name, email, schedule, time)VALUES('$name','$email','$schedule','$time')";
	$query_run = mysqli_query($connection, $query);


	if($query_run)
		{
		
			echo '<script type="text/javascript"> alert("Data Saved") </script>';
		
		}
		else
		{
			echo '<script type="text/javascript"> alert("Error: Data Not Saved") </script>';
			
		}
}


 ?>