<?php



session_start();

$connect = mysqli_connect("localhost","root","","userdata"); # connection to db
// if($connect) 
// {
//  echo " connection established";
// }
// else
// {    
//     echo " ERROR NOT CONNECTED";
// } # just  to check the connection between php and data  base to verify the connectionp;
$n=$_POST['nm'];# name of the user using for the login 
$p=$_POST['userpasswrord']; # PASSWORD user for the login
$a=$_POST['address'];

$check = " select * from user_details where user_name= '$n'&& user_password = '$p'"; # query to chek the record exist or not in the databse
$result = mysqli_query($connect,$check) ; 
$check_rows = mysqli_num_rows($result); # check the no of rows in the database

if ($check_rows == 1) #check the records in the table 
{
    // echo " RECORD IS PRESENT  ";
    
    $_SESSION['username']=$n;
    echo "<script> 
    alert('LOGIN SUCESSFUL');
    location.href='newglowing.html'; 
    </script>";
    //header('location:newglowing.html');
}
else
{
    echo "<script> 
    alert('PLEASE CHECK ID or PASSWORD');
    location.href='login.html'; 
    </script>";
   //header('location:login.html'); 
    
}


?>