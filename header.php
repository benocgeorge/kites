<?php 
session_start();

// if(isset($_GET['maintenance-mode']))
// {
//     $_SESSION['maintenance'] = "false";
// }

// if(!isset($_SESSION['maintenance']))
// {
//    ?>
     <script>
//         location.href="coming-soon.php";
//     </script>
   <?php
// }
?>


<nav>
    <div class="header" id="header">
        <div class="header-inner">
            <div class="header-logo">
                <a href="./"><img src="asset/img/home/onesource-fitout-logo.png" alt=""></a>
            </div>
            <div class="header-menu" id="headerMenu">
                <ul>
                    <a href="./">
                        <li>Home</li>
                    </a>
                    <a href="about.php">
                        <li>About</li>
                    </a>
                    <a href="services.php">
                        <li>Services</li>
                    </a>
                    <a href="projects.php">
                        <li>Projects</li>
                    </a>
                    <!-- <a href="careers.php">
                        <li>Careers</li>
                    </a> -->
                    <a href="contact.php">
                        <li>Contact Us</li>
                    </a>
                    <a onclick="showPopup()" class="free-quote-btn">
                        <li >Free Quote</li>
                    </a>
                </ul>
            </div>
            <!--<div class="header-search">
                <img src="asset\img\icons\search-magnifying-glass-svgrepo-com.svg" alt="">
            </div>-->
            <div class="header-search header-mobile-menu" onclick="togglemobileMenu()">
                <img id="ToggleIcon" src="asset/img/icons/burger-simple-svgrepo-com.svg" alt="">
            </div>
        </div>
    </div>

</nav>



<div class="popup" id="popup">
    <div class="popup-inner">
        <div class="popup-close-btn">
            <img src="asset/img/icons/close-bold-svgrepo-com.svg" onclick="removePopup()" alt="">
        </div>
        <h3>Fill this form and submit and we will get back to you with a free quotation.</h3>

        <div class="popup-content">
            <div class="column">
                <span class="caption">Name</span>
                <input type="text" id="firstName">
            </div>
            <div class="column">
                <span class="caption">Mobile</span>
                <input type="text" id="mobile">
            </div>
            <div class="column">
                <span class="caption">Email</span>
                <input type="text" id="email">
            </div>
            <div class="column">
                <span class="caption">Message</span>
                <input type="text" id="message">
            </div>
            <div class="column">
                <button onclick="freeQuote()">Submit</button>
            </div>
        </div>
    </div>
</div>

