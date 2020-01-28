<?php

$n=$_POST['nm'];# 
$i=$_POST['userid'];
$p=$_POST['userpasswrord'];
$a=$_POST['address'];

echo"Welcome $n";
echo "<br>";
echo "YOUR ID: $i";
// echo "Password: $p";
echo "<br>";
echo "Address: $a"; # cheking the input getting in php or not 
echo " <br>";
echo "<br>";

 $connect = mysqli_connect("localhost","root","","userdata");
// if($connect) 
// {
//  echo " connection established";
// }
// else
// {
//     echo " ERROR NOT CONNECTED";
// } # just  to check the connection between php and data  base to verify the connectionp;

 $query = "INSERT INTO `user_details`(`user_id`, `user_name`, `user_address`, `user_password`) VALUES ('$i','$n','$a','$p')";
 $execute = mysqli_query($connect,$query); # to execute the query its function with 2 parameter 1 dtabsename,queryname

 # checking the execution of the query

 if($query == true)
 {
     echo " RECORD INSERTED ...SUCESSFULLY";
 }
 else
 {
     echo "! ERROR RECORD INSERTED ...UNSUCESSFULLY ! ";
 }

 # to retive the data database
 

?>
