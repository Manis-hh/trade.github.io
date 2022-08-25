<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
<title>TradeImeX®</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.min.css">
<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
<link rel="stylesheet" type="text/css" href="css/slick.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>

<style>
    /* span{
        background-color: yellow;
    } */
    .highlight{
        background-color: yellow;
        
    }
    #chname{
        border-left: 1px solid lightgray;
        padding: 1px;
    }
p{
    padding: 5px;
    font-size: 18px;
}

#hshead{
    
}
#chapters{
    border: 1px solid grey;
    border-bottom: 0px;
    
  
}
#chaptercontainer{
    background-color:aliceblue;
    border: 1px solid grey ;
    border-radius: 10px;
    padding: 10px;
    
    overflow: hidden;
    margin: 10px;
    margin-bottom: 20px;
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
                                    <a href="aboutus.html">Aboutus <i class="fas fa-caret-down"></i></a>
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
                    <div class="page-title" style="font-weight: bolder ; margin-bottom:-50px">FIND HS CODE  <span></span> <i class="fa fa-search" style="font-size:40px"></i></div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<p id="p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, aut cumque minima similique aspernatur veritatis vitae repellat enim sequi dolorem, ea necessitatibus veniam non quaerat soluta cum id debitis sit.</p>
<div class="container" id="searchBox">
    <input type="text" id="search_term" placeholder="search">
    <input type="button" id="#search_button" value="Search" >
</div>
<div class="container-fluid "  id="chaptercontainer" >
<div class="row text-center  " style=" margin-right:-10px ;margin-left:-10px" id="hshead">
    HS Codes For (Chapter 1 - 5 ) - Section I-Live Animals; Animal Products
</div>    
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter1
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Live animals
    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter2
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9" id="chname">
    Meat and edible Meat Offal
    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-xs-3" >
        Chapter3
    </div>
    <div class="col-lg-8 col-xs-9" id="chname">
    HS Code for Fish and crustaceans, molluscs and other aquatic invertebrates
    </div>
    
    </div>
    <div class="row text-center" id="chapters" id="chname">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter4
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9"id="chname" >
    HS Code for Dairy produce; birds 'eggs; natural honey; animal edible products not specified or included elsewhere    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter5
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9" id="chname">
    HS Code for Products of animal origin, not specified or included elsewhere
    </div>
</div>
</div>
<div class="container-fluid "  id="chaptercontainer" >
<div class="row text-center " style=" margin-right:-10px ;margin-left:-10px" id="hshead">
HS Codes For (Chapter 6-14 ) - Section II-Vegetable Products
</div>    
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3">
        Chapter6
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Live plants and products of floricultura</div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter7
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9" id="chname">
    HS Code for Vegetables, roots and tubers edible </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-xs-3" >
        Chapter8
    </div>
    <div class="col-lg-8 col-xs-9" id="chname">
    HS Code for Fruit; peel of citrus (citrus *) or melons</div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter9
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9" id="chname">
    HS Code for Coffee, tea, mate and spices
    </div>
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter10
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9" id="chname">
    HS Code for Cereals
</div>
</div>
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter11
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9" id="chname">
    HS Code for Products of the milling industry; malt; starches; inulin; wheat gluten
   </div>
</div>
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter12
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9" id="chname">
	HS Code for Seeds and oleaginous fruits; grains, seeds and fruit; industrial or medicinal plants; straw and fodder    </div>
</div>
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter13
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9" id="chname">
    HS Code for Gums, resins and other vegetable saps and extracts
</div>
</div>
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter14
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9" id="chname">
    HS Code for Plaiting materials and other vegetable products, not specified or included elsewhere
   </div>
</div>
</div>
<div class="container-fluid "  id="chaptercontainer" >
<div class="row text-center  " style=" margin-right:-10px ;margin-left:-10px" id="hshead">
HS Codes For (Chapter 15 ) - Section III-Animal Or Vegetable Fats And Oils And Their Cleavage Products; Prepared Edible Fats; Animal Or Vegetable Waxes
</div>    
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter15
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Animal fats, oils or vegetables; their cleavage products; edible fat used; waxes animal or vegetable
    </div>
    
    </div>
    
</div>
<div class="container-fluid "  id="chaptercontainer" >
<div class="row text-center " style=" margin-right:-10px ;margin-left:-10px" id="hshead">
HS Codes For (Chapter 16 -24 ) - Section IV-Prepared Foodstuffs; Beverages, Spirits And Vinegar; Tobacco And Manufactured Tabacco Substitutes</div>    

<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter16
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Preparations of meat, fish or crustaceans, molluscs or other aquatic invertebrates 
    </div>
</div>
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter17
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Sugar and sweets
</div>
</div>
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter18
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 "id="chname">
    HS Code for Cocoa and cocoa preparations
</div>
</div>
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter19
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Preparations for cereals, flour, starch or milk; pastry products
</div>
</div>
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter20
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 "id="chname">
    HS Code for Preparations of vegetables, fruit or other parts of plants
</div>
</div>
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter21
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 "id="chname">
	HS Code for Miscellaneous edible preparations
</div>

</div>
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter22
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Beverages, spirits and vinegar
</div>

</div>
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter23
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Waste and waste from the food industries; prepared animal food
</div>

</div>
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter24
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Tobacco and its substitutes manufactured
</div>

</div>


</div>
<div class="container-fluid "  id="chaptercontainer" >
<div class="row text-center  " style=" margin-right:-10px ;margin-left:-10px" id="hshead">
HS Codes For (Chapter 25 -27 ) - Section V-Mineral Products
</div>    
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter25
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 "id="chname">
    HS Code for Salt; sulfur; earths and stone; gypsum, lime and cement  </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter26
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 "id="chname">
    HS Code for Ore, slim and gray
    </div>
    
</div>
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter27
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Mineral fuels, mineral oils and products of their distillation; betuminous substances; mineral waxes
    </div>
    
</div>
</div>
<div class="container-fluid "  id="chaptercontainer" >
<div class="row text-center  " style=" margin-right:-10px ;margin-left:-10px" id="hshead">
HS Codes For (Chapter 28 -38 ) - Section VI-Products Of The Chemicals Or Allied Industries</div>    
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter28
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
	HS Code for Inorganic chemicals: inorganic or organic compounds of precious metals, radioactive elements, rare land metals or isotope metals </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter29
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Organic chemicals</div>
    
</div>
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter30
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Pharmaceutical products   </div>
    
</div>
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter31
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Fertilizer (fertilizers)
    </div>
    
</div>
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter32
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Extracts from tanning or dyeing; tannins and their derivatives; dyes, pigments and other coloring matter; paints and varnishes; mastics; inks    </div>
    
</div>
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter33
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Essential oils and resinoids; perfumery products or toilet preparations cosmetics
</div>

</div>
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter34
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Soap, organic surface-agents, washing preparations, lubricating preparations, artificial waxes, prepared waxes, storage and cleaning products, candles and similar articles, masses or modeling pastes, "dental waxes" and dental to gypsum
</div>

</div>
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter35
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Albuminoidel substances; products or starches the base modified starches; colas; enzymes</div>

</div>

<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter36
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Explosives; pyrotechnics; matches; pyrophoric alloys; flammable materials
    </div>
</div>
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter37
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Photographic or cinematographic
    </div>
</div>
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter38
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">

    Chapter 38	HS Code for Miscellaneous chemical products
    </div>
</div>

</div>
<div class="container-fluid "  id="chaptercontainer" >
<div class="row text-center  " style=" margin-right:-10px ;margin-left:-10px" id="hshead">

HS Codes For (Chapter 39 - 40 ) - Section VII-Plastics And Articles Thereof; Rubber And Articles Thereof

</div>    
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter39
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Plastics and articles thereof
    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter40
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
	HS Code for Rubber and articles
    </div>
    
    </div>
    
</div>
<div class="container-fluid "  id="chaptercontainer" >
<div class="row text-center  " style=" margin-right:-10px ;margin-left:-10px" id="hshead">

HS Codes For (Chapter 41 - 43 ) - Section VIII-Raw Hides And Skins, Leather, Furskins And Articles Thereof; Saddlery And Harness; Travel Goods, Handbags And Similar Containers; Articles Of Animal Gut (Other Than Silk-Worm Gut)

</div>    
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter41
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
	HS Code for Skins, except as with the skins and leather
    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter42
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Of leather; saddlery or harness articles; travel goods, handbags and the like; rags
    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter43
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Furs and articles thereof; skins with the artificial
    </div>
    
    </div>
    
</div>

<div class="container-fluid "  id="chaptercontainer" >
<div class="row text-center  " style=" margin-right:-10px ;margin-left:-10px" id="hshead">

HS Codes For (Chapter 44 -46 ) - Section IX-Wood And Articles Of Wood; Wood Charcoal; Cork And Articles Or Cork; Manufactures Of Straw, Of Esparto Or Of Other Plaiting Materials; Basketware And Wickerwork

</div>    
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter44
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Wood charcoal and wood works
    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter45
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">

    HS Code for Wood charcoal
    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter46
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Of esparto or basket weaving
    </div>
    
    </div>
    
</div>

<div class="container-fluid "  id="chaptercontainer" >
<div class="row text-center  " style=" margin-right:-10px ;margin-left:-10px" id="hshead">

HS Codes For (Chapter 47 -49 ) - Section X-Pulp Of Wood Or Of Other Fibrous Cellulosic Material; Recovered (Waste And Scrap) Paper Or Paperboard; Paper And Paperboard And Articles Thereof

</div>    
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter47
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Pulp of wood or of other fibrous cellulosic material; paper or card recovered (waste and scrap)    
    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter48
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">

    HS Code for Paper and paperboard; works of paper pulp, of paper or card
    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter49
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
	HS Code for Books, newspapers, pictures and other products of the printing industry; manuscripts, typescripts and plans
    </div>
    
    </div>
    
</div>
<div class="container-fluid "  id="chaptercontainer" >
<div class="row text-center  " style=" margin-right:-10px ;margin-left:-10px" id="hshead">

HS Codes For (Chapter 50 -63 ) - Section XI-Textile And Textile Articles

</div>    
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter50
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Silk    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter51
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">

    HS Code for Wool, fine or by coarse horsehair yarn and fabrics
    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter52
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
	HS Code for Cotton
    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter53
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Other vegetable textile fibers; wire paper and paper yarn fabrics
    </div>
    
    </div>
    
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter54
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Synthetic or artificial filaments;blades and similar forms of synthetic or artificial textile materials

    </div>
    
    </div>
    
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter55
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Synthetic or artificial fibers, discontinued    
    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter56
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Outstanding, felt and false fabrics; special wires; cordes, strings and cables;cordoba items    
    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter57
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Carpets and other textile floor coverings (pavements)
    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter58
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Special fabrics;fabrics;income;tapestry;passamanarias;embroidery
    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter59
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Impregnated, coated, covered or stretched fabrics;articles for technical uses of textile materials
    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter60
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Knitted fabrics    
    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter61
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Articles of apparel and clothing accessories, knitted or crocheted   
    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter62
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Apparel and clothing accessories, except mesh
    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter63
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Other items up textile articles; sets; textile articles and use items like, used; rags
    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter64
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Footwear, gaiters and the like; parts
    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter65
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Hats and similar use items, and parts    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter66
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Umbrellas, parasols, sun umbrellas, walking sticks, seat-sticks, whips, riding-crops, and parts
    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter67
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Feather and down prepared and glassware; artificial flowers; hair works    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter68
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Stone, plaster, cement, asbestos, mica or similar materials
   </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter69
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Ceramic products
   </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter70
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Glass and glassware
   </div>
    
    </div>
    
</div>

<div class="container-fluid "  id="chaptercontainer" >
<div class="row text-center  " style=" margin-right:-10px ;margin-left:-10px" id="hshead">

HS Codes For (Chapter 64 -67 ) - Section XII-Footwear, Headgear, Umbrellas, Sun Umbrellas, Walking-Sticks, Seat-Sticks, Whips, Riding-Crops And Parts Thereof; Prepared Feathers And Articles Made Therewith; Artificial Flowers; Articles Of Human Hair

</div>    
<div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter64
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Footwear, gaiters and the like; parts
    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter65
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Hats and similar use items, and parts    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter66
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Umbrellas, parasols, sun umbrellas, walking sticks, seat-sticks, whips, riding-crops, and parts
    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter67
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Feather and down prepared and glassware; artificial flowers; hair works    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter68
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Stone, plaster, cement, asbestos, mica or similar materials
   </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter69
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Ceramic products
   </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter70
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Glass and glassware
   </div>
    
    </div>
      
</div>
<div class="container-fluid "  id="chaptercontainer" >
<div class="row text-center  " style=" margin-right:-10px ;margin-left:-10px" id="hshead">

HS Codes For (Chapter 68 -70 ) - Section XIII-Articles Of Stone, Plaster, Cement, Asbestos, Mica Or Similar Materials; Ceramic Products; Glass And Glassware

</div>    

    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter68
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Stone, plaster, cement, asbestos, mica or similar materials
   </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter69
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Ceramic products
   </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter70
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Glass and glassware
   </div>
    
    </div>
      
</div>
<div class="container-fluid "  id="chaptercontainer" >
<div class="row text-center  " style=" margin-right:-10px ;margin-left:-10px" id="hshead">

HS Codes For (Chapter 71 ) - Section XIV-Natural Or Cultured Pearls, Precious Or Semi-Precious Stones, Precious Metals, Metals Clad With Precious Metal, And Articles Thereof; Imitation Jewellery; Coin

</div>    

    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter71
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Glass and glassware   </div>
    
    </div>
    
</div>
<div class="container-fluid "  id="chaptercontainer" >
<div class="row text-center  " style=" margin-right:-10px ;margin-left:-10px" id="hshead">

HS Codes For (Chapter 72 -83 ) - Section XV-Base Metals And Articles Of Base Metal

</div>    

    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter72
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Iron and steel  </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter73
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Cast iron works, iron or steel  </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter74
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Copper and articles thereof  </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter75
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Nickel and articles thereof  </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter76
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Aluminum and articles thereof  </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter77
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for (reserved for any future use in the harmonized system</div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter78
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Lead and articles thereof  </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter79
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Zinc and articles thereof
    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter80
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Tin and articles thereof
    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter81
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Other common metals; cermets;works of such articles
    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter82
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Tools, cutlery & cutlery, and articles thereof, of common metal
    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter83
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Miscellaneous articles of base metal
    </div>
    
    </div>
    
</div>

<div class="container-fluid "  id="chaptercontainer" >
<div class="row text-center  " style=" margin-right:-10px ;margin-left:-10px" id="hshead">

HS Codes For (Chapter 84 - 85 ) - Section XVI-Machinery And Mechanical Appliances; Electrical Equipment; Parts Thereof; Sound Recorders And Reproducers, Television Image And Sound Recorders And Reproducers, Television Image And Sound Recorders And Reproducers, And Parts And Accessories Of Such Article

</div>    

    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter84
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Nuclear reactors, boilers, machinery and mechanical appliances; parts thereof  </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter85
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Electrical machinery and equipment, and parts thereof;sound recorders and reproducers, television image and sound recorders and reproducers, and parts and accessories of such articles
      </div>
    
    </div>
    
</div>

<div class="container-fluid "  id="chaptercontainer" >
<div class="row text-center  " style=" margin-right:-10px ;margin-left:-10px" id="hshead">

HS Codes For (Chapter 86 - 89 ) - Section XVII-Vehicles, Aircraft, Vessels And Associated Transport Equipment</p>
</div>    

    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter86
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Vehicles and equipment for roads tramways, and parts thereof; mechanical (including electromechanical) traffic signaling equipment of all kinds  
    </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter87
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Vehicles, tractors, cycles and other land vehicles, parts and accessories
      </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter88
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Aircraft, spacecraft, and parts
      </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter89
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Boats and floating structures
      </div>
    
    </div>
    
</div>

<div class="container-fluid "  id="chaptercontainer" >
<div class="row text-center  " style=" margin-right:-10px ;margin-left:-10px" id="hshead">

HS Codes For (Chapter 90 - 92 ) - Section XVIII-Optical, Photographic, Cinematographic, Measuring, Checking, Precision, Medical Or Surgical Instruments And Apparatus; Clocks And Watches; Musical Instruments; Part And Accessories Thereof
</div>    

    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter90
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Instruments and optical, photographic, cinematographic, measuring, accuracy or control; instruments and devices medical or surgical; parts and accessories  
      </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter91
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Clocks and watches
      </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter92
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Musical instruments; parts and accessories
      </div>
    
    </div>
    
</div>
<div class="container-fluid "  id="chaptercontainer" >
<div class="row text-center  " style=" margin-right:-10px ;margin-left:-10px" id="hshead">

HS Code for Arms and ammunition; parts and accessories
</div>    

    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter93
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Arms and ammunition; parts and accessories
      </div>
    
    </div>
    
</div>
<div class="container-fluid "  id="chaptercontainer" >
<div class="row text-center  " style=" margin-right:-10px ;margin-left:-10px" id="hshead">

HS Codes For (Chapter 94 - 96 ) - Section XX-Miscellaneous Manufactured Articles
</div>    

    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter94
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Furniture; furniture medical-surgical; mattress, pillows and similar; lighting equipment not specified or included elsewhere; ads, posters or tablets and signs, illuminated and the like; prefabricated buildings

      </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter95
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Toys, games and fun items and sports; parts and accessories
      </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter96
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Miscellaneous
      </div>
    
    </div>
    
</div>
<div class="container-fluid "  id="chaptercontainer" >
<div class="row text-center  " style=" margin-right:-10px ;margin-left:-10px" id="hshead">

HS Codes For (Chapter 97 - 98 ) - Section XX-Miscellaneous Manufactured Articles
</div>    

    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter97
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    HS Code for Objects of art, antiques and collection
      </div>
    
    </div>
    <div class="row text-center" id="chapters">
    <div class="col-lg-2 col-md-2 col-xs-3" >
        Chapter98
    </div>
    <div class="col-lg-8 col-md-8 col-xs-9 " id="chname">
    Project Imports, Laboratory chemicals, Passengers ,baggage, Personal importation by air or post, Ship stores
      </div>
    
    </div>
    
</div>

<?php include 'footer.php'?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
<script>

$(document).ready(function(){
$('#search_term').keyup(function(){
   searchHighlight($(this).val());
})
})

function searchHighlight(searchText){
    if (searchText){
        var content =$("#p").text();
    var searchExp = new RegExp(searchText,'ig')
    
    var matches = content.match(searchExp);
    if (matches){
        $("#p").html(content.replace(searchExp,function(match){
            return "<span class ='highlight'>"+match+"</span>";
        }));
    }
    }
    else{
        $(".highlight").removeClass(".highlight")
    }
    
}

</script>



<script src="js/highlight.js"></script>        
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
