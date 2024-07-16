<?php
session_start();
include('../connection.php');

$logid = $_SESSION['loginid'];
$name = $_POST['name'];
$name = $_POST['project_type'];
$id = $_POST['id'];
$image = $_FILES['image'];

$targetDir = '../project/';
$targetFile = $targetDir . basename($image['name']);
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
$uploadOk = 1;

if (!empty($image['name'])) {
    $check = getimagesize($image['tmp_name']);
    if ($check === false) {
        echo "<script>alert('File is not an image.'); window.location='../admin/index.php';</script>";
        $uploadOk = 0;
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
}

if ($uploadOk == 1) {
    if (!empty($image['name'])) {
        if (move_uploaded_file($image['tmp_name'], $targetFile)) {
            if (!empty($id)) {
                $sql = "UPDATE project SET name='$name', image='$targetFile' WHERE id='$id' AND loginid='$logid'";
            } else {
                $sql = "INSERT INTO project (name, image, loginid) VALUES ('$name', '$targetFile', '$logid')";
            }
        } else {
            echo "<script>alert('Sorry, there was an error uploading your file.'); window.location='../admin/index.php';</script>";
            exit;
        }
    } else {
        if (!empty($id)) {
            $sql = "UPDATE project SET name='$name' WHERE id='$id' AND loginid='$logid'";
        } else {
            $sql = "INSERT INTO project (name, loginid) VALUES ('$name', '$logid')";
        }
    }
    
    if (mysqli_query($con, $sql)) {
        if (!empty($id)) {
            echo "<script>alert('Edit Successful'); window.location='index.php';</script>";
        } else {
            echo "<script>alert('Submitted Successfully'); window.location='../admin/index.php';</script>";
        }
    } else {
        echo "<script>alert('Failed to submit'); window.location='../admin/index.php';</script>";
    }
}

mysqli_close($con);
?>
