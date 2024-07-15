<?php
include('../connection.php');
$id = $_POST['id'];
$name = $_POST['name'];
$bio = $_POST['bio'];
$image = $_POST['image'];
$bio = mysqli_real_escape_string($con, $bio);

if (!empty($image)) {
    $sql = "UPDATE `services` SET `name`='$name', `bio`='$bio', `image`='$image' WHERE `loginid`='$id'";
} else {

    $sql = "UPDATE `services` SET `name`='$name', `bio`='$bio' WHERE `loginid`='$id'";
}
if (mysqli_query($con, $sql)) {
    echo "<script>alert('Edit Successful'); window.location='index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>
