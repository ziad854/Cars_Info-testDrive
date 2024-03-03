<!DOCTYPE html>
<html>
<?php include('header.php'); ?>
        <div class="header" id="header">
        <div class="container " >
            <nav class="transparent z-depth-0"style="margin-top: 50px; margin-left:400px; x">
                 <img src="https://logos-world.net/wp-content/uploads/2021/03/Chevrolet-Logo.png" width="150px" class="">
                <ul>
                    <li><a href="#" id="Equinox 2022">Equinox 2022</a></li>
                    <li><a href="#" id="Blazer 2022">Blazer 2022</a></li>
                   
                    <li><a href="#" id="Trailblazer 2022">Trailblazer 2022</a></li>
                    <li><a href="#" id="suburban">suburban 2022</a></li>
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
              var e2 = document.getElementById("Equinox 2022");
              var b2= document.getElementById("Blazer 2022");
              var t2= document.getElementById("Trailblazer 2022");
              var su= document.getElementById("suburban");
            
              
              
              var whenempty= document.getElementById("whenempty");
              var year= document.getElementById("year");
              var body= document.getElementById("body");
              var fuel= document.getElementById("fuel");
              var transmission= document.getElementById("transmission");
              var power= document.getElementById("power");
              


              e2.onclick=function(){
          header.style.backgroundImage="url(https://di-uploads-pod31.dealerinspire.com/sawyerchevy/uploads/2021/11/2022-Chevy-Equinox-on-Highway.jpg)";
          whenempty.innerHTML=""; 
          year.innerHTML="Year : 2022 ";
           body.innerHTML="Body type :5-door SUV ";
           fuel.innerHTML="Fuel type :  regular unleaded 87 octane gasoline or higher ";
           transmission.innerHTML="Transmission : eight-speed automatic ";
           power.innerHTML="Power type : 4xe plug-in hybrid electric motor ";
            
           
          
          }
          b2.onclick=function(){
          header.style.backgroundImage="url(https://hips.hearstapps.com/hmg-prod/images/2022-chevrolet-blazer-premier-003-1622046670.jpg?crop=0.769xw:0.865xh;0.125xw,0.0601xh&resize=640:*)";
          whenempty.innerHTML="";  
          year.innerHTML="Year : 2022 ";
           body.innerHTML="Body type :   Mid-Size Sporty SUV ";
           fuel.innerHTML="Fuel type : Regular  ";
           transmission.innerHTML="Transmission : nine-speed automatic transmission ";
           power.innerHTML="Power type : 2.0L turbocharged I-4 DOHC with Direct Injection and automatic stop/start ";
          
          
          }
          t2.onclick=function(){
          header.style.backgroundImage="url(https://media.ed.edmunds-media.com/chevrolet/trailblazer/2021/oem/2021_chevrolet_trailblazer_4dr-suv_activ_fq_oem_1_600.jpg)";
          whenempty.innerHTML="";  
          year.innerHTML="Year : 2022 ";
           body.innerHTML="Body type :extra-small SUV";
           fuel.innerHTML="Fuel type : Regular unleaded ";
           transmission.innerHTML="Transmission : 9-Speed Automatic Transmission";
           power.innerHTML="Power type : 1.2 liter, turbocharged three-cylinder ";
          
          
          }
          su.onclick=function(){
          header.style.backgroundImage="url(https://www.thedrive.com/uploads/2022/04/20/2022-chevrolet-suburban-premier-review-6.jpg?auto=webp&crop=16%3A9&auto=webp&optimize=high&quality=70&width=1440)";
          whenempty.innerHTML="";  
          year.innerHTML="Year : 2022 ";
           body.innerHTML="Body type :Full-size three-row SUV ";
           fuel.innerHTML="Fuel type : Premium Gasoline ";
           transmission.innerHTML="Transmission : 10-speed automatic ";
           power.innerHTML="Power type : 3.0L DOHC I-6 Turbo-Diesel ";
           
          
          }

            </script>
<?php include('footer.php');?>