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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
        para{
            margin-top:20%
        }
        .fadeimg{
            margin-top: -20%;
        }
        @media (max-width:428px) {
          
          .uparwaliphoto{
            width:50%;
            margin-bottom: 40%;
            margin-left: 50%;
            display:none
          }
          #header-holder.main-header #top-content .big-title span{
            font-size: 25px;
             
          }
          #contactformm{
            text-align: center;
            width: 80%;
            float: right;
            left: -30px;
        }
        
        }
        .makeitblue{
            color:#0a5dd3 ;
            font-weight: bolder;
        }
        p{
            color: #0D1E30;
            font-weight: bolder;
        }
        label{
            color: #0a5dd3 ;
        }
        
    </style>
</head>

<body>
    <div id="header-holder" class="main-header">

        <div class="bg-animation">
            <div class="graphic-show">
                <div class="model">
                    <img class="uparwaliphoto" width="100%" src="./model/img/contactus.png" style="margin-top:-20% ;">
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
                                                <a class="unity-link" href="about.html">
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
                                                <a class="unity-link" href="cloudhosting.html">
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
                                <div class="big-title"><span>CONTACT US
                                    </span><br></div>
                                <p>An ISO 9001:2015 Certified Company, provides Import Export Data, Trade Information, and Competitive Market Intelligence Reports from 60+ Countries' Customs, which are extracted from Invoices, Shipping Bills, Bill of Lading, and Bill of Entries.</p>

                                <div class="btn-holder">
                                    <a href="about.html" class="ybtn ybtn-header-color">About</a><a href="contactus.php" class="ybtn ybtn-white ybtn-shadow">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    

    <div class="row" style="margin:0px">
    <div class="col-md-5 text-left" style="margin-left: 5% ;">
        
    <h2 class="makeitblue" >Get in touch!</h2 >
    <p>Have a question? Concern? Request? We’d love to hear from you. Connect with us through the following ways.</p>
    <h2 class="makeitblue" >Address:</h2 >
    <p>372, 3rd floor, RU BLOCK, Pitampura 110034, New Delhi</p>
    <h2 class="makeitblue" >Phone:</h2 >
    <p>+91-9319646667</p>
    <p>+91-7042034462</p>
    <h2 class="makeitblue" >Email</h2 >
    <p>info@tradeimex.in</p>
    <p>sales@tradeimex.in</p>
    <h2 class="makeitblue" >
Social:</h2 >
</div>
    <div class="col-md-5 col-sm-12" id="contactformm" >
    <form action="mail.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6 col-sm-3 col-xs-6 text-center">
      <label for="inputName4 " style="color:#0a5dd3  ;">Name</label>
      <input type="Name" class="form-control" id="inputEmail4" placeholder="Name" name="name">
    </div>
    <div class="form-group col-md-6 col-sm-3 col-xs-6 text-center">
      <label for="inputEmail4" style="color:#0a5dd3 ;">email</label>
      <input type="email" class="form-control"  id="inputEmail4" placeholder="email" name="email">
    </div>
  </div>
  
  <div class="form-group col-md-6 col-sm-3 text-center col-xs-6" >
    <label for="inputAddress" style="color:#0a5dd3 ;">Phone</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Phone" name="number">
  </div>
  <div class="form-group col-md-6 col-sm-3 text-center col-xs-6" >
    <label for="inputAddress2" style="color:#0a5dd3 ;">Company</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Company Name" name="company">
  </div>
    <div class="form-group text-center ">
      <label for="inputState" style="color:#0a5dd3 ;">IMPORT/EXPORT</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>IMPORT</option>
        <option>EXPORT</option>
        <option>BOTH</option>
      </select>
    </div>
    <div class="form-group text-center">
    <label for="exampleFormControlTextarea1" style="color:#0a5dd3 ;">Your Message</label>
    <textarea class="form-control" id="Message" rows="3" name="message"></textarea>
  </div>
  <button type="submit"   class="ybtn ybtn-header-color">SUBMIT</button>
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