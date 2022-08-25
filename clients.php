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
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
<style>
  #client{
    padding: 20px;
  }
 
 @media(max-width: 428px) {
  .res1{
    display: none;
  }
  .res2{
    display: none;
  }
  #client{
    padding: 20px;
  }
  .res3{
    display:none;
  }
  .logo{
    height: 40px;
    width: 80px;
 }   
 @media (max-width:428px) {
 
 }

 #mobile{
  display: block;
 }
 #logos{
    padding:120px ;
    
 }
 x{
    flex-direction: column;
 }
 .card{
  display:none ;
 }
 img{
  padding: 5px;
 }
 
}
.clients{
  padding: 0px;
}
.flex-container {
  display: flex;
  flex-wrap: wrap;
  background-color:transparent;
  padding: 120px;
}
.flex-containercol {
  display: flex;
  flex-wrap: wrap;
  background-color:transparent;
  width: 50%;
  float: right;
}

.flex-containercol > div {
  background-color: transparent;
  width: 120px;
  margin: 2px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}
.logo{
  height:100% ; width:100%
}
.flex-container > div {
  background-color: transparent;
  width: 228px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}
#logos{
    padding:120px ;
 }
/* On mouse-over, add a deeper shadow */
.res3:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
   transform-style: preserve-3d;
  transform: rotateY(-10deg);
  margin-left: 10px;
}
.res1:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
   transform-style: preserve-3d;
   transform: rotateY(10deg);
  margin-left: -10px;
}
.res2:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
   transform-style: preserve-3d;
  transform: scale(1.1);
}
.logo:hover{
  transform: scale(0.9);
  transform-style: preserve-3d;
}
/* Add some padding inside the card container */
.container {
  padding: 0px ;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  border-radius: 5px; /* 5px rounded corners */
  left:50px
    
}
#mobile{
  display:none;
}
/* Add rounded corners to the top left and the top right corner of the image */
img {
  border-radius: 5px 5px 5px 5px;
  padding: -10px;
}
a{
    color: #fff;
}
x{
    display: flex;
}

</style>
</head>

<body>    
<div id="header-holder" class="main-header" style="padding:0px ;">

    
    <nav id="nav" class="navbar navbar-default navbar-full" style="background-color:#0a5dd3 ;">
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
                                    <a href="about.php">Aboutus <i class="fas fa-caret-down"></i></a>
                                    <ul class="dropdown-menu dropdown-unity">
                                        <li>
                                            <a class="unity-link" href="webhosting.html">
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
    
</div>

<div class="container-fluid "  >
    <div class="row" style="background-color:#0B60D5 ;margin-top:-50px; color:#fff ; text-align:center">
        <div class="col-md-5 " id="cen"><h1 >The payments platform behind millions of businesses</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis consequatur quisquam laboriosam velit voluptatibus earum natus, eius, facere, distinctio enim animi. Repellat expedita eos, dolor sint deserunt illo voluptas molestias animi est! In magnam facilis, libero voluptatum, necessitatibus placeat quaerat, ratione ex qui debitis sequi explicabo natus omnis saepe adipisci.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis excepturi eius dolores ad tempora possimus esse, ducimus voluptatem aperiam unde impedit necessitatibus explicabo asperiores expedita perspiciatis veniam saepe? Libero, asperiores cum necessitatibus neque ullam eius pariatur repellendus sit saepe accusantium. Doloremque alias atque omnis nulla sit, quos beatae cupiditate hic. Veritatis dignissimos illum totam laboriosam inventore cumque ad voluptas dolor eaque consequuntur aliquam ipsum quasi, necessitatibus modi voluptatum. Expedita amet odit similique voluptatem vel. Cum veritatis odit magni minima tenetur quibusdam laborum, quis ad architecto fugiat at debitis quisquam? Vero odit magni fugiat aperiam laudantium molestiae sunt, commodi facere ut.</p>
    </div>
    <div class="col-md-7 "  >
    <div class="flex-containercol">
  <div><img height="200px" width="120px" class="res1" src="./model/img/clients/Lightspeed_portrait.webp" alt="Avatar" style="width:120px;">
</div>
  <div><img height="200px"   class="res2" src="./model/img/clients/Twilio_portrait.webp" alt="Avatar" style="width:120px; margin-bottom: 5px;"></div>
  <div><img height="200px"  class="res3" src="./model/img/clients/Postmates_portrait.webp" alt="Avatar" style="width:120px ;" ></div>  
  <div><img height="200px"  class="res1" src="./model/img/clients/Substack_portrait.webp" alt="Avatar" style="width:120px;"></div>
  <div><img height="200px"  class="res2" src="./model/img/clients/Postmates_portrait.webp" alt="Avatar" style="width:120px; margin-bottom:5px; "></div>
  <div><img height="200px"  class="res3" src="./model/img/clients/MatchesFashion_portrait.webp" alt="Avatar" style="width:120px"></div>  
  
 
</div>

    </div>
    </div>
    <!-- <div class="card2" >
  <img class="clients" src="./model/img/clients/Lightspeed_portrait.webp" alt="Avatar" style="width:100%;">
  
</div>
<div class="card2" >
  <img class="clients" src="./model/img/clients/Lightspeed_portrait.webp" alt="Avatar" style="width:100%;">
  
</div>
<div class="card2" >
  <img class="clients" src="./model/img/clients/Lightspeed_portrait.webp" alt="Avatar" style="width:100%;">
  
</div>

    </div>   
    
    </div>
        <div class="col-2" style="right: -25px; top:50px">
        <div class="card" >
  <img class="clients" src="./model/img/clients/Lightspeed_portrait.webp" alt="Avatar" style="width:100%;">
  
</div>
<div class="card">
  <img class="clients" src="./model/img/clients/Twilio_portrait.webp" alt="Avatar" style="width:100%">
  
</div>
</div>
    
    <div class="col-2"><div class="card" id="x">
  <img src="./model/img/clients/Postmates_portrait.webp" alt="Avatar" style="width:100%">
  
</div>
<div class="card" id="x">
  <img class="clients" src="./model/img/clients/Substack_portrait.webp" alt="Avatar" style="width:100%">
  
</div>
</div>
    <div class="col-2" style="left: -25px; top:50px"><div class="card">
  <img class="clients" src="./model/img/clients/MatchesFashion_portrait.webp" alt="Avatar" style="width:100%">
  
</div>
<div class="card">
  <img class="clients" src="./model/img/clients/MatchesFashion_portrait.webp" alt="Avatar" style="width:100%">
  
</div></div>     -->
</div>

<div class=" row" style="margin:0px ;" >
    <h1 style="text-align:center ;padding-top:300px; padding-bottom:120px;font-family:Georgia, 'Times New Roman', Times, serif"  >We help customers achieve          measurable results</h1>
</div>   
<div class="row text-center" style="padding-bottom: 50px ; margin:0px">
    <div class="col-md-4 col-xs-4 mr-auto mr-sm-auto text-center">
    <h1 class="counter">7000</h1>
    <p>total increase in Postmates’ annual revenue</p>
    </div>
    <div class="col-md-4 col-xs-4 m-auto m-sm-auto text-center">
    <h1 class="counter">6000</h1>
    <p>for Weave to launch a new payments platform
</p>
    </div>
    <div class="col-md-4 col-xs-4 ml-auto ml-sm-auto text-center">
        <h1 class="counter">10000</h1>
        <p>uplift in Twilio’s payment acceptance rate</p>
    </div>
</div>



<div class="container text-center" >
<h1 style="font-weight:bolder ;">CLIENTS</h1>
<div class="row mb-5 text-center" id="client" >
  <div class="col-lg-3 mr-auto mr-sm-auto col-xs-3">
  <div><img  class="logo" src="./model/img/clients/Tata.webp"></div>
  
  </div>
  <div class="col-lg-3 m-auto m-sm-auto col-xs-3 ">
  <div><img class="logo" src="./model/img/clients/Aditya_Birla.webp"></div>
  
   </div>
  <div class="col-lg-3 ml-auto ml-sm-auto  col-xs-3 ">
  <div><img class="logo" src="./model/img/clients/KPMG.webp"></div>  
  
  </div>
  <div class="col-lg-3 ml-auto ml-sm-auto col-xs-3 " >
  <div><img class="logo" src="./model/img/clients/LG.webp"></div>
  
  
</div>

</div>
<div class="row mb-5 text-center" id="client" >
  <div class="col-lg-3 mr-auto mr-sm-auto col-xs-3">
  <div><img  class="logo" src="./model/img/clients/Tata.webp"></div>
  
  </div>
  <div class="col-lg-3 m-auto m-sm-auto col-xs-3 ">
  <div><img class="logo" src="./model/img/clients/Aditya_Birla.webp"></div>
  
   </div>
  <div class="col-lg-3 ml-auto ml-sm-auto  col-xs-3 ">
  <div><img class="logo" src="./model/img/clients/KPMG.webp"></div>  
  
  </div>
  <div class="col-lg-3 ml-auto ml-sm-auto col-xs-3 " >
  <div><img class="logo" src="./model/img/clients/LG.webp"></div>
  
  
</div>

</div>
<div class="row mb-5 text-center" id="client" >
  <div class="col-lg-3 mr-auto mr-sm-auto col-xs-3">
  <div><img  class="logo" src="./model/img/clients/Tata.webp"></div>
  
  </div>
  <div class="col-lg-3 m-auto m-sm-auto col-xs-3 ">
  <div><img class="logo" src="./model/img/clients/Aditya_Birla.webp"></div>
  
   </div>
  <div class="col-lg-3 ml-auto ml-sm-auto  col-xs-3 ">
  <div><img class="logo" src="./model/img/clients/KPMG.webp"></div>  
  
  </div>
  <div class="col-lg-3 ml-auto ml-sm-auto col-xs-3 " >
  <div><img class="logo" src="./model/img/clients/LG.webp"></div>
  
  
</div>

</div>

<!-- <div class="flex-container">
  <div><img  class="logo" src="./model/img/clients/Tata.webp"></div>
  <div><img class="logo" src="./model/img/clients/Aditya_Birla.webp"></div>
  <div><img class="logo" src="./model/img/clients/KPMG.webp"></div>  
  <div><img class="logo" src="./model/img/clients/LG.webp"></div>
  
</div>
 -->
    
    
    
    
    
</div> 


    

<?php include 'footer.php'?>
    <script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.counter').counterUp({
    delay: 10,
    time: 2000
});
</script>

</body>
</html>
