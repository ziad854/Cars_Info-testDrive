<?php 
        $user= $_POST["username"];
        $pass= $_POST["password"];
        $checkbox= isset($_POST['check']);
       
        session_start();
        include('config.php');
        $s ="SELECT * FROM users where username = '$user' and password='$pass'";
        $result= mysqli_query($conn, $s);
        if (mysqli_num_rows($result) == 1){
            $_SESSION['username']= $user;
            $_SESSION['email']= $_POST["email"];
            $_SESSION['password']= $pass;
            header('location: index.php');
        }else {
            header('location: login.php');
        }
?> 
<?php 

    // $email= $_POST['email'];
    // $user_r= $_POST['user'];
    // $pass_r= $_POST['passr']; 
    // $errors =array();
    //  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    //      array_push($errors, "Email is not valid!");
    //  }
    //  if (strlen($pass_r)<8){
    //      array_push($errors, "Password must be at least 8 characters long");
    //  }
    //  if (count($errors)>0){
    //      foreach ($errors as $error){
    //          echo "<div class='alert alert-danger'>$error</div>";
    //      }
    // } 
    // session_start();
    // $conn= new mysqli("localhost", "root", "", "project");
    // $s ="SELECT * FROM users where username = '$user_r'";
    // $result= mysqli_query($conn, $s);
    // if (mysqli_num_rows($result) == 1){
    //     echo "username already token";
    // }else {
    //     $register ="INSERT into users(id, email, username, password) values('', '$email', '$user_r', '$pass_r')";
    //     mysqli_query($conn, $register);
    //     header('location: login.html');
    // }
?> 
