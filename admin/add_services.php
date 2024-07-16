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
                        <h3>Add Services</h3>
                    </div>
                    <div class="contact-form-section">
                        <div class="contact-form-section-inner">
                            <div class="contact-form-section-content">
                                <div class="contact-form">
                                    <form action="sarvice_action.php" enctype="multipart/form-data" method="post">
                                    <div class="form-row">
                                        <div class="form-column">
                                            <span class="caption">Service Name</span>
                                            <input type="text" name="name" id="firstName1" placeholder="Add Service Name">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                    <div class="form-column">
                                            <span class="caption">Bio</span>
                                            <textarea name="bio" id="bio" placeholder="Add Bio" rows="30"></textarea>
                                        </div>

                                        <div class="form-column">
                                            <span class="caption">Image</span>
                                            <input type="file" name="image" id="email1" placeholder="Add image">
                                        </div>
                                    </div>
                                    <button type="submit" >Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </body>
</html>