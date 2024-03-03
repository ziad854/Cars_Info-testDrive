<?php 

    $email= $_POST['email'];
    $user_r= $_POST['user'];
    $pass_r= $_POST['passr']; 
    
    session_start();
    // include('congfig.php');
    $conn = new mysqli('localhost','root', '', 'project');
    $u ="SELECT * FROM users where username = '$user_r' and email= '$email'" ;
    $result= mysqli_query($conn, $u);
    if (mysqli_num_rows($result) == 1){
        header('location: login.php');
    }else {
        $register ="INSERT into users(id, email, username, password) values('', '$email', '$user_r', '$pass_r')";
        mysqli_query($conn, $register);
        header('location: login.php');
    }
?> 