<?php
ob_start(); // help in dispaly dont know how it wrks
session_start();

if(!isset($_SESSION['username']))
{
    echo "<script> 
    alert('End');
    location.href='login.html'; 
    </script>";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2> Welcome <?php  echo $_SESSION['username'];  ?> </h2>
<br>
<a href="logout.php">Logout</a>

</body>
</html>