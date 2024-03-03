<!DOCTYPE html>
<html>
<?php include('header.php'); ?>
        <div class="header" id="header">
        <div class="container " >
            <nav class="transparent z-depth-0"style="margin-top: 50px; margin-left:400px; x">
                 <img src="https://logos-world.net/wp-content/uploads/2021/09/Jeep-Logo.png" width="150px" class="logo">
                <ul>
                    <li><a href="#" id="grand cherokee">grand cherokee</a></li>
                    <li><a href="#" id="jeep wrangler 2022">Jeep wrangler 2022</a></li>
                   
                    <li><a href="#" id="Renegade 2022">Renegade 2022</a></li>
                    <li><a href="#" id="Compass">Compass 2022</a></li>
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
              var gc = document.getElementById("grand cherokee");
              var jw= document.getElementById("jeep wrangler 2022");
              var R2= document.getElementById("Renegade 2022");
              var JC= document.getElementById("Compass");
            
              
              
              var whenempty= document.getElementById("whenempty");
              var year= document.getElementById("year");
              var body= document.getElementById("body");
              var fuel= document.getElementById("fuel");
              var transmission= document.getElementById("transmission");
              var power= document.getElementById("power");
              



              gc.onclick=function(){
          header.style.backgroundImage="url(https://www.motortrend.com/uploads/2021/09/2022-Jeep-Grand-Cherokee-79.jpg?fit=around%7C1000:625)";
          whenempty.innerHTML="";  
          year.innerHTML="Year : 2022 ";
           body.innerHTML="Body type : 5-door SUV ";
           fuel.innerHTML="Fuel type :  regular unleaded 87 octane gasoline or higher ";
           transmission.innerHTML="Transmission : eight-speed automatic ";
           power.innerHTML="Power type : 3.6-liter V-6 or a 5.7-liter Hemi V-8 ";
            
           
          
          }
          jw.onclick=function(){
          header.style.backgroundImage="url(https://contactcars.fra1.cdn.digitaloceanspaces.com/contactcars-production/Images/Large/Engines/61ae2eac1432f32a4dfa214e_5a9bc5df-f133-4687-a23b-054a43aaece0.jpeg)";
          whenempty.innerHTML=""; 
          year.innerHTML="Year : 2022 ";
           body.innerHTML="Body type :  two-door and four-door ";
           fuel.innerHTML="Fuel type : Regular Gasoline ";
           transmission.innerHTML="Transmission : A 6-speed manual transmission comes standard. An 8-speed automatic transmission is optional ";
           power.innerHTML="Power type : plug-in hybrid powertrain ";
          
          
          }
          R2.onclick=function(){
          header.style.backgroundImage="url(https://www.jeep.com/content/dam/fca-brands/na/jeep/en_us/2022/renegade/gallery/exterior/2022-Renegade-Gallery-Exterior-Exterior-1-Select-Trim-Shown-Desktop.jpg.image.1440.jpg)";
          whenempty.innerHTML="";  
          year.innerHTML="Year : 2022 ";
           body.innerHTML="Body type :5-door SUV";
           fuel.innerHTML="Fuel type : Regular Gasoline ";
           transmission.innerHTML="Transmission : 9-speed automatic transmission";
           power.innerHTML="Power type : turbocharged 1.3-liter four-cylinder ";
          
          
          }
          JC.onclick=function(){
          header.style.backgroundImage="url(https://cdn.jdpower.com/JDPA_2020%20Jeep%20Compass%20Limited%20Red%20Front%20View.jpg)";
          whenempty.innerHTML="";  
          year.innerHTML="Year : 2022 ";
           body.innerHTML="Body type :four-door wagon ";
           fuel.innerHTML="Fuel type : Regular Gasoline ";
           transmission.innerHTML="Transmission : six-speed automatic transmission ";
           power.innerHTML="Power type : 2.4L INLINE 4 engine ";
           
          
          }

            </script>
<?php include('footer.php');?>