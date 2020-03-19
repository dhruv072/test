<?php

$connect = mysqli_connect("localhost","root","","userdata"); # connection to db

if( isset($_POST['change']))
{
    $new_password = $_POST['changepassword'];
    $new_password = password_hash($new_password,PASSWORD_BCRYPT);

    $email = $_POST['email'];

    $query = "UPDATE user_details SET user_password = '".$new_password."' WHERE user_address = '".$email."' "; # update query to change password
    $update = mysqli_query($connect,$query);

    if ($update)    
    {
        echo $email;
        echo "pass change";
        echo "<script> 
        alert('PASSWORD CHANGE SUCESSFUL');
        location.href='login.html'; 
        </script>";
    }
    else
    {
        echo "failed";
        echo "<script> 
        alert('ERROR OCCURED...!');
        location.href='login.html'; 
        </script>";
    }

}


?>



 