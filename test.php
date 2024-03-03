<?php 
    // echo isset($_POST['username']);
    // echo "hi";
    if(isset($_POST['username'])){
        $email= $_POST['mail'];
        $user= $_POST['username'];
        $name= $_POST['name'];
        $mobile= $_POST['mobile'];
        $mobile2= $_POST['mobile2'];
        $region=$_POST['region'];
        $address= $_POST['address'];
        // echo $_SESSION['n'];

        session_start();

        include('config.php');
        $update ="UPDATE users SET name='$name', mobile= '$mobile',  mobile2='$mobile2', email= '$email', region='$region', address='$address' WHERE username= '$user' ";
        $s ="SELECT * FROM users where username = '$user'";
        $result= mysqli_query($conn, $s);
        $row= mysqli_fetch_array($result);
    
        if(isset($_POST['edit'])){
            if (mysqli_num_rows($result) == 1){
                // mysqli_query($conn, $update);
                    include("pr.php");
                //    header("location: conprofile.php");
                    // echo "updated!";  
                
        }
    
        }else if(isset($_POST['logout'])){
            header("location: logout.php");
        }

    }

?> 