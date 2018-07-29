<?php
include "../config/database.php"; 

session_start();
$user_check=$_SESSION['admin_username'];
 
$sql = mysqli_query($connection,"SELECT admin_username FROM admin_info WHERE admin_username='$user_check' ");
 
$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
 
$login_user=$row['admin_username'];
 
if(!isset($user_check))
{
header("Location: ../admin-login/index.php");
}
?>