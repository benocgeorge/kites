<?php
session_start();
include 'header.php'
?>
        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Service</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->


        <!-- Service Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Services</h4>
                    <h1 class="display-4 mb-4">We Provide Best Services</h1>
                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                <?php
                include('../connection.php');
                $id=$_SESSION['loginid'];
                $sql="SELECT * FROM `services` WHERE loginid='$id'";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($res))
                {

                ?>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="../img/<?php echo $row['image'];?>" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3">
                                    <i class="fa fa-users fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4"><?php echo $row['name'];?></a>
                                    <p class="mb-4"><?php echo $row['bio'];?></p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="edit_services.php">Edit</a>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="delete_service.php?id=<?php echo $row['id'];?>">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="#">More Services</a>
                    </div> -->
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- Service End -->
<?php
include 'footer.php'
?>