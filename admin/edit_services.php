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
                                    <form action="sarvice_action.php" method="post">
                                    <?php
                                    include('../connection.php');
                                    $id=$_SESSION['loginid'];
                                    $sql="SELECT * FROM `services` WHERE loginid='$id'";
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
                                <div class="contact-address">
                                    <div class="content-address-data">
                                        <span><img src="asset/img/icons/mobile-svgrepo-com.svg" alt="">+971 50 5136686</span>
                                        <span><img src="asset/img/icons/email-1-svgrepo-com.svg" alt="">info@onesourcefitout.com</span>
                                        <span><img src="asset/img/icons/address-book-svgrepo-com.svg" alt="">Office 306, Ethihad Building, Near Deira City Centre, Deira, Dubai - UAE</span>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d333.6533374001148!2d55.335165848564976!3d25.25191890847787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sonesource%20fit%20out!5e0!3m2!1sen!2sae!4v1717962870124!5m2!1sen!2sae" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </body>
</html>