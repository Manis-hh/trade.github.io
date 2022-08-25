<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
<title>tradeimex</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.min.css">
<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
<link rel="stylesheet" type="text/css" href="css/slick.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
<style>
    #smtabz{
        display: none;
    }
    .countries{
        padding-top:60vh ;
    }
    
    .continents{
       font-size:8px ;
       } 
    td{
        text-align: center;
       
        padding: 10px;
    }
    @media (max-width:428px) {
       #tabz {
        display: none;
       } 
       #smtabz{
        display: block;
    }
    #bs{
        padding-bottom: 400px;
    }
    .countries{
        padding-top:60vh ;
    }
    
        #row2{
            margin-top: -216px;
            margin-left: 120px;
            
        }
       
        #row1{
            margin-left: -100px;
        }
        #featureholder{
            margin-left: -20px;
        }
        .model{
            height: 50%;
            width: 50%;
            margin-top: -70%;
            margin-left: 40%;
        }
        .model-viewer{
            height: 50%;
            width: 50%;
        }
        .bg-animation{
            height: 50%;
            width: 50%;
            
        }
        .big-title.animated.animation-delay1{
            margin-top: 80%;
        }
    }
    .col-md-2{
        padding: 12px 0px; 
    }
    .col-xs-2{
        padding: 10px 0px;
        text-align: center; 
    }

</style>
</head>

<body>    
<div id="header-holder" class="main-header">

    <div class="bg-animation">
        <div class="graphic-show">
            <div class="model" data-aos="fade-left"  ><model-viewer class="view" style="height: 300px; width: 300px; float: right;" src ="./model/Earth.glb"    loading="eager"  disable-zoom 
              enable-pan  reveal="auto" auto-rotate rotation-per-second="20deg" ></model-viewer></div>
           
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
                            <a class="logo-holder" href="index.php">
                                <div class="logo" style="width:125px;height:80px; border-radius: 10%;"></div>
                            </a>
                        </div>
                        <div style="height: 1px;" role="main" aria-expanded="false" class="navbar-collapse collapse" id="bs">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="index.php">Home</a></li>
                                <li class="dropdown unity-menu">
                                    <a href="about.php">Aboutus <i class="fas fa-caret-down"></i></a>
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
                            <div class="big-title">
                                <a href="gtdtable.php"><span>Global Trade From 70+ Countries
                            </span><br></a></div>
                            <p>An ISO 9001:2015 Certified Company, provides Import Export Data, Trade Information, and Competitive Market Intelligence Reports from 60+ Countries' Customs, which are extracted from Invoices, Shipping Bills, Bill of Lading, and Bill of Entries.</p>
                            
                            <div class="btn-holder">
                                <a href="about.html" class="ybtn ybtn-header-color">About</a><a href="contactus.php" class="ybtn ybtn-white ybtn-shadow">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-auto">
                    
                   
                </div>
            </div>
        </div>
    </div>
</div>
<h1 style="text-align: center ; padding:10px" >IMPORT EXPORT DATA</h1>
<p style="text-align: center ; padding:10px">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit quaerat omnis totam explicabo illo temporibus eum doloremque, repellat atque repudiandae dolores ut iure earum itaque id excepturi, doloribus ipsa velit?</p>
<?php include 'data.php';?>
<div id="features" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row-title">Our hosting features</div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit dolores dolore saepe repellat maxime iure, nulla ratione deleniti. Illum impedit repellat, perspiciatis velit minima dignissimos expedita minus tempore iusto quam!</p>
                <div class="row-subtitle"></div>
            </div>
        </div>
        <div class="row rtl-cols" >
            <div class="col-sm-12 col-md-6">
                <div id="features-links-holder" >
                    <div class="icons-axis">
                        <img src="./model/img/Original on Transparent.webp" height="50%" width="250%" alt="">
                        
                    </div>
                    <div class="feature-icon-holder feature-icon-holder1 " data-id="1">
                        <div class="animation-holder"><div class="special-gradiant"></div></div>
                        <div class="feature-icon"><img src="./model/img/Africa.png " height="40px" width="40px" style="margin-top: -10px;"></div>
                        <div class="feature-title">Afria</div>
                    </div>
                    <div class="feature-icon-holder feature-icon-holder2" data-id="2">
                        <div class="animation-holder"><div class="special-gradiant"></div></div>
                        <div class="feature-icon"><img src="./model/img/North-america.png" height="40px" width="40px" style="margin-top: -10px; margin-left:-10px" ></div>
                        <div class="feature-title">America</div>
                    </div>
                    <div class="feature-icon-holder feature-icon-holder3" data-id="3">
                        <div class="animation-holder"><div class="special-gradiant"></div></div>
                        <div class="feature-icon"><img src="./model/img/Asia.png" height="40px" width="40px" style="margin-top:-10px ;"></div>
                        <div class="feature-title">Asia</div>
                    </div>
                    <div class="feature-icon-holder feature-icon-holder4" data-id="4">
                        <div class="animation-holder"><div class="special-gradiant"></div></div>
                        <div class="feature-icon"><img src="./model/img/CIS.png" height="40px" width="40px "style="margin-top:-10px ;"></div>
                        <div class="feature-title"> CIS</div>
                    </div>
                    <div class="feature-icon-holder feature-icon-holder5" data-id="5">
                        <div class="animation-holder"><div class="special-gradiant"></div></div>
                        <div class="feature-icon">
                            <img src="./model/img/europe.png" height="40px" width="40px" style="margin-top:-10px ;"></div>
                        <div class="feature-title">Europe</div>
                    </div>
                    
                </div>
            </div>
            <!---Africa-->
            <div class="col-sm-12 col-md-6">
                <div id="features-holder" >
                    
                    <div class="feature-box feature-d1 show-details">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="htfy htfy-worldwide"></i></span>
                            <span class="feature-title">Countries Covered</span>
                        </div>
                        <div class="feature-details" >
                            <!-- mobile section -->
                        <div class="conatiner" id="smtabz">
                                 
                        <table >
                                     
                        <tr>
                                        <td>
                                        <p>botswana</p><img src="./globaltradedata/botswana_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                        <td>
                                        <p>ethiopia</p><img src="./globaltradedata/ethiopia_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                        <td>
                                        <p>Kenya</p><img src="./globaltradedata/kenya_rectangular_icon_with_shadow_64.png" alt=""> 
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <p>IvoryCoast</p><img src="./globaltradedata/cote_d_Ivoire_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                        <td>
                                        <p>lesotho</p><img src="./globaltradedata/lesotho_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                        <td>
                                        <p>Namibia</p><img src="./globaltradedata/namibia_rectangular_icon_with_shadow_64.png" alt=""> 
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <p>Nigeria</p><img src="./globaltradedata/nigeria_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                        <td>
                                        <p>Zimbabwe</p><img src="./globaltradedata/zimbabwe_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                        <td>
                                        <p>Uganda</p><img src="./globaltradedata/uganda_rectangular_icon_with_shadow_64.png" alt=""> 
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <p>S.Africa</p><img src="./globaltradedata/south_africa_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                    </tr>
                         
                                </table>
                                <table>
                                <tr><td style="font-size:10px ;"><div class="represent_custom" ></div>
                                        Detailed Customs </td>
                                        <td style="font-size:10px ;"><div class="represent_statistical" ></div>
                                        Statistical Data </td></tr>
                           
                                </table>                               
                            </div>
                            <!-- mobile section closed -->
                        <div class="row text-center" style="margin:0px ;" id="tabz">
      <div class="col-md-2 continents" id="row1"   >
    <p  style="font-size:12px ; font-weight:400">botswana</p><img src="./globaltradedata/botswana_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2  continents" id="row1"   >
    <p style="font-size:12px ; font-weight:400">ethiopia</p><img src="./globaltradedata/ethiopia_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2 continents"  id="row1" >
    <p style="font-size:12px ; font-weight:400">Kenya</p><img src="./globaltradedata/kenya_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2 continents" id="row1"  >
    <p style="font-size:12px ; font-weight:400">IvoryCoast</p><img src="./globaltradedata/cote_d_Ivoire_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2 continents"  id="row1"  >
    <p style="font-size:12px ; font-weight:400">lesotho</p><img src="./globaltradedata/lesotho_rectangular_icon_with_shadow_64.png" alt=""> 
                
    </div>
    <div class="col-md-2  continents" id="row2"   >
    <p style="font-size:12px ; font-weight:400">Namibia</p><img src="./globaltradedata/namibia_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="row" style="margin:0px ;" >
    
    <div class="col-md-2 continents" id="row2"  >
    <p style="font-size:12px ; font-weight:400">Nigeria</p><img src="./globaltradedata/nigeria_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2  continents" id="row2"  >
    <p style="font-size:12px ; font-weight:400">Zimbabwe</p><img src="./globaltradedata/zimbabwe_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    
    <div class="col-md-2 continents"   id="row2">
    <p style="font-size:12px ; font-weight:400">Uganda</p><img src="./globaltradedata/uganda_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2 continents"   id="row2">
    <p style="font-size:12px ; font-weight:400">S.Africa</p><img src="./globaltradedata/south_africa_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
   
    </div>

    <table style="padding:5px; float:right" >
                            <tr><td><div class="represent_custom" ></div>
                                        Detailed Customs </td>
                                        <td><div class="represent_statistical" ></div>
                                        Statistical Data </td></tr>
                            </table>
                         
</div>
    </div>
                    </div>
                    <div class="feature-box feature-d2">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="htfy htfy-cogwheel"></i></span>
                            <span class="feature-title">Countries_Covered</span>
                        </div>
                        <div class="conatiner" id="smtabz">
                        <table >
                                
                                    <tr>
                                        <td>
                                        <p>Cannada</p><img src="./globaltradedata/canada_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                        <td>
                                        <p>costa_rica</p><img src="./globaltradedata/costa_rica_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                        <td>
                                        <p>El Savador</p><img src="./globaltradedata/el_salvador_rectangular_icon_with_shadow_64.png" alt=""> 
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <p>Guatemala</p><img src="./globaltradedata/guatemala_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                        <td>
                                        <p>Honduras</p><img src="./globaltradedata/honduras_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                        <td>
                                        <p>Mexico</p><img src="./globaltradedata/mexico_rectangular_icon_with_shadow_64.png" alt=""> 
             
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <p>Panama</p><img src="./globaltradedata/panama_rectangular_icon_with_shadow_64.png" alt=""> 
             
    
                                        </td>
                                        <td>
                                        <p>US</p><img src="./globaltradedata/united_states_of_america_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                        <td>
                                        <p>Argentina</p><img src="./globaltradedata/argentina_rectangular_icon_with_shadow_64.png" alt=""> 
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <p>Bolivia</p><img src="./globaltradedata/bolivia_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                        <td>
                                        <p>Brazil</p><img src="./globaltradedata/brazil_rectangular_icon_with_shadow_64.png" alt=""> 
   
                                        </td>
                                        <td>
                                        <p>Chile</p><img src="./globaltradedata/chile_rectangular_icon_with_shadow_64.png" alt=""> 
   
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <p>Colombia</p><img src="./globaltradedata/colombia_rectangular_icon_with_shadow_64.png" alt=""> 
                                    </td>
                                    <td>
                                    <p>Ecuador</p><img src="./globaltradedata/ecuador_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                    </td>
                                    <td>
                                    <p>Paraguay</p><img src="./globaltradedata/paraguay_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                    </td>
                                    </tr>
                                    <tr>
                                    <td> <p>peru </p> <img src="./globaltradedata/peru_rectangular_icon_with_shadow_64.png" alt=""></td>
                                      <td>
                                      <p>Urgauy</p><img src="./globaltradedata/uruguay_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                      </td>
                                      <td>
                                      <p>Venezuela</p><img src="./globaltradedata/venezuela_rectangular_icon_with_shadow_64.png" alt=""> 
                                
                                      </td>  
                                    </tr>
                                </table> 
                                <table>
                                <tr><td style="font-size:10px ;"><div class="represent_custom" ></div>
                                        Detailed Customs </td>
                                        <td style="font-size:10px ;"><div class="represent_statistical" ></div>
                                        Statistical Data </td></tr>
                           
                                </table>                               
                                     
                            </div>
                            <!-- mobile section closed -->
    
                        <div class="feature-details text-center" id="tabz">
                         <!--AMerica-->
                         <div class="row "  >
      <div class="col-md-2 continents"   id="adjust">
    <p  style="font-size:12px ; font-weight:400">Cannada</p><img src="./globaltradedata/canada_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2  continents"   >
    <p  style="font-size:12px ; font-weight:400">costa_rica</p><img src="./globaltradedata/costa_rica_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2 continents" id="adjust"  >
    <p  style="font-size:12px ; font-weight:400">El Savador</p><img src="./globaltradedata/el_salvador_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2 continents"  >
    <p  style="font-size:12px ; font-weight:400">Guatemala</p><img src="./globaltradedata/guatemala_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2 continents "   id="adjust">
    <p  style="font-size:12px ; font-weight:400">Honduras</p><img src="./globaltradedata/honduras_rectangular_icon_with_shadow_64.png" alt=""> 
                
    </div>
    <div class="col-md-2  continents"   >
    <p style="font-size:12px ; font-weight:400">Mexico</p><img src="./globaltradedata/mexico_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="row" style="margin:0px ; margin-top:-300px" >
    
    <div class="col-md-2 continents" id="adjust"  >
    <p style="font-size:12px ; font-weight:400">Panama</p><img src="./globaltradedata/panama_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2  continents"   >
    <p style="font-size:12px ; font-weight:400">US</p><img src="./globaltradedata/united_states_of_america_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    
    <div class="col-md-2 continents"   id="adjust">
    <p style="font-size:12px ; font-weight:400">Argentina</p><img src="./globaltradedata/argentina_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2 continents"   id="adjust">
    <p style="font-size:12px ; font-weight:400">Bolivia</p><img src="./globaltradedata/bolivia_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2 continents"   id="adjust">
    <p style="font-size:12px ; font-weight:400">Brazil</p><img src="./globaltradedata/brazil_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2 continents"   id="adjust">
    <p style="font-size:12px ; font-weight:400">Chile</p><img src="./globaltradedata/chile_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
   
    </div>

    <div class="row" style="margin:0px ;" >
    
    <div class="col-md-2 continents" id="adjust"  >
    <p style="font-size:12px ; font-weight:400">Colombia</p><img src="./globaltradedata/colombia_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2  continents"   >
    <p style="font-size:12px ; font-weight:400">Ecuador</p><img src="./globaltradedata/ecuador_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    
    <div class="col-md-2 continents"   id="adjust">
    <p style="font-size:12px ; font-weight:400">Paraguay</p><img src="./globaltradedata/paraguay_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2 continents"   id="adjust">
    <p style="font-size:12px ; font-weight:400">Peru</p><img src="./globaltradedata/peru_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2 continents"   id="adjust">
    <p style="font-size:12px ; font-weight:400">Urgauy</p><img src="./globaltradedata/uruguay_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2 continents"   id="adjust">
    <p style="font-size:12px ; font-weight:400">Venezuela</p><img src="./globaltradedata/venezuela_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <table style="padding:5px; float:right" >
                            <tr><td><div class="represent_custom" ></div>
                                        Detailed Customs </td>
                                        <td><div class="represent_statistical" ></div>
                                        Statistical Data </td></tr>
                            </table>
                                              
    </div>

</div>

                        <!--Asia-->
                    </div>
                    </div>
                    <div class="feature-box feature-d3">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="htfy htfy-location"></i></span>
                            <span class="feature-title">Countries_Covered</span>
                            </div>
                        <div class="feature-details" >
                        <div class="conatiner" id="smtabz">
                                <table >
                                    <tr>
                                        <td>
                                        <p>bangladesh</p><img src="./globaltradedata/bangladesh.png" alt=""> 
     
                                        </td>
                                        <td>
                                        <p>China</p><img src="./globaltradedata/china_rectangular_icon_with_shadow_64.png" alt=""> 
     
                                        </td>
                                        <td>
                                        <p>Indonesia</p><img src="./globaltradedata/indonesia_rectangular_icon_with_shadow_64.png" alt=""> 
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <p>Mangolia</p><img src="./globaltradedata/mongolia_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                        <td>
                                        <p>srilanka</p><img src="./globaltradedata/sri_lanka_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                        <td>
                                            <a href="./countries/pakistan.php">
                                            <p>pakistan</p><img src="./globaltradedata/pakistan_rectangular_icon_with_shadow_64.png" alt=""> 

                                            </a>
             
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <p>phillipines</p><img src="./globaltradedata/philippines_rectangular_icon_with_shadow_64.png" alt=""> 
             
    
                                        </td>
                                        <td>
                                        <p>Turkey</p><img src="./globaltradedata/turkey_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                        <td>
                                        <p>Malaysia</p><img src="./globaltradedata/malaysia_rectangular_icon_with_shadow_64.png" alt=""> 
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <p>Singapore</p><img src="./globaltradedata/singapore_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                        <td>
                                        <p>thailand</p><img src="./globaltradedata/thailand_rectangular_icon_with_shadow_64.png" alt=""> 
   
                                        </td>
                                        <td>
                                        <p>Japan</p><img src="./globaltradedata/japan_rectangular_icon_with_shadow_64.png" alt=""> 
   
                                        </td>
                                    </tr>
                                   
                                </table>
                                <table>
                                <table>
                                <tr><td style="font-size:10px ;"><div class="represent_custom" ></div>
                                        Detailed Customs </td>
                                        <td style="font-size:10px ;"><div class="represent_statistical" ></div>
                                        Statistical Data </td></tr>
                           
                                </table>                               
                                   
                            </div>
                            <!-- mobile section closed -->
   
                        <div class="row text-center" id="tabz" style="margin: 0; "  >
    <div class="col-md-2 continents"   id="adjust">
    <p style="font-size:12px ; font-weight:400">bangladesh</p><img src="./globaltradedata/bangladesh.png" alt=""> 
             
    </div>
    <div class="col-md-2  continents"   >
    <p style="font-size:12px ; font-weight:400">China</p><img src="./globaltradedata/china_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2 continents" id="adjust"  >
    <p style="font-size:12px ; font-weight:400">Indonesia</p><img src="./globaltradedata/indonesia_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2  continents"   >
    <p style="font-size:12px ; font-weight:400">Mangolia</p><img src="./globaltradedata/mongolia_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2  continents"   >
    <p style="font-size:12px ; font-weight:400">Shri lanka</p><img src="./globaltradedata/sri_lanka_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    
    <div class="col-md-2 continents" id="adjust"  >
        <a href="./countries/pakistan.php">
        <p style="font-size:12px ; font-weight:400">pakistan</p><img src="./globaltradedata/pakistan_rectangular_icon_with_shadow_64.png" alt=""> 

        </a>
             
    </div>
   
</div>
<div class="row text-center" style="margin:0px ;" id="tabz" >
 <div class="col-md-2 continents"  >
    <p style="font-size:12px ; font-weight:400">phillipines</p><img src="./globaltradedata/philippines_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2 continents"  >
    <p style="font-size:12px ; font-weight:400">Turkey</p><img src="./globaltradedata/turkey_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2 continents"  >
    <p style="font-size:12px ; font-weight:400">Malaysia</p><img src="./globaltradedata/malaysia_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2 continents"  >
    <p style="font-size:12px ; font-weight:400">Singapore</p><img src="./globaltradedata/singapore_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2 continents"  >
    <p style="font-size:12px ; font-weight:400">Japan</p><img src="./globaltradedata/japan_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2 continents"  >
    <p style="font-size:12px ; font-weight:400">Thailand</p><img src="./globaltradedata/thailand_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <table style="padding:5px; float:right">
                            <tr><td><div class="represent_custom" ></div>
                                        Detailed Customs </td>
                                        <td><div class="represent_statistical" ></div>
                                        Statistical Data </td></tr>
                            </table>
        
    </div>
                       
    
    

                        </div>
                    </div>
                    <div class="feature-box feature-d4">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="htfy htfy-download"></i></span>
                            <span class="feature-title">Countries_Covered</span>
                           
                        </div>
                        <div class="feature-details ">
                        <div class="conatiner" id="smtabz">
                                <table >
                                    <tr>
                                        <td>
                                        <p>Venezuela</p><img src="./globaltradedata/venezuela_rectangular_icon_with_shadow_64.png" alt=""> 
             
    
                                        </td>
                                        <td>
                                        <p>Uzbekistan</p><img src="./globaltradedata/uzbekistan_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                        <td>
                                        <p>ukraine</p><img src="./globaltradedata/ukraine_rectangular_icon_with_shadow_64.png" alt=""> 
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <p>Russia</p><img src="./globaltradedata/russia_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                        <td>
                                        <p>Moldova</p><img src="./globaltradedata/moldova_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                        <td>
                                        <p>Kazakhastan</p><img src="./globaltradedata/kazakhstan_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                    </tr>
                                   
                                </table>
                                <table>
                                <tr><td style="font-size:10px ;"><div class="represent_custom" ></div>
                                        Detailed Customs </td>
                                        <td style="font-size:10px ;"><div class="represent_statistical" ></div>
                                        Statistical Data </td></tr>
                           
                                </table>                               
                                                            
                            </div>
                        
                            <div class="container-fluid text-center" id="tabz">  
             <div class="row text-center" style="margin:0px ;" >
    
    <div class="col-md-2 continents" id="adjust"  >
    <p style="font-size:12px ; font-weight:400">Kazakhastan</p><img src="./globaltradedata/kazakhstan_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2  continents"   >
    <p style="font-size:12px ; font-weight:400">Moldova</p><img src="./globaltradedata/moldova_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    
    <div class="col-md-2 continents"   id="adjust">
    <p style="font-size:12px ; font-weight:400">Russia</p><img src="./globaltradedata/russia_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2 continents"   id="adjust">
    <p style="font-size:12px ; font-weight:400">ukraine</p><img src="./globaltradedata/ukraine_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2 continents"   id="adjust">
    <p style="font-size:12px ; font-weight:400">Uzbekistan</p><img src="./globaltradedata/uzbekistan_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2 continents"   id="adjust">
    <p style="font-size:12px ; font-weight:400">Venezuela</p><img src="./globaltradedata/venezuela_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <table style="padding:5px; float:right">
                            <tr><td><div class="represent_custom" ></div>
                                        Detailed Customs </td>
                                        <td><div class="represent_statistical" ></div>
                                        Statistical Data </td></tr>
                            </table>
    </div>
    </div>


                        </div>
                    </div>
                    <!--Europe-->
                    <div class="feature-box feature-d5" id="smtabz" style="padding-bottom:500px">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="htfy htfy-like"></i></span>
                            <span class="feature-title">Countries_Covered</span>
                           
                        </div>
                        <div class="feature-details">
                        <div class="conatiner" >
                                       
                        <table >
                                    <tr>
                                        <td>
                                        <p>Austria</p><img src="./globaltradedata/austria_rectangular_icon_with_shadow_64.png" alt=""> 
     
                                        </td>
                                        <td>
                                        <p>Belgium</p><img src="./globaltradedata/belgium_rectangular_icon_with_shadow_64.png" alt=""> 
     
                                        </td>
                                        <td>
                                        <p>Bulgaria</p><img src="./globaltradedata/bulgaria_rectangular_icon_with_shadow_64.png" alt=""> 
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <p>croatia</p><img src="./globaltradedata/croatia_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                        <td>
                                        <p>Cyprus</p><img src="./globaltradedata/cyprus_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                        <td>
                                        <p>czech</p><img src="./globaltradedata/czech_republic_rectangular_icon_with_shadow_64.png" alt=""> 
             
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <p>Denmark</p><img src="./globaltradedata/denmark_rectangular_icon_with_shadow_64.png" alt=""> 
             
    
                                        </td>
                                        <td>
                                        <p>Estonia</p><img src="./globaltradedata/estonia_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                        <td>
                                        <p>Finland</p><img src="./globaltradedata/finland_rectangular_icon_with_shadow_64.png" alt=""> 
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <p>France</p><img src="./globaltradedata/france_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                        <td>
                                        <p>Germany</p><img src="./globaltradedata/germany_rectangular_icon_with_shadow_64.png" alt=""> 
   
                                        </td>
                                        <td>
                                        <p>greece</p><img src="./globaltradedata/greece_rectangular_icon_with_shadow_64.png" alt=""> 
   
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <p>Hungary</p><img src="./globaltradedata/hungary_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                        <td>
                                        <p>ireland</p><img src="./globaltradedata/ireland_rectangular_icon_with_shadow_64.png" alt=""> 
   
                                        </td>
                                        <td>
                                        <p>Italy</p><img src="./globaltradedata/italy_rectangular_icon_with_shadow_64.png" alt=""> 
   
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <p>Lithuania</p><img src="./globaltradedata/lithuania_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                        <td>
                                        <p>Latvia</p><img src="./globaltradedata/latvia_rectangular_icon_with_shadow_64.png" alt=""> 
   
                                        </td>
                                        <td>
                                            <p>Luxemborg</p> <img src="./globaltradedata/luxembourg_rectangular_icon_with_shadow_64.png" alt="" srcset="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <p>Malta</p><img src="./globaltradedata/malta_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                        <td>
                                        <p>netherlands</p><img src="./globaltradedata/netherlands_rectangular_icon_with_shadow_64.png" alt=""> 
   
                                        </td>
                                        <td>
                                            <p>Poland</p> <img src="./globaltradedata/poland_rectangular_icon_with_shadow_64.png" alt="" srcset="">                                     </td>
                                    </tr>
                                      
                                    <tr>
                                        <td>
                                        <p>Portugal</p><img src="./globaltradedata/portugal_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                        <td>
                                        <p>Romania</p><img src="./globaltradedata/romania_rectangular_icon_with_shadow_64.png" alt=""> 
   
                                        </td>
                                        <td>
                                        <p>Slovakia</p><img src="./globaltradedata/slovakia_rectangular_icon_with_shadow_64.png" alt=""> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <p>Slovenia</p><img src="./globaltradedata/slovenia_rectangular_icon_with_shadow_64.png" alt=""> 
    
                                        </td>
                                        <td>
                                        <p>spain</p><img src="./globaltradedata/spain_rectangular_icon_with_shadow_64.png" alt=""> 
   
                                        </td>
                                        <td>
                                        <p>Sweeden</p><img src="./globaltradedata/sweden_rectangular_icon_with_shadow_64.png" alt=""> 
                                    </tr>
                                        <tr>
                                            <td>
                                            <p>UK</p><img src="./globaltradedata/united_kingdom_rectangular_icon_with_shadow_64.png" alt=""> 
   
                                            </td>
                                        </tr>                                 
                                </table>   
                                <table>
                                <tr><td style="font-size:10px ;"><div class="represent_custom" ></div>
                                        Detailed Customs </td>
                                        <td style="font-size:10px ;"><div class="represent_statistical" ></div>
                                        Statistical Data </td></tr>
                           
                                </table>                               
                                 
                            </div>
                            <!-- mobile section closed -->
</div>
                    </div>
                    <div class="feature-box feature-d5" id="tabz" >
                    <div class="feature-title-holder">

                        <div class="container-fluid text-center"  >
<div class="row text-center" style="margin:0px ;" >


    <div class="row" style="margin:0px ;" >
    
    
    <div class="col-md-2  continents" id="adjust"   >
    <p style="font-size:12px ; font-weight:400">Austria</p><img src="./globaltradedata/austria_rectangular_icon_with_shadow_64.png" alt=""> 
    </div>
    <div class="col-md-2  continents"   >
    <p style="font-size:12px ; font-weight:400">Belgium</p><img src="./globaltradedata/belgium_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    
    <div class="col-md-2  continents"  id="adjust" >
    <p style="font-size:12px ; font-weight:400">Bulgaria</p><img src="./globaltradedata/bulgaria_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2  continents"   >
    <p style="font-size:12px ; font-weight:400">croatia</p><img src="./globaltradedata/croatia_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    
    <div class="col-md-2  continents" id="adjust"   >
    <p style="font-size:12px ; font-weight:400">Cyprus</p><img src="./globaltradedata/cyprus_rectangular_icon_with_shadow_64.png" alt=""> 
    </div>
    <div class="col-md-2  continents"   >
    <p style="font-size:12px ; font-weight:400">czech</p><img src="./globaltradedata/czech_republic_rectangular_icon_with_shadow_64.png" alt=""> 
    </div>
    
    
    </div>
    
    <div class="row" style="margin:0px ;" >
    
    
    <div class="col-md-2  continents"  id="adjust" >
    <p style="font-size:12px ; font-weight:400">Denmark</p><img src="./globaltradedata/denmark_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2  continents"   >
    <p style="font-size:12px ; font-weight:400">Estonia</p><img src="./globaltradedata/estonia_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
        
    <div class="col-md-2  continents" id="adjust"   >
    <p style="font-size:12px ; font-weight:400">Finland</p><img src="./globaltradedata/finland_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2  continents"   >
    <p style="font-size:12px ; font-weight:400">France</p><img src="./globaltradedata/france_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    
    <div class="col-md-2  continents"  id="adjust" >
    <p style="font-size:12px ; font-weight:400">Germany</p><img src="./globaltradedata/germany_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2  continents"   >
    <p style="font-size:12px ; font-weight:400">greece</p><img src="./globaltradedata/greece_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    

    
    </div>
    <div class="row" style="margin:0px ;" >
    
    
    <div class="col-md-2  continents" id="adjust"   >
    <p style="font-size:12px ; font-weight:400">Hungary</p><img src="./globaltradedata/hungary_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2  continents"   >
    <p style="font-size:12px ; font-weight:400">ireland</p><img src="./globaltradedata/ireland_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    
    <div class="col-md-2  continents"  id="adjust" >
    <p style="font-size:12px ; font-weight:400">Italy</p><img src="./globaltradedata/italy_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2  continents"   >
    <p style="font-size:12px ; font-weight:400">Latvia</p><img src="./globaltradedata/latvia_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2  continents" id="adjust"   >
    <p style="font-size:12px ; font-weight:400">Lithuania</p><img src="./globaltradedata/lithuania_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2  continents"   >
    <p style="font-size:12px ; font-weight:400">Luxemborg</p><img src="./globaltradedata/luxembourg_rectangular_icon_with_shadow_64.png" alt=""> 
    </div>
    
    
    </div>
    <div class="row" style="margin:0px ;" >
    
    <div class="col-md-2  continents"  id="adjust" >
    <p style="font-size:12px ; font-weight:400">Malta</p><img src="./globaltradedata/malta_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2  continents"   >
    <p style="font-size:12px ; font-weight:400">netherlands</p><img src="./globaltradedata/netherlands_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    
    
    <div class="col-md-2  continents" id="adjust"   >
    <p style="font-size:12px ; font-weight:400">Poland</p><img src="./globaltradedata/poland_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2  continents"   >
    <p style="font-size:12px ; font-weight:400">Portugal</p><img src="./globaltradedata/portugal_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    
    <div class="col-md-2  continents"  id="adjust" >
    <p style="font-size:12px ; font-weight:400">Romania</p><img src="./globaltradedata/romania_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2  continents"   >
    <p style="font-size:12px ; font-weight:400">Slovakia</p><img src="./globaltradedata/slovakia_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    
    
    </div>
    <div class="row" style="margin:0px ;" >
    
    
    <div class="col-md-2  continents" id="adjust"   >
    <p style="font-size:12px ; font-weight:400">Slovenia</p><img src="./globaltradedata/slovenia_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2  continents"   >
    <p style="font-size:12px ; font-weight:400">spain</p><img src="./globaltradedata/spain_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    
    <div class="col-md-2  continents"  id="adjust" >
    <p style="font-size:12px ; font-weight:400">Sweeden</p><img src="./globaltradedata/sweden_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    <div class="col-md-2  continents"   >
    <p style="font-size:12px ; font-weight:400">UK</p><img src="./globaltradedata/united_kingdom_rectangular_icon_with_shadow_64.png" alt=""> 
             
    </div>
    
    
    </div>
    <table style="padding:5px;float:right">
                            <tr><td><div class="represent_custom" ></div>
                                        Detailed Customs </td>
                                        <td><div class="represent_statistical" ></div>
                                        Statistical Data </td></tr>
                            </table>

</div>
</div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div id="testimonials" class="container-fluid">
    <div class="bg-color"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row-title">Testimonials</div>
                <div class="row-subtitle">What others said about us?</div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div id="testimonials-slider">
                    <div>
                        <div class="details-holder">
                            <img class="photo" src="images/person1.jpg" alt="">
                            <h4>Chris Walker</h4>
                            <h5>CEO & CO-Founder @HelloBrandio</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris egestas non ante non consequat. Aenean accumsan eros vel elit tristique, non sodales nunc luctus. Etiam vitae odio eget orci finibus auctor ut eget magna.</p>
                        </div>
                    </div>
                    <div>
                        <div class="details-holder">
                            <img class="photo" src="images/person2.jpg" alt="">
                            <h4>Chris Walker</h4>
                            <h5>CEO & CO-Founder @HelloBrandio</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris egestas non ante non consequat. Aenean accumsan eros vel elit tristique, non sodales nunc luctus. Etiam vitae odio eget orci finibus auctor ut eget magna.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- <div id="more-features" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Our Promise</div>
                <div class="row-subtitle">Your satisfaction is guaranteed. Indeed.</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-trophy"></i>
                    </div>
                    <div class="mfeature-title">%99.9 Uptime</div>
                    <div class="mfeature-details">Mauris at libero sed justo pretium maximus ac non ex. Donec sit amet ultrices dolo.</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-like"></i>
                    </div>
                    <div class="mfeature-title">Money Back Guarantee</div>
                    <div class="mfeature-details">Mauris at libero sed justo pretium maximus ac non ex. Donec sit amet ultrices dolo.</div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-cogwheel"></i>
                    </div>
                    <div class="mfeature-title">Best Support</div>
                    <div class="mfeature-details">Mauris at libero sed justo pretium maximus ac non ex. Donec sit amet ultrices dolo.</div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<section class="countries" >
    <h1 style="text-align: center; ">Clients</h1>
    <p style="text-align: center ; padding:10px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste assumenda esse numquam possimus, obcaecati hic perferendis quisquam provident quod cupiditate ipsum, eveniet quo asperiores consectetur ab quia qui necessitatibus veritatis?</p>
    
    <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus, quidem? Quas, laboriosam, mollitia velit quisquam iure quod atque ea totam repellat sint eveniet dicta, accusamus fuga nemo sit! Veniam, hic.</p> -->
    <div class="slider" >
        <div class="slider">
            <div class="slide-track">
                <div class="slide">
                    <img src="./model/img/flow.png" width="500" height="250">
                </div>
                <div class="slide">
                    <img src="./model/img/flow.png" width="500" height="250">
                </div>
                <div class="slide">
                    <img src="./model/img/flow.png" width="500" height="250">
                </div>
                <div class="slide">
                    <img src="./model/img/flow.png" width="500" height="250">
                </div>
            </div>
            
        </div>
    </div>
 <?php include 'footer.php'?>
</section>
 
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
        
<script>
       
</script>
</body>
</html>
