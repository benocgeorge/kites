<?php
session_start();
include '../connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $project_type = $_POST['project_type'];
    $logid = $_SESSION['loginid'];

    // File upload handling
    $fileNames = [];

    // Loop through each uploaded file
    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        $fileName = $_FILES['images']['name'][$key];
        $targetDir = "../uploads/";
        $targetFilePath = $targetDir . basename($fileName);

        // Check if file already exists
        if (file_exists($targetFilePath)) {
            echo "<script>alert('File $fileName already exists.'); window.location='../admin/index.php';</script>";
            exit;
        }

        // Check file size
        if ($_FILES['images']['size'][$key] > 5000000) { // 5MB limit
            echo "<script>alert('Sorry, your file $fileName is too large.'); window.location='../admin/index.php';</script>";
            exit;
        }

        // Allow certain file formats
        $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
        $fileExtension = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        if (!in_array(strtolower($fileExtension), $allowedTypes)) {
            echo "<script>alert('Sorry, only JPG, JPEG, PNG, GIF files are allowed.'); window.location='../admin/index.php';</script>";
            exit;
        }

        // Upload file
        if (move_uploaded_file($tmp_name, $targetFilePath)) {
            $fileNames[] = $fileName; // Store uploaded file name
        } else {
            echo "<script>alert('Sorry, there was an error uploading $fileName.'); window.location='../admin/index.php';</script>";
            exit;
        }
    }

    // Insert into database
    $imagesString = implode(",", $fileNames);
    $sql = "INSERT INTO project (name, project_type, image, loginid) VALUES ('$name', '$project_type', '$imagesString', '$logid')";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Submitted Successfully.'); window.location='../admin/index.php';</script>";
    } else {
        echo "<script>alert('Failed to submit.'); window.location='../admin/index.php';</script>";
    }

    mysqli_close($con);
} else {
    echo "<script>alert('Form submission error.'); window.location='../admin/index.php';</script>";
}
?>
