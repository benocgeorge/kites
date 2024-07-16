<?php
include 'connection.php';
session_start();
$email = $_POST["email"];
$pass = $_POST["pass"];

$hashed_password = md5($pass);

$str = "SELECT * FROM login WHERE email='$email' AND password='$hashed_password'";
$result = mysqli_query($con, $str);
$data = mysqli_fetch_array($result);

if ($data) {
    $_SESSION["loginid"] = $data['id'];
    $_SESSION["email"] = $data['email'];

    if ($data['usertype'] == "admin") {
        header("location: admin/index.php");
        exit();
    } else {
        echo "<script>alert('Your account is not approved yet.');window.location='login.php'</script>";
        exit();
    }
} else {
    echo "<script>alert('Invalid email or password');window.location='login.php'</script>";
    exit();
}
?>
