<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
<title>Hostify</title>
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
            padding-left: 50px;
        }
    }
    p, h4{
        font-family: "Montserrat", sans-serif;
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
                                    <a href="#pricing">Aboutus <i class="fas fa-caret-down"></i></a>
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
                                            <a class="unity-link" href="aboutus.php">
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
                                    <a href="products.php">Countries Covered<i class="fas fa-caret-down"></i></a>
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
                    <div class="page-title">Frequently Asked Questions</div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<div class="row" style="margin:0 ;">
<div class="model2"  ><model-viewer class="view" style="height: 200px; width: 200px; left:25% " src ="./model/LightBulb.glb"    loading="eager"  disable-zoom camera-controls enable-pan 
                reveal="auto" auto-rotate rotation-per-second="20deg" ></model-viewer></div>
   
    <div class="col-md-5 text-center "  id="faqs">
        <h4 style="font-weight:bolder ; color:#0a5dd3"  >
            FAQ
        </h4>
        <div class="col-2 text-left">
            <div id="show">
            <h4 class="bluekardo"  >What is TradeImeX?</h4>
            
            </div>
            <P id="ans">TradeImeX is Import-Export data provider online tries to provide Global Trade data that not just bring in new customers for companies, but also assists them in identifying the potential market for their products, track what their competitors are exporting and importing and that too at what rates and in what quantity and helps to generate new leads from across the globe.</P>
            <h4 class="bluekardo" id="show2" >What are you Service & Products?</h4>
            <p id="ans2">TradeImeX provides trade-related analysis reports and customs data of more than 60 Countries across the globe. Our reports fall into different categories like Custom Data, Statistical Data, Analytical custom reports.</p>
            <h4 class="bluekardo" id="show3">How do I make difference between Custom Data, Statistical Data, Analytical Custom reports?"</h4>
            <div id="ans3">
            <p > <h5 style="font-weight:bolder ;">Custom Data</h5> – This Report covers all the information which publishes from direct customs. It includes Importer Names, Exporter Names, Manufacturer Names, Product Details, HS code, Quantity, Value, Origin of port or country, Destination of port or country, Date of shipment etc. <br>
             <h5 style="font-weight:bolder ;"> Statistical Data</h5> – This Statistical database is useful to check the import or export market globally. It contains all the statistics of shipment except the Importer or Exporter Names. It will help you to evaluate the market trends of any product with its export import value or volume.
            <br>
            <h5 style="font-weight:bolder ;">Analytical custom reports</h5>  - This is a Customized report and prepared by our trained Statistician as per client need. It is customized by brand, model, grades specifications of the product.
            </p>
    
            </div>
            
    <h4 class="bluekardo" id="show4" >How your services can help into my business?</h4>
            <div id="ans4">
                <p>Our reports can help you in many ways –</p>
                <ul>
                    <li>
                    With the help of our reports you can easily track your competitor
                    </li>
                    <li>We provide to you the best analytic advice and prepare the best offline import-export trade data that provides highly informative data and in-depth information to boost your business.</li>
                    <li>Provides highly accurate reports.</li>
                    <li>Identify new opportunities for your business.</li>
                    <li>Provide new leads across the globe.</li>
                </ul>
            </div>
            <h4 class="bluekardo" id="show5" >What all are the countries you covered in your services?</h4>
            <div id="ans5">
            We have covered more than 60 countries like the USA, China, India, Russia, Vietnam, Indonesia, Philippines, Mongolia, Brazil, Argentina, and Many More. 
            Check Out all the countries <a href="https://www.tradeimex.in/global-trade-data">https://www.tradeimex.in/global-trade-data</a> 
            </div>
            <h4 class="bluekardo" id="show6" >Which Data should I buy?</h4>
            <div id="ans6">
            <p style="font-weight:bolder ;">It is completely upto your needs</p>
                <ul>
                    <li>
                    If your requirement is only to do a research and you want to collect details like Quantity, size of market, value or price of the product then Statistical data can give you detailed insight it includes the detailed description of the goods being imported or exported, estimation of the quantity of cargo being traded, their CIF value, etc. 
                    </li>
                    <li>If your requirement is to know the name of Importer/Exporter, HS Code, Quantity, import country etc. then you should go for Custom Data.</li>
                    <li>Analytical Customs report can help you to do analysis on market trend then Analysis report is right fit for you.</li>
               
                </ul>
            
            </div>
            <h4 class="bluekardo" id="show7" >What are the areas do you covered in your reports?</h4>
            <div id="ans7">
                We include details like Importer, Exporter, Importer, Exporter, HS codes, duties, charges, CIF values, volume of sales, Shipping Port, Discharge Port, Country of Origin, Country of Departure and many more.
            </div>
            <h4 class="bluekardo" id="show8" >Do you provide any sample before purchasing the product?</h4>
            <div id="ans8">
            Yes, We do provide the sample report which is completely free of cost you don’t need to pay anything for that.
            </div>
            <h4 class="bluekardo" id="show9" >What are the payment modes available?</h4>
            <div id="ans9">
            You can pay using Cheque, NEFT, IMPS, Credit Card, Wire, PayPal.
            </div>
            <h4 class="bluekardo" id="show10" >How soon report gets delivered after made the payment?</h4>
            <div id="ans10">
            Within 24 working hours u can get the report but few order-based reports take some time to get delivered. it may take 2-3 days.
            </div>
            <h4 class="bluekardo" id="show11" >What is price of the Data?</h4>
            <div id="ans11">
            Cost depends upon your requirement and what type of data you are looking for; Prices vary from country to country.
            </div>
            <h4 class="bluekardo" id="show12" >Which process do you follow to make your reports?</h4>
            <div id="ans12">
            We receive this authentic & exclusive database in a raw format and our expertise statistician team sorts & compile it in an accurate format. Global Trade Statistics Database is collected directly from the Customs, Port Authorities, Government bodies, Logistic & shipping companies, and different Trade Associations.
            </div>
            <h4 class="bluekardo" id="show13" >Who all are your clientele?</h4>
            <div id="ans13">
                <p>We work with organizations of all shapes and sizes across all industries. Below are some of the clients we cater to-</p>
                <ul>
                    <li>KPMG​</li>
                    <li>Deloitte</li>
                    <li>Ernst & Young</li>
                    <li>Lg Electronics</li>
                    <li>Wipro</li>

                </ul>
                <p>And Many More. <br> Kindly check our  <a href="clients.php">Client Page</a></p>
            </div>
    </div>
        

    </div>
    <div class="col-md-5" id="bulb"  data-aos="fade-left">
        <!-- <img src="./model/img/worldmap.png" height="350px" width="500px" > -->
        <model-viewer class="model1" style="height: 400px; width: 350px; right:-10% ; padding-top:10%" src ="./model/LightBulb.glb"    loading="eager"  disable-zoom camera-controls enable-pan 
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
