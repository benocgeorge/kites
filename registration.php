<?php
include 'header.php'
?>
        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Registration</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Register</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->


        <!-- Contact Start -->
        <div class="container-fluid contact bg-light py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Hay</h4>
                    <h1 class="display-4 mb-4">Register Now</h1>
                </div>
                <div class="row g-5">
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                        <div>
                            <form action="registration_action.php" method="post">
                                <div class="row g-3">
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="text" name="name" class="form-control border-0" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="email" name="email" class="form-control border-0" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="phone" name="mobile" class="form-control border-0" id="phone" placeholder="Phone">
                                            <label for="phone">Your Phone</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                            <textarea name="address" class="form-control border-0" placeholder="Address" id="message" style="height: 120px"></textarea>
                                            <label for="message">Your Address</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" name="pass" class="form-control border-0" id="subject" placeholder="Password">
                                            <label for="subject">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" name="cpass" class="form-control border-0" id="subject" placeholder="Confirm Password">
                                            <label for="subject">Confirm Password</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3">Register Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>

<?php
include 'footer.php'
?>