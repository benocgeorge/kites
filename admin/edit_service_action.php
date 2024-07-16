<?php
include('../connection.php');

$id = mysqli_real_escape_string($con, $_POST['id']);
$name = mysqli_real_escape_string($con, $_POST['name']);
$bio = mysqli_real_escape_string($con, $_POST['bio']);

if (!empty($_FILES['image']['name'])) {
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];

    $upload_dir = "../service/";
    $target_file = $upload_dir . basename($image);

    if (move_uploaded_file($image_tmp, $target_file)) {
        $sql = "UPDATE `services` SET `name`='$name', `bio`='$bio', `image`='$image' WHERE `loginid`='$id'";
    } else {
        echo "Error uploading image.";
        exit;
    }
} else {
    $sql = "UPDATE `services` SET `name`='$name', `bio`='$bio' WHERE `loginid`='$id'";
}
if (mysqli_query($con, $sql)) {
    echo "<script>alert('Edit Successful'); window.location='index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);
?>
