<?php
require_once("config.php");
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
    <link rel="shortcut icon" type="image/x-icon" href="JB.png"/>
    <title>Sample Shopping</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">


    <script src="js/jquery.min.js"></script>
    <script src="js/Chart.js"></script>
    <!--script src="js/modernizr.custom.js"></script-->


    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<ul>
    <li><a href="index.php" class="smoothScroll">Home</a></li>
    <li><a href="shop.php" class="smoothScroll">Shop</a></li>
    <li><a href="#" class="smoothScroll">About</a></li>
    <li style="float:right"><a href="signup.php" class="smoothScroll">Sign Up</a></li>
    <li style="float:right"><a href="signin.php" class="smoothScroll">Sign in</a></li>

</ul>

<!-- Main source -->
<div id="container" class="bounceInDown animated">

</div>

<!-- ========== FOOTER SECTION ========== -->
<section id="contact" name="contact"></section>
<div id="f" style="background-color:#333">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center"><b>CONTACT US</b></h3>
            </div>
            <div class="col-sm-6">
                <h3><b>Send Us A Message:</b></h3>
                <h3 class="text-foot">turanwash@gmail.com</h3>
                <br>
            </div>

            <div class="col-sm-6">
                <h3><b>Call Us:</b></h3>
                <h3 class="text-foot">+6281234567890</h3>
                <br>
            </div>
        </div>
    </div>
</div><!-- /container -->
</div><!-- /f -->


<!-- script of dialog -->
<script>
    let counter = 2;
    let whitebg = document.getElementById("white-background");
    let sizebox = document.getElementById("size-box");
    let dsgn = document.getElementById("design-con");
    let dlg = document.getElementById("dlgbox");
    let tblsize = document.getElementById("tablesize");
    let button = document.getElementById("buttonDsgn");
    let pertama = document.getElementsByTagName("p");
    let kedua = document.getElementsByTagName("p");
    let DetailButton = document.getElementsByTagName("button");
    let availArray = [0, 2, 4, 6, 8, 10, 12, 14, 16];
    let sizeArray = [1, 3, 5, 7, 9, 11, 13, 15, 17];
    let availableStock;
    let footerh3 = document.getElementsByTagName("h3");

    function showTable() {
        sizebox.style.display = "none";
        tblsize.style.display = "block";
        tblsize.style.left = "410px";
        tblsize.style.top = "90px";
    }

    function closeButton() {
        sizebox.style.display = "none";
        whitebg.style.display = "none";
        tablesize.style.display = "none";
    }

    function dlgOKDetail() {
        whitebg.style.display = "none";
        dlg.style.display = "none";
    }

    function dlgOKDes() {
        whitebg.style.display = "none";
        dsgn.style.display = "none";
        dlg.style.display = "none";
    }

    function showDesign() {
        whitebg.style.display = "block";
        dsgn.style.display = "block";
        dlg.style.display = "none";

        let winWidth = window.innerWidth;
        let winHeight = window.innerHeight;

        dsgn.style.left = "350px";
        dsgn.style.top = "40px";
    }

    function dlgOK() {
        whitebg.style.display = "none";
        dlg.style.display = "none";
    }

    function showDialog() {
        whitebg.style.display = "block";
        dlg.style.display = "block";
        button.style.display = "block";
        counter += 1;

        if (counter === 12) {
            counter = 2;
        }

        let test = document.getElementsByTagName("img")[counter].getAttribute("src");
        document.getElementById("photo").src = test;

        let winWidth = window.innerWidth;
        let winHeight = window.innerHeight;

        dlg.style.left = (winWidth / 2) - 480 / 2 + "px";
        dlg.style.top = "50px";
    }
</script>
</body>
</html>
