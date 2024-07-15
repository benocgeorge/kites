<?php
include 'connection.php';
session_start();
$email=$_POST["email"];
$pass=$_POST["pass"];
$str="select * from login where email='$email' and password='$pass'";
$result=  mysqli_query($con, $str);
$data=  mysqli_fetch_array($result);
$_SESSION["loginid"]=$data['id'];
$_SESSION["email"]=$data['email'];
if($data['email']==$email && $data['password']==$pass)
{
   if($data['usertype']=="admin")
    {
    	$_SESSION["loginid"]=$data['id'];
        header("location: admin/index.php");
    }
 else {
        echo "<script>alert('not approved');window.location='login.php'</script>";    
    }
}
else
{
    echo "<script>alert('invalid email or password');window.location='login.php'</script>";
}
?>