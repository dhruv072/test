<?php

session_start();
session_destroy();
echo "<script> 
alert('Logout Succesful');
location.href='login.html'; 
</script>";
?>
