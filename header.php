<?php 
	include_once('connectionweb.php');
 	$CompanyName="Samarth Group of Institutions";
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <meta property="og:title" content="Samarth Group OF Institutions">
        <meta property="og:description" content="Samarth Group Of Institutions">
        <meta property="og:url" content="https://sgoi.smarttechsoft.in">
        <meta property="og:image" content="https://sgoi.smarttechsoft.in/admin/images/logo5.png">
       
        <title>Home |Samarth Group Of Instituations</title>
        <link href="https://sgoi.smarttechsoft.in/admin/images/logo5.ico" rel="shortcut icon" type="image/ico">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
        <link href="css/animate.css" rel="stylesheet" type="text/css">
        <link href="css/css-plugin-collections.css" rel="stylesheet"/>
        <!-- CSS | menuzord megamenu skins -->
        <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
        <!-- CSS | Main style file -->
        <link href="css/style-main.css" rel="stylesheet" type="text/css">
        <!-- CSS | Preloader Styles -->
        <link href="css/preloader.css" rel="stylesheet" type="text/css">
        <!-- CSS | Custom Margin Padding Collection -->
        <link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
        <!-- CSS | Responsive media queries -->
        <link href="css/responsive.css" rel="stylesheet" type="text/css">
        <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
        <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->
        
        <!-- Revolution Slider 5.x CSS settings -->
        <link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
        <link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
        <link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>
        
        <!-- CSS | Theme Color -->
        <link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">
        
        <!-- external javascripts -->
        <script src="js/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- JS | jquery plugin collection for this theme -->
        <script src="js/jquery-plugin-collection.js"></script>
        
        <!-- Revolution Slider 5.x SCRIPTS -->
        <script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
        <script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
    </head>
<body class="">
    <div id="wrapper" class="clearfix">
      <!-- preloader -->
      <div id="preloader">
        <div id="spinner">
          <img alt="" src="images/preloaders/5.gif">
        </div>
        <div id="disable-preloader" class="btn btn-default btn-sm hidden">Disable Preloader</div>
      </div>
      
      <!-- Header -->
      <header id="header" class="header">
        <div class="header-top bg-theme-color-2 sm-text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <div class="widget no-border m-0">
                  <ul class="list-inline">
                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white"></i> <a class="text-white" href="tel:9766588077">+91 9766588077</a> </li>
                    <li class="text-white m-0 pl-10 pr-10"> <i class="fa fa-clock-o text-white"></i> Mon-Sat 10:00 to 4:00 </li>
                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-white"></i> <a class="text-white" href="#">sgoi@gmail.com</a> </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4">
                <div class="widget no-border m-0">
                  <ul class="list-inline text-right sm-text-center">
                    <li>
                      <a target="_blank" href="register.php" class="text-white">Register</a>
                    </li>
                    <li class="text-white">|</li>
                    <li>
                      <a target="_blank" href="login.php" class="text-white">Login</a>
                    </li>
                    <li class="text-white">|</li>
                    <li>
                      <a target="_blank" href="admin/index.php" class="text-white">Admin Login</a>
                    </li>
                    <li class="text-white hidden">|</li>
                    <li class="hidden">
                      <a href="#" class="text-white">Support</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="header-top  sm-text-center logobanner">
            <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="widget no-border m-0 text-center">
                      <img src="images/logo/samarthbelhe.png">
                    </div>
                  </div>
                </div>
             </div>
        </div>
        <div class="header-nav">
          <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
            <div class="container navcontainre">
              <nav id="menuzord-right" class="menuzord default">
                <a class="menuzord-brand pull-left flip" href="https://sgoi.smarttechsoft.in/">
                  <img src="images/logo/download.png" alt=""> <?php echo $CompanyName; ?>
                  <h1><?php echo $CompanyName; ?></h1>
                </a>
               
                <ul class="menuzord-menu">
    				<li class="active"><a href="index.php">Home</a></li>
    				<li><a href="aboutus.php">About Us</a></li>
            <!--li><a href="#">Courses</a></li-->
    				<li><a href="#">Admission</a>
              <ul class="dropdown">
                <li><a href="#">Engineering</a>
                  <ul class="dropdown">
                    <li><a href="engineering.php">Computer Engineering</a>
                    <li><a href="engineering.php">Mechanical Engineering</a>
                    <li><a href="engineering.php">Civil Engineering</a>
                    <li><a href="engineering.php">E&TC Engineering</a>
                    <li><a href="engineering.php">Electrical Engineering</a>

                  </ul>
                </li>
              <li><a href="#">Pharmacy</a>
                <ul class="dropdown">
                    <li><a href="pharmacy.php">D pharmacy</a>
                    <li><a href="pharmacy.php">B pharmacy</a>
                </ul>
              </li>
              <li><a href="#">Diploma</a>
               <ul class="dropdown">
                    <li><a href="diploma.php">Computer Engineering</a>
                    <li><a href="diploma.php">Mechanical Engineering</a>
                    <li><a href="diploma.php">Civil Engineering</a>
                    <li><a href="diploma.php">Mechatronics Engineering</a>
                    <li><a href="diploma.php">E&TC Engineering</a>
                    <li><a href="diploma.php">Electrical Engineering</a>

                </ul>
              </li>


              <li><a href="othercourse.php">BCS</a></li>
              <li><a href="othercourse.php">LLB</a></li>
              <li><a href="othercourse.php">MBA</a></li>
              <li><a href="othercourse.php">ITI</a></li>
              <li><a href="othercourse.php">School</a></li>
            </ul>


            </li>
    				<li><a href="#">Academics</a>
    				<ul class="dropdown">
    				  <li><a href="noticeshow.php">Notice</a></li>
              <li><a href="#">Time Table</a></li>
              <li><a href="#">E-Material</a></li>
              <li><a href="#">Leave Application</a></li>
              <li><a href="#">Fee Chart</a></li>
              <li><a href="#">Official Doc Apply LC/Bonafide</a></li>
              <li><a href="#">Online Exam</a></li>
              <li><a href="#">Student Result</a></li>
              <li><a href="#">Practical Submission & Assignment</a></li>
     				</ul>
    				</li>
    				<li><a href="gallery.php">Gallery</a></li>
    				<li><a href="contactus.php">Contact Us</a></li>
                 </ul>
              </nav>
            </div>
          </div>
        </div>
      </header>
  