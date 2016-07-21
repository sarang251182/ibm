<?php 
session_start();

//echo $_SESSION['survey']="0";

//echo $_GET['return'];
if (isset($_GET['return']))
{
    $_SESSION['survey']="1";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CFO INDIA</title>
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet">
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />
    <!-- Default Theme css file -->
    <link id="switcher" href="css/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet'
        type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>


</head>
<!--<body>
    <!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"></a>
<!-- END SCROLL TOP BUTTON -->
<!-------------- BEGIN HEADER SECTION ------------->
<header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
            <div class="navbar-header">
             
              <!-- LOGO -->
                    
              <!-- IMG BASED LOGO  -->
                        
                     
            </div>
            <div id="navbar" class="navbar-collapse collapse" style="float:right">
                       <a  href="#">  <img src="images/CFO%20Logo.PNG" style="    width: 220px;    margin-top: 5px;" /></a>
            </div>
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
<!------------- END HEADER SECTION ---------------->
<!------------- BEGIN BANNER SECTION -------------->
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="slider_area">
            <!-- Start super slider -->
            <div class='slider'>
                <div class='slide1'>
                    <div class="inside">
                        <h2 style="line-height: 35px;    font-size: 35px;">
                            IBM Planning Analytics for management solution for businesses- <span style="    font-size: 21px;">Powered by IBM</span><br />
                        </h2>
                        <p style="font-size: 15px; text-align:center">
                            The solution offers an interactive, customizable workspace that can be deployed
                            to all cost centre owners and business managers
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br />
<!----leverageexhisting--->
<br />
<div >

<img src="images/Capture.PNG" style="padding:1%; width:100%;"/>
</div>


<div class="container">
    <div class="row" style="padding-top: 7%;">
        <!-- Start about us area -->
        <div >
         <br />
        <div class="col-lg-5 col-md-5 col-sm-5 effect" style=" min-height:608px;">
            <div class="aboutus_area wow fadeInLeft">
                <img src="images/whitepaper.jpg"  style="width:100%;    border: 2px solid #676464; margin-top:4%;" />
                <br />
                <br />
                <h2 style="font-size: 19px; font-weight: 700; text-align: left">
                    Seven capabilities in Performance Management-for a word of volatility, uncertainty
                    and risk</h2>
                <p style="text-align: left;">
                    In a global business environment characterised by heightened volatility, uncertainty
                    and risk, organisational decision making needs to be both fast and well informed.</p>
                <br />

                 <?php

                 if ($_SESSION['survey']== "1")
                {?>
                
                <a href="CFO 2.0-Infographic.pdf" class="btn btn-lg btn-primary" style="border-radius: 0px;
                    !important;">Download PDF File</a>
                <br />
                <br />
               <?php } else {?>
               
<a href="http://www.surveyanalytics.com/t/AI44yZONo2" class="btn btn-lg btn-primary" style="border-radius: 0px;!important;">Download PDF File</a>

               <?php } ?>


            </div>
        </div>
    </div>
        <div class="col-lg-2 col-md-2 col-sm-2">
        </div>

        <div class="effect">
        <div class="col-lg-5 col-md-5 col-sm-5 effect"  style="min-height:608px">
            <div class="newsfeed_area wow fadeInRight">


                <img src="images/IBM-Banner_577pxX426px.png" style="width:100%;    border: 2px solid #676464; margin-top:4%;" />
              
                 <br />
                <br />
                <h2 style="font-size: 19px; font-weight: 700; text-align: left">
                    Rise to the challenge of the next wave of disruption</h2>
                <p style="text-align: left;">
                    Scalable and flexible Financial Systems Architecture with fitness for purpose and
                    cloud enablement is becoming the norm.<br /></p>
                <br /><br /><br />


                <?php

                 if ($_SESSION['survey']== "1")
                {?>
                <a href="ASW12357USEN.PDF" class="btn btn-lg btn-primary" style="border-radius: 0px;!important;">Download PDF File</a>
                <br />
                <br />
               <?php } else {?>
<a href="http://www.surveyanalytics.com/t/AI44yZONo2" class="btn btn-lg btn-primary" style="border-radius: 0px;!important;">Download PDF File</a>

               <?php } ?>
                <!---<img src="images/Listicle.jpg" />
                <br />
                <br />
                <h2 style="font-size: 19px; font-weight: 700; text-align: left">
                    Cognitive can transform the finance function in 2016</h2>
                <p style="text-align: left;">
                    Cognitive computing—the best known example is IBM’s Watson platform—can greatly
                    improve a CFO’s ability to make quick, yet deeply insightful decisions.</p>
                <br />
                <a href="Listicle.pdf" class="btn btn-lg btn-primary" style="border-radius: 0px;---->
                
                </div>    
            </div>
        </div>
    </div>
</div>



      <div style="padding-top:3%; padding-bottom:3%;">
    <img src="images/text.jpg" style="width:100%;  padding:1%" />
  </div>

<div class="container">
    <div class="row" style="padding-top: 7%;">
<div class="col-lg-4 col-md-4 col-sm-4"></div>
 <div class="col-lg-5 col-md-5 col-sm-5 effect">
        
    <img src="images/corporate-business-leader.jpg" style="border: 2px solid #676464; width:100%; " />

     <h2 style="font-size: 19px; font-weight: 700; text-align: center">
                    Cognitive can transform the finance function in 2016</h2>
                <p style="text-align: center;">
                    Cognitive computing—the best known example is IBM’s Watson platform—can greatly
                    improve a CFO’s ability to make quick, yet deeply insightful decisions.</p>
                <br />
               

                  <?php

                 if ($_SESSION['survey']== "1")
                {?>
                <a href="ASW12357USEN.PDF" class="btn btn-lg btn-primary" style="border-radius: 0px;!important;">Download PDF File</a>
                <br />
                <br />
               <?php } else {?>
<a href="http://www.surveyanalytics.com/t/AI44yZONo2" class="btn btn-lg btn-primary" style="border-radius: 0px;!important;">Download PDF File</a>

               <?php } ?>
                <br />
</div>
<div class="col-lg-3 col-md-3 col-sm-3"></div>
</div>
</div>


<br />
<br />




<div class="footer_bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <p style="text-align: center !important; color: white; padding-top: 10px;">
                    Copyright &copy; 2016 Nine Dot Nine Mediaworx Pvt.Ltd All Rights Reserved</p>
            </div>
        </div>
    </div>
</div>
<!-------js------------->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- For smooth animatin  -->
<script src="js/wow.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="js/slick.min.js"></script>
<!-- superslides slider -->
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.animate-enhanced.min.js"></script>
<script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>
<!-- for circle counter -->
<script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
<!-- Custom js-->
<script src="js/custom.js"></script>
<script></script>
</body>
</html>
