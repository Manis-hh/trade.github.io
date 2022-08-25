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
     #table-1{
           display: none;
        }
        #table-2{
           display: none;
        }
    @media (max-width:500px) {
        #table-3{
           
        }
    }
 table tr th{
	border: 1px solid #333;
	padding: 2px 20px;
	box-sizing: border-box;
	background: #b0b0b0;
}
table tr td{
	border: 1px solid #333;
	padding: 5px 20px;
	box-sizing: border-box;
	font-size: 18px;
}
table {
  border-collapse: collapse;
	margin-bottom: 400px;
}
input{
	width: 200px;
	height: 18px;
	margin-bottom: 5px;
	font-size: 18px;
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
                                    <a href="aboutus.php">Aboutus <i class="fas fa-caret-down"></i></a>
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
<!-- <center>
	<h1>JavaScript Table Filter <a target="_blank" href="https://insidethediv.com/javascript-filter-table-row-single-and-multiple-columns">More</a></h1>
</center> -->
<!-- <h2>Single Column(Name) Search <a target="_blank" href="https://insidethediv.com/javascript-filter-table-row-single-and-multiple-columns">More</a></h2>
<input type="text" id="searchBox-1" placeholder="Search Here"> -->
<table id="table-1">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>Age</th>
	</tr>
	<tr>
		<td>Nasir Khan</td>
		<td>lalon@gmail.com</td>
		<td>Dhaka, Bangladesh</td>
		<td>25</td>
	</tr>
	<tr>
		<td>Jabed</td>
		<td>rdemo-1@gmail.com</td>
		<td>Foridpur, Bangladesh</td>
		<td>18</td>
	</tr>
		<tr>
		<td>Riad Hossain</td>
		<td>newEmail@gmail.com</td>
		<td>Nowakhali, Bangladesh</td>
		<td>30</td>
	</tr>
	</tr>
		<tr>
		<td>Soikot</td>
		<td>CoolEmail@gmail.com</td>
		<td>Dhaka, Bangladesh</td>
		<td>40</td>
	</tr>
	</tr>
		<tr>
		<td>Monju Gotok</td>
		<td>gotok@gmail.com</td>
		<td>Pabna, Bangladesh</td>
		<td>25</td>
	</tr>
</table>

<!-- <h2>Multiple Column(Name, Email) Search <a target="_blank" href="https://insidethediv.com/javascript-filter-table-row-single-and-multiple-columns">More</a></h2>
<input type="text" id="searchBox-2" placeholder="Search Here"> -->
<table id="table-2">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>Age</th>
	</tr>
	<tr>
		<td>Nasir Khan</td>
		<td>NKhan@gmail.com</td>
		<td>Dhaka, Bangladesh</td>
		<td>25</td>
	</tr>
	<tr>
		<td>Jabed</td>
		<td>jabed123@gmail.com</td>
		<td>Foridpur, Bangladesh</td>
		<td>18</td>
	</tr>
		<tr>
		<td>Riad Hossain</td>
		<td>riadh@gmail.com</td>
		<td>Nowakhali, Bangladesh</td>
		<td>30</td>
	</tr>
	</tr>
		<tr>
		<td>Soikot</td>
		<td>soikot90@gmail.com</td>
		<td>Dhaka, Bangladesh</td>
		<td>40</td>
	</tr>
	</tr>
		<tr>
		<td>Monju Gotok</td>
		<td>monjugotok@gmail.com</td>
		<td>Pabna, Bangladesh</td>
		<td>25</td>
	</tr>
</table>

<center>
<input type="text" id="searchBox-3" placeholder="Search Here">
<dive class="container" id="resp">
<table id="table-3" >
	<tr >
		<th>HSCODE</th>
		<th>Product Details</th>
		
	</tr>
	<tr>
		<td>Chapter1</td>
		<td>HS Code for Live animals</td>
		
	</tr>
	<tr>
		<td>Chapter2</td>
		<td>Meat and edible Meat Offal</td>
		
	</tr>
		<tr>
		<td>Chapter3</td>
		<td>HS Code for Fish and crustaceans, molluscs and other aquatic invertebrates</td>
		
	</tr>
	</tr>
		<tr>
		<td>chapter4</td>
		<td>HS Code for Dairy produce; birds 'eggs; natural honey; animal edible products not specified or included elsewhere</td>
		
	</tr>
	</tr>
		<tr>
		<td>chapter5</td>
		<td>HS Code for Products of animal origin, not specified or included elsewhere</td>
		
	</tr>
</table>

</dive>


</center>

<?php include 'footer.php'?>
<script>


// single column
// var searchBox_1 = document.getElementById("searchBox-1");
// searchBox_1.addEventListener("keyup", function(){
// 	var keyword = this.value;
// 	keyword = keyword.toUpperCase();
// 		var table_1 = document.getElementById("table-1");
// 		var all_tr = table_1.getElementsByTagName("tr");
// 		for(var i=0; i<all_tr.length; i++){
// 			var name_column = all_tr[i].getElementsByTagName("td")[0];
// 			if(name_column){
// 				var name_value = name_column.textContent || name_column.innerText;
// 				name_value = name_value.toUpperCase();
// 				if(name_value.indexOf(keyword) > -1){
// 					all_tr[i].style.display = ""; // show
// 				}else{
// 					all_tr[i].style.display = "none"; // hide
// 				}
// 			}
// 		}
// });

// multiple column
// var searchBox_2 = document.getElementById("searchBox-2");
// searchBox_2.addEventListener("keyup",function(){
// 	var keyword = this.value;
// 	keyword = keyword.toUpperCase();
// 	var table_2 = document.getElementById("table-2");
// 	var all_tr = table_2.getElementsByTagName("tr");
// 	for(var i=0; i<all_tr.length; i++){
// 			var name_column = all_tr[i].getElementsByTagName("td")[0];
// 		  var email_column = all_tr[i].getElementsByTagName("td")[1];
// 			if(name_column && email_column){
// 				var name_value = name_column.textContent || name_column.innerText;
// 				var email_value = email_column.textContent || email_column.innerText;
// 				name_value = name_value.toUpperCase();
// 				email_value = email_value.toUpperCase();
// 				if((name_value.indexOf(keyword) > -1) || (email_value.indexOf(keyword) > -1)){
// 					all_tr[i].style.display = ""; // show
// 				}else{
// 					all_tr[i].style.display = "none"; // hide
// 				}
// 			}
// 		}
// })



// All column
var searchBox_3 = document.getElementById("searchBox-3");
searchBox_3.addEventListener("keyup",function(){
	var keyword = this.value;
	keyword = keyword.toUpperCase();
	var table_3 = document.getElementById("table-3");
	var all_tr = table_3.getElementsByTagName("tr");
	for(var i=0; i<all_tr.length; i++){
			var all_columns = all_tr[i].getElementsByTagName("td");
		  for(j=0;j<all_columns.length; j++){
				if(all_columns[j]){
					var column_value = all_columns[j].textContent || all_columns[j].innerText;
					
					column_value = column_value.toUpperCase();
					if(column_value.indexOf(keyword) > -1){
						all_tr[i].style.display = ""; // show
						break;
					}else{
						all_tr[i].style.display = "none"; // hide
					}
				}
			}
		}
})
</script>

        
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
