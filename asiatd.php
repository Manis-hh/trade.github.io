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
    #indonesia, #mangolia , #srilanka , #pakistan , #malaysia , #turkey , #singapore , #phillipines , #japan ,#thailand {
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
                    <div class="page-title" style="font-weight: bolder ; margin-bottom:-50px">ASIA TRADE DATA</div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<div class="container-fluid">
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
<div class="container-fluid">
    <center>
        <h1>Countries</h1>
        <div class="row">
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">bangladesh</p><img src="./globaltradedata/bangladesh.png" alt=""> 

        </div>
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">Indonesia</p><img src="./globaltradedata/indonesia_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">Mangolia</p><img src="./globaltradedata/mongolia_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">Shri lanka</p><img src="./globaltradedata/sri_lanka_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-xs-3">
            <a href="./countries/pakistan.php">
                
            <p style="font-size:12px ; font-weight:400">pakistan</p><img src="./globaltradedata/pakistan_rectangular_icon_with_shadow_64.png" alt=""> 

            </a>

        </div>
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">phillipines</p><img src="./globaltradedata/philippines_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">Turkey</p><img src="./globaltradedata/turkey_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">Malaysia</p><img src="./globaltradedata/malaysia_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
    </div>
    <div class="row">
        
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">Singapore</p><img src="./globaltradedata/singapore_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">Japan</p><img src="./globaltradedata/japan_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
        <div class="col-lg-3 col-xs-3">
        <p style="font-size:12px ; font-weight:400">Thailand</p><img src="./globaltradedata/thailand_rectangular_icon_with_shadow_64.png" alt=""> 

        </div>
    </div>
    <p style="color:#0a5dd3; padding:50px ;padding-bottom:100px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores reiciendis dolore cumque, possimus corporis officiis, quam voluptas commodi distinctio in dolorum? Quidem enim expedita at eum harum earum beatae deleniti, unde in dolore suscipit corrupti facere veritatis modi fuga provident, sint cupiditate vero eveniet architecto atque saepe molestiae, similique commodi! Id tenetur eaque explicabo quod necessitatibus sapiente consectetur exercitationem ea nobis earum aperiam totam maxime ipsum ducimus quo asperiores ipsam facere, magni similique ex minus eum corrupti. Impedit consectetur harum aperiam ullam illo ea. At saepe explicabo maxime illo unde dolorum, consectetur cupiditate tempore ipsum maiores totam ullam illum nulla.</p>
</div>

    <div class="container">
        <div class="row">
        <li  class="dropdown">
                                    <a id="con-btn" href="">Countries Covered<i class="fas fa-caret-down"></i></a>
                                    <ul class="dropdown-menu">
                                      <li><a onchange="bangladesh()" >bangladesh</a></li>
                                      <li><a  onclick="showindonesia()">Indonesia</a></li>
                                      <li><a  onclick="showsrilanka()">Shri lanka</a></li>
                                      <li><a onclick="showpak()">pakistan</a></li>
                                      <li><a onclick="showphil()">Phillipines</a></li>
                                      <li><a onclick="turkey()">Turkey</a></li>
                                      <li><a onclick="malyasia()">Malaysia</a></li>
                                      <li><a onclick="singapore()">Singapore</a></li>
                                      <li><a onclick="japan()">Japan</a></li>
                                      <li><a onclick="thailand()">Thailand</a></li>
                                      
                                      <li><a onclick="mangolia()">Mangolia</a></li>
                                      
                                      
                                    </ul>
                                </li>
     

        </div>
     
    </div>
    <div class="container" id="bangladesh">
    <div class="row" id="bangladesh" >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>bangladesh</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
    </div>
    <!-- indonesia -->
      <div class="container" id="indonesia">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>Indonesia</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
      <!-- mangolia -->
      <div class="container" id="mangolia">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>Mangolia</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
      <!-- SHRILANKA -->
      <div class="container" id="srilanka">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>Shri Lanka</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
    <!-- pakistan -->
    <div class="container" id="pakistan">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center>
            <a href="./countries/pakistan.php"><h1>Pakistan</h1> </a> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
    <!-- phillipines -->
    <div class="container" id="phillipines">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>Phillipines</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
      <!-- Turkey -->
      <div class="container" id="turkey">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>Turkey</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
      <!-- Malaysia -->
      <div class="container" id="malaysia">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>Malaysia</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
      <!-- singapore -->
      <div class="container" id="singapore">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>Singapore</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
      <!-- japan -->
      <div class="container" id="japan">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>Japan</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
      <!-- Thailand -->
      <div class="container" id="thailand">
      <div class="row"  >
        <div class="col-lg-6 col-xs-12 ">
            <img id="prdimg" src="https://www.exportgenius.in/export-import-trade-data/images/continent_sample/indonesia-import-sample.png" alt="">
        </div>
        <div class="col-lg-6 col-xs-12" id="sidetxt">
        <center><h1>Thailand</h1> </center>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi enim voluptatum officia quo nobis? Voluptatum error consequuntur porro quod quae, corrupti vel! Autem, possimus unde reiciendis non ad quo, ex cumque nesciunt dolore nostrum suscipit error ea molestiae! Accusantium odio excepturi, in praesentium nostrum natus molestias, corrupti debitis voluptatum ea est vitae at repellendus sequi cupiditate unde veritatis! Ullam earum animi quo assumenda deserunt tempore facilis impedit quae minus, officia mollitia doloremque repudiandae temporibus dolores sapiente aut omnis saepe enim quaerat natus ipsum accusantium? Sit nulla animi optio unde ipsam natus modi illo? Quo dignissimos sequi quisquam ea, voluptatum recusandae?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ad a saepe error repellat architecto maxime dolorum. Doloremque non inventore alias, incidunt beatae, omnis fugiat velit assumenda, at deleniti nulla earum corporis? Debitis suscipit ea cumque illo voluptatem natus beatae. Vero nulla cupiditate error harum atque nemo nam commodi ea rerum fugit tempora eveniet pariatur quis eum, debitis vitae accusamus ipsum quae labore esse tempore iste! Perferendis animi earum expedita ducimus atque tempora alias sapiente itaque corrupti, impedit tempore laudantium, nobis aliquid totam quisquam dolore beatae hic libero deserunt assumenda suscipit quibusdam perspiciatis est. Laboriosam quia similique nemo et. Molestias.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus deleniti harum eius tempora maiores excepturi libero sequi rem nam cum earum eum doloremque tempore culpa, iure asperiores molestias, distinctio quos unde, magnam ullam sed. Labore, nulla. Corporis cumque incidunt repellendus dignissimos amet perferendis ducimus sunt? Consectetur laboriosam totam, tempora quae quod provident pariatur vitae. Iusto neque consequuntur mollitia, hic sit accusantium impedit inventore facere nemo dolores non tempore commodi dolorum veniam ratione exercitationem illo doloribus harum, est molestiae amet nostrum perspiciatis? Possimus consequatur incidunt aliquam, inventore minima aliquid fugit voluptate harum, vel nulla ratione iste deserunt dolorem aut eius.</p>
    </div>
      </div>
      </div>
    </center>
    <div class="container text-center" style="padding-top: 100px;">
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
 
 function bangladesh(){
  document.getElementById("indonesia").style.display="none"
  document.getElementById("bangladesh").style.display="block"
  document.getElementById("srilanka").style.display="none" 
  document.getElementById("pakistan").style.display="none"
  document.getElementById("phillipines").style.display="none"
  document.getElementById("turkey").style.display="none"
  document.getElementById("singapore").style.display="none"
  document.getElementById("malaysia").style.display="none"
  document.getElementById("thailand").style.display="none"
  document.getElementById("japan").style.display="none"
  document.getElementById("mangolia").style.display="none"

}

 function showindonesia(){
  document.getElementById("indonesia").style.display="block"
  document.getElementById("bangladesh").style.display="none"
  document.getElementById("srilanka").style.display="none" 
  document.getElementById("pakistan").style.display="none"
  document.getElementById("phillipines").style.display="none"
  document.getElementById("turkey").style.display="none"
  document.getElementById("singapore").style.display="none"
  document.getElementById("malaysia").style.display="none"
  document.getElementById("thailand").style.display="none"
  document.getElementById("japan").style.display="none"
  document.getElementById("mangolia").style.display="none"

}
function showsrilanka(){
    document.getElementById("indonesia").style.display="none"
  document.getElementById("bangladesh").style.display="none"
  document.getElementById("srilanka").style.display="block" 
  document.getElementById("pakistan").style.display="none"
  document.getElementById("phillipines").style.display="none"
  document.getElementById("turkey").style.display="none"
  document.getElementById("singapore").style.display="none"
  document.getElementById("malaysia").style.display="none"
  document.getElementById("thailand").style.display="none"
  document.getElementById("japan").style.display="none"
  document.getElementById("mangolia").style.display="none"
  
}
function showpak(){
    document.getElementById("indonesia").style.display="none"
  document.getElementById("bangladesh").style.display="none"
  document.getElementById("srilanka").style.display="none" 
  document.getElementById("pakistan").style.display="block"
  document.getElementById("phillipines").style.display="none"
  document.getElementById("turkey").style.display="none"
  document.getElementById("singapore").style.display="none"
  document.getElementById("malaysia").style.display="none"
  document.getElementById("thailand").style.display="none"
  document.getElementById("japan").style.display="none"
  document.getElementById("mangolia").style.display="none"
  
}
function showphil(){
    document.getElementById("indonesia").style.display="none"
  document.getElementById("bangladesh").style.display="none"
  document.getElementById("srilanka").style.display="none" 
  document.getElementById("pakistan").style.display="none"
  document.getElementById("phillipines").style.display="block"
  document.getElementById("turkey").style.display="none"
  document.getElementById("singapore").style.display="none"
  document.getElementById("malaysia").style.display="none"
  document.getElementById("thailand").style.display="none"
  document.getElementById("japan").style.display="none"
  document.getElementById("mangolia").style.display="none"
  
}
function turkey(){
    document.getElementById("indonesia").style.display="none"
  document.getElementById("bangladesh").style.display="none"
  document.getElementById("srilanka").style.display="none" 
  document.getElementById("pakistan").style.display="none"
  document.getElementById("phillipines").style.display="none"
  document.getElementById("turkey").style.display="block"
  document.getElementById("singapore").style.display="none"
  document.getElementById("malaysia").style.display="none"
  document.getElementById("thailand").style.display="none"
  document.getElementById("japan").style.display="none"
  document.getElementById("mangolia").style.display="none"
  
}
function malaysia(){
    document.getElementById("indonesia").style.display="none"
  document.getElementById("bangladesh").style.display="none"
  document.getElementById("srilanka").style.display="none" 
  document.getElementById("pakistan").style.display="none"
  document.getElementById("phillipines").style.display="none"
  document.getElementById("turkey").style.display="none"
  document.getElementById("singapore").style.display="none"
  document.getElementById("malaysia").style.display="block"
  document.getElementById("thailand").style.display="none"
  document.getElementById("japan").style.display="none"
  document.getElementById("mangolia").style.display="none"
  
}
function singapore(){
    document.getElementById("indonesia").style.display="none"
  document.getElementById("bangladesh").style.display="none"
  document.getElementById("srilanka").style.display="none" 
  document.getElementById("pakistan").style.display="none"
  document.getElementById("phillipines").style.display="none"
  document.getElementById("turkey").style.display="none"
  document.getElementById("singapore").style.display="block"
  document.getElementById("malaysia").style.display="none"
  document.getElementById("thailand").style.display="none"
  document.getElementById("japan").style.display="none"
  document.getElementById("mangolia").style.display="none"
  
}

function japan(){
    document.getElementById("indonesia").style.display="none"
  document.getElementById("bangladesh").style.display="none"
  document.getElementById("srilanka").style.display="none" 
  document.getElementById("pakistan").style.display="none"
  document.getElementById("phillipines").style.display="none"
  document.getElementById("turkey").style.display="none"
  document.getElementById("singapore").style.display="none"
  document.getElementById("malaysia").style.display="none"
  document.getElementById("thailand").style.display="none"
  document.getElementById("japan").style.display="block"
  document.getElementById("mangolia").style.display="none"
  
}
function thailand(){
    document.getElementById("indonesia").style.display="none"
  document.getElementById("bangladesh").style.display="none"
  document.getElementById("srilanka").style.display="none" 
  document.getElementById("pakistan").style.display="none"
  document.getElementById("phillipines").style.display="none"
  document.getElementById("turkey").style.display="none"
  document.getElementById("singapore").style.display="none"
  document.getElementById("malaysia").style.display="none"
  document.getElementById("thailand").style.display="block"
  document.getElementById("japan").style.display="none"
  document.getElementById("mangolia").style.display="none"
  
}
function mangolia(){
    document.getElementById("indonesia").style.display="none"
  document.getElementById("bangladesh").style.display="none"
  document.getElementById("srilanka").style.display="none" 
  document.getElementById("pakistan").style.display="none"
  document.getElementById("phillipines").style.display="none"
  document.getElementById("turkey").style.display="none"
  document.getElementById("singapore").style.display="none"
  document.getElementById("malaysia").style.display="none"
  document.getElementById("thailand").style.display="none"
  document.getElementById("japan").style.display="none"
  document.getElementById("mangolia").style.display="block"
    
}
</script>

        
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
