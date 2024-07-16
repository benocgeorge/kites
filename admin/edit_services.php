<?php
session_start();
?>
<html>
    <head>
        <?php include 'head.php'; ?>
        <title>Contact Us | One Soure Fitout | Best Interior Design Company in Dubai</title>
    </head>
    <body>
        <div class="main-outer">
            <div class="main-inner">
                    <div class="breadcrump">
                        <div class="overlay"></div>
                        <img src="asset/img/home/services/Residential & commercial Interior.jpg" alt="">
                        <h3>Edit Services</h3>
                    </div>
                    <div class="contact-form-section">
                        <div class="contact-form-section-inner">
                            <div class="contact-form-section-content">
                                <div class="contact-form">
                                    <form action="edit_service_action.php" method="post">
                                    <?php
                                    include('../connection.php');
                                    $id=$_GET['id'];
                                    $sql="SELECT * FROM `services` WHERE id='$id'";
                                    $res=mysqli_query($con,$sql);
                                    while($row=mysqli_fetch_array($res))
                                    {

                                    ?>
                                    <div class="form-row">
                                        <div class="form-column">
                                            <span class="caption">Service Name</span>
                                            <input type="hidden" name="id" value="<?php echo $id;?>" class="form-control border-0" id="name" placeholder="Sarvice Name">
                                            <input type="text" name="name" value="<?php echo $row['name'];?>" id="firstName1" placeholder="Add Service Name">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-column">
                                            <span class="caption">Bio</span>
                                            <input type="text" name="bio" value="<?php echo $row['bio'];?>" id="mobile1" placeholder="Add Bio">
                                        </div>
                                        <div class="form-column">
                                            <span class="caption">Image</span>
                                            <?php
                                            $currentImage = '../img/' . $row['image'];
                                            ?>
                                            <img src="<?php echo $currentImage; ?>" class="img-fluid mb-2" style="max-width: 100%;" alt="Current Image">
                                            <input type="file" name="image" id="email1" placeholder="Add image">
                                        </div>
                                    </div>
                                    <button type="submit" >Submit</button>
                                    <?php
                                    }
                                    ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </body>
</html>