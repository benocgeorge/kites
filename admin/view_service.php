<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php'; ?>
    <title>Services | One Source Fitout | Best Interior Design Company in Dubai</title>
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
        }
    </style>
</head>
<body> 
    <div class="main-outer">
        <div class="main-inner">
            <div class="breadcrump">
                <div class="overlay"></div>
                <img src="asset/img/home/services/Residential & commercial Interior.jpg" alt="">
                <h3>Services</h3>
            </div>

            <div class="packages">
                <div class="packages-inner">
                    <div class="packages-grid">
                        <?php
                        include('../connection.php');
                        $id = $_SESSION['loginid'];
                        $sql = "SELECT * FROM `services` WHERE loginid='$id'";
                        $res = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($res)) {
                        ?>
                        <div class="packages-item" onmouseover="showDataContent(<?php echo $row['id']; ?>)" onmouseout="hideDataContent(<?php echo $row['id']; ?>)">
                            <img src="../img/<?php echo $row['image'];?>" alt="">
                            <div class="packages-desc">
                                <h3><?php echo $row['name'];?></h3>
                            </div>
                            <div class="packages-content-full" id="DataContent<?php echo $row['id']; ?>">
                                <h3><?php echo $row['name'];?></h3>
                                <p><?php echo $row['bio'];?></p>
                                <a class="btn btn-primary rounded-pill py-2 px-4 animated-button" href="edit_services.php?id=<?php echo $row['id'];?>">Edit</a>
                                <a class="btn btn-primary rounded-pill py-2 px-4 animated-button" href="delete_service.php?id=<?php echo $row['id'];?>">Delete</a>
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
