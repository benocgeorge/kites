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
                            <form action="project_action.php" method="post" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-column">
                                        <span class="caption">Project Name</span>
                                        <input type="text" name="name" id="firstName1" placeholder="Add Service Name" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-column">
                                        <span class="caption">Select Project</span>
                                        <select name="project_type" id="projectType" required>
                                            <option disabled selected value="">Choose an option</option>
                                            <option value="upcoming">Upcoming Project</option>
                                            <option value="current">Current Project</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-column">
                                        <span class="caption">Upload Images</span>
                                        <input type="file" name="images[]" multiple accept="image/*" required>
                                    </div>
                                </div>
                                <button type="submit" name="submit">Submit</button>
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