<?php
include('../connection.php');
$id = $_POST['id'];
$name = $_POST['name'];
$image = $_POST['image'];

if (!empty($image)) {
    $sql = "UPDATE `project` SET `name`='$name' WHERE `loginid`='$id'";
} else {
    $sql = "UPDATE `project` SET `name`='$name' WHERE `loginid`='$id'";
}
if (mysqli_query($con, $sql)) {
    echo "<script>alert('Edit Successful'); window.location='index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>
