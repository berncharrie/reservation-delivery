<?php 
session_start(); 
include "connect.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
        
        $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
              if ($row['username'] === $username && $row['password'] === $password && $row['role'] == 'user' ) {
                $_SESSION['role'] = $row['role'];
                $_SESSION['username'] = $row['username'];
                header("Location: home.php");
                exit();
            }else if ($row['username'] === $username && $row['password'] === $password && $row['role'] == 'admin' ) {
                $_SESSION['role'] = $row['role'];
                $_SESSION['username'] = $row['username'];
                header("Location: confirmation.php");
                exit();
            }else{
                header("Location: login.php");
                exit();
            }
            
        }else{
        
            echo'<script type="text/javascript"> alert("Error: No data saved") </script>';
            exit();
             }
}else{
     echo'<script type="text/javascript"> alert("Error: where data saved") </script>';
    exit();
}