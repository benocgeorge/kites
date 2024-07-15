<?php
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['mobile'];
$address=$_POST['address'];
$password=$_POST['pass'];
$cpassword=$_POST['cpass'];
include 'connection.php';
$str="select email from login where email = '$email'";
$result=  mysqli_query($con, $str);
if (mysqli_num_rows($result) > 0) {
    echo"<script>alert('Email Already Exist');window.location='registration.php';</script>";
}
else {
    if ($password == $cpassword) {
        $query = "insert into login(email,password,usertype,status) values('$email','$password','admin','1')";
        mysqli_query($con, $query) or die(mysqli_error($con));
        $logid=mysqli_insert_id($con);
        $sql = "insert into register(name,address,mobile,confirm_password,loginid) values('$name','$address','$number','$cpassword','$logid')";
        mysqli_query($con, $sql);
        echo"<script>alert('Registration Sucessfull');window.location='registration.php';</script>";
    }
    else {
        echo"<script>alert('Password Does Not Match');window.location='registration.php';</script>";
    }
}

?>