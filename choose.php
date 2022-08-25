<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
<title>WHY CHOOSE US!</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.min.css">
<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
<link rel="stylesheet" type="text/css" href="css/slick.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>

<style>
    .model2{
       display: none;
    }
    .bluekardo{
        background-color:transparent;
        color: #0a5dd3;
    }
    #ans{
        display: none;
    }
    #ans2{
        display: none;
    }
    #ans3{
        display: none;
    }
    
    #ans4{
        display: none;
    }
    
    #ans5{
        display: none;
    }
    
    #ans6{
        display: none;
    }
    
    #ans7{
        display: none;
    }
    
    #ans8{
        display: none;
    }
    
    #ans9{
        display: none;
    }
    
    #ans10{
        display: none;
    }
    
    #ans11{
        display: none;
    }
    
    #ans12{
        display: none;
    }
    
    #ans13{
        display: none;
    }
    #bulb{
        float: right;
    }
    #faqs{
        float: left;
    }
    @media (max-width:428px) {
      
        .model1{
            display: none;
        }
        .model2{
            text-align: center;
            align-items: center;
            align-content: center;
            
            display: block;
        }
        #bulb{
        float:left;
    }
    #faqs{
        float:right;
        padding-left: 50px;
        padding-right: 30px;
    }   
    }
    @media (min-width:728px){
        #faqs{
            padding-left: 100px;
            padding-bottom: 100px;
        }
    }
    #para, h4{
        font-family: "Montserrat", sans-serif;
        padding-bottom: 100px;
    }
</style>
</head>

<body>

<div id="header-holder" class="inner-header">
    <div class="bg-animation" ></div>
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
                                    <a href="about.php">Aboutus <i class="fas fa-caret-down"></i></a>
                                    <ul class="dropdown-menu dropdown-unity">
                                        <li>
                                            <a class="unity-link" href="clients.php">
                                                <div class="unity-box">
                                                    <div class="unity-icon">
                                                        <img src="images/service-icon1.svg" alt="">
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
                                                        <img src="images/service-icon2.svg" alt="">
                                                    </div>
                                                    <div class="unity-title">
                                                       FAQS
                                                    </div>
                                                    <div class="unity-details">
                                                     Details
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="unity-link" href="about.php">
                                                <div class="unity-box">
                                                    <div class="unity-icon">
                                                        <img src="images/service-icon3.svg" alt="">
                                                    </div>
                                                    <div class="unity-title">
                                                        About us
                                                    </div>
                                                    <div class="unity-details">
                                                        Fast as rocket
                                                    </div>
                                                </div>
                                            </a>
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
                                    <a href="gtdtable.php">Countries Covered<i class="fas fa-caret-down"></i></a>
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
                                <li class="support-button-holder support-dropdown">
                                    <a class="support-button" href="#">Blog</a>
                                    
                                     
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">WHY CHOOSE US!</div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<div class="row" style="margin:0 ;">
<div class="model2"  ><model-viewer class="view" style="height: 200px; width: 200px; left:25% " src ="./model/globe.glb"    loading="eager"  disable-zoom camera-controls enable-pan 
                reveal="auto" auto-rotate rotation-per-second="20deg" ></model-viewer></div>
   
    <div class="col-md-5 text-center "  id="faqs">
        <h1 style="font-weight:bolder ; color:#0a5dd3"  >
        Trained with hundreds of billions of data points        </h1>
        <div class="col-2 text-left">
        <p id="para">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus maiores tenetur dicta, quidem distinctio maxime dolorem placeat. Soluta nulla nisi ut quibusdam corrupti similique nemo voluptatibus accusamus a, omnis dicta?</p>
        <h3>Heading</h3>
        <p id="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, obcaecati magni, eaque sed, est rerum repellendus voluptatum maxime iste sequi dolorem vero! Hic laboriosam repellat, sequi quasi rerum sed minus!</p>
        <h3>Heading</h3>
        <p id="para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt dolorem quibusdam neque! Minima blanditiis ex, nobis non temporibus vel dicta, dolor delectus sapiente impedit, ab tempore! Eos quia iure fuga?</p>
        <h3>Heading</h3>
        <p id="para">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quibusdam ut animi magnam cupiditate? Natus corrupti sit pariatur, dolores sint, perferendis veritatis, harum eaque mollitia dignissimos et recusandae totam reiciendis.</p>
     
    </div>
        

    </div>
    <div class="col-md-5" id="bulb"  data-aos="fade-left">
        <!-- <img src="./model/img/worldmap.png" height="350px" width="500px" > -->
        <model-viewer class="model1" style="height: 100vh; width: 80vh; right:-10% ; padding-top:10%" src ="./model/globe.glb"    loading="eager"  disable-zoom camera-controls enable-pan 
                reveal="auto" auto-rotate rotation-per-second="20deg" ></model-viewer>
    </div>
</div>
<?php include 'footer.php'?>
<script>
 

$(document).ready(function(){
    $('#show').click(function() {
      $('#ans').toggle("slide");
    });
});
$(document).ready(function(){
    $('#show2').click(function() {
      $('#ans2').toggle("slide");
    });
});
$(document).ready(function(){
    $('#show3').click(function() {
      $('#ans3').toggle("slide");
    });
    $(document).ready(function(){
    $('#show4').click(function() {
      $('#ans4').toggle("slide");
    });
}); 
$(document).ready(function(){
    $('#show5').click(function() {
      $('#ans5').toggle("slide");
    });
}); 
$(document).ready(function(){
    $('#show6').click(function() {
      $('#ans6').toggle("slide");
    });
}); 
$(document).ready(function(){
    $('#show7').click(function() {
      $('#ans7').toggle("slide");
    });
}); 
$(document).ready(function(){
    $('#show8').click(function() {
      $('#ans8').toggle("slide");
    });
}); 
$(document).ready(function(){
    $('#show9').click(function() {
      $('#ans9').toggle("slide");
    });
}); 
$(document).ready(function(){
    $('#show10').click(function() {
      $('#ans10').toggle("slide");
    });
}); 
$(document).ready(function(){
    $('#show11').click(function() {
      $('#ans11').toggle("slide");
    });
}); 
$(document).ready(function(){
    $('#show12').click(function() {
      $('#ans12').toggle("slide");
    });
}); 
$(document).ready(function(){
    $('#show13').click(function() {
      $('#ans13').toggle("slide");
    });
}); 

});


</script>

        
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
