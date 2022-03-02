
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

<h1>Lola Dolly's kitchen Admin</h1>

<p></p>
<h2>Please confirm delivery</h2>
<div class="home-container">

        <div class="box" >

           <div>
               

          <table>   
      <tr>
        <th>Order ID</th>
        <th>Name</th>
        <th>Schedule</th>
        <th>Time</th>
        
      </tr>
      <tbody>
          <?php
            require 'connect.php';
            $query = $conn->query("SELECT *  FROM `costumer`;") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
          ?>
            <tr>
              <td><?php echo $fetch['ID']?></td>
              <td><?php echo $fetch['name']?></td>
              <td><?php echo $fetch['schedule']?></td>
              <td><?php echo $fetch['time']?></td>
              
              <td><center><a href = "confirm.php?ID=<?php echo $fetch['ID']?>"><i></i>Confirm</a></center></td> 
  </tr>
           <?php
            }
          ?>  
          </tbody>
    </table>

           </div>

            
        

        </div>
    </div>


</body>

</html>