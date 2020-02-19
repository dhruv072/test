<?php

header('location:login.html');

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


// 'if(isset($_POST['login']))
// {
//     $n=$_POST['nm'];# 
//     // $i=$_POST['userid'];
//     $p=$_POST['userpasswrord'];
//     $a=$_POST['address'];
      
//     $query = "INSERT INTO `user_new`( `user_name`, `user_address`, `user_password`) VALUES ('$n','$a','$p')";
//     $run = mysqli_query($connect,$query);

//     if($run)
//     {
        
//     }'
// }


$n=$_POST['nm'];# name of the user using for the login 
$p=$_POST['userpasswrord']; # PASSWORD user for the login
$a=$_POST['address'];

$check = " select * from user_details where user_name= '$n'&& user_password = '$p' && user_address = '$a' "; # query to chek the record exist or not in the databse
$result = mysqli_query($connect,$check) ; 
$check_rows = mysqli_num_rows($result); # check the no of rows in the database

if ($check_rows == 1) #check the records in the table 
{
    echo " RECORD IS PRESENT  ";
}
else
{
    $insert = " insert into user_details(user_name , user_password , user_address) values ('$n' , '$p' , '$a')";
     mysqli_query($connect,$insert);
     echo " new REGISTER  sucessful";
     echo "Your ID ".$connect-> insert_id;# to show Last inserted ID
}

?>