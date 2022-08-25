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
<style>
   #statsdata{
    display: none;
   }
   h1{
        font-size: bolder;
    }
    .bluekardo{
        background-color: #0a5dd3;
        color: white;
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
    @media (min-width:728px) {
        .col-md-2 {
            margin-right: 5%;
            padding-top: 10px;
        }
        /* h1{
            padding-left: 400px;
        } */
        #tabz{
            padding-left: 190px;
        }
        
    #con{
        padding-right: 60px;
    }
    }
    @media (max-width:428px) {
        .bar2 {
            width: 100px;
        margin-right:30px ;  
        }
       
        #custombtn {
            
            padding: 0px 65px;
        }
        #statbtn{
            padding: 0px 65px;
        }
        #blbtn{
            padding: 0px 65px;
        }
        h1{
            margin-left: -70px;
        }
        #import{
            font-size: 10px;
        }
        #export{
            font-size: 10px;
        }
        #adjust{
            float:right;
        }
        .nav2{
            margin-top: -100px;
        }
        h1{
            padding-left: 75px;
        }
    }
    h3{
        padding-right: 50px;
        padding-left: 50px;
    }
    .nav2 {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-image: linear-gradient(120deg, #0a5dd3, #24a7ff);
}

.bar2 {
  float:left;
}

.bar2 a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 180px;
  text-decoration: none;
}

.bar2  a:hover:not(.active) {
  background-color: #24a7ff;
  color: white;
}

.active {
  background-color: #04AA6D;
}
    #con{
        margin-left: -100px;
    }
</style>
</head>

<body>

<div id="header-holder" class="inner-header" style="margin-bottom:0px ;">
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
                                            <a class="unity-link" href="webhosting.html">
                                                <div class="unity-box">
                                                    <div class="unity-icon">
                                                        <img src="images/service-icon1.svg" alt="">
                                                    </div>
                                                    <div class="unity-title">
                                                        Aboutus
                                                    </div>
                                                    <div class="unity-details">
                                                        Details
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
                                                        Details
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
                                                        FAQ
                                                    </div>
                                                    <div class="unity-details">
                                                        Fast as rocket
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- <li>
                                            <a class="unity-link" href="vpshosting.html">
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
                                            </a>
                                        </li> -->
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
                    <div style="font-weight:bolder ;" class="page-title">Global Trade Data</div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<ul class="nav2">
  <li class="bar2" onclick="customs()" ><a id="custombtn" href="#home">Customs Data</a></li>
  <li class="bar2" onclick="stats()"><a id="statbtn" href="#news">Statistics Data</a></li>
  <li class="bar2"><a id="blbtn" href="#contact">B/L Data</a></li>

</ul>
<div class="container text-center">
    <h1>Heading</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, inventore! Deleniti sint, impedit temporibus atque modi, illum nobis laborum dolore quasi officiis eum rem cumque voluptates iure repellendus natus quos voluptate sunt quod quam! Vero autem saepe expedita asperiores modi tempore magnam omnis enim at nam mollitia porro, qui, facilis vel provident totam quidem repudiandae numquam! Natus quisquam veritatis sunt reprehenderit quasi, esse neque dignissimos similique vel at officia, ipsum assumenda voluptates minima magnam, rem sed eveniet? Atque perferendis minus labore odit fugiat voluptas ipsam a tenetur et doloremque sapiente incidunt vero commodi id magnam, rerum placeat! Pariatur, molestias in.</p>
</div>
<div class="customs" id="customdata">
<div class="container-fluid text-center" id="tabz">
<div class="row" style="margin: 0;"  >
    <h1 id="con">Asia</h1>
    <div class="col-md-2 continents"   id="adjust">
    <p>bangladesh</p><img src="./globaltradedata/bangladesh.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2  continents"   >
    <p>China</p><img src="./globaltradedata/china_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2 continents" id="adjust"  >
    <p>Indonesia</p><img src="./globaltradedata/indonesia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2  continents"   >
    <p>Mangolia</p><img src="./globaltradedata/mongolia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
   
</div>
<div class="row" style="margin:0px ;" >
<div class="col-md-2  continents" id="adjust"  >
    <p>Shri lanka</p><img src="./globaltradedata/sri_lanka_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    
    <div class="col-md-2 continents"   >
        <a href="./countries/pakistan.php">
        <p>pakistan</p><img src="./globaltradedata/pakistan_rectangular_icon_with_shadow_64.png" alt=""> 

        </a>
                <a id="import" href="./countries/pakistan.php">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2 continents" id="adjust" >
    <p>phillipines</p><img src="./globaltradedata/philippines_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2 continents"  >
    <p>Turkey</p><img src="./globaltradedata/turkey_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
   
    </div>
    
    
</div>
<div class="container-fluid text-center"id="tabz" >
<div class="row" style="margin:0px ;" >
    <h1 id="con">Africa</h1>
    <div class="col-md-2 continents"   id="adjust">
    <p>botswana</p><img src="./globaltradedata/botswana_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2  continents"   >
    <p>ethiopia</p><img src="./globaltradedata/ethiopia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2 continents" id="adjust"  >
    <p>Kenya</p><img src="./globaltradedata/kenya_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2 continents"  >
    <p>Ivory Coast</p><img src="./globaltradedata/cote_d_Ivoire_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
</div>
<div class="row" style="margin:0px ;" >
    
    <div class="col-md-2 continents"   id="adjust">
    <p>lesotho</p><img src="./globaltradedata/lesotho_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2  continents"   >
    <p>Namibia</p><img src="./globaltradedata/namibia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2 continents" id="adjust"  >
    <p>Nigeria</p><img src="./globaltradedata/nigeria_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2  continents"   >
    <p>Zimbabwe</p><img src="./globaltradedata/zimbabwe_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    
    
    </div>
    <div class="row" style="margin:0px ;" >
    
    <div class="col-md-2 continents"   >
    <p>Uganda</p><img src="./globaltradedata/uganda_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    </div>
    
    
</div>

<div class="container-fluid text-center" id="tabz" >
<div class="row" style="margin:0px ;" >
    <h1 id="con">CIS</h1>
    <div class="col-md-2 continents"   id="adjust">
    <p>kazakhastan</p><img src="./globaltradedata/kazakhstan_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2  continents"   >
    <p>moldova</p><img src="./globaltradedata/moldova_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2 continents" id="adjust"  >
    <p>Russia</p><img src="./globaltradedata/russia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2 continents"  >
    <p>Ukraine</p><img src="./globaltradedata/ukraine_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
</div>
    
    <div class="row" style="margin:0px ;" >
    
    
    <div class="col-md-2  continents"   >
    <p>Uzbekistan</p><img src="./globaltradedata/zimbabwe_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    
    </div>
    
    
</div>


<div class="container-fluid text-center" id="tabz" >
    <div class="row" style="margin:0px ;" >
    <h1 id="con">NorthAmerica</h1>
    <div class="col-md-2  continents" id="adjust"    >
    <p>costa-rica</p><img src="./globaltradedata/costa_rica_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2 continents"  >
    <p>El Salvador</p><img src="./globaltradedata/el_salvador_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2 continents" id="adjust"  >
    <p>Guatemala</p><img src="./globaltradedata/guatemala_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2 continents"   >
    <p>Honduras</p><img src="./globaltradedata/honduras_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
   
</div>
<div class="row" style="margin:0px ;" >
    
    <div class="col-md-2  continents"  id="adjust" >
    <p>Mexico</p><img src="./globaltradedata/mexico_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2 continents" >
    <p>Panama</p><img src="./globaltradedata/panama_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2 continents"  >
    <p>United States</p><img src="./globaltradedata/united_states_of_america_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    </div>

</div>
<div class="container-fluid text-center"  id="tabz">
    <div class="row" style="margin:0px ;" >
    <h1 id="con">SouthAmerica</h1>
    <div class="col-md-2 continents"   id="adjust">
    <p>Argentina</p><img src="./globaltradedata/argentina_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2  continents"   >
    <p>Bolivia</p><img src="./globaltradedata/bolivia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2 continents" id="adjust"  >
    <p>Brazil</p><img src="./globaltradedata/brazil_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2 continents"  >
    <p>Chile</p><img src="./globaltradedata/chile_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
</div>
<div class="row" style="margin:0px ;" >
    
    <div class="col-md-2 continents"   id="adjust">
    <p>Colombia</p><img src="./globaltradedata/colombia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2  continents"   >
    <p>Ecuador</p><img src="./globaltradedata/ecuador_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2 continents" id="adjust"  >
    <p>Paraguay</p><img src="./globaltradedata/paraguay_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2 continents"  >
    <p>Peru</p><img src="./globaltradedata/peru_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    </div>
    <div class="row" style="margin:0px ;" >
    
    
    <div class="col-md-2 continents" id="adjust"  >
    <p>Urguay</p><img src="./globaltradedata/uruguay_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2 continents"  >
    <p>Venezuela</p><img src="./globaltradedata/venezuela_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    </div>
</div>
</div>


<div class="stats" id="statsdata">
<div class="container-fluid text-center" id="tabz" >
<div class="row" style="margin:0px ;" >
    <h1 id="con">Oceania</h1>

    <div class="row" style="margin:0px ;" >
    
    
    <div class="col-md-2  continents" id="adjust"   >
    <p>Australia</p><img src="./globaltradedata/australia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2  continents"    >
    <p>New zealand</p><img src="./globaltradedata/new_zealand_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    
    </div>
    
    
</div>
</div>
<div class="container-fluid text-center" id="tabz" >
<div class="row" style="margin:0px ;" >
    <h1 id="con">Africa</h1>
</div>
    <div class="row" style="margin:0px ;" >
    
    
    <div class="col-md-2  continents"    >
    <p>South Africa</p><img src="./globaltradedata/south_africa_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    
    </div>
    
    
</div>


<div class="container-fluid text-center" id="tabz" >
<div class="row" style="margin:0px ;" >
    <h1 id="con">Europe</h1>

    <div class="row" style="margin:0px ;" >
    
    
    <div class="col-md-2  continents" id="adjust"   >
    <p>Austria</p><img src="./globaltradedata/austria_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2  continents"   >
    <p>Belgium</p><img src="./globaltradedata/belgium_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    
    <div class="col-md-2  continents"  id="adjust" >
    <p>Bulgaria</p><img src="./globaltradedata/bulgaria_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2  continents"   >
    <p>croatia</p><img src="./globaltradedata/croatia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    
    
    </div>
    
    <div class="row" style="margin:0px ;" >
    
    
    <div class="col-md-2  continents" id="adjust"   >
    <p>Cyprus</p><img src="./globaltradedata/cyprus_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2  continents"   >
    <p>czech republic</p><img src="./globaltradedata/czech_republic_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    
    <div class="col-md-2  continents"  id="adjust" >
    <p>Denmark</p><img src="./globaltradedata/denmark_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2  continents"   >
    <p>Estonia</p><img src="./globaltradedata/estonia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    
    
    </div>
    <div class="row" style="margin:0px ;" >
    
    
    <div class="col-md-2  continents" id="adjust"   >
    <p>Finland</p><img src="./globaltradedata/finland_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2  continents"   >
    <p>France</p><img src="./globaltradedata/france_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    
    <div class="col-md-2  continents"  id="adjust" >
    <p>Germany</p><img src="./globaltradedata/germany_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2  continents"   >
    <p>greece</p><img src="./globaltradedata/greece_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    
    
    </div>
    <div class="row" style="margin:0px ;" >
    
    
    <div class="col-md-2  continents" id="adjust"   >
    <p>Hungary</p><img src="./globaltradedata/hungary_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2  continents"   >
    <p>ireland</p><img src="./globaltradedata/ireland_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    
    <div class="col-md-2  continents"  id="adjust" >
    <p>Italy</p><img src="./globaltradedata/italy_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2  continents"   >
    <p>Latvia</p><img src="./globaltradedata/latvia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    
    
    </div>
    <div class="row" style="margin:0px ;" >
    
    
    <div class="col-md-2  continents" id="adjust"   >
    <p>Lithuania</p><img src="./globaltradedata/lithuania_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2  continents"   >
    <p>Luxemborg</p><img src="./globaltradedata/luxembourg_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    
    <div class="col-md-2  continents"  id="adjust" >
    <p>Malta</p><img src="./globaltradedata/netherlands_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2  continents"   >
    <p>netherlands</p><img src="./globaltradedata/netherlands_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    
    
    </div>
    <div class="row" style="margin:0px ;" >
    
    
    <div class="col-md-2  continents" id="adjust"   >
    <p>Poland</p><img src="./globaltradedata/poland_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2  continents"   >
    <p>Portugal</p><img src="./globaltradedata/portugal_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    
    <div class="col-md-2  continents"  id="adjust" >
    <p>Romania</p><img src="./globaltradedata/romania_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2  continents"   >
    <p>Slovakia</p><img src="./globaltradedata/slovakia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    
    
    </div>
    <div class="row" style="margin:0px ;" >
    
    
    <div class="col-md-2  continents" id="adjust"   >
    <p>Slovenia</p><img src="./globaltradedata/slovenia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2  continents"   >
    <p>spain</p><img src="./globaltradedata/spain_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    
    <div class="col-md-2  continents"  id="adjust" >
    <p>Sweeden</p><img src="./globaltradedata/sweden_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2  continents"   >
    <p>UK</p><img src="./globaltradedata/united_kingdom_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    
    
    </div>
   

</div>
</div>
<div class="container-fluid text-center" id="tabz">
<div class="row" style="margin: 0;"  >
    <h1 id="con">Asia</h1>
   
</div>
<div class="row" style="margin:0px ;" >
   <div class="col-md-2 continents" id="adjust" >
    <p>Turkey</p><img src="./globaltradedata/turkey_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2 continents"   >
    <p>Malaysia</p><img src="./globaltradedata/malaysia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2 continents" id="adjust"  >
    <p>Japan</p><img src="./globaltradedata/japan_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2 continents"  >
    <p>Singapore</p><img src="./globaltradedata/singapore_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
   
    </div>
    <div class="row" style="margin:0px ;" >
    
    
    <div class="col-md-2  continents"    >
    <p>Thailand</p><img src="./globaltradedata/thailand_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    
    
    </div>
   

    
</div>


<div class="container-fluid text-center" id="tabz" >
    <div class="row" style="margin:0px ;" >
    <h1 id="con">NorthAmerica</h1>
    <div class="col-md-2 continents" id="adjust"  >
    <p>El Salvador</p><img src="./globaltradedata/el_salvador_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2 continents"  >
    <p>Guatemala</p><img src="./globaltradedata/guatemala_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2 continents"   id="adjust">
    <p>Honduras</p><img src="./globaltradedata/honduras_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
    <div class="col-md-2 continents"  >
    <p>Cannada</p><img src="./globaltradedata/canada_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
    </div>
   
</div>

</div>

</div>

<?php include 'footer.php'?>
<script>
 
 function stats(){
  document.getElementById("customdata").style.display="none"
  document.getElementById("statsdata").style.display="block"
}
function customs(){
  document.getElementById("customdata").style.display="block"
  document.getElementById("statsdata").style.display="none"
  
}
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
            AOS.init({
                delay:5000,
                duration:800
                
            });
        </script>
        
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
