<?php
session_start();
include 'header.php'
?>
        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Add Services</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Services</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->


        <!-- Contact Start -->
        <div class="container-fluid contact bg-light py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Hay</h4>
                    <h1 class="display-4 mb-4">Add Services</h1>
                </div>
                <div class="row g-5">
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                        <div>
                            <form action="edit_service_action.php" method="post">
                            <?php
                            include('../connection.php');
                            $id=$_SESSION['loginid'];
                            $sql="SELECT * FROM `services` WHERE loginid='$id'";
                            $res=mysqli_query($con,$sql);
                            while($row=mysqli_fetch_array($res))
                            {

                            ?>
                                <div class="row g-3">
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="hidden" name="id" value="<?php echo $id;?>" class="form-control border-0" id="name" placeholder="Sarvice Name">
                                            <input type="text" name="name" value="<?php echo $row['name'];?>" class="form-control border-0" id="name" placeholder="Sarvice Name">
                                            <label for="name">Service Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="text" name="bio" value="<?php echo $row['bio'];?>" class="form-control border-0" id="email" placeholder="Sarvice Bio">
                                            <label for="email">Bio</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <?php
                                            $currentImage = '../img/' . $row['image'];
                                            ?>
                                            <img src="<?php echo $currentImage; ?>" class="img-fluid mb-2" style="max-width: 100%;" alt="Current Image">
                                            
                                            <input type="file" name="image" class="form-control border-0" id="image" accept="image/*">
                                            <label for="image">Choose a new image</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3">Edit Now</button>
                                    </div>
                                </div>
                                <?php
                            }
                                ?>
                            </form>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
        <!-- Contact End -->

<?php
include 'footer.php'
?>