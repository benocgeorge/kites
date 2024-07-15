<?php
session_start();
$name = $_POST['name'];
$image = $_POST['image'];
include '../connection.php';
$logid = $_SESSION['loginid'];
$sql = "INSERT INTO project (name, image, loginid) VALUES ('$name', '$image', '$logid')";
if (mysqli_query($con, $sql)) {
    echo "<script>alert('Submitted Successfully'); window.location='../admin/index.php';</script>";
} else {
    echo "<script>alert('Failed to submit'); window.location='../admin/index.php';</script>";
}
mysqli_close($con);
?>
