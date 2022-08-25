<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tab Components</title>
    <style>@import url('https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap');
        *,
        *::after,
        *::before {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          list-style-type: none;
          text-decoration: none;
        }
        :root {
          --container: 120rem;
          --primary: hsl(201.43, 13.21%, 58.43%);
          --white: hsl(0, 0%, 100%);
          --white-light: hsl(0, 0%, 99%);
          /* --box-shadow: hsl(220, 7.32%, 91.96%); */
        }
        html {
          font-size: 62.5%;
        }
        @media (max-width:428px) {
          /* .row{
            margin-left: -250px;
          } */
          .tab-item.select_tab h1{
            margin-left: -500px;
        }
        .col-sm-2{
         
          margin: 0px 0px;
        
        }
        .row{
          margin-left: -11%;
        }
        a{
          font-size: 15px;
        }
        img{
          width: 120px;
          height: 88px;
        }
        p{
          font-weight: bolder;
        }
        .filter-btn{
          font-size: 10px;
        }
        }
        .col-sm-2{
         margin:5px 25px
        }
        body {
          font-size: 1.6rem;
          font-family: 'Rubik', sans-serif;
          background: var(--box-shadow);
        }
        .container {
          max-width: var(--container);
          padding: 0 1rem;
          margin: 0 auto;
        }
        header {
          text-align: center;
        }
        .section-heading {
          margin: 3rem 0;
          font-size: 4rem;
          padding-bottom: 0.7rem;
          position: relative;
          display: inline-block;
        }
        .section-heading::before,
        .section-heading::after {
          content: '';
          position: absolute;
        }
        .section-heading::before {
          width: 100%;
          height: 0.2rem;
          bottom: 0;
          left: 0;
          background: var(--primary);
          border-radius: 0.2rem;
        }
        .section-heading::after {
          bottom: -0.4rem;
          left: 50%;
          transform: translateX(-50%);
          width: 1rem;
          height: 1rem;
          border: 0.2rem solid var(--primary);
          background: var(--box-shadow);
        }
        .tab-container {
          width: 70%;
          margin: 0 auto 3rem auto;
          box-shadow: 0 0.8rem 1rem var(--box-shadow);
        }
        @media (max-width: 767px) {
          .tab-container {
            width: 90%;
          }
        }
        .tab-filter-container {
          padding: 1rem;
          text-align: center;
          background: hsl(205.71, 30.43%, 95.49%);
          width: 100%;
        }
        .filter-btn {
          display: inline-flex;
          padding: 0.8rem ;
          cursor: pointer;
          border-radius: 2rem;
          align-items: center;
          gap: 0.5rem;
          font-weight: 500;
        }
        .filter-btn.active {
          background: var(--primary);
          color: var(--white);
        }
        .tab-filter-item-container {
          background: var(--white);
          margin: 0 ;
          position: relative;
          overflow: hidden;
          
        }
        
        .tab-item {
          width: 100%;
          height: 100%;
          position: absolute;
          padding: 0rem 3rem;
          transform: translateY(100%);
          background: var(--white-light);
          transition: transform 0.5s ease-in-out;
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(19rem, 0f));
          place-items: start;
        }
        .tab-img {
          width: 30rem;
        }
        .tab-heading {
          padding: 2rem 0;
          font-size: 3rem;
        }
        .tab-item.select_tab {
          transform: translateY(0);
          transition: transform 0.5s ease-in-out;
          background: var(--white-light);
          animation: feadIn 0.6s ease-in-out;
          /* text-align: center; */
          
        }
        .tab-item.select_tab h1{
          text-align: center;
        }
        .btn-primary {
          margin-top: 1.5rem;
          display: inline-block;
          background: var(--primary);
          padding: 0.6rem 2rem;
          border-radius: 2rem;
          color: var(--white);
        }
        @keyframes feadIn {
          0% {
            opacity: 0;
          }
          100% {
            opacity: 1;
          }
        }
        th{
          font-size: 20px;
          font-weight: bolder;
        }
        #import{
          background-color: var(--primary) ;
          color: #fff;
          border-radius: 10px 10px ;
          padding: 5px;
          font-size: 13px;
          text-decoration: none;
        }
        #export{
          background-color: hsl(205.71, 30.43%, 95.49%) ;
          color: black;
          border-radius: 10px 10px;
          padding: 5px;
          font-size: 13px;
          text-decoration:none;
        }        
        </style>
  </head>
  <body>
    <div class="container">
      <header>
        <h1 class="section-heading">Our Courses</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus cum nam saepe fugiat velit atque omnis animi, tenetur autem repudiandae asperiores repellat voluptate illo praesentium sapiente accusantium! Quia, eaque earum?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nisi quidem cupiditate suscipit dolorum consequuntur commodi sed fuga! Alias necessitatibus voluptas aspernatur maxime ut id libero sequi. Incidunt, molestiae aperiam.</p>
      </header>
    </div>
    <div class="container">
      <div class="tab-container">
        <div class="tab-filter-container">
          <li class="filter-btn active" data-tab="web-design">
            <ion-icon name="desktop-outline"></ion-icon>
            Statistical DATA
          </li>
          <li class="filter-btn" data-tab="web-development">
            <ion-icon name="logo-nodejs"></ion-icon>
            CUSTOMS DATA
          </li>
          <li class="filter-btn" data-tab="ux-design">
            <ion-icon name="diamond-outline"></ion-icon>
            B/L Data
          </li>
          <!-- <li class="filter-btn" data-tab="app-development">
            <ion-icon name="logo-google-playstore"></ion-icon>
            App Development
          </li> -->
        </div>
        <div class="tab-filter-item-container">
          <div class="tab-item web-design select_tab" >
            <div class="row"  >
              <h1 >Asia</h1>
              <div class="col-sm-2" >
              <p>bangladesh</p><img src="./globaltradedata/bangladesh.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" >
              <p>china</p><img src="./globaltradedata/china_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a></div>
              <div class="col-sm-2" >
              
              <td><p>indonesia</p><img src="./globaltradedata/indonesia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" >
              <td><p>Japan</p><img src="./globaltradedata/japan_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
                          <!-- Row -->

              <div class="col-sm-2" >
              <p>malaysia</p><img src="./globaltradedata/malaysia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a></div>
              <div class="col-sm-2" >
              <p>mangolia</p><img src="./globaltradedata/mongolia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" >
              
              <p>pakistan</p><img src="./globaltradedata/pakistan_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" >
              <p>turkey</p><img src="./globaltradedata/turkey_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
               </div>
               <h1 >Africa</h1>
               <div class="col-sm-2" >
              
              
              <p>botswana</p><img src="./globaltradedata/botswana_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" >
              <p>ethiopia</p><img src="./globaltradedata/ethiopia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
               </div>
              
               <div class="col-sm-2" >
               <p>kenya</p><img src="./globaltradedata/kenya_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
               <div class="col-sm-2" >
               <p>Ivory Coast</p><img src="./globaltradedata/cote_d_Ivoire_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
               </div>
              
               <div class="col-sm-2" >
               <p>lesotho</p><img src="./globaltradedata/lesotho_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" >
              <p>Namibia</p><img src="./globaltradedata/namibia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              
               <div class="col-sm-2" >
               <p>Nigeria</p><img src="./globaltradedata/nigeria_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
               <div class="col-sm-2" >
               <p>SouthAfrica</p><img src="./globaltradedata/south_africa_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
               </div>
              
               <div class="col-sm-2" >
               <p>Uganda</p><img src="./globaltradedata/uganda_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
               <div class="col-sm-2" >
               <p>Zimbabwe</p><img src="./globaltradedata/zimbabwe_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>botswana</p><img src="./globaltradedata/botswana_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
               <div class="col-sm-2" style="margin:5px 25px; ">
               <p>ethiopia</p><img src="./globaltradedata/ethiopia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <h1>
                CIS
              </h1>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Kazakhastan</p><img src="./globaltradedata/kazakhstan_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
               </div>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>Moldova</p><img src="./globaltradedata/moldova_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
               
              </div>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>Russia</p><img src="./globaltradedata/russia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              
               </div>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>Ukraine</p><img src="./globaltradedata/ukraine_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
                
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
                <p>Ukraine</p><img src="./globaltradedata/ukraine_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
                
              </div>
               <div class="col-sm-2" style="margin:5px 25px;margin-right:400px ">
               <p>Uzbekistan</p><img src="./globaltradedata/uzbekistan_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ; margin-right:200.datapx ;" href="#">export</a>
                 
              </div>
                <h1>Europe</h1>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>austria</p><img src="./globaltradedata/austria_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              
               </div>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>belgium</p><img src="./globaltradedata/belgium_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              
              </div>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>bulgaria</p><img src="./globaltradedata/bulgaria_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
                </div>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>Cyprus</p><img src="./globaltradedata/cyprus_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Croataia</p><img src="./globaltradedata/croatia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
               
              </div>
               <div class="col-sm-2" style="margin:5px 25px; ">
               <p>CzechRepublic</p><img src="./globaltradedata/czech_republic_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Denmark</p><img src="./globaltradedata/denmark_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              
               </div>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>Estonia</p><img src="./globaltradedata/estonia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>Finland</p><img src="./globaltradedata/finland_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              
               </div>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>Ukraine</p><img src="./globaltradedata/ukraine_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
                
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>France</p><img src="./globaltradedata/france_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Germany</p><img src="./globaltradedata/germany_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
                <p>Ukraine</p><img src="./globaltradedata/ukraine_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
                
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>hungary</p><img src="./globaltradedata/hungary_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>ireland</p><img src="./globaltradedata/ireland_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>latvia</p><img src="./globaltradedata/latvia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
             <div class="col-sm-2" style="margin:5px 25px; ">
             <p>lithuania</p><img src="./globaltradedata/lithuania_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
             <div class="col-sm-2" style="margin:5px 25px; ">
             <p>luxembourg</p><img src="./globaltradedata/luxembourg_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
             <div class="col-sm-2" style="margin:5px 25px; ">
             <p>malta</p><img src="./globaltradedata/malta_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>netherlands</p><img src="./globaltradedata/netherlands_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>poland</p><img src="./globaltradedata/poland_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <td><p>portugal</p><img src="./globaltradedata/portugal_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Romania</p><img src="./globaltradedata/romania_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>slovakia</p><img src="./globaltradedata/slovakia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>slovenia</p><img src="./globaltradedata/slovenia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>spain</p><img src="./globaltradedata/spain_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>sweden</p><img src="./globaltradedata/sweden_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>united kingdom</p><img src="./globaltradedata/united_kingdom_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <h1>North America</h1>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Canada</p><img src="./globaltradedata/canada_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Costa rica</p><img src="./globaltradedata/costa_rica_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>El Salvador</p><img src="./globaltradedata/el_salvador_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Guatemala</p><img src="./globaltradedata/guatemala_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Honduras</p><img src="./globaltradedata/honduras_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Mexico</p><img src="./globaltradedata/mexico_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Panama</p><img src="./globaltradedata/panama_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>United States</p><img src="./globaltradedata/united_states_of_america_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             </div>
             <h1>SouthAmerica</h1>
             <div class="col-sm-2" style="margin:5px 25px; ">
             <p>Argentina</p><img src="./globaltradedata/argentina_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Bolivia</p><img src="./globaltradedata/bolivia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Brazil</p><img src="./globaltradedata/brazil_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Chile</p><img src="./globaltradedata/chile_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Colombia</p><img src="./globaltradedata/colombia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Ecuador</p><img src="./globaltradedata/ecuador_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Paraguay</p><img src="./globaltradedata/paraguay_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Peru</p><img src="./globaltradedata/peru_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Uruguay</p><img src="./globaltradedata/uruguay_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Venezuela</p><img src="./globaltradedata/venezuela_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
            
            </div>
            
            
          </div>
          <div class="tab-item web-development">
          <div class="row"  >
              <h1>Asia</h1>
              <div class="col-sm-2" >
              <p>bangladesh</p><img src="./globaltradedata/bangladesh.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" >
              <p>china</p><img src="./globaltradedata/china_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a></div>
              <div class="col-sm-2" >
              
              <td><p>indonesia</p><img src="./globaltradedata/indonesia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" >
              <td><p>Japan</p><img src="./globaltradedata/japan_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
                          <!-- Row -->

              <div class="col-sm-2" >
              <p>malaysia</p><img src="./globaltradedata/malaysia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a></div>
              <div class="col-sm-2" >
              <p>mangolia</p><img src="./globaltradedata/mongolia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" >
              
              <p>pakistan</p><img src="./globaltradedata/pakistan_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" >
              <p>turkey</p><img src="./globaltradedata/turkey_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
               </div>
               <h1 >Africa</h1>
               <div class="col-sm-2" >
              
              
              <p>botswana</p><img src="./globaltradedata/botswana_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" >
              <p>ethiopia</p><img src="./globaltradedata/ethiopia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
               </div>
              
               <div class="col-sm-2" >
               <p>kenya</p><img src="./globaltradedata/kenya_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
               <div class="col-sm-2" >
               <p>Ivory Coast</p><img src="./globaltradedata/cote_d_Ivoire_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
               </div>
              
               <div class="col-sm-2" >
               <p>lesotho</p><img src="./globaltradedata/lesotho_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" >
              <p>Namibia</p><img src="./globaltradedata/namibia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              
               <div class="col-sm-2" >
               <p>Nigeria</p><img src="./globaltradedata/nigeria_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
               <div class="col-sm-2" >
               <p>SouthAfrica</p><img src="./globaltradedata/south_africa_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
               </div>
              
               <div class="col-sm-2" >
               <p>Uganda</p><img src="./globaltradedata/uganda_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
               <div class="col-sm-2" >
               <p>Zimbabwe</p><img src="./globaltradedata/zimbabwe_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>botswana</p><img src="./globaltradedata/botswana_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
               <div class="col-sm-2" style="margin:5px 25px; ">
               <p>ethiopia</p><img src="./globaltradedata/ethiopia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <h1>
                CIS
              </h1>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Kazakhastan</p><img src="./globaltradedata/kazakhstan_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
               </div>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>Moldova</p><img src="./globaltradedata/moldova_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
               
              </div>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>Russia</p><img src="./globaltradedata/russia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              
               </div>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>Ukraine</p><img src="./globaltradedata/ukraine_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
                
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
                <p>Ukraine</p><img src="./globaltradedata/ukraine_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
                
              </div>
               <div class="col-sm-2" style="margin:5px 25px;margin-right:400px ">
               <p>Uzbekistan</p><img src="./globaltradedata/uzbekistan_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ; margin-right:200.datapx ;" href="#">export</a>
                 
              </div>
                <h1>Europe</h1>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>austria</p><img src="./globaltradedata/austria_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              
               </div>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>belgium</p><img src="./globaltradedata/belgium_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              
              </div>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>bulgaria</p><img src="./globaltradedata/bulgaria_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
                </div>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>Cyprus</p><img src="./globaltradedata/cyprus_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Croataia</p><img src="./globaltradedata/croatia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
               
              </div>
               <div class="col-sm-2" style="margin:5px 25px; ">
               <p>CzechRepublic</p><img src="./globaltradedata/czech_republic_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Denmark</p><img src="./globaltradedata/denmark_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              
               </div>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>Estonia</p><img src="./globaltradedata/estonia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>Finland</p><img src="./globaltradedata/finland_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              
               </div>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>Ukraine</p><img src="./globaltradedata/ukraine_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
                
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>France</p><img src="./globaltradedata/france_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Germany</p><img src="./globaltradedata/germany_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
                <p>Ukraine</p><img src="./globaltradedata/ukraine_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
                
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>hungary</p><img src="./globaltradedata/hungary_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>ireland</p><img src="./globaltradedata/ireland_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>latvia</p><img src="./globaltradedata/latvia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
             <div class="col-sm-2" style="margin:5px 25px; ">
             <p>lithuania</p><img src="./globaltradedata/lithuania_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
             <div class="col-sm-2" style="margin:5px 25px; ">
             <p>luxembourg</p><img src="./globaltradedata/luxembourg_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
             <div class="col-sm-2" style="margin:5px 25px; ">
             <p>malta</p><img src="./globaltradedata/malta_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>netherlands</p><img src="./globaltradedata/netherlands_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>poland</p><img src="./globaltradedata/poland_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <td><p>portugal</p><img src="./globaltradedata/portugal_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Romania</p><img src="./globaltradedata/romania_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>slovakia</p><img src="./globaltradedata/slovakia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>slovenia</p><img src="./globaltradedata/slovenia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>spain</p><img src="./globaltradedata/spain_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>sweden</p><img src="./globaltradedata/sweden_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>united kingdom</p><img src="./globaltradedata/united_kingdom_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <h1>North America</h1>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Canada</p><img src="./globaltradedata/canada_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Costa rica</p><img src="./globaltradedata/costa_rica_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>El Salvador</p><img src="./globaltradedata/el_salvador_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Guatemala</p><img src="./globaltradedata/guatemala_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Honduras</p><img src="./globaltradedata/honduras_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Mexico</p><img src="./globaltradedata/mexico_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Panama</p><img src="./globaltradedata/panama_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>United States</p><img src="./globaltradedata/united_states_of_america_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             </div>
             <h1>SouthAmerica</h1>
             <div class="col-sm-2" style="margin:5px 25px; ">
             <p>Argentina</p><img src="./globaltradedata/argentina_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Bolivia</p><img src="./globaltradedata/bolivia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Brazil</p><img src="./globaltradedata/brazil_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Chile</p><img src="./globaltradedata/chile_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Colombia</p><img src="./globaltradedata/colombia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Ecuador</p><img src="./globaltradedata/ecuador_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Paraguay</p><img src="./globaltradedata/paraguay_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Peru</p><img src="./globaltradedata/peru_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Uruguay</p><img src="./globaltradedata/uruguay_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Venezuela</p><img src="./globaltradedata/venezuela_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
            
            </div>
            
            
          </div>
          <div class="tab-item ux-design">
          <div class="row"  >
              <h1>Asia</h1>
              <div class="col-sm-2" >
              <p>bangladesh</p><img src="./globaltradedata/bangladesh.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" >
              <p>china</p><img src="./globaltradedata/china_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a></div>
              <div class="col-sm-2" >
              
              <td><p>indonesia</p><img src="./globaltradedata/indonesia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" >
              <td><p>Japan</p><img src="./globaltradedata/japan_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
                          <!-- Row -->

              <div class="col-sm-2" >
              <p>malaysia</p><img src="./globaltradedata/malaysia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a></div>
              <div class="col-sm-2" >
              <p>mangolia</p><img src="./globaltradedata/mongolia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" >
              
              <p>pakistan</p><img src="./globaltradedata/pakistan_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" >
              <p>turkey</p><img src="./globaltradedata/turkey_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
               </div>
               <h1 >Africa</h1>
               <div class="col-sm-2" >
              
              
              <p>botswana</p><img src="./globaltradedata/botswana_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" >
              <p>ethiopia</p><img src="./globaltradedata/ethiopia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
               </div>
              
               <div class="col-sm-2" >
               <p>kenya</p><img src="./globaltradedata/kenya_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
               <div class="col-sm-2" >
               <p>Ivory Coast</p><img src="./globaltradedata/cote_d_Ivoire_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
               </div>
              
               <div class="col-sm-2" >
               <p>lesotho</p><img src="./globaltradedata/lesotho_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" >
              <p>Namibia</p><img src="./globaltradedata/namibia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              
               <div class="col-sm-2" >
               <p>Nigeria</p><img src="./globaltradedata/nigeria_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
               <div class="col-sm-2" >
               <p>SouthAfrica</p><img src="./globaltradedata/south_africa_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
               </div>
              
               <div class="col-sm-2" >
               <p>Uganda</p><img src="./globaltradedata/uganda_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
               <div class="col-sm-2" >
               <p>Zimbabwe</p><img src="./globaltradedata/zimbabwe_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>botswana</p><img src="./globaltradedata/botswana_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
               <div class="col-sm-2" style="margin:5px 25px; ">
               <p>ethiopia</p><img src="./globaltradedata/ethiopia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <h1>
                CIS
              </h1>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Kazakhastan</p><img src="./globaltradedata/kazakhstan_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
               </div>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>Moldova</p><img src="./globaltradedata/moldova_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
               
              </div>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>Russia</p><img src="./globaltradedata/russia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              
               </div>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>Ukraine</p><img src="./globaltradedata/ukraine_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
                
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
                <p>Ukraine</p><img src="./globaltradedata/ukraine_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
                
              </div>
               <div class="col-sm-2" style="margin:5px 25px;margin-right:400px ">
               <p>Uzbekistan</p><img src="./globaltradedata/uzbekistan_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ; margin-right:200.datapx ;" href="#">export</a>
                 
              </div>
                <h1>Europe</h1>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>austria</p><img src="./globaltradedata/austria_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              
               </div>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>belgium</p><img src="./globaltradedata/belgium_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              
              </div>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>bulgaria</p><img src="./globaltradedata/bulgaria_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
                </div>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>Cyprus</p><img src="./globaltradedata/cyprus_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Croataia</p><img src="./globaltradedata/croatia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
               
              </div>
               <div class="col-sm-2" style="margin:5px 25px; ">
               <p>CzechRepublic</p><img src="./globaltradedata/czech_republic_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Denmark</p><img src="./globaltradedata/denmark_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              
               </div>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>Estonia</p><img src="./globaltradedata/estonia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>Finland</p><img src="./globaltradedata/finland_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              
               </div>
                <div class="col-sm-2" style="margin:5px 25px; ">
                <p>Ukraine</p><img src="./globaltradedata/ukraine_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
                
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>France</p><img src="./globaltradedata/france_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Germany</p><img src="./globaltradedata/germany_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
                <p>Ukraine</p><img src="./globaltradedata/ukraine_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
                
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>hungary</p><img src="./globaltradedata/hungary_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>ireland</p><img src="./globaltradedata/ireland_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>latvia</p><img src="./globaltradedata/latvia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
             <div class="col-sm-2" style="margin:5px 25px; ">
             <p>lithuania</p><img src="./globaltradedata/lithuania_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
             <div class="col-sm-2" style="margin:5px 25px; ">
             <p>luxembourg</p><img src="./globaltradedata/luxembourg_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
             <div class="col-sm-2" style="margin:5px 25px; ">
             <p>malta</p><img src="./globaltradedata/malta_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>netherlands</p><img src="./globaltradedata/netherlands_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>poland</p><img src="./globaltradedata/poland_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <td><p>portugal</p><img src="./globaltradedata/portugal_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Romania</p><img src="./globaltradedata/romania_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>slovakia</p><img src="./globaltradedata/slovakia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>slovenia</p><img src="./globaltradedata/slovenia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>spain</p><img src="./globaltradedata/spain_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>sweden</p><img src="./globaltradedata/sweden_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>united kingdom</p><img src="./globaltradedata/united_kingdom_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <h1>North America</h1>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Canada</p><img src="./globaltradedata/canada_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Costa rica</p><img src="./globaltradedata/costa_rica_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>El Salvador</p><img src="./globaltradedata/el_salvador_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Guatemala</p><img src="./globaltradedata/guatemala_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Honduras</p><img src="./globaltradedata/honduras_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Mexico</p><img src="./globaltradedata/mexico_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Panama</p><img src="./globaltradedata/panama_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>United States</p><img src="./globaltradedata/united_states_of_america_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
             </div>
             <h1>SouthAmerica</h1>
             <div class="col-sm-2" style="margin:5px 25px; ">
             <p>Argentina</p><img src="./globaltradedata/argentina_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Bolivia</p><img src="./globaltradedata/bolivia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Brazil</p><img src="./globaltradedata/brazil_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Chile</p><img src="./globaltradedata/chile_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Colombia</p><img src="./globaltradedata/colombia_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Ecuador</p><img src="./globaltradedata/ecuador_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Paraguay</p><img src="./globaltradedata/paraguay_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Peru</p><img src="./globaltradedata/peru_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Uruguay</p><img src="./globaltradedata/uruguay_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
              <div class="col-sm-2" style="margin:5px 25px; ">
              <p>Venezuela</p><img src="./globaltradedata/venezuela_rectangular_icon_with_shadow_64.png" alt=""> 
                <a id="import" href="#">import.data</a><a id="export" style="padding-left:2% ;" href="#">export.data</a>
              </div>
            
            </div>
            
            
            
          </div>
          <div class="tab-item app-development">
            <div class="tab-content-left">
              <h1 class="tab-heading">App Development</h1>
              <p class="paragraph">
                With the world going mobile, the importance of apps is
                increasing by the day. App development hence refers to the
                creation of applications to be used on mobile devices.
              </p> 
              <a href="#!" class="btn-primary">Read More</a>
            </div>
            <div class="tab-content-right">
              <img
                src="images/app development.png"
                alt="UI/UX Design"
                class="tab-img"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <script>
        let filter_btn = document.querySelectorAll('.filter-btn');
let tab_items = document.querySelectorAll('.tab-item');

for (let i = 0; i < filter_btn.length; i++) {
  filter_btn[i].addEventListener('click', function () {
    for (let j = 0; j < filter_btn.length; j++) {
      filter_btn[j].classList.remove('active');
    }
    let select_tab = filter_btn[i].getAttribute('data-tab');
    filter_btn[i].classList.add('active');
    for (let t = 0; t < tab_items.length; t++) {
      document.querySelector('.tab-filter-item-container').style.height =
        tab_items[t].scrollHeight + 'px';
      if (tab_items[t].classList.contains(select_tab)) {
        tab_items[t].classList.add('select_tab');
      } else {
        tab_items[t].classList.remove('select_tab');
      }
    }
  });
}

for (let th = 0; th < tab_items.length; th++) {
  document.querySelector('.tab-filter-item-container').style.height =
    tab_items[th].scrollHeight + 'px';
}
    </script>
  </body>
</html>