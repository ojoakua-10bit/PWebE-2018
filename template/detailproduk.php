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
    <li><img src="img/JB.png" alt=""/></li>
    <li><a href="index.php" class="smoothScroll">Home</a></li>
    <li><a href="shop.php" class="smoothScroll">Shop</a></li>
    <li><a href="#contact" class="smoothScroll">Contact</a></li>
    <li><img onclick="changeEng()" src="img/eng.png" style="cursor: pointer; margin:12px 0 0 800px; height:20px;">
    </li>
    <li><img onclick="changeInd()" src="img/ina.jpg"
             style="cursor: pointer; margin:7px 0 0 850px; margin-top:-40px; height:30px;"></li>
</ul>

<!-- ========== FOOTER SECTION ========== -->
<section style="margin-top:75px" id="contact" name="contact"></section>
<div id="f">
    <div class="container">
        <div class="row">
            <h3><b>CONTACT US</b></h3>
            <br>
            <div class="col-lg-4">
                <h3><b>Send Us A Message:</b></h3>
                <h3 class="text-foot">justbatik@gmail.com</h3>
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
<!-- dialog box -->


<!-- script of dialog -->
<script>
    let counter = 2;
    let whitebg = document.getElementById("white-background");
    let sizebox = document.getElementById("size-box");
    let dsgn = document.getElementById("design-con");
    let buybox = document.getElementById("buy-box");
    let dlg = document.getElementById("dlgbox");
    let tblsize = document.getElementById("tablesize");
    let button = document.getElementById("buttonDsgn");
    let pertama = document.getElementsByTagName("p");
    let kedua = document.getElementsByTagName("p");
    let buyButton = document.getElementsByTagName("button");
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

    function changeInd() {
        footerh3[0].innerHTML = "KONTAK KAMI";
        footerh3[1].innerHTML = "Kirim Kami Pesan";
        footerh3[3].innerHTML = "Telepon Kami";
        footerh3[5].innerHTML = "Kami di Sosial Media";

        for (let i = 0; i < 9; i++) {
            availableStock = Math.floor(Math.random() * (100 - 1 + 1)) + 10;
            pertama[availArray[i]].innerHTML = "Stok yang Tersedia : " + availableStock;
            kedua[sizeArray[i]].innerHTML = "Ukuran : (2x2)m";
            buyButton[i].innerHTML = "Beli";
        }
    }

    function changeEng() {
        footerh3[0].innerHTML = "CONTACT US";
        footerh3[1].innerHTML = "Send Us Message";
        footerh3[3].innerHTML = "Call Us";
        footerh3[5].innerHTML = "We Are Social";

        for (let i = 0; i < 9; i++) {
            availableStock = Math.floor(Math.random() * (100 - 1 + 1)) + 10;
            pertama[availArray[i]].innerHTML = "Available Stock : " + availableStock;
            kedua[sizeArray[i]].innerHTML = "Size : (2x2)m";
            buyButton[i].innerHTML = "Buy";
        }
    }

    function showSize() {
        whitebg.style.display = "block";
        sizebox.style.display = "block";
        dsgn.style.display = "none";

        sizebox.style.left = "410px";
        sizebox.style.top = "10px";
    }

    function closeButton() {
        sizebox.style.display = "none";
        whitebg.style.display = "none";
        tablesize.style.display = "none";
    }

    function showBuy() {
        let discountValue = Math.floor(Math.random() * (15 - 10 + 1)) + 10;
        let discountTotal = discountValue / 100 * 200;
        document.getElementById("discount").innerHTML = "Rp" + discountTotal;
        document.getElementById("totalPayment").innerHTML = "Rp" + (200 - discountTotal);

        whitebg.style.display = "block";
        buybox.style.display = "block";
        dlg.style.display = "none";
        dsgn.style.display = "none";
        sizebox.style.display = "none";

        buybox.style.top = "35px";
        buybox.style.left = "450px";
    }

    function dlgOKBuy() {
        whitebg.style.display = "none";
        buybox.style.display = "none";
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