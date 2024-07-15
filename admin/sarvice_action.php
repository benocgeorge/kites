<?php
session_start();
$name = $_POST['name'];
$bio = $_POST['bio'];
$image = $_POST['image'];
include '../connection.php';
$logid = $_SESSION['loginid'];
$bio = mysqli_real_escape_string($con, $bio);
$sql = "INSERT INTO services (name, bio, image, loginid) VALUES ('$name', '$bio', '$image', '$logid')";
if (mysqli_query($con, $sql)) {
    echo "<script>alert('Submitted Successfully'); window.location='../admin/index.php';</script>";
} else {
    echo "<script>alert('Failed to submit'); window.location='../admin/index.php';</script>";
}
mysqli_close($con);
?>
