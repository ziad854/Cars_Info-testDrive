
<html>
<?php include('header.php'); ?>
        <div class="header" id="header">
          <div class="container " >
            <nav class="transparent z-depth-0"style="margin-top: 50px; margin-left:400px; x">
                 <img src="https://logos-world.net/wp-content/uploads/2021/03/Audi-Logo.png" width="150px" class="logo">
                <ul class=" ">
                    <li><a href="#" id="audi A5">Audi A5</a></li>
                    <li><a href="#" id="audi RS3">Audi RS3</a></li>
                   
                    <li><a href="#" id="audi RS4">Audi RS4</a></li>
                    <li><a href="#" id="audi RSS">Audi RS5</a></li>
                    <!-- <li><a href="#" id="model 5">Model 5</a></li> -->
                </ul>      
              </nav>
          </div>
              <div class="info">
                <div>

                    <ul>
                        <h3 id="whenempty" class="">CHOOSE A MODEL</h3>
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
              var A5 = document.getElementById("audi A5");
              var RS3 = document.getElementById("audi RS3");
            
              var RS4 = document.getElementById("audi RS4");
              var RSS = document.getElementById("audi RSS");
              
              var whenempty= document.getElementById("whenempty");
              var year= document.getElementById("year");
              var body= document.getElementById("body");
              var fuel= document.getElementById("fuel");
              var transmission= document.getElementById("transmission");
              var power= document.getElementById("power");
              



              A5.onclick=function(){
          header.style.backgroundImage="url(https://cdn.carbuzz.com/gallery-images/2020-audi-a5-coupe-carbuzz-676392.jpg)";
          whenempty.innerHTML="";
          year.innerHTML="Year : 2020 ";
           body.innerHTML="Body type :2-doors, coupé ";
           fuel.innerHTML="Fuel type : Premium Unleaded Petrol fuel ";
           transmission.innerHTML="Transmission :Automatic ";
           power.innerHTML="Power type : 150 hp ";

           
          
          }
          RS3.onclick=function(){
          header.style.backgroundImage="url(https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/dsc-0926-1669912729.jpg)";
          whenempty.innerHTML="";
          year.innerHTML="Year : 2020 ";
           body.innerHTML="Body type : Sedan or convertible body styles ";
           fuel.innerHTML="Fuel type : Premium Unleaded Petrol fuel ";
           transmission.innerHTML="Transmission : Automatic ";
           power.innerHTML="Power type :400-hp five-cylinder ";
          
           currentModelId = "RS3";
          }
          RS4.onclick=function(){
          header.style.backgroundImage="url(https://images.pistonheads.com/nimg/46292/blobid5.jpg)";
          whenempty.innerHTML="";
          year.innerHTML="Year : 2020 ";
           body.innerHTML="Body type :Wagon";
           fuel.innerHTML="Fuel type : Premium Unleaded Petrol fuel ";
           transmission.innerHTML="Transmission : A six-speed manual transmission ";
           power.innerHTML="Power type : 444 hp ";
          

          
          }
          RSS.onclick=function(){
          header.style.backgroundImage="url(https://www.autocar.co.uk/sites/autocar.co.uk/files/images/car-reviews/first-drives/legacy/1-audi-rs5-coupe-2020-fd-hero-front.jpg)";
          whenempty.innerHTML=""; 
          year.innerHTML="Year : 2020 ";
           body.innerHTML="Body type :	Coupe ";
           fuel.innerHTML="Fuel type : Premium Unleaded Petrol fuel ";
           transmission.innerHTML="Transmission : Automatic ";
           power.innerHTML="Power type :  444-hp  ";
           

          }
            </script>
            
<?php include('footer.php');?>