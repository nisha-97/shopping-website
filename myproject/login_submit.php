<?php
include 'includes/common.php';
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=md5($_POST['password']);
$sql="SELECT id,email from users WHERE email='$email'";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
$row=mysqli_num_rows($result);
if($row==0)
{
    echo "no such user";
   
}
 else 
    
 {
     $fetch=mysqli_fetch_array($result);
     $email1=$fetch['email'];
     $id1=$fetch['id'];
     $email_id=$_SESSION['email1'];
     $user_id=$_SESSION['id1'];
     header('location:products.php');
 }
?>
