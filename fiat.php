<!DOCTYPE html>
<html>
<?php include('header.php'); ?>
        <div class="header" id="header">
        <div class="container " >
            <nav class="transparent z-depth-0"style="margin-top: 50px; margin-left:400px; x">
                 <img src="https://logos-world.net/wp-content/uploads/2021/03/Fiat-Logo.png" width="150px" class="">
                <ul>
                    <li><a href="#" id="2021 FIAT 500X. ">2021 FIAT 500X </a></li>
                    <li><a href="#" id="2020 FIAT 124 Spider">2020 FIAT 124 Spider</a></li>
                   
                    <li><a href="#" id="2020 FIAT 500L">2020 FIAT 500L</a></li>
                    <li><a href="#" id="2020 fiat 500x">2020 fiat 500x</a></li>
                    <!-- <li><a href="#" id="model 5">Model 5</a></li> -->
                </ul>      
              </nav>
        </div>
              <div class="info">
                <div>
                    
                <ul>
                      <h3 id="whenempty">CHOOSE A MODEL</h3>
                        <li id="year"></li>
                        <li id="body"></li>
                        <li id="fuel"></li>
                        <li id="transmission"></li>
                        <li id="power"></li>
                      </ul>
                      <div class="line"></div>
                      
                      <div class="line"></div>
                      
                </div>
            </div>
            </div>
            <script>
              var header = document.getElementById("header");
              var f1 = document.getElementById("2021 FIAT 500X. ");
              var f2 = document.getElementById("2020 FIAT 124 Spider");
            
              var f3 = document.getElementById("2020 FIAT 500L");
              var f4 = document.getElementById("2020 fiat 500x");
              
              var whenempty= document.getElementById("whenempty");
              var year= document.getElementById("year");
              var body= document.getElementById("body");
              var fuel= document.getElementById("fuel");
              var transmission= document.getElementById("transmission");
              var power= document.getElementById("power");
              



              f1.onclick=function(){
          header.style.backgroundImage="url(https://hips.hearstapps.com/hmg-prod/images/2021-fiat-500x-mmp-1-1610559635.jpg?crop=0.933xw:0.695xh;0,0.224xh&resize=1200:*)";
          whenempty.innerHTML=""; 
          year.innerHTML="Year : 2021";
           body.innerHTML="Body type :5-door SUV ";
           fuel.innerHTML="Fuel type : Premium Unleaded Petrol ";
           transmission.innerHTML="Transmission : six-speed manual ";
           power.innerHTML="Power type :1.3L turbocharged 4-cylinder ";
            
           
          
          }
          f2.onclick=function(){
          header.style.backgroundImage="url(https://www.motortrend.com/uploads/sites/11/2020/07/2020-Fiat-124-Spider-Abarth-01.jpg?fit=around%7C875:492)";
          whenempty.innerHTML=""; 
          year.innerHTML="Year : 2020 ";
           body.innerHTML="Body type : small two-seat roadster ";
           fuel.innerHTML="Fuel type : Premium Gasoline ";
           transmission.innerHTML="Transmission : Fiat 124 Spider Automatic Transmission  ";
           power.innerHTML="Power type :164 hp ";
          
          
          }
          f3.onclick=function(){
          header.style.backgroundImage="url(https://media.gemini.media/img/shift-eg/large/2019/9/25/2019_9_25_20_54_45_346.jpg)";
          whenempty.innerHTML=""; 
          year.innerHTML="Year : 2020 ";
           body.innerHTML="Body type :5-door MPV";
           fuel.innerHTML="Fuel type : Premium unleaded ";
           transmission.innerHTML="Transmission : 6-speed automatic ";
           power.innerHTML="Power type : 160-horsepower ";
          
          
          }
          f4.onclick=function(){
          header.style.backgroundImage="url(https://images.hgmsites.net/hug/2020-fiat-500x-sport_100744285_h.jpg)";
          whenempty.innerHTML=""; 
          year.innerHTML="Year : 2020 ";
           body.innerHTML="Body type :5-door SUV";
           fuel.innerHTML="Fuel type : Premium unleaded";
           transmission.innerHTML="Transmission :  six-speed manual ";
           power.innerHTML="Power type : 177 horsepower ";
           
          
          }

            </script>
            
            <?php include('footer.php');?>