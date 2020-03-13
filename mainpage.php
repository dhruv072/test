<?php

session_start();

if(!isset($_SESSION['username']))
{
    echo "<script> 
    alert('Logged Out');
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