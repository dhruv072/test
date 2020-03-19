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
$name= $_POST['nm'];# name of the user using for the login 
$Password= $_POST['userpasswrord']; # PASSWORD user for the login
// $a=$_POST['address'];

$name= mysqli_real_escape_string($connect,$name);# to prevent from sql injection secured form
$Password= mysqli_real_escape_string($connect,$Password);# to prevent from sql injection secured form

 $query = "select  user_password from user_details where user_name = '$name'";
//$check = " select * from user_details where user_name= '$name' && user_password = '$Password'"; # query to chek the record exist or not in the databse
$result = mysqli_query($connect,$query) ; 
//$check_rows = mysqli_num_rows($result);# l1 p1
 $check_rows = mysqli_fetch_assoc($result); # check the no of rows in the database
//echo $check_rows['user_password']; # check the encrpted pasword from the database

 $pass_chk= $check_rows['user_password'];



if(password_verify($Password,$pass_chk))
{
   
    echo $_SESSION['username']=$name;
    echo "<script> 
    alert('LOGIN SUCESSFUL');
    location.href='mainpage.php'; 
    </script>";

}
else
{
    echo "<script> 
    alert('LOGIN Failed Please check ID or Password');
    location.href='login.html'; 
    </script>";
}





// if ($check_rows == 1) #check the records in the table 
// {
//     // echo " RECORD IS PRESENT  ";

//     $_SESSION['username']=$name;
//     echo "<script> 
//     alert('LOGIN SUCESSFUL');
//     location.href='mainpage.php'; 
//     </script>";
//     //header('location:newglowing.html');
// }
// else
// {
//     echo "<script> 
//     alert('LOGIN Failed Please check ID or Password');
//     location.href='mainpage.php'; 
//     </script>";
    
//   // header('location:login.html'); 
    
// }


?>