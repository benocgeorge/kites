<?php
include('../connection.php');
$proid=$_GET['id'];
$sql="DELETE FROM `project` WHERE id='$proid'";
(mysqli_query($con,$sql));
echo "<script>alert('Deleted');window.location='index.php'</script>";
?>