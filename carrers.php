
    <!-- Copyright -->
    <!DOCTYPE html>
<html>

<head>
    <!-- Remote style sheet -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
          <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.min.css">
<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
<link rel="stylesheet" type="text/css" href="css/slick.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
<style>
#openings{
    background-color:#5abaff ;
     margin:auto;
     margin-bottom: 20px;
      padding:auto;
      border: 2px solid white
}
#openings h6 p{
    float: left;
}
body, html {
  height: 100%;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("./model/img/bg.jpg");
    height: 100vh;
    width: 100%;
  /* Add the blur effect */
  filter: blur(5px);
  -webkit-filter: blur(5px);

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position:fit;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
/* #openings:hover{
    transform: scale(1.1);
} */
#drop{
  display:none
}
#role:hover{
    transform: scale(0.9);
}
/* Dropdown Button */
.dropbtn {
  background-color: #0B60D5;
  color: white;
  padding: 10px;
  font-size: 16px;
  border: none;
  border-radius: 20px 20px 20px 20px;
  margin-right: 55px;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #0B60D5;
  min-width: 500px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 2;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #5abaff;}
.form-popup {
  display: none;
  position:absolute;
  bottom: 20;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}
.form-popup2 {
  display: none;
  position:absolute;
  bottom: 20;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}
.form-popup3 {
  display: none;
  position:absolute;
  bottom: 20;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}
.form-popup4 {
  display: none;
  position:absolute;
  bottom: 20;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
  
}
.form-popup5 {
  display: none;
  position:absolute;
  bottom: 20;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}
/* Add styles to the form container */
.form-container {
  max-width: 500px;
  padding-left: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color:#0B60D5;
  color: white;
  padding: 2px 2px;
  border: none;
  cursor: pointer;
  width: 40%;
  margin-bottom:5px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: #0B60D5;
}
.form-container{
    background-color:#5abaff;
}
@media (max-width:428px) {
    .bg-image
    {
        height: 50%;
    }
    .bg-text{
        top:30%;
        padding: 0px;
    }
    .form-popup{
      right:-50px
    }
    .form-popup2{
      right:-50px
    }
    .form-popup3{
      right:-50px
    }
    .form-popup4{
      right:-50px
    }
    .form-popup5{
      right:-50px
    }
}
#info1{
  display: none;
  text-align:center ;
}
#info2{
  
  display: none;
  text-align:center ;
}
#info3{
  display: none;
  text-align:center ;
}
#info4{
  display: none;
  text-align:center ;
}
#info5{
  display: none;
  text-align:center ;
}
#increase{
  margin-left: 55px;
  
}
</style>
    
</head>

<body>
    <?php include 'navbar.php' ?>
<div class="bg-image"></div>

<div class="bg-text">
  <h1>We Are Hiring </h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam magnam culpa saepe libero nisi iusto explicabo nesciunt, ad eveniet in, alias voluptatum ex facere quibusdam unde ipsa. Illo, nulla possimus!</p>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis nobis tempore laboriosam voluptates, veritatis ducimus optio dicta commodi atque cumque, reprehenderit totam nam sint error dolor odio numquam, blanditiis ipsam!</p>
</div>
<!-- <div class="container-fluid " style="text-align:center ;  background-image: url('./model/img/team1.webp' );;
background-repeat:no-repeat;background-position:center; color:aliceblue; height:750px ;"   >
        
        <h1 >We Are HIRING</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis consequatur quisquam laboriosam velit voluptatibus earum natus, eius, facere, distinctio enim animi. Repellat expedita eos, dolor sint deserunt illo voluptas molestias animi est! In magnam facilis, libero voluptatum, necessitatibus placeat quaerat, ratione ex qui debitis sequi explicabo natus omnis saepe adipisci.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis excepturi eius dolores ad tempora possimus esse, ducimus voluptatem aperiam unde impedit necessitatibus explicabo asperiores expedita perspiciatis veniam saepe? Libero, asperiores cum necessitatibus neque ullam eius pariatur repellendus sit saepe accusantium. Doloremque alias atque omnis nulla sit, quos beatae cupiditate hic. Veritatis dignissimos illum totam laboriosam inventore cumque ad voluptas dolor eaque consequuntur aliquam ipsum quasi, necessitatibus modi voluptatum. Expedita amet odit similique voluptatem vel. Cum veritatis odit magni minima tenetur quibusdam laborum, quis ad architecto fugiat at debitis quisquam? Vero odit magni fugiat aperiam laudantium molestiae sunt, commodi facere ut.</p>
    </div> -->
        
   
<div class="container-fluid" >
    <div class="row" style="background-color:#0B60D5 ;">
        <div class="col">
        <model-viewer class="view" style="height: 300px; width: 300px; float: left;" src ="./model/Simple Worlds.glb"    loading="eager"   
                reveal="auto" auto-rotate rotation-per-second="40deg" ></model-viewer>
        </div>
        <div class="col" style="color:#fff">
            <h1>What We Do here ?</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde velit at necessitatibus asperiores ipsam aliquid fugit repellendus odio ducimus? Cumque suscipit obcaecati, beatae quo excepturi praesentium, voluptate ipsam voluptatibus accusamus tempore, odio corporis rem quas. Facilis maxime ipsa ipsam iusto repudiandae illum culpa voluptate molestias. Autem et corporis doloribus debitis. Autem assumenda in inventore, laborum nihil tempora. Facilis nam ea quidem sed illo minima corrupti, eum optio dolores ipsa quia iste ratione illum doloribus, quisquam iure repellendus laboriosam qui tenetur veniam doloremque architecto aliquam tempora? In voluptas maxime ad minus velit assumenda, incidunt reiciendis. Vel aliquam eligendi illo ad saepe.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur eaque optio voluptate impedit fugiat saepe possimus odit, doloribus tempora earum reiciendis laudantium dolorem a animi voluptatibus numquam assumenda quaerat ipsum.
                
            </p>
        </div>
    </div>
</div> 
<div class="container-fluid " style="text-align:center ;background-color:#0B60D5 ;color:#fff; padding:10px  "   >
    
        <h1 style=" border: 5px solid white" >JOB OPENINGS</h1>
        <div class="container" id="openings"style="">
        <div class="col-10" onclick="display1()" ondblclick="rollback1()" >
        <img height="100px" width="100px" id="role" style="float: left ;" src="./model/img/pngwing.com.png">
        <h6>Graphic Designer</h6>
        <p>0-2 yr experience</p>
        <button class="dropbtn" id="more" style="margin-right:-10px ;">More info</button>
        <div id="info1" style="text-align: center ; margin-right:-5%">
        
        <h6 id="increase">Responsibilities</h6>
      <P id="increase">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur ea temporibus hic odio provident veritatis rerum possimus, accusantium animi?\</P>
        <h6 id="increase">Benefiets</h6>
      <p id="increase">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, maxime itaque.</p>
      <button id="increase" class="dropbtn" onclick="openForm()" style="margin-right:-10px ;"  >Apply Now</button>    
    </div>
        <div class="dropdown" style="float: right ;">
  
  <div class="dropdown-content">
    
    
      
  </div>
  <div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputName4">Name</label>
      <input type="Name" class="form-control" id="inputEmail4" placeholder="Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Phone</label>
      <input type="number" class="form-control" id="inputmobile4" placeholder="Enter your phone">
    </div>
  </div>
  
  <div class="form-group col-12" >
  <label for="inputEmail4">email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="email">
    
  </div>
  
  <label for="dob">Date of Birth</label>
    <input type="date" class="form-control" id="inputAddress" placeholder="Enter your date of birth">
  <div class="form-group">
      <label for="inputState">Positions To Apply</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>SEO</option>
        <option>Content Writer</option>
        <option>Devloper</option>
      </select>
    </div>
    <label for="myfile">Send Your Resume:</label>
  <input type="file" id="resume" name="resume"><br><br>
    
    <button type="submit" class="btn" onclick="alert('Your application is submitted \n    Thank you')">Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
  </form>
</div>

</div>
        </div>
    
    </div>
    <div class="container" id="openings"style="">
        <div class="col-10" onclick="display2()" ondblclick="rollback2()" >
        <img height="100px" width="100px" id="role" style="float: left ;" src="./model/img/roles/cwriter.png">
        <h6 >Content Writer</h6>
        <p>0-2 yr experience</p>
        <button class="dropbtn" style="margin-right:-10px ;" id="more2">More info</button>
        <div class="col-3"></div>
        <div id="info2" style="text-align:center ;margin-right:-5%">
        
        <h6 id="increase">Responsibilities</h6>
      <P id="increase">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur ea temporibus hic odio provident veritatis rerum possimus, accusantium animi?\</P>
        <h6 id="increase">Benefiets</h6>
      <p id="increase">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, maxime itaque.</p>
      <button id="increase" class="dropbtn" onclick="openForm2()" style="margin-right:-10px ;"  >Apply Now</button>
        </div>
        
        <div class="dropdown" style="float: right ;">
  <!-- <button class="dropbtn"  >Apply</button> -->
  <div class="form-popup2" id="myForm2">
  <form action="/action_page.php" class="form-container">
    
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputName4">Name</label>
      <input type="Name" class="form-control" id="inputEmail4" placeholder="Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Phone</label>
      <input type="number" class="form-control" id="inputmobile4" placeholder="Enter your phone">
    </div>
  </div>
  
  <div class="form-group col-12" >
  <label for="inputEmail4">email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="email">
    
  </div>
  
  <label for="dob">Date of Birth</label>
    <input type="date" class="form-control" id="inputAddress" placeholder="Enter your date of birth">
  <div class="form-group">
      <label for="inputState">Positions To Apply</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>SEO</option>
        <option>Content Writer</option>
        <option>Devloper</option>
      </select>
    </div>
    <label for="myfile">Send Your Resume:</label>
  <input type="file" id="resume" name="resume"><br><br>
    
    <button type="submit" class="btn" onclick="alert('Your application is submitted \n    Thank you')">Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm2()">Cancel</button>
  </form>
</div>
  <div class="dropdown-content">
    <!-- <h6>Responsibilities</h6>
    <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur ea temporibus hic odio provident veritatis rerum possimus, accusantium animi?\</P>
    <h6>Benefiets</h6>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, maxime itaque.</p>
     -->
      
  </div>
</div>
        </div>
    
    </div>
    <div class="container" id="openings"style="">
    <div class="col-10" onclick="display3()" ondblclick="rollback3()" >
        <img height="100px" width="100px" id="role" style="float: left ;" src="./model/img/roles/devloper.png">
        <h6> Front End Devloper</h6>
        <p>0-2 yr experience</p>
        <button class="dropbtn" style="margin-right:-10px ;" id="more3">More info</button>
        <div id="info3" style="text-align:center ;margin-right:-5%">
                <h6 id="increase">Responsibilities</h6>
      <P id="increase">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur ea temporibus hic odio provident veritatis rerum possimus, accusantium animi?\</P>
        <h6 id="increase">Benefiets</h6>
      <p id="increase">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, maxime itaque.</p>
      <button id="increase" class="dropbtn" onclick="openForm3()" style="margin-right:-10px ;"  >Apply Now</button>  
        </div>
        
        <div class="dropdown" style="float: right ;">
  
  <div class="form-popup3" id="myForm3">
  <form action="/action_page.php" class="form-container">
    
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputName4">Name</label>
      <input type="Name" class="form-control" id="inputEmail4" placeholder="Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Phone</label>
      <input type="number" class="form-control" id="inputmobile4" placeholder="Enter your phone">
    </div>
  </div>
  
  <div class="form-group col-12" >
  <label for="inputEmail4">email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="email">
    
  </div>
  
  <label for="dob">Date of Birth</label>
    <input type="date" class="form-control" id="inputAddress" placeholder="Enter your date of birth">
  <div class="form-group">
      <label for="inputState">Positions To Apply</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>SEO</option>
        <option>Content Writer</option>
        <option>Devloper</option>
      </select>
    </div>
    <label for="myfile">Send Your Resume:</label>
  <input type="file" id="resume" name="resume"><br><br>
    
    <button type="submit" class="btn" onclick="alert('Your application is submitted \n    Thank you')">Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm3()">Cancel</button>
  </form>
</div>
  
</div>
        </div>
    
    </div>
    <div class="container" id="openings"style="">
    <div class="col-10" onclick="display4()" ondblclick="rollback4()" >
        <img height="100px" width="100px" id="role" style="float: left ;" src="./model/img/roles/devloper.png">
        <h6>Back end Devloper</h6>
        <p>0-2 yr experience</p>
        <button class="dropbtn" style="margin-right:-10px ;" id="more4">More info</button>
        <div id="info4" style="text-align:center ;margin-right:-5%">
        
        <h6 id="increase">Responsibilities</h6>
      <P id="increase">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur ea temporibus hic odio provident veritatis rerum possimus, accusantium animi?\</P>
        <h6 id="increase">Benefiets</h6>
      <p id="increase">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, maxime itaque.</p>
      <button id="increase" class="dropbtn" onclick="openForm4()" style="margin-right:-10px ;"  >Apply Now</button>
            
    </div>
        <div class="dropdown" style="float: right ;">
  
  <div class="form-popup4" id="myForm4">
  <form action="/action_page.php" class="form-container">
    
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputName4">Name</label>
      <input type="Name" class="form-control" id="inputEmail4" placeholder="Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Phone</label>
      <input type="number" class="form-control" id="inputmobile4" placeholder="Enter your phone">
    </div>
  </div>
  
  <div class="form-group col-12" >
  <label for="inputEmail4">email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="email">
    
  </div>
  
  <label for="dob">Date of Birth</label>
    <input type="date" class="form-control" id="inputAddress" placeholder="Enter your date of birth">
  <div class="form-group">
      <label for="inputState">Positions To Apply</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>SEO</option>
        <option>Content Writer</option>
        <option>Devloper</option>
      </select>
    </div>
    <label for="myfile">Send Your Resume:</label>
  <input type="file" id="resume" name="resume"><br><br>
    
    <button type="submit" class="btn" onclick="alert('Your application is submitted \n    Thank you')">Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm4()">Cancel</button>
  </form>
</div>
  <div class="dropdown-content">
    
      
  </div>
</div>
        </div>
    
    </div>
    <div class="container" id="openings"style="">
    <div class="col-10" onclick="display5()" ondblclick="rollback5()" >

        <img height="100px" width="100px" id="role" style="float: left ;" src="./model/img/roles/seo.png">
        <h6>SEO</h6>
        <p>0-2 yr experience</p>
        <button class="dropbtn" style="margin-right:-10px ;" id="more5">More info</button>
        <div id="info5" style="text-align:center ;margin-right:-5%">
        
        <h6 id="increase">Responsibilities</h6>
      <P id="increase">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur ea temporibus hic odio provident veritatis rerum possimus, accusantium animi?\</P>
        <h6 id="increase">Benefiets</h6>
      <p id="increase">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, maxime itaque.</p>
      <button id="increase" class="dropbtn" onclick="openForm5()" style="margin-right:-10px ;"  >Apply Now</button>    
    </div>
        
        <div class="dropdown" style="float: right ;">
 
  <div class="form-popup5" id="myForm5">
  <form action="/action_page.php" class="form-container">
    
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputName4">Name</label>
      <input type="Name" class="form-control" id="inputEmail4" placeholder="Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="email">
    </div>
  </div>
  
  <div class="form-group col-md-6" >
    <label for="inputPhone">Phone</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Phone">
  </div>
  <div class="form-group col-md-6" >
    <label for="dob">Qualification</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Your Highest Qualification">
  </div>
  <label for="dob">Date of Birth</label>
    <input type="date" class="form-control" id="inputAddress" placeholder="Enter your date of birth">
  <div class="form-group">
      <label for="inputState">Positions To Apply</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>SEO</option>
        <option>Content Writer</option>
        <option>Devloper</option>
      </select>
    </div>
    <label for="myfile">Send Your Resume:</label>
  <input type="file" id="resume" name="resume"><br><br>
    
    <button type="submit" class="btn" onclick="alert('Your application is submitted \n    Thank you')">Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm5()">Cancel</button>
  </form>
</div>
  <div class="dropdown-content">
    <!-- <h6>Responsibilities</h6>
    <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur ea temporibus hic odio provident veritatis rerum possimus, accusantium animi?\</P>
    <h6>Benefiets</h6>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, maxime itaque.</p>
     -->
      
  </div>
</div>
        </div>
    
    </div>
    </div>
    <?php include 'footer.php'?>
    <script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>
<script>
// When the user clicks on <div>, open the popup
$(document).ready(function(){
    $('#more').click(function() {
      $('#info1').toggle("slide");
    });
});

$(document).ready(function(){
    $('#more2').click(function() {
      $('#info2').toggle("slide");
    });
});

$(document).ready(function(){
    $('#more3').click(function() {
      $('#info3').toggle("slide");
    });
});

$(document).ready(function(){
    $('#more4').click(function() {
      $('#info4').toggle("slide");
    });
});
$(document).ready(function(){
    $('#more5').click(function() {
      $('#info5').toggle("slide");
    });
});


function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
function openForm() {
  document.getElementById("myForm").style.display = "block";
}
function openForm2() {
  document.getElementById("myForm2").style.display = "block";
}
function openForm3() {
  document.getElementById("myForm3").style.display = "block";
}
function openForm4() {
  document.getElementById("myForm4").style.display = "block";
}
function openForm5() {
  document.getElementById("myForm5").style.display = "block";
}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

function closeForm2() {
  document.getElementById("myForm2").style.display = "none";
}

function closeForm3() {
  document.getElementById("myForm3").style.display = "none";
}

function closeForm4() {
  document.getElementById("myForm4").style.display = "none";
}

function closeForm5() {
  document.getElementById("myForm5").style.display = "none";
}
</script>
</body>

</html>