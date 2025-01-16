<?php
include('connect.php');

$username=$_POST['username'];
$phonenumber=$_POST['phonenumber'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$std=$_POST['std'];


if($password!=$cpassword){
  echo '<script>
  alert("Passwords did not match");
  window.location="../partials/registration.php"; 
  </script>';
}

else{
  move_uploaded_file($tmp_name,"../uploads/$image");
  $sql="insert into `userdata` (username,phonenumber,password,photo,standard,status,votes) values ('$username','$phonenumber','$password','$image','$std',0,0)";

  $result=mysqli_query($con,$sql);

  if($result){
    echo '<script>
    alert("Registration successfull");
    window.location="../";
    </script>';
}else{
  die(mysqli_error($con));
}
}

?>