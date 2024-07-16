<?php
session_start();
$name = $_POST['name'];
$bio = $_POST['bio'];
$image = $_FILES['image'];

include '../connection.php';
$logid = $_SESSION['loginid'];
$bio = mysqli_real_escape_string($con, $bio);
$targetDir = '../service/';
$targetFile = $targetDir . basename($image['name']);
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
$uploadOk = 1;
if (isset($_POST['submit'])) {
    $check = getimagesize($image['tmp_name']);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "<script>alert('File is not an image.'); window.location='../admin/index.php';</script>";
        $uploadOk = 0;
    }
}
if (file_exists($targetFile)) {
    echo "<script>alert('Sorry, file already exists.'); window.location='../admin/index.php';</script>";
    $uploadOk = 0;
}
if ($image['size'] > 5000000) {
    echo "<script>alert('Sorry, your file is too large.'); window.location='../admin/index.php';</script>";
    $uploadOk = 0;
}
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.'); window.location='../admin/index.php';</script>";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "<script>alert('Sorry, your file was not uploaded.'); window.location='../admin/index.php';</script>";
} else {
    if (move_uploaded_file($image['tmp_name'], $targetFile)) {
        $sql = "INSERT INTO services (name, bio, image, loginid) VALUES ('$name', '$bio', '$targetFile', '$logid')";
        if (mysqli_query($con, $sql)) {
            echo "<script>alert('Submitted Successfully'); window.location='../admin/index.php';</script>";
        } else {
            echo "<script>alert('Failed to submit'); window.location='../admin/index.php';</script>";
        }
    } else {
        echo "<script>alert('Sorry, there was an error uploading your file.'); window.location='../admin/index.php';</script>";
    }
}
mysqli_close($con);
?>
