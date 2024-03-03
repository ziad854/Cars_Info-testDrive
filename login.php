<!DOCTYPE html>
<html>
    <head>
       <link rel="stylesheet" href="style/reem.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
       <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
       <script src="validation.js" defer></script>
       <title>Login page</title>
       <style>
                nav {
                background-color: #333;
                height: 50px;
                line-height: 50px;
            }

            nav ul {
                margin: 0;
                padding: 0;
                list-style: none;
            }

            nav ul li {
                float: left;
            }

            nav ul li a {
                display: block;
                padding: 0 20px;
                color: #fff;
                text-decoration: none;
            }

            nav ul li a i {
                font-size: 24px;
            }

            nav ul li a:hover {
                background-color: #555;
            }

            </style>
    </head>
    <body>
    <nav>
        <ul>
            <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        </ul>
    </nav>
        <div class="logpage">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Login</button>
                    <button type="button" class="toggle-btn" onclick="register()">Register</button>
                </div>
                <form id="login" class="input-group" method="post" action="check.php">
                    <div class="container">
                        <div class="inputf">
                            <input type="text" class="input" name="username" id="usern" placeholder="Username" >
                            <i class="itt fa-regular fa-user"></i>
                        </div>
                        <div class="inputf">
                            <input type="password" name="password" class="input" placeholder="Password" id="password" >
                            <i class="itt fa-solid fa-lock right"></i>
                            <span class="eye" >
                                <i id="eye" class="itt fa-solid fa-eye"></i>
                            </span>
                        </div>
                        <div class="check1">
                            <input type="checkbox" name="check" id="check">
                            <label for="check" > Remember Me</label>
                        </div>   
                        <div class="inputf">
                            <input type="submit" class="submit" value="Login">
                        </div>       
                        <div class="bottom">
                            <label>
                                <a href="">Forgot password?</a>
                            </label>
                        </div>              
                    </div>
                </form>
                <form id="register" class="input-group" method="post" action="register.php" >
                    <div class="container">
                        <div class="inputf">
                            <input type="email" id="email" name="email" class="input-field" placeholder="Email" >
                            <i class="itt fa-regular fa-envelope" id="icon"></i>
                        </div>
                        <div>
                            <input type="text" name="user" id="user" class="input-field" placeholder="Username" >
                            <i class="itt fa-regular fa-user" id="icon"></i>
                        </div>
                        <div>
                            <input type="password" id="password" name="passr" class="input-field" placeholder="Password" >
                            <i class="itt fa fa-lock" id="icon"></i>
                        </div>
                            <div class="check2">
                                <input type="checkbox" id="check">
                                <label for="check"> I agree to the terms & conditions</label>
                            </div>   
                            <button type="submit" class="submit-btn">Register</button>
                    </div>
                </form>
            </div>
        </div>
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
</html>