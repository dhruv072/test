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

$n= mysqli_real_escape_string($connect,$n);# to prevent from sql injection secured form
$p= mysqli_real_escape_string($connect,$p);# to prevent from sql injection secured form
$a= mysqli_real_escape_string($connect,$a);# to prevent from sql injection secured form


 $p = password_hash($p,PASSWORD_BCRYPT);



$check = " select * from user_details where user_name= '$n'&& user_password = '$p' && user_address = '$a' "; # query to chek the record exist or not in the databse
$result = mysqli_query($connect,$check) ; 
$check_rows = mysqli_num_rows($result); # check the no of rows in the database

if ($check_rows == 1) #check the records in the table 
{
    // echo " RECORD IS PRESENT  ";
    
    echo "<script> 
            alert('ALREDY REGISTERD PLEASE LOGIN');
            location.href='login.html'; 
            </script>";
      //header('location:login.html');

 


}
else
{

    $insert = " insert into user_details(user_name , user_password , user_address) values ('$n' , '$p' , '$a')";
     mysqli_query($connect,$insert); #  
  
     //echo "Your ID ".$connect-> insert_id;# to show Last inserted ID
     

    echo "<script> 
            alert('REGISTERD');
            location.href='login.html'; 
         </script>"; #https://stackoverflow.com/questions/36967678/javascript-alert-box-not-showing-on-php-after-header-redirect/36967807
    // header('location:login.html');
    
}


?>