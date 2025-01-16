<?php
include('connect.php');

$username=$_POST['username'];
$phonenumber=$_POST['phonenumber'];
$password=$_POST['password'];
$std=$_POST['std'];

$sql = "Select * from `userdata` where username='$username' and phonenumber='$phonenumber' and password='$password' and standard='$std'";

$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
  
}
?>