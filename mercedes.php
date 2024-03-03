<!DOCTYPE html>
<html>
<?php include('header.php'); ?>
        <div class="header" id="header">
        <div class="container " >
            <nav class="transparent z-depth-0"style="margin-top: 50px; margin-left:400px; x">
                 <img src="https://logos-world.net/wp-content/uploads/2020/05/Mercedes-Benz-Logo.png" width="150px" class="logo" >
                <ul>
                    <li><a href="#" id="C-Class 2022">C-Class2022</a></li>
                    <li><a href="#" id="E-Class 2022">E-Class 2022</a></li>
                   
                    <li><a href="#" id="S-Class 2022">S-Class 2022</a></li>
                    <li><a href="#" id="GLA 2022">GLA 2022</a></li>
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
              var cc = document.getElementById("C-Class 2022");
              var me= document.getElementById("E-Class 2022");
              var mc= document.getElementById("S-Class 2022");
              var vm= document.getElementById("GLA 2022");
            
              
              
              var whenempty= document.getElementById("whenempty");
              var year= document.getElementById("year");
              var body= document.getElementById("body");
              var fuel= document.getElementById("fuel");
              var transmission= document.getElementById("transmission");
              var power= document.getElementById("power");
              



              cc.onclick=function(){
          header.style.backgroundImage="url(https://carwow-uk-wp-3.imgix.net/2018-mercedes-c-class-cabriolet-review-11.jpg)";
          whenempty.innerHTML="";  
          year.innerHTML="Year : 2022 ";
           body.innerHTML="Body type :Convertible ";
           fuel.innerHTML="Fuel type : Petrol ";
           transmission.innerHTML="Transmission : 9-speed shiftable automatic ";
           power.innerHTML="Power type : Petrol engine ";
            
           
          
          }
          me.onclick=function(){
          header.style.backgroundImage="url(https://motorsplus.com/photos/2021/09/930660-Small-35501-NewMercedes-BenzE-ClassSaloon.png)";
          whenempty.innerHTML="";  
          year.innerHTML="Year : 2022 ";
           body.innerHTML="Body type : sedan, coupe, convertible and wagon";
           fuel.innerHTML="Fuel type :Premium";
           transmission.innerHTML="nine-speed automatic transmission ";
           power.innerHTML="Power type :3.0-liter inline-6 turbocharged engine producing 362 horsepower";
          
          
          }
          mc.onclick=function(){
          header.style.backgroundImage="url(https://hips.hearstapps.com/hmg-prod/images/2021-mercedes-benz-s580-172-edit-1631555006.jpg?crop=0.563xw:0.631xh;0.383xw,0.369xh&resize=640:*)";
          whenempty.innerHTML=""; 
          year.innerHTML="Year : 2022 ";
           body.innerHTML="Body type :sedan";
           fuel.innerHTML="Fuel type : Regular Gasoline ";
           transmission.innerHTML="Transmission : 9-speed automatic transmission";
           power.innerHTML="Power type : 4.0-liter V8 Biturbo with EQ Boost that delivers 496 horsepower and 516 lb. ";
          
          
          }
          vm.onclick=function(){
          header.style.backgroundImage="url(https://www.egy-car.com/wp-content/uploads/2020/05/%D9%85%D8%B1%D8%B3%D9%8A%D8%AF%D8%B3-GLA200-600x400.jpg)";
          whenempty.innerHTML="";  
          year.innerHTML="Year : 2022 ";
           body.innerHTML="Body type :SUV 213 mm ";
           fuel.innerHTML="Fuel type :  Premium Unleaded Petrol ";
           transmission.innerHTML="Transmission :eight-speed automatic transmission ";
           power.innerHTML="Power type :120kW  ";
           
          
          }

            </script>
<?php include('footer.php');?>