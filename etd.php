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
      #belgium , #bulgaria , #croatia , #cyprus , #czech , #denmark , #estonia , #finland , #france , #germany , #greece , #hungary , #ireland , #latvia , #lithuania , #luxemborg ,#malta ,#netherlands , #poland , #portugal , #romania , #slovakia , #slovenia , #spain , #sweden , #uk , #italy ,#estonia , #colombia {
        display:none;
    }
    
    @media (min-width:720px) {
        #prdimg{
        padding-right: 20px;
    } 
    #tradedata{
        margin-bottom: 100px;
    }   
    #sidetxt{
        text-align: right;
    }
    }
    @media (max-width:428px) {
        #con-btn{
            font-size: 10px;
        }  
        
       #prdimg{
        
        height: 90%;
        width: 90%;
       }
       #map{
        width: 300px;
       }
    }
    
#con-btn{
            background-color:#4ceb6a  ;
            border-radius: 5%;
            color: white;
            padding: 5px;
            border-color: #5abaff;
            margin: 20px;
        }

h1{
    color: #5abaff;
}
li{
   padding: 10px;
   font-size: large; 
}
ul{
    font-size: larger;
    padding: 10px;
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
                    <div class="page-title" style="font-weight: bolder ; margin-bottom:-50px">EUROPE TRADE DATA</div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<div class="container-fluid" style="padding:50px ;">
<div class="col-lg-6 col-xs-12">
    <center>
    <h1>CONTENT</h1>
    </center>
    
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti incidunt quam placeat illo animi tempore eaque dolorum, ab quas molestias perspiciatis aspernatur voluptates nemo doloremque rem quae consequatur voluptas eius?</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam, rem accusantium deserunt minus nisi repellat. Ad non perferendis ratione in fugit eos harum, error iure hic, quibusdam distinctio? Amet, eos?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet quasi voluptate ea maxime ipsa, quis, eaque quibusdam quidem nihil alias asperiores molestias. Ipsum quam tenetur atque quod. Dolor, similique consequuntur.</p>
</div>
<div class="col-lg-6 col-xs-12">
    <img id="map" src="https://media.istockphoto.com/id/903964598/vector/vector-eurasia-map-with-countries-borders-abstract-red-and-yellow-eurasia-countries-on-map.webp?s=612x612&w=is&k=20&c=r3Yrq-Y_mw3jDqS_PB_uTPe2ZjVcE9RgzcrXc310Bf8=" alt="">
</div>
</div>
<div>
<center><H1>Content</H1>    
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis mollitia nostrum iure, dolorum rerum nihil nulla distinctio dolore sequi eaque, possimus sunt minus reiciendis quibusdam. Praesentium nostrum reprehenderit vitae expedita!</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum similique id sunt esse. Soluta mollitia nobis labore dicta placeat non aliquam quasi culpa, quam quas maxime corporis est recusandae dolorem!</p>
</center>
</div>
<div class="container-fluid" style="padding:50px ;">
    <center>
        <h1>Countries</h1>
        <div class="row">
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">Austria</p><img src="./globaltradedata/austria_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">Belgium</p><img src="./globaltradedata/belgium_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">Bulgaria</p><img src="./globaltradedata/bulgaria_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">croatia</p><img src="./globaltradedata/croatia_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">Cyprus</p><img src="./globaltradedata/cyprus_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">czech</p><img src="./globaltradedata/czech_republic_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">Denmark</p><img src="./globaltradedata/denmark_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">Estonia</p><img src="./globaltradedata/estonia_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">Finland</p><img src="./globaltradedata/finland_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">France</p><img src="./globaltradedata/france_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">Germany</p><img src="./globaltradedata/germany_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">greece</p><img src="./globaltradedata/greece_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        
    </div>
    <div class="row">
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">Hungary</p><img src="./globaltradedata/hungary_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">ireland</p><img src="./globaltradedata/ireland_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">Latvia</p><img src="./globaltradedata/latvia_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">Lithuania</p><img src="./globaltradedata/lithuania_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        
    </div>
    <div class="row">
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">Luxemborg</p><img src="./globaltradedata/luxembourg_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">Malta</p><img src="./globaltradedata/malta_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">netherlands</p><img src="./globaltradedata/netherlands_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">Poland</p><img src="./globaltradedata/poland_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        
    </div>
    <div class="row">
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">Portugal</p><img src="./globaltradedata/portugal_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">Romania</p><img src="./globaltradedata/romania_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">Slovakia</p><img src="./globaltradedata/slovakia_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">Slovenia</p><img src="./globaltradedata/slovenia_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        
    </div>
    <div class="row">
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">Spain</p><img src="./globaltradedata/spain_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">Sweden</p><img src="./globaltradedata/sweden_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">UK</p><img src="./globaltradedata/united_kingdom_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        
    </div>
    
    <p style="color:#0a5dd3; padding-top:50px ; padding-bottom:100px">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores reiciendis dolore cumque, possimus corporis officiis, quam voluptas commodi distinctio in dolorum? Quidem enim expedita at eum harum earum beatae deleniti, unde in dolore suscipit corrupti facere veritatis modi fuga provident, sint cupiditate vero eveniet architecto atque saepe molestiae, similique commodi! Id tenetur eaque explicabo quod necessitatibus sapiente consectetur exercitationem ea nobis earum aperiam totam maxime ipsum ducimus quo asperiores ipsam facere, magni similique ex minus eum corrupti. Impedit consectetur harum aperiam ullam illo ea. At saepe explicabo maxime illo unde dolorum, consectetur cupiditate tempore ipsum maiores totam ullam illum nulla.</p>
</div>

    <div class="container" >
        <div class="row">
        <li  class="dropdown">
                                    <a id="con-btn" href="">Countries Covered<i class="fas fa-caret-down"></i></a>
                                    <ul class="dropdown-menu">
                                      
                                      <li><a  onclick="austria()">Austria</a></li>
                                      <li><a  onclick="belgium()">Belgium</a></li>
                                      <li><a onclick="bulgaria()">Bulgaria</a></li>
                                      <li><a onclick="croatia()">Croatia</a></li>
                                      <li><a onclick="cyprus()">Cyprus</a></li>
                                      <li><a onclick="czech()">Czech</a></li>
                                      <li><a onclick="denmark()">denmark</a></li>
                                      <li><a onclick="estonia()">Estonia</a></li>
                                      <li><a onclick="finland()">finland</a></li>
                                      <li><a onclick="france()">france</a></li>
                                      <li><a onclick="germany()">germany</a></li>
                                      <li><a onclick="greece()">greece</a></li>
                                      <li><a onclick="hungary()">Hungary</a></li>
                                      <li><a onclick="ireland()">Ireland</a></li>
                                      <li><a onclick="latvia()">latvia</a></li>
                                      <li><a onclick="lithuania()">lithuania</a></li>
                                      <li><a onclick="luxemborg()">luxemborg</a></li>
                                      <li><a onclick="malta()">malta</a></li>
                                      <li><a onclick="netherlands()">netherlands</a></li>
                                      <li><a onclick="poland()">poland</a></li>
                                      <li><a onclick="portugal()">portugal</a></li>
                                      <li><a onclick="romania()">romania</a></li>
                                      <li><a onclick="slovakia()">slovakia</a></li>
                                      <li><a onclick="slovenia()">slovenia</a></li>
                                      <li><a onclick="spain()">spain</a></li>
                                      <li><a onclick="sweden()">sweden</a></li>
                                      <li><a onclick="uk()">uk</a></li>
                                       
                                      
                                    </ul>
                                </li>
     

        </div>
     
    </div>
    <div class="container" id="austria" >
    <div class="row" id="bangladesh" >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>austria</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
    </div>
    <!-- belgium -->
      <div class="container" id="belgium">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>belgium</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
      <!-- bulgaria -->
      <div class="container" id="bulgaria">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>bulgaria</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
      <!-- croatia -->
      <div class="container" id="croatia">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>croatia</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
    <!-- Colombia -->
    <div class="container" id="colombia">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>Colombia</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
    <!-- cyprus -->
    <div class="container" id="cyprus">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>cyprus</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
      <!-- czech -->
      <div class="container" id="czech">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>czech</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
      <!-- denmark -->
      <div class="container" id="denmark">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>denmark</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
    <!-- Estonia  -->
      <div class="container" id="estonia">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>Estonia</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
      <!-- finland -->
      <div class="container" id="finland">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>finland</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>


      <div class="container" id="france">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>france</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
      
      <div class="container" id="germany">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>germany</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
      
      <div class="container" id="greece">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>greece</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
      
      <div class="container" id="hungary">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>hungary</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
      
      <div class="container" id="ireland">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>ireland</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>

      <div class="container" id="italy">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>italy</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>

      <div class="container" id="latvia">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>latvia</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
      
      <div class="container" id="lithuania">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>lithuania</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
      
      <div class="container" id="luxemborg">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>luxemborg</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
      
      <div class="container" id="malta">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>Malta</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
       
      <div class="container" id="netherlands">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>netherlands</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
      
      <div class="container" id="poland">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>Poland</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
      
            <div class="container" id="portugal">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>portugal</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
      
      <div class="container" id="romania">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>romania</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
      
      <div class="container" id="slovakia">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>slovakia</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
      
      <div class="container" id="slovenia">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>slovenia</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
      
      <div class="container" id="spain">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>spain</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
      
      <div class="container" id="sweden">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>sweden</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>

      <div class="container" id="uk">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>United Kingdom</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
      
      

    <div class="container text-center" style="padding-top:100px ; ">
        <h1>CONTENT</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore, ut inventore deleniti dignissimos, explicabo nam aliquid tenetur, nisi eligendi quis distinctio delectus ullam id dolores voluptatum expedita magnam itaque architecto?</p>
    </div>
    <div class="container" style="background-image:linear-gradient(120deg, #0a5dd3, #24a7ff); " id="tradedata">
        <center>
            <h1 style="color:#fff ;">You might be intrested in other continents as well</h1>
        
        <div class="row">
            <div class="col-lg-4 col-xs-4">
                <a href="africatd.php"><button id="con-btn">AFRICA TRADE DATA</button></a>
                
            </div>
            <div class="col-lg-4 col-xs-4">
                <a href="asiatd.php">  <button id="con-btn" >ASIA TRADE DATA</button></a>
              
            </div>
            <div class="col-lg-4 col-xs-4">
                <a href="etd.php"><button id="con-btn">EUROPE TRADE DATA</button></a>
                
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-xs-4">
                <a href="metd.php">
                <button id="con-btn">MIDDLE EAST TRADE DATA</button>
                </a>
                
            </div>
            <div class="col-lg-4 col-xs-4">
                <a href="natd.php"> <button id="con-btn">NORTH AMERICA TRADE DATA</button></a>
               
            </div>
            <div class="col-lg-4 col-xs-4">
                <a href="satd.php"><button id="con-btn">SOUTH AMERICA TRADE DATA</button></a>
                
            </div>
        </div>
        </center>
    </div>

<?php include 'footer.php'?>
<script>
 

 function austria(){
  document.getElementById("austria").style.display="block"
  document.getElementById("belgium").style.display="none"
  document.getElementById("bulgaria").style.display="none" 
  document.getElementById("croatia").style.display="none"
  document.getElementById("cyprus").style.display="none"
  document.getElementById("czech").style.display="none"
  document.getElementById("denmark").style.display="none"
  document.getElementById("estonia").style.display="none"
  document.getElementById("finland").style.display="none"
  document.getElementById("france").style.display="none"
  document.getElementById("germany").style.display="none"
  document.getElementById("greece").style.display="none"
  document.getElementById("hungary").style.display="none"
  document.getElementById("ireland").style.display="none"
  document.getElementById("latvia").style.display="none"
  document.getElementById("lithuania").style.display="none"
  document.getElementById("luxemborg").style.display="none"
  document.getElementById("malta").style.display="none"
  document.getElementById("netherlands").style.display="none"
  document.getElementById("poland").style.display="none"
  document.getElementById("portugal").style.display="none"
  document.getElementById("romania").style.display="none"
  document.getElementById("slovakia").style.display="none"
  document.getElementById("slovenia").style.display="none"
  document.getElementById("spain").style.display="none"
  document.getElementById("sweden").style.display="none"
  document.getElementById("uk").style.display="none"
 
  
}
function belgium(){
    document.getElementById("austria").style.display="none"
  document.getElementById("belgium").style.display="block"
  document.getElementById("bulgaria").style.display="none" 
  document.getElementById("croatia").style.display="none"
  document.getElementById("cyprus").style.display="none"
  document.getElementById("czech").style.display="none"
  document.getElementById("denmark").style.display="none"
  document.getElementById("estonia").style.display="none"
  document.getElementById("finland").style.display="none"
  document.getElementById("france").style.display="none"
  document.getElementById("germany").style.display="none"
  document.getElementById("greece").style.display="none"
  document.getElementById("hungary").style.display="none"
  document.getElementById("ireland").style.display="none"
  document.getElementById("latvia").style.display="none"
  document.getElementById("lithuania").style.display="none"
  document.getElementById("luxemborg").style.display="none"
  document.getElementById("malta").style.display="none"
  document.getElementById("netherlands").style.display="none"
  document.getElementById("poland").style.display="none"
  document.getElementById("portugal").style.display="none"
  document.getElementById("romania").style.display="none"
  document.getElementById("slovakia").style.display="none"
  document.getElementById("slovenia").style.display="none"
  document.getElementById("spain").style.display="none"
  document.getElementById("sweden").style.display="none"
  document.getElementById("uk").style.display="none"
  
}
function bulgaria(){
    document.getElementById("austria").style.display="none"
  document.getElementById("belgium").style.display="none"
  document.getElementById("bulgaria").style.display="block" 
  document.getElementById("croatia").style.display="none"
  document.getElementById("cyprus").style.display="none"
  document.getElementById("czech").style.display="none"
  document.getElementById("denmark").style.display="none"
  document.getElementById("estonia").style.display="none"
  document.getElementById("finland").style.display="none"
  document.getElementById("france").style.display="none"
  document.getElementById("germany").style.display="none"
  document.getElementById("greece").style.display="none"
  document.getElementById("hungary").style.display="none"
  document.getElementById("ireland").style.display="none"
  document.getElementById("latvia").style.display="none"
  document.getElementById("lithuania").style.display="none"
  document.getElementById("luxemborg").style.display="none"
  document.getElementById("malta").style.display="none"
  document.getElementById("netherlands").style.display="none"
  document.getElementById("poland").style.display="none"
  document.getElementById("portugal").style.display="none"
  document.getElementById("romania").style.display="none"
  document.getElementById("slovakia").style.display="none"
  document.getElementById("slovenia").style.display="none"
  document.getElementById("spain").style.display="none"
  document.getElementById("sweden").style.display="none"
  document.getElementById("uk").style.display="none"
   
}
function croatia(){
    document.getElementById("austria").style.display="none"
  document.getElementById("belgium").style.display="none"
  document.getElementById("bulgaria").style.display="none" 
  document.getElementById("croatia").style.display="block"
  document.getElementById("cyprus").style.display="none"
  document.getElementById("czech").style.display="none"
  document.getElementById("denmark").style.display="none"
  document.getElementById("estonia").style.display="none"
  document.getElementById("finland").style.display="none"
  document.getElementById("france").style.display="none"
  document.getElementById("germany").style.display="none"
  document.getElementById("greece").style.display="none"
  document.getElementById("hungary").style.display="none"
  document.getElementById("ireland").style.display="none"
  document.getElementById("latvia").style.display="none"
  document.getElementById("lithuania").style.display="none"
  document.getElementById("luxemborg").style.display="none"
  document.getElementById("malta").style.display="none"
  document.getElementById("netherlands").style.display="none"
  document.getElementById("poland").style.display="none"
  document.getElementById("portugal").style.display="none"
  document.getElementById("romania").style.display="none"
  document.getElementById("slovakia").style.display="none"
  document.getElementById("slovenia").style.display="none"
  document.getElementById("spain").style.display="none"
  document.getElementById("sweden").style.display="none"
  document.getElementById("uk").style.display="none"
  
}
function cyprus(){
    document.getElementById("austria").style.display="none"
  document.getElementById("belgium").style.display="none"
  document.getElementById("bulgaria").style.display="none" 
  document.getElementById("croatia").style.display="none"
  document.getElementById("cyprus").style.display="block"
  document.getElementById("czech").style.display="none"
  document.getElementById("denmark").style.display="none"
  document.getElementById("estonia").style.display="none"
  document.getElementById("finland").style.display="none"
  document.getElementById("france").style.display="none"
  document.getElementById("germany").style.display="none"
  document.getElementById("greece").style.display="none"
  document.getElementById("hungary").style.display="none"
  document.getElementById("ireland").style.display="none"
  document.getElementById("latvia").style.display="none"
  document.getElementById("lithuania").style.display="none"
  document.getElementById("luxemborg").style.display="none"
  document.getElementById("malta").style.display="none"
  document.getElementById("netherlands").style.display="none"
  document.getElementById("poland").style.display="none"
  document.getElementById("portugal").style.display="none"
  document.getElementById("romania").style.display="none"
  document.getElementById("slovakia").style.display="none"
  document.getElementById("slovenia").style.display="none"
  document.getElementById("spain").style.display="none"
  document.getElementById("sweden").style.display="none"
  document.getElementById("uk").style.display="none"
 
}
function czech(){
    document.getElementById("austria").style.display="none"
  document.getElementById("belgium").style.display="none"
  document.getElementById("bulgaria").style.display="none" 
  document.getElementById("croatia").style.display="none"
  document.getElementById("cyprus").style.display="none"
  document.getElementById("czech").style.display="block"
  document.getElementById("denmark").style.display="none"
  document.getElementById("estonia").style.display="none"
  document.getElementById("finland").style.display="none"
  document.getElementById("france").style.display="none"
  document.getElementById("germany").style.display="none"
  document.getElementById("greece").style.display="none"
  document.getElementById("hungary").style.display="none"
  document.getElementById("ireland").style.display="none"
  document.getElementById("latvia").style.display="none"
  document.getElementById("lithuania").style.display="none"
  document.getElementById("luxemborg").style.display="none"
  document.getElementById("malta").style.display="none"
  document.getElementById("netherlands").style.display="none"
  document.getElementById("poland").style.display="none"
  document.getElementById("portugal").style.display="none"
  document.getElementById("romania").style.display="none"
  document.getElementById("slovakia").style.display="none"
  document.getElementById("slovenia").style.display="none"
  document.getElementById("spain").style.display="none"
  document.getElementById("sweden").style.display="none"
  document.getElementById("uk").style.display="none"
  
}
function denmark(){
    document.getElementById("austria").style.display="none"
  document.getElementById("belgium").style.display="none"
  document.getElementById("bulgaria").style.display="none" 
  document.getElementById("croatia").style.display="none"
  document.getElementById("cyprus").style.display="none"
  document.getElementById("czech").style.display="none"
  document.getElementById("denmark").style.display="block"
  document.getElementById("estonia").style.display="none"
  document.getElementById("finland").style.display="none"
  document.getElementById("france").style.display="none"
  document.getElementById("germany").style.display="none"
  document.getElementById("greece").style.display="none"
  document.getElementById("hungary").style.display="none"
  document.getElementById("ireland").style.display="none"
  document.getElementById("latvia").style.display="none"
  document.getElementById("lithuania").style.display="none"
  document.getElementById("luxemborg").style.display="none"
  document.getElementById("malta").style.display="none"
  document.getElementById("netherlands").style.display="none"
  document.getElementById("poland").style.display="none"
  document.getElementById("portugal").style.display="none"
  document.getElementById("romania").style.display="none"
  document.getElementById("slovakia").style.display="none"
  document.getElementById("slovenia").style.display="none"
  document.getElementById("spain").style.display="none"
  document.getElementById("sweden").style.display="none"
  document.getElementById("uk").style.display="none"
  
}
function estonia(){
    document.getElementById("austria").style.display="none"
  document.getElementById("belgium").style.display="none"
  document.getElementById("bulgaria").style.display="none" 
  document.getElementById("croatia").style.display="none"
  document.getElementById("cyprus").style.display="none"
  document.getElementById("czech").style.display="none"
  document.getElementById("denmark").style.display="none"
  document.getElementById("estonia").style.display="block"
  document.getElementById("finland").style.display="none"
  document.getElementById("france").style.display="none"
  document.getElementById("germany").style.display="none"
  document.getElementById("greece").style.display="none"
  document.getElementById("hungary").style.display="none"
  document.getElementById("ireland").style.display="none"
  document.getElementById("latvia").style.display="none"
  document.getElementById("lithuania").style.display="none"
  document.getElementById("luxemborg").style.display="none"
  document.getElementById("malta").style.display="none"
  document.getElementById("netherlands").style.display="none"
  document.getElementById("poland").style.display="none"
  document.getElementById("portugal").style.display="none"
  document.getElementById("romania").style.display="none"
  document.getElementById("slovakia").style.display="none"
  document.getElementById("slovenia").style.display="none"
  document.getElementById("spain").style.display="none"
  document.getElementById("sweden").style.display="none"
  document.getElementById("uk").style.display="none"
  
}
function finland(){
    document.getElementById("austria").style.display="none"
  document.getElementById("belgium").style.display="none"
  document.getElementById("bulgaria").style.display="none" 
  document.getElementById("croatia").style.display="none"
  document.getElementById("cyprus").style.display="none"
  document.getElementById("czech").style.display="none"
  document.getElementById("denmark").style.display="none"
  document.getElementById("estonia").style.display="none"
  document.getElementById("finland").style.display="block"
  document.getElementById("france").style.display="none"
  document.getElementById("germany").style.display="none"
  document.getElementById("greece").style.display="none"
  document.getElementById("hungary").style.display="none"
  document.getElementById("ireland").style.display="none"
  document.getElementById("latvia").style.display="none"
  document.getElementById("lithuania").style.display="none"
  document.getElementById("luxemborg").style.display="none"
  document.getElementById("malta").style.display="none"
  document.getElementById("netherlands").style.display="none"
  document.getElementById("poland").style.display="none"
  document.getElementById("portugal").style.display="none"
  document.getElementById("romania").style.display="none"
  document.getElementById("slovakia").style.display="none"
  document.getElementById("slovenia").style.display="none"
  document.getElementById("spain").style.display="none"
  document.getElementById("sweden").style.display="none"
  document.getElementById("uk").style.display="none"
 
}
function france(){
    document.getElementById("austria").style.display="none"
  document.getElementById("belgium").style.display="none"
  document.getElementById("bulgaria").style.display="none" 
  document.getElementById("croatia").style.display="none"
  document.getElementById("cyprus").style.display="none"
  document.getElementById("czech").style.display="none"
  document.getElementById("denmark").style.display="none"
  document.getElementById("estonia").style.display="none"
  document.getElementById("finland").style.display="none"
  document.getElementById("france").style.display="block"
  document.getElementById("germany").style.display="none"
  document.getElementById("greece").style.display="none"
  document.getElementById("hungary").style.display="none"
  document.getElementById("ireland").style.display="none"
  document.getElementById("latvia").style.display="none"
  document.getElementById("lithuania").style.display="none"
  document.getElementById("luxemborg").style.display="none"
  document.getElementById("malta").style.display="none"
  document.getElementById("netherlands").style.display="none"
  document.getElementById("poland").style.display="none"
  document.getElementById("portugal").style.display="none"
  document.getElementById("romania").style.display="none"
  document.getElementById("slovakia").style.display="none"
  document.getElementById("slovenia").style.display="none"
  document.getElementById("spain").style.display="none"
  document.getElementById("sweden").style.display="none"
  document.getElementById("uk").style.display="none"
 
}

function germany(){
    document.getElementById("austria").style.display="none"
  document.getElementById("belgium").style.display="none"
  document.getElementById("bulgaria").style.display="none" 
  document.getElementById("croatia").style.display="none"
  document.getElementById("cyprus").style.display="none"
  document.getElementById("czech").style.display="none"
  document.getElementById("denmark").style.display="none"
  document.getElementById("estonia").style.display="none"
  document.getElementById("finland").style.display="none"
  document.getElementById("france").style.display="none"
  document.getElementById("germany").style.display="block"
  document.getElementById("greece").style.display="none"
  document.getElementById("hungary").style.display="none"
  document.getElementById("ireland").style.display="none"
  document.getElementById("latvia").style.display="none"
  document.getElementById("lithuania").style.display="none"
  document.getElementById("luxemborg").style.display="none"
  document.getElementById("malta").style.display="none"
  document.getElementById("netherlands").style.display="none"
  document.getElementById("poland").style.display="none"
  document.getElementById("portugal").style.display="none"
  document.getElementById("romania").style.display="none"
  document.getElementById("slovakia").style.display="none"
  document.getElementById("slovenia").style.display="none"
  document.getElementById("spain").style.display="none"
  document.getElementById("sweden").style.display="none"
  document.getElementById("uk").style.display="none"
 
}

function greece(){
    document.getElementById("austria").style.display="none"
  document.getElementById("belgium").style.display="none"
  document.getElementById("bulgaria").style.display="none" 
  document.getElementById("croatia").style.display="none"
  document.getElementById("cyprus").style.display="none"
  document.getElementById("czech").style.display="none"
  document.getElementById("denmark").style.display="none"
  document.getElementById("estonia").style.display="none"
  document.getElementById("finland").style.display="none"
  document.getElementById("france").style.display="none"
  document.getElementById("germany").style.display="none"
  document.getElementById("greece").style.display="block"
  document.getElementById("hungary").style.display="none"
  document.getElementById("ireland").style.display="none"
  document.getElementById("latvia").style.display="none"
  document.getElementById("lithuania").style.display="none"
  document.getElementById("luxemborg").style.display="none"
  document.getElementById("malta").style.display="none"
  document.getElementById("netherlands").style.display="none"
  document.getElementById("poland").style.display="none"
  document.getElementById("portugal").style.display="none"
  document.getElementById("romania").style.display="none"
  document.getElementById("slovakia").style.display="none"
  document.getElementById("slovenia").style.display="none"
  document.getElementById("spain").style.display="none"
  document.getElementById("sweden").style.display="none"
  document.getElementById("uk").style.display="none"
 
}

function hungary(){
    document.getElementById("austria").style.display="none"
  document.getElementById("belgium").style.display="none"
  document.getElementById("bulgaria").style.display="none" 
  document.getElementById("croatia").style.display="none"
  document.getElementById("cyprus").style.display="none"
  document.getElementById("czech").style.display="none"
  document.getElementById("denmark").style.display="none"
  document.getElementById("estonia").style.display="none"
  document.getElementById("finland").style.display="none"
  document.getElementById("france").style.display="none"
  document.getElementById("germany").style.display="none"
  document.getElementById("greece").style.display="none"
  document.getElementById("hungary").style.display="block"
  document.getElementById("ireland").style.display="none"
  document.getElementById("latvia").style.display="none"
  document.getElementById("lithuania").style.display="none"
  document.getElementById("luxemborg").style.display="none"
  document.getElementById("malta").style.display="none"
  document.getElementById("netherlands").style.display="none"
  document.getElementById("poland").style.display="none"
  document.getElementById("portugal").style.display="none"
  document.getElementById("romania").style.display="none"
  document.getElementById("slovakia").style.display="none"
  document.getElementById("slovenia").style.display="none"
  document.getElementById("spain").style.display="none"
  document.getElementById("sweden").style.display="none"
  document.getElementById("uk").style.display="none"
 
}

function ireland(){
    document.getElementById("austria").style.display="none"
  document.getElementById("belgium").style.display="none"
  document.getElementById("bulgaria").style.display="none" 
  document.getElementById("croatia").style.display="none"
  document.getElementById("cyprus").style.display="none"
  document.getElementById("czech").style.display="none"
  document.getElementById("denmark").style.display="none"
  document.getElementById("estonia").style.display="none"
  document.getElementById("finland").style.display="none"
  document.getElementById("france").style.display="none"
  document.getElementById("germany").style.display="none"
  document.getElementById("greece").style.display="none"
  document.getElementById("hungary").style.display="none"
  document.getElementById("ireland").style.display="block"
  document.getElementById("latvia").style.display="none"
  document.getElementById("lithuania").style.display="none"
  document.getElementById("luxemborg").style.display="none"
  document.getElementById("malta").style.display="none"
  document.getElementById("netherlands").style.display="none"
  document.getElementById("poland").style.display="none"
  document.getElementById("portugal").style.display="none"
  document.getElementById("romania").style.display="none"
  document.getElementById("slovakia").style.display="none"
  document.getElementById("slovenia").style.display="none"
  document.getElementById("spain").style.display="none"
  document.getElementById("sweden").style.display="none"
  document.getElementById("uk").style.display="none"
 
}

function latvia(){
    document.getElementById("austria").style.display="none"
  document.getElementById("belgium").style.display="none"
  document.getElementById("bulgaria").style.display="none" 
  document.getElementById("croatia").style.display="none"
  document.getElementById("cyprus").style.display="none"
  document.getElementById("czech").style.display="none"
  document.getElementById("denmark").style.display="none"
  document.getElementById("estonia").style.display="none"
  document.getElementById("finland").style.display="none"
  document.getElementById("france").style.display="none"
  document.getElementById("germany").style.display="none"
  document.getElementById("greece").style.display="none"
  document.getElementById("hungary").style.display="none"
  document.getElementById("ireland").style.display="none"
  document.getElementById("latvia").style.display="block"
  document.getElementById("lithuania").style.display="none"
  document.getElementById("luxemborg").style.display="none"
  document.getElementById("malta").style.display="none"
  document.getElementById("netherlands").style.display="none"
  document.getElementById("poland").style.display="none"
  document.getElementById("portugal").style.display="none"
  document.getElementById("romania").style.display="none"
  document.getElementById("slovakia").style.display="none"
  document.getElementById("slovenia").style.display="none"
  document.getElementById("spain").style.display="none"
  document.getElementById("sweden").style.display="none"
  document.getElementById("uk").style.display="none"
 
}

function lithuania(){
    document.getElementById("austria").style.display="none"
  document.getElementById("belgium").style.display="none"
  document.getElementById("bulgaria").style.display="none" 
  document.getElementById("croatia").style.display="none"
  document.getElementById("cyprus").style.display="none"
  document.getElementById("czech").style.display="none"
  document.getElementById("denmark").style.display="none"
  document.getElementById("estonia").style.display="none"
  document.getElementById("finland").style.display="none"
  document.getElementById("france").style.display="none"
  document.getElementById("germany").style.display="none"
  document.getElementById("greece").style.display="none"
  document.getElementById("hungary").style.display="none"
  document.getElementById("ireland").style.display="none"
  document.getElementById("latvia").style.display="none"
  document.getElementById("lithuania").style.display="block"
  document.getElementById("luxemborg").style.display="none"
  document.getElementById("malta").style.display="none"
  document.getElementById("netherlands").style.display="none"
  document.getElementById("poland").style.display="none"
  document.getElementById("portugal").style.display="none"
  document.getElementById("romania").style.display="none"
  document.getElementById("slovakia").style.display="none"
  document.getElementById("slovenia").style.display="none"
  document.getElementById("spain").style.display="none"
  document.getElementById("sweden").style.display="none"
  document.getElementById("uk").style.display="none"
 
}

function luxemborg(){
    document.getElementById("austria").style.display="none"
  document.getElementById("belgium").style.display="none"
  document.getElementById("bulgaria").style.display="none" 
  document.getElementById("croatia").style.display="none"
  document.getElementById("cyprus").style.display="none"
  document.getElementById("czech").style.display="none"
  document.getElementById("denmark").style.display="none"
  document.getElementById("estonia").style.display="none"
  document.getElementById("finland").style.display="none"
  document.getElementById("france").style.display="none"
  document.getElementById("germany").style.display="none"
  document.getElementById("greece").style.display="none"
  document.getElementById("hungary").style.display="none"
  document.getElementById("ireland").style.display="none"
  document.getElementById("latvia").style.display="none"
  document.getElementById("lithuania").style.display="none"
  document.getElementById("luxemborg").style.display="block"
  document.getElementById("malta").style.display="none"
  document.getElementById("netherlands").style.display="none"
  document.getElementById("poland").style.display="none"
  document.getElementById("portugal").style.display="none"
  document.getElementById("romania").style.display="none"
  document.getElementById("slovakia").style.display="none"
  document.getElementById("slovenia").style.display="none"
  document.getElementById("spain").style.display="none"
  document.getElementById("sweden").style.display="none"
  document.getElementById("uk").style.display="none"
 
}

function malta(){
    document.getElementById("austria").style.display="none"
  document.getElementById("belgium").style.display="none"
  document.getElementById("bulgaria").style.display="none" 
  document.getElementById("croatia").style.display="none"
  document.getElementById("cyprus").style.display="none"
  document.getElementById("czech").style.display="none"
  document.getElementById("denmark").style.display="none"
  document.getElementById("estonia").style.display="none"
  document.getElementById("finland").style.display="none"
  document.getElementById("france").style.display="none"
  document.getElementById("germany").style.display="none"
  document.getElementById("greece").style.display="none"
  document.getElementById("hungary").style.display="none"
  document.getElementById("ireland").style.display="none"
  document.getElementById("latvia").style.display="none"
  document.getElementById("lithuania").style.display="none"
  document.getElementById("luxemborg").style.display="none"
  document.getElementById("malta").style.display="block"
  document.getElementById("netherlands").style.display="none"
  document.getElementById("poland").style.display="none"
  document.getElementById("portugal").style.display="none"
  document.getElementById("romania").style.display="none"
  document.getElementById("slovakia").style.display="none"
  document.getElementById("slovenia").style.display="none"
  document.getElementById("spain").style.display="none"
  document.getElementById("sweden").style.display="none"
  document.getElementById("uk").style.display="none"
 
}

function netherlands(){
    document.getElementById("austria").style.display="none"
  document.getElementById("belgium").style.display="none"
  document.getElementById("bulgaria").style.display="none" 
  document.getElementById("croatia").style.display="none"
  document.getElementById("cyprus").style.display="none"
  document.getElementById("czech").style.display="none"
  document.getElementById("denmark").style.display="none"
  document.getElementById("estonia").style.display="none"
  document.getElementById("finland").style.display="none"
  document.getElementById("france").style.display="none"
  document.getElementById("germany").style.display="none"
  document.getElementById("greece").style.display="none"
  document.getElementById("hungary").style.display="none"
  document.getElementById("ireland").style.display="none"
  document.getElementById("latvia").style.display="none"
  document.getElementById("lithuania").style.display="none"
  document.getElementById("luxemborg").style.display="none"
  document.getElementById("malta").style.display="none"
  document.getElementById("netherlands").style.display="block"
  document.getElementById("poland").style.display="none"
  document.getElementById("portugal").style.display="none"
  document.getElementById("romania").style.display="none"
  document.getElementById("slovakia").style.display="none"
  document.getElementById("slovenia").style.display="none"
  document.getElementById("spain").style.display="none"
  document.getElementById("sweden").style.display="none"
  document.getElementById("uk").style.display="none"
 
}


function poland(){
    document.getElementById("austria").style.display="none"
  document.getElementById("belgium").style.display="none"
  document.getElementById("bulgaria").style.display="none" 
  document.getElementById("croatia").style.display="none"
  document.getElementById("cyprus").style.display="none"
  document.getElementById("czech").style.display="none"
  document.getElementById("denmark").style.display="none"
  document.getElementById("estonia").style.display="none"
  document.getElementById("finland").style.display="none"
  document.getElementById("france").style.display="none"
  document.getElementById("germany").style.display="none"
  document.getElementById("greece").style.display="none"
  document.getElementById("hungary").style.display="none"
  document.getElementById("ireland").style.display="none"
  document.getElementById("latvia").style.display="none"
  document.getElementById("lithuania").style.display="none"
  document.getElementById("luxemborg").style.display="none"
  document.getElementById("malta").style.display="none"
  document.getElementById("netherlands").style.display="none"
  document.getElementById("poland").style.display="block"
  document.getElementById("portugal").style.display="none"
  document.getElementById("romania").style.display="none"
  document.getElementById("slovakia").style.display="none"
  document.getElementById("slovenia").style.display="none"
  document.getElementById("spain").style.display="none"
  document.getElementById("sweden").style.display="none"
  document.getElementById("uk").style.display="none"
 
}


function portugal(){
    document.getElementById("austria").style.display="none"
  document.getElementById("belgium").style.display="none"
  document.getElementById("bulgaria").style.display="none" 
  document.getElementById("croatia").style.display="none"
  document.getElementById("cyprus").style.display="none"
  document.getElementById("czech").style.display="none"
  document.getElementById("denmark").style.display="none"
  document.getElementById("estonia").style.display="none"
  document.getElementById("finland").style.display="none"
  document.getElementById("france").style.display="none"
  document.getElementById("germany").style.display="none"
  document.getElementById("greece").style.display="none"
  document.getElementById("hungary").style.display="none"
  document.getElementById("ireland").style.display="none"
  document.getElementById("latvia").style.display="none"
  document.getElementById("lithuania").style.display="none"
  document.getElementById("luxemborg").style.display="none"
  document.getElementById("malta").style.display="none"
  document.getElementById("netherlands").style.display="none"
  document.getElementById("poland").style.display="none"
  document.getElementById("portugal").style.display="block"
  document.getElementById("romania").style.display="none"
  document.getElementById("slovakia").style.display="none"
  document.getElementById("slovenia").style.display="none"
  document.getElementById("spain").style.display="none"
  document.getElementById("sweden").style.display="none"
  document.getElementById("uk").style.display="none"
 
}

function romania(){
    document.getElementById("austria").style.display="none"
  document.getElementById("belgium").style.display="none"
  document.getElementById("bulgaria").style.display="none" 
  document.getElementById("croatia").style.display="none"
  document.getElementById("cyprus").style.display="none"
  document.getElementById("czech").style.display="none"
  document.getElementById("denmark").style.display="none"
  document.getElementById("estonia").style.display="none"
  document.getElementById("finland").style.display="none"
  document.getElementById("france").style.display="none"
  document.getElementById("germany").style.display="none"
  document.getElementById("greece").style.display="none"
  document.getElementById("hungary").style.display="none"
  document.getElementById("ireland").style.display="none"
  document.getElementById("latvia").style.display="none"
  document.getElementById("lithuania").style.display="none"
  document.getElementById("luxemborg").style.display="none"
  document.getElementById("malta").style.display="none"
  document.getElementById("netherlands").style.display="none"
  document.getElementById("poland").style.display="none"
  document.getElementById("portugal").style.display="none"
  document.getElementById("romania").style.display="block"
  document.getElementById("slovakia").style.display="none"
  document.getElementById("slovenia").style.display="none"
  document.getElementById("spain").style.display="none"
  document.getElementById("sweden").style.display="none"
  document.getElementById("uk").style.display="none"
 
}

function slovakia(){
    document.getElementById("austria").style.display="none"
  document.getElementById("belgium").style.display="none"
  document.getElementById("bulgaria").style.display="none" 
  document.getElementById("croatia").style.display="none"
  document.getElementById("cyprus").style.display="none"
  document.getElementById("czech").style.display="none"
  document.getElementById("denmark").style.display="none"
  document.getElementById("estonia").style.display="none"
  document.getElementById("finland").style.display="none"
  document.getElementById("france").style.display="none"
  document.getElementById("germany").style.display="none"
  document.getElementById("greece").style.display="none"
  document.getElementById("hungary").style.display="none"
  document.getElementById("ireland").style.display="none"
  document.getElementById("latvia").style.display="none"
  document.getElementById("lithuania").style.display="none"
  document.getElementById("luxemborg").style.display="none"
  document.getElementById("malta").style.display="none"
  document.getElementById("netherlands").style.display="none"
  document.getElementById("poland").style.display="none"
  document.getElementById("portugal").style.display="none"
  document.getElementById("romania").style.display="none"
  document.getElementById("slovakia").style.display="block"
  document.getElementById("slovenia").style.display="none"
  document.getElementById("spain").style.display="none"
  document.getElementById("sweden").style.display="none"
  document.getElementById("uk").style.display="none"
 
}

function slovenia(){
    document.getElementById("austria").style.display="none"
  document.getElementById("belgium").style.display="none"
  document.getElementById("bulgaria").style.display="none" 
  document.getElementById("croatia").style.display="none"
  document.getElementById("cyprus").style.display="none"
  document.getElementById("czech").style.display="none"
  document.getElementById("denmark").style.display="none"
  document.getElementById("estonia").style.display="none"
  document.getElementById("finland").style.display="none"
  document.getElementById("france").style.display="none"
  document.getElementById("germany").style.display="none"
  document.getElementById("greece").style.display="none"
  document.getElementById("hungary").style.display="none"
  document.getElementById("ireland").style.display="none"
  document.getElementById("latvia").style.display="none"
  document.getElementById("lithuania").style.display="none"
  document.getElementById("luxemborg").style.display="none"
  document.getElementById("malta").style.display="none"
  document.getElementById("netherlands").style.display="none"
  document.getElementById("poland").style.display="none"
  document.getElementById("portugal").style.display="none"
  document.getElementById("romania").style.display="none"
  document.getElementById("slovakia").style.display="none"
  document.getElementById("slovenia").style.display="block"
  document.getElementById("spain").style.display="none"
  document.getElementById("sweden").style.display="none"
  document.getElementById("uk").style.display="none"
 
}
function spain(){
    document.getElementById("austria").style.display="none"
  document.getElementById("belgium").style.display="none"
  document.getElementById("bulgaria").style.display="none" 
  document.getElementById("croatia").style.display="none"
  document.getElementById("cyprus").style.display="none"
  document.getElementById("czech").style.display="none"
  document.getElementById("denmark").style.display="none"
  document.getElementById("estonia").style.display="none"
  document.getElementById("finland").style.display="none"
  document.getElementById("france").style.display="none"
  document.getElementById("germany").style.display="none"
  document.getElementById("greece").style.display="none"
  document.getElementById("hungary").style.display="none"
  document.getElementById("ireland").style.display="none"
  document.getElementById("latvia").style.display="none"
  document.getElementById("lithuania").style.display="none"
  document.getElementById("luxemborg").style.display="none"
  document.getElementById("malta").style.display="none"
  document.getElementById("netherlands").style.display="none"
  document.getElementById("poland").style.display="none"
  document.getElementById("portugal").style.display="none"
  document.getElementById("romania").style.display="none"
  document.getElementById("slovakia").style.display="none"
  document.getElementById("slovenia").style.display="none"
  document.getElementById("spain").style.display="block"
  document.getElementById("sweden").style.display="none"
  document.getElementById("uk").style.display="none"
 
}
function sweden(){
    document.getElementById("austria").style.display="none"
  document.getElementById("belgium").style.display="none"
  document.getElementById("bulgaria").style.display="none" 
  document.getElementById("croatia").style.display="none"
  document.getElementById("cyprus").style.display="none"
  document.getElementById("czech").style.display="none"
  document.getElementById("denmark").style.display="none"
  document.getElementById("estonia").style.display="none"
  document.getElementById("finland").style.display="none"
  document.getElementById("france").style.display="none"
  document.getElementById("germany").style.display="none"
  document.getElementById("greece").style.display="none"
  document.getElementById("hungary").style.display="none"
  document.getElementById("ireland").style.display="none"
  document.getElementById("latvia").style.display="none"
  document.getElementById("lithuania").style.display="none"
  document.getElementById("luxemborg").style.display="none"
  document.getElementById("malta").style.display="none"
  document.getElementById("netherlands").style.display="none"
  document.getElementById("poland").style.display="none"
  document.getElementById("portugal").style.display="none"
  document.getElementById("romania").style.display="none"
  document.getElementById("slovakia").style.display="none"
  document.getElementById("slovenia").style.display="none"
  document.getElementById("spain").style.display="none"
  document.getElementById("sweden").style.display="block"
  document.getElementById("uk").style.display="none"
 
}
function uk(){
    document.getElementById("austria").style.display="none"
  document.getElementById("belgium").style.display="none"
  document.getElementById("bulgaria").style.display="none" 
  document.getElementById("croatia").style.display="none"
  document.getElementById("cyprus").style.display="none"
  document.getElementById("czech").style.display="none"
  document.getElementById("denmark").style.display="none"
  document.getElementById("estonia").style.display="none"
  document.getElementById("finland").style.display="none"
  document.getElementById("france").style.display="none"
  document.getElementById("germany").style.display="none"
  document.getElementById("greece").style.display="none"
  document.getElementById("hungary").style.display="none"
  document.getElementById("ireland").style.display="none"
  document.getElementById("latvia").style.display="none"
  document.getElementById("lithuania").style.display="none"
  document.getElementById("luxemborg").style.display="none"
  document.getElementById("malta").style.display="none"
  document.getElementById("netherlands").style.display="none"
  document.getElementById("poland").style.display="none"
  document.getElementById("portugal").style.display="none"
  document.getElementById("romania").style.display="none"
  document.getElementById("slovakia").style.display="none"
  document.getElementById("slovenia").style.display="none"
  document.getElementById("spain").style.display="none"
  document.getElementById("sweden").style.display="none"
  document.getElementById("uk").style.display="block"
 
}
</script>


        
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
