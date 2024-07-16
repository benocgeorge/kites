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
                        <h3>Add Projects</h3>
                    </div>
                    <div class="contact-form-section">
                        <div class="contact-form-section-inner">
                            <div class="contact-form-section-content">
                            <div class="contact-form">
                            <form action="project_action.php" method="post" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-column">
                                        <span class="caption">Project Name</span>
                                        <input type="text" name="name" id="firstName1" placeholder="Add Project Name" required>
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
                                        <input type="file" name="image" required>
                                    </div>
                                </div>
                                <button type="submit" name="submit">Submit</button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </body>
</html>