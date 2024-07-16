<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php'; ?>
    <title>Projects | One Source Fitout | Best Interior Design Company in Dubai</title>
    <style>
        .packages-item {
            position: relative;
            overflow: hidden;
        }

        .packages-item .animated-button {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 20px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .packages-item .animated-button::before {
            content: '';
            position: absolute;
            background-color: rgba(255, 255, 255, 0.5);
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            transform: translate(-50%, -50%);
            z-index: -1;
            transition: all 0.3s ease;
        }

        .packages-item .animated-button:hover::before {
            width: 0;
            height: 0;
        }

        .packages-content-full {
            display: none; /* Hide all content initially */
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            box-sizing: border-box;
            z-index: 10;
            text-align: left; /* Align text content to the left */
        }

        .packages-item:hover .packages-content-full {
            display: block; /* Show content on hover */
        }

        .packages-content-full img {
            max-width: 100%; /* Ensure images fit within their container */
            height: auto;
            margin-bottom: 10px; /* Add some space below the image */
        }

        .packages-content-full h3 {
            margin-top: 0; /* Remove default margin */
        }

        .packages-content-full p {
            margin-bottom: 10px; /* Add some space below the bio */
        }
    </style>
</head>
<body> 
    <div class="main-outer">
        <div class="main-inner">
            <div class="breadcrump">
                <div class="overlay"></div>
                <img src="asset/img/home/projects/Project-Header-Image.jpg" alt="">
                <h3>Projects</h3>
            </div>

            <div class="packages">
                <div class="packages-inner">
                    <h2>Current Projects</h2>
                    <div class="packages-grid">
                        <?php
                        include('../connection.php');
                        $id = $_SESSION['loginid'];
                        $sql = "SELECT * FROM `project` WHERE loginid='$id' AND project_type = 'current'";
                        $res = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($res)) {
                        ?>
                        <div class="packages-item" onmouseover="showDataContent(<?php echo $row['id']; ?>)" onmouseout="hideDataContent(<?php echo $row['id']; ?>)">
                            <img src="../img/<?php echo $row['image'];?>" alt="">
                            <div class="packages-desc">
                                <h3><?php echo $row['name'];?></h3>
                            </div>
                            <div class="packages-content-full" id="DataContent<?php echo $row['id']; ?>">
                                <img src="../img/<?php echo $row['image'];?>" alt="">
                                <h3><?php echo $row['name'];?></h3>
                                <a class="btn btn-primary rounded-pill py-2 px-4 animated-button" href="edit_projects.php?id=<?php echo $row['id'];?>">Edit</a>
                                <a class="btn btn-primary rounded-pill py-2 px-4 animated-button" href="delete_project.php?id=<?php echo $row['id'];?>">Delete</a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="packages">
                <div class="packages-inner">
                    <h2>Upcoming Projects</h2>
                    <div class="packages-grid">
                        <?php
                        $sql = "SELECT * FROM `project` WHERE loginid='$id' AND project_type = 'upcoming'";
                        $res = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($res)) {
                        ?>
                        <div class="packages-item" onmouseover="showDataContent(<?php echo $row['id']; ?>)" onmouseout="hideDataContent(<?php echo $row['id']; ?>)">
                            <img src="../img/<?php echo $row['image'];?>" alt="">
                            <div class="packages-desc">
                                <h3><?php echo $row['name'];?></h3>
                            </div>
                            <div class="packages-content-full" id="DataContent<?php echo $row['id']; ?>">
                                <img src="../img/<?php echo $row['image'];?>" alt="">
                                <h3><?php echo $row['name'];?></h3>
                                <a class="btn btn-primary rounded-pill py-2 px-4 animated-button" href="edit_projects.php?id=<?php echo $row['id'];?>">Edit</a>
                                <a class="btn btn-primary rounded-pill py-2 px-4 animated-button" href="delete_project.php?id=<?php echo $row['id'];?>">Delete</a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
