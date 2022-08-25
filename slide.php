<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Boilerplate</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            align-items: center;
        }
        .spinner-box{
            width: 600px;
            height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: transparent;
        }
        .solar-system{
            width: 1000px;
            height: 1000px;
            display: flex;
            align-items:center;
            justify-content: center;
        }
        .orbit{
            position:relative;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid black;
            border-radius: 50%;
        }
        .earth-orbit{
            height: 660px;
            width: 660px;
            animation: spin 12s linear 0s infinite ;
        }
        .venus-orbit{
            height: 480px;
            width: 480px;
        }
        .mercury-orbit{
            height: 260px;
            width: 260px;
        }
        .planet{
            position: absolute;
            top: -5px;
            width: 100px;
            height: 100px;
            border-radius: 75%;
            background-image: url(./model/img/clients/Tata.webp);
            background-position:center;
            background-size: 150px;
        }
        .sun{
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: red;
        }
        @keyframes spin {
            from{
                transform: rotate(0deg);
            }
            to{
                transform: rotate(359deg);
            }
        }
    </style>
  </head>
  <body>
</div>
<div class="spinner-box">
    <div class="solar-system">
        <div class="earth-orbit orbit">
            <div class="plantet earth">
                
            </div>
            <div class="venus-orbit orbit">
                <div class="planet venus"></div>
                    <div class="mercury-orbit orbit">
                        <div class="mercury planet"></div>
                            <div class="sun">

                            </div>
                        </div>
                    </div>
                
            
        </div>
    </div>
</div>
  </body>
</html>