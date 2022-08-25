<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <title>tradeimex</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <style>
        #sp{
            background-color:#5abaff  ;
            border-radius: 5%;
            color: white;
            padding: 5px;
            border-color: #5abaff;
        }
        #dp{ 
            background-color:#5abaff  ;
            border-radius: 5%;
            color: white;
            padding: 5px;
            border-color: #5abaff;
        }
       @media (max-width:428px) {
        .view{
            top:-200px;
            left:-20%;
        }
        .big-title{
            padding-top: 100px;
        }
       }
        para{
            margin-top:20%
        }
        .fadeimg{
            margin-top: -20%;
        }
        .affili_for_area{
            width: 75%;
    display: block;
    margin: 0 auto;
    padding: 40px 0;
    text-align: center;
        }
        .datrform{
            width: 100%;
    padding: 20px 0;
    margin-bottom: 15px;

        }
        @media (max-width:428px) {
            .fadeimg{
                margin-left:-90px
            }
            .fadeimg2{
                margin-right:-60px
            }
          .uparwaliphoto{
            width:50%;
            margin-top: -40%;
            margin-left: 10%;
          }
          #topimg{
            width:90%
          }
        }

    </style>
</head>

<body>
    <div id="header-holder" class="main-header">

        <div class="bg-animation">
            <div class="graphic-show">
                <div class="table">
                <model-viewer class="view" style="height: 300px; width: 300px; float: right;" src ="./model/Table.glb"     loading="eager"  disable-zoom 
               enable-pan  reveal="auto" auto-rotate rotation-per-second="40deg" ></model-viewer>
          
                    <!-- <img class="uparwaliphoto" width="100%" src="./model/img/3dmap.png"> -->
                </div>

            </div>
        </div>

        <nav id="nav" class="navbar navbar-default navbar-full">
            <div class="container-fluid">
                <div class="container container-nav">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="navbar-header">
                                <button aria-expanded="false" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="logo-holder" href="index.html">
                                    <div class="logo" style="width:125px;height:80px; border-radius: 10%;"></div>
                                </a>
                            </div>
                            <div style="height: 1px;" role="main" aria-expanded="false" class="navbar-collapse collapse" id="bs">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="dropdown unity-menu">
                                        <a href="about.html">Aboutus <i class="fas fa-caret-down"></i></a>
                                        <ul class="dropdown-menu dropdown-unity">
                                            <li>
                                                <a class="unity-link" href="about.php">
                                                    <div class="unity-box">
                                                        <div class="unity-icon">
                                                            <img src="images/service-icon1.svg" alt="">
                                                        </div>
                                                        <div class="unity-title">
                                                            About us
                                                        </div>
                                                        <div class="unity-details">
                                                            details
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="unity-link" href="clients.php">
                                                    <div class="unity-box">
                                                        <div class="unity-icon">
                                                            <img src="images/service-icon2.svg" alt="">
                                                        </div>
                                                        <div class="unity-title">
                                                            Clients
                                                        </div>
                                                        <div class="unity-details">
                                                            details
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="unity-link" href="faq.php">
                                                    <div class="unity-box">
                                                        <div class="unity-icon">
                                                            <img src="images/service-icon3.svg" alt="">
                                                        </div>
                                                        <div class="unity-title">
                                                            FAQS
                                                        </div>
                                                        <div class="unity-details">
                                                            details
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <!-- <a class="unity-link" href="vpshosting.html">
                                                <div class="unity-box">
                                                    <div class="unity-icon">
                                                        <img src="images/service-icon4.svg" alt="">
                                                    </div>
                                                    <div class="unity-title">
                                                        VPS Servers
                                                    </div>
                                                    <div class="unity-details">
                                                        Scalable hosting
                                                    </div>
                                                </div>
                                            </a> -->
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="products.php">Products <i class="fas fa-caret-down"></i></a>
                                        <ul class="dropdown-menu">
                                      <li><a href="statsdata.php">Statistical Data</a></li>
                                      <li><a href="customsdata.php">Customs Data</a></li>
                                      <li><a href="analytical.php">Analytical Customs Report</a></li>
                                      <li><a href="bl.php">B/L Report</a></li>

                                    </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="gtdtable.php">Countries Covered <i class="fas fa-caret-down"></i></a>
                                        <ul class="dropdown-menu">
                                      <li><a href="asiatd.php">Asia Trade Data</a></li>
                                      <li><a href="africatd.php">Africa Trade Data</a></li>
                                      <li><a href="metd.php">CIS Trade Data</a></li>
                                      <li><a href="etd.php">Europe Trade Data</a></li>
                                      <li><a href="natd.php">North America Trade Data</a></li>
                                      <li><a href="satd.php">South America Trade Data</a></li>
                                    </ul>
                                    </li>
                                    <li><a href="contactus.php">Contact us</a></li>
                                    <!-- <li><a class="login-button" href="signin.html">Login</a></li> -->
                                    <li class="support-button-holder support-dropdown">
                                        <a class="support-button" href="#">Blog</a>
                                        <!-- <ul class="dropdown-menu">
                                      <li><a href="#"><i class="fas fa-phone"></i>Toll-Free  08-197-435-01</a></li>
                                      <li><a href="#"><i class="fas fa-comments"></i>Start a Live Chat</a></li>
                                      <li><a href="#"><i class="fas fa-ticket-alt"></i>Open a ticket</a></li>
                                      <li><a href="#"><i class="fas fa-book"></i>Knowledge base</a></li>
                                    </ul> -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div id="top-content" class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="main-slider">
                            <div class="slide">

                                <div class="spacer"></div>
                                <div class="big-title"><span>PARTNERS
                                    </span><br></div>
                                <p>An ISO 9001:2015 Certified Company, provides Import Export Data, Trade Information, and Competitive Market Intelligence Reports from 60+ Countries' Customs, which are extracted from Invoices, Shipping Bills, Bill of Lading, and Bill of Entries.</p>

                                <div class="btn-holder">
                                    <a href="signup.html" class="ybtn ybtn-header-color">About</a><a href="contact.html" class="ybtn ybtn-white ybtn-shadow">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="padding-top: 10%;">
    <div class="row">
        <div class="col-md-5 mx-8 ">
            <img id="topimg"  height="400px" width="400px" src="./model/img/products/stage.svg" data-aos="fade-right">
        </div>
        <div class="col-md-3 " style="text-align:center ; float:right; margin-right:8%">
            <h4 style="color: black ; text-align:center
            ">Automate product decisions in every stage of the product. Consolidate different tools under one smart platform. AI removes the need for complex tools and enables everyone in the organization.</h4>
            <P id="para">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur et voluptatum accusamus adipisci nam laudantium laboriosam qui harum, recusandae velit enim aut delectus repudiandae officiis esse reprehenderit sapiente! Doloribus adipisci nam ea repudiandae at. Laudantium tempora quibusdam molestias, excepturi incidunt, esse saepe, corrupti dolore harum molestiae ipsa placeat quae repellat.</P>
            <p id="para">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit, quae! Molestias, reiciendis vel. Illo porro exercitationem molestias eaque illum esse veritatis. Veritatis nam, accusantium in quas laborum omnis minus illo. Quas mollitia praesentium pariatur voluptatem dolorum, asperiores ut ullam, consequatur molestias dolores tempore ducimus suscipit in sapiente enim, officia necessitatibus?</p>   
    </div>
    </div>
    <!-- <div class="row" style="text-align:center ; background-color:#E3E3E3; padding:8%;opacity:1">
        <h1>Identify the features users want. Uncover new product opportunities. Shorten product launch cycles. All in one platform
</h1>
    </div> -->
        
    </div>
    <div class="container-fluid" style="padding-top: 10%;">
    <div class="row">
    <div class="col-md-3 " style="text-align:center ; float:right; margin-right:25%">
        <img class="fadeimg2" height="400px" width="400px" src="./model/img/products/data.png" style="margin-top:-20%" data-aos="fade-left">
           
        </div>
        <div class="col-md-5 mx-5 " style="margin-left:5% ;">
        <h4 style="color: black ; text-align:center;
            ">Product management</h4>
            <P  style="text-align:center ;">Monitor your products in the market and across channels.</P>
            <p  style="text-align:center ;">Gauge positive and negative changes in your product and product category.</p>   
            <p style="text-align:center ;">Track features, use cases, and wish lists. </p>     
        </div>
        
            
        </div>
    </div>
    <div class="container text-center">
        <h1 style="color:hsl(201.43, 13.21%, 58.43%) ; font-weight:bolder">APPLY AS</h1>
    </div>
    <div class="container-fluid">
    <div class="row text-center" style="background-color:hsl(205.71, 30.43%, 95.49%) ;">
        <button id="sp">SALES PARTNER</button>
        <button id="dp">Data PARTNER</button>
    </div>
    
    </div>
    
    <div class="col-md-12" style="background-color:white ; padding-bottom:50px">
<div class="affili_for_area" id="salesform">
<div class="datrform">
<h2>Partnership Program Request Form</h2>
</div>
<!--<form name="addsubmit" method="post" action="">-->
<form name="partner_enquiry" class="common-validate" method="post" onsubmit="return false;" id="resetform_1" novalidate="novalidate">
<div class="form-row">
<div class="form-group  col-md-6">
<input type="text" class="form-control" id="inputName" placeholder="NAME" name="name">

<!-- <select class="form-control valid" id="exampleFormControlSelect1" aria-invalid="false">
<option selected="selected" name="partner_type">Apply as</option>
<option>Sales Partners</option>
<option>Data Partners</option>
</select> -->
</div>
<div class="form-group col-md-6">
<input type="text" class="form-control" id="inputName" placeholder="LASTNAME" name="name">
</div>
<div class="form-group col-md-6">
<input type="email" class="form-control" id="inputEmail" placeholder="EMAIL ID" name="email">
</div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
<input type="number" class="form-control" name="contact" id="inputPhonenumber" placeholder="CONTACT NO.">
</div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
<textarea type="text" class="form-control" id="inputAbout" name="message" placeholder="MESSAGE.." style="width: 100%; height: 100px;"></textarea>
</div>
<div class="form-group col-md-6">
<div class="form-group">
<input type="text" class="form-control" id="inputCompany" placeholder="COMPANY NAME" name="company">
</div>
<div class="form-group">
<input type="text" class="form-control" id="inputLinkedin" name="country" placeholder="WEBSITE OR LINKEDIN PROFILE">
</div>
</div>
</div>      
<!--<button type="submit" class="btn btn-submitbtn">SUBMIT</button>-->
<!--<input type="submit" name="submit" class="btn btn-submitbtn" value="Submit">-->
<div id="partnerRsp">
<input type="submit" value="Submit" onclick="submitPartnerQuery()" class="btn btn-submitbtn">
</div>
</form>
</div>
</div>

    
    
<?php include 'footer.php'?>
   <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-slider.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/main.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init({
                delay:500,
                duration:800
                
            });
        </script>
        
</body>

</html>