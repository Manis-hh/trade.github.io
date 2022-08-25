<!DOCTYPE html>
<html lang="en">
   <head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script type="text/javascript" src="js/killercarousel.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            
        }

        .kc-wrap {
            
            overflow: hidden;
            position: relative;
            background-position: center;
            width: 100%;
            padding-bottom: 35%;
        }

        .kc-item {
            position: absolute;
            width: 250px;
            height: 168px;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            visibility: hidden;
          
        }

        .kc-shadow-bottom {
            position: absolute !important;
            top: 100% !important;
            width: 100% !important;
            height: 10% !important;
            background-image: url(images/shadow-bottom.png);
            left: 0px !important;
        }

        .kc-shadow-left,
        .kc-shadow-right {
            position: absolute !important;
            top: 0% !important;
            width: 10% !important;
            height: 100% !important;
            left: -10% !important;
            background-image: url(images/shadow-left.png);
        }

        .kc-shadow-right {
            left: 100% !important;
            background-image: url(images/shadow-right.png);
        }

        .kc-reflection {
            position: absolute;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 0px;
        }

        .kc-nav-wrap {
            display: inline-block;
            position: absolute;
            z-index: 1000;
        }

        #nav-buts {
            position: absolute;
            bottom: 10px;
            right: 10px;
        }

        .nav-but-left,
        .nav-but-right {
            font-family: sans-serif;
            width: 42px;
            height: 42px;
            border: 2px solid #fff;
            background-color: #fff;
            border-radius: 50px;
            line-height: 40px;
            text-align: center;
            float: left;
            color: #333;
            font-size: 26px;
            margin-right: 10px;             
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.25);
            cursor: pointer;
        }

        .nav-but-left:hover,
        .nav-but-right:hover {
            background-color: #fff;
        }
    </style>

</head>

<body>

    <br><br><br><br><br><br><br><br>

    <div class="kc-wrap">
        <!-- Carousel items follow start -->
        <div id="nav-buts">
            <div class="nav-but-left">«</div>
            <div class="nav-but-right">»</div>
        </div>

        <!-- Carousel items follow end -->
        <div class="kc-horizon">
            <div class="kc-item">
                <img src="./model/img/clients/LG.webp">                 
            </div>




            <div class="kc-item">
                <img src="./model/img/clients/Aditya_Birla.webp">                 
            </div>





            <div class="kc-item">
                <img src="./model/img/clients/Aditya_Birla.webp">                
            </div>

            <div class="kc-item">
                <img src="./model/img/clients/Tata.webp">                 

            </div>


            <div class="kc-item kc-front-item">
                <img src="./model/img/clients/LG.webp">
 
            </div>
            <div class="kc-item">
                <img src="./model/img/clients/Aditya_Birla.webp">
                 
            </div>
            <div class="kc-item">
                <img src="./model/img/clients/Tata.webp">
                 
            </div>
            <div class="kc-item">
                <img src="./model/img/clients/LG.webp">                 
            </div>
            <div class="kc-item">
                <img src="./model/img/clients/Aditya_Birla.webp">
              

            </div>
        </div>
    </div>

    <!-- band-color-2 end -->
</body>
</html>