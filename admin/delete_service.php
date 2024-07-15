<?php
include('../connection.php');
$proid=$_GET['id'];
$sql="DELETE FROM `services` WHERE id='$proid'";
(mysqli_query($con,$sql));
echo "<script>alert('Deleted');window.location='index.php'</script>";
?>