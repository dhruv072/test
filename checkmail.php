<?php

# databse connection 
$connect = mysqli_connect("localhost","root","","userdata");

if(isset($_POST['resetbtn']))
{

    $email = $_POST['email'];
    $query = "Select * from user_details Where user_address = '$email'";
    $chk_email =mysqli_query($connect,$query);
    if(mysqli_num_rows($chk_email)==1)
    {
        echo " email verified  !!  ";
        header('location:resetpass.html?email='.$email);
    }
    else
    {
        echo "<script> 
        alert('Invalid Email');
        location.href='checkmail.html'; 
        </script>";
    }

}
?>
