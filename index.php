<?php
require_once ("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/JB.png">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
    <link rel="shortcut icon" type4="image/x-icon" href="JB.png"/>
    <title>Sample Shopping</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">


    <script src="js/jquery.min.js"></script>
    <script src="js/Chart.js"></script>
    <script src="js/modernizr.custom.js"></script>


    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-offset="0" data-target="#theMenu">

<ul>
    <li><img src="img/JB.png" alt=""/></li>
    <li><a href="#home" class="smoothScroll">Home</a></li>
    <li><a href="shop.php" class="smoothScroll">Shop</a></li>
    <li><a href="#contact" class="smoothScroll">Contact</a></li>
    <li><img onclick="changeEng()" src="img/eng.png"
             style="cursor: pointer; margin:12px 0 0 750px; height:20px; "></li>
    <li><img onclick="changeInd()" src="img/ina.jpg"
             style="cursor: pointer; margin:7px 0 0 800px; margin-top:-40px; height:30px; "></li>
    <li style="float:right; margin-top:-30px;"><a href="#about" class="smoothScroll">About</a></li>
</ul>

<!-- ========== HEADER SECTION ========== -->
<section id="home" name="home"></section>
<div id="headerwrap">
    <div class="container bounceInDown animated">
        <br>
        <h1>Sample Shopping</h1>
        <h2>Welcome to The Shop
            <h2>
                <div class="row">
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-6 col-lg-offset-3">
                    </div>
                </div>
    </div><!-- /container -->
</div><!-- /headerwrap -->

<!-- ========== WHITE SECTION ========== -->
<div id="w">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h3>WE <strong>WORK HARD</strong> TO DELIVER A <strong>HIGH QUALITY SERVICE</strong>. OUR AIM IS YOUR
                    COMPLETE <strong>SATISFACTION</strong>.</h3>
            </div>
        </div>
    </div><!-- /container -->
</div><!-- /w -->

<!-- ========== FOOTER SECTION ========== -->
<section id="contact" name="contact"></section>
<div id="f" style="background-color:#333">
    <div class="container">
        <div class="row">
            <h3><b>CONTACT US</b></h3>
            <br>
            <div class="col-lg-4">
                <h3><b>Send Us A Message:</b></h3>
                <h3 class="text-foot">justshop@gmail.com</h3>
                <br>
            </div>

            <div class="col-lg-4">
                <h3><b>Call Us:</b></h3>
                <h3 class="text-foot">+62 8123 2996 876</h3>
                <br>
            </div>

            <div class="col-lg-4">
                <h3><b>We Are Social</b></h3>
                <p>
                    <a href="index.php#"><i class="icon-facebook"></i></a>
                    <a href="index.php#"><i class="icon-twitter"></i></a>
                    <a href="index.php#"><i class="icon-envelope"></i></a>
                </p>
                <br>
            </div>
        </div>
    </div>
</div><!-- /container -->
</div><!-- /f -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/custom.js"></script>
<script src="js/classie.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/main.js"></script>
</body>
</html>