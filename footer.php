<?php
if (isset($_POST['submit'])) {
 
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Connect to the database
  include('config.php');

  
  $sql = "INSERT INTO feedback (subject, message) VALUES ('$subject', '$message')";

  if ($conn->query($sql) === TRUE) {
    // The data was inserted successfully
    // echo "Data inserted successfully";
  } else {
    // There was an error inserting the data
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Close the database connection
  $conn->close();
}

?>







<footer class="page-footer grey darken-3" style="padding-top: 20px; padding-bottom: 20px;">
  <div class="container">
    <div class="row">
      <div class="col s12 m6 l6">
        <h5 id="Contacts" class="scrollspy">Contact Information</h5>
        <ul>
          <li><i class="material-icons">phone</i> 123-456-7890</li>
          <li><i class="material-icons">email</i> info@example.com</li>
        </ul>
      </div>
      <div class="col s12 m6 l6">
        <h5>Follow Us</h5>
        <div class="row">
          <ul class="social-icons">
            <li><a href="#" style=" background-color: #424242; color: #000000; margin:20px;display: flex; justify-content: center; align-items: center;" class="col tooltipped btn-floating btn-small" data-position="bottom" data-tooltip="Instagram"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#" style=" background-color: #424242; color: #000000; margin:20px;display: flex; justify-content: center; align-items: center;" class="col tooltipped btn-floating btn-small" data-position="bottom" data-tooltip="Facebook"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#" style=" background-color: #424242; color: #000000; margin:20px;display: flex; justify-content: center; align-items: center;" class="col tooltipped btn-floating btn-small" data-position="bottom" data-tooltip="Twitter"><i class="fab fa-twitter"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col s12 m6 l6">
        <h5>Suggestions/Complaints</h5>
        <form action="index.php" method="POST">
          
          <div class="row">
            <div class="input-field col s12">
              <label for="subject">Subject</label>
              <input type="text" name="subject" id="subject" class="materialize-textarea">
            </div>
          </div>
          <div class="row valign-wrapper">
            <div class="col s10">
              <div class="input-field">
                <label for="message">Message</label>
                <input id="message" name="message" type="text" class="validate">
              </div>
            </div>
            <div class="col s2">
              <button class="btn-floating waves-effect waves-light" type="submit" name="submit" value="Submit">
                <i class="material-icons">send</i>
              </button>
            </div>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</footer>

	<!-- Compiled and minified JavaScript -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
      <script src="validation.js" defer></script>
	<script>
   $(document).ready(function(){

    $('.sidenav').sidenav();
      $('.materialboxed').materialbox();
      $('.parallax').parallax();
      $('.tabs').tabs();
      $('.dropdown-trigger').dropdown();
      $('.collapsible').collapsible();
      $('.datepicker').datepicker({
        disableWeekends: true,
        yearRange: 1
      });
	$('.tooltipped').tooltip();
    $('.scrollspy').scrollSpy();
    $('.rotate').click(function() {
        $(this).toggleClass('active');
    });
    

    });
    var x = document.getElementById("login") ;
            var y = document.getElementById("register") ;
            var z = document.getElementById("btn") ;

            function register(){
                x.style.left = "-400px"
                y.style.left = "50px"
                z.style.left = "110px"
            }
            function login(){
                x.style.left = "50px"
                y.style.left = "450px"
                z.style.left = "0px"
            }
            

             
  </script>
  <script>
                const passwordInput = document.querySelector("#password")
                const eye = document.querySelector("#eye")
                eye.addEventListener("click", function(){
                this.classList.toggle("fa-eye-slash")
                const type = passwordInput.getAttribute("type") === "password" ? "text" : "password"
                passwordInput.setAttribute("type", type)})
        </script>
        <script>
            var l = document.getElementById("login") ;
            var m = document.getElementById("register") ;
            var n = document.getElementById("btn") ;

            function register(){
                l.style.left = "-400px"
                m.style.left = "50px"
                n.style.left = "110px"
            }
            function login(){
                l.style.left = "50px"
                m.style.left = "450px"
                n.style.left = "0px"
            }
        </script>
  </body>