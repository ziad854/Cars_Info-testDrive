<!DOCTYPE html>
<html>
<?php include('header.php'); ?>
        <div class="header" id="header">
        <div class="container " >
            <nav class="transparent z-depth-0"style="margin-top: 50px; margin-left:400px; x">
                 <img src="https://logos-world.net/wp-content/uploads/2020/04/Nissan-Logo.png" width="100px" class="logo">
                <ul>
                    <li><a href="#" id="Nissan">Nissan GT-R 2022</a></li>
                    <li><a href="#" id="Nissan Rogue">Nissan Rogue </a></li>
                   
                    <li><a href="#" id="Nissan Maxima 2022">Nissan Maxima 2022</a></li>
                    <li><a href="#" id="Nissan Altima 2022">Nissan Altima 2022</a></li>
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
                      
                </div>
            </div>
            </div>
            <script>
              var header = document.getElementById("header");
              var gn = document.getElementById("Nissan");
              var nr= document.getElementById("Nissan Rogue");
              var nm= document.getElementById("Nissan Maxima 2022");
              var na= document.getElementById("Nissan Altima 2022");
            
              
              
              var whenempty= document.getElementById("whenempty");
              var year= document.getElementById("year");
              var body= document.getElementById("body");
              var fuel= document.getElementById("fuel");
              var transmission= document.getElementById("transmission");
              var power= document.getElementById("power");
              



              gn.onclick=function(){
          header.style.backgroundImage="url(https://images.summitmedia-digital.com/topgear/images/2021/09/14/nissan-gt-r-8-1631603023.jpg)";
          whenempty.innerHTML="";  
          year.innerHTML="Year : 2022 ";
           body.innerHTML="Body type : 2-doors coupe ";
           fuel.innerHTML="Fuel type :  Petrol";
           transmission.innerHTML="Transmission : Automatic";
           power.innerHTML="Power type : 600 HP";
            
           
          
          }
          nr.onclick=function(){
          header.style.backgroundImage="url(https://www.motortrend.com/uploads/2023/02/2023-Nissan-Rogue-Platinum-AWD-17-e1677257988258.jpg)";
          whenempty.innerHTML="";  
          year.innerHTML="Year : 2022 ";
           body.innerHTML="Body type :  compact crossover SUV ";
           fuel.innerHTML="Fuel type :  regular unleaded octane-87 gasoline or higher ";
           transmission.innerHTML="Transmission : Xtronic CVT  ";
           power.innerHTML="Power type : 201 horsepower ";
          
          
          }
          nm.onclick=function(){
          header.style.backgroundImage="url(https://www.motortrend.com/uploads/2021/12/2022-Nissan-Maxima-6.jpg)";
          whenempty.innerHTML=""; 
          year.innerHTML="Year : Production	2022 ";
           body.innerHTML="Body type : 4-Door Sports Car ";
           fuel.innerHTML="Fuel type : Premium Gasoline ";
           transmission.innerHTML="Transmission :  XTRONIC CVT ";
           power.innerHTML="Power type : 300-horsepower ";
          
          
          }
          na.onclick=function(){
          header.style.backgroundImage="url(https://images.cars.com/cldstatic/wp-content/uploads/nissan-altima-2022-01-exterior-silver-front-angle-scaled.jpg)";
          whenempty.innerHTML="";  
          year.innerHTML="Year : 2022 ";
           body.innerHTML="Body type : mid-size sedan ";
           fuel.innerHTML="Fuel type : regular grade 87 octane fuel";
           transmission.innerHTML="Transmission : continuously variable automatic transmission (CVT) ";
           power.innerHTML="Power type : 188-hp 2.5-liter four-cylinder engine";
           
          
          }

            </script>
<?php include('footer.php');?>