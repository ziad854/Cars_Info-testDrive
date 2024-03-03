<?php
session_start();

    if (isset($_SESSION['username']) && isset($_SESSION['password'])) { 
        // if (mysqli_num_rows($result)>0){
        //     $i=0;
        //     while ($row =mysqli_fetch_array($s)){
// $email= $_POST['mail'];
$user=$_SESSION['username'] ;
// $name= $_POST['name'];
// $mobile= $_POST['mobile'];
// $mobile2= $_POST['mobile2'];
// $region=$_POST['region'];
// $address= $_POST['address'];
include('config.php');
$s ="SELECT * FROM users where username = '$user'";
$result= mysqli_query($conn, $s);
$row= mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html>
<head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <title>profile</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

            <link rel="stylesheet" href="style/pr.css">
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

        <div class="logpageee">
            <div class="form-boxxx">
                <div class="button-boxxx">
                    <h1>Profile</h1>
                </div>
                <form class="input-grouppp" method="POST" action="test.php">
                    <div class="containerrr">
                        <div class="inputfff">
                        <input type="text" class="userrr" name="username" value="<?php echo $_SESSION['username'];?>" placeholder="Username" readonly>
                        </div>  
                        <div class="inputfff">
                            <input type="text" class="nameee" name="name" value="<?php echo $row['name'];?>" placeholder="Name"readonly >
                        </div>  
                        <div class="inputfff">
                            <input type="email"  name="mail" class="inputtt" value="<?php echo $row['email'];?>" placeholder="Email"readonly >
                            <input type="text"  name="mobile" class="inputtt" value="<?php echo $row['mobile'];?>" placeholder="Enter phone number"readonly >
                            <input type="text"  name="mobile2" class="inputtt" value="<?php echo $row['mobile2'];?>" placeholder="Enter another phone number" readonly>
                            <input type="text"  name="region" class="inputtt" value="<?php echo $row['region'];?>" placeholder="State/Region" readonly>
                            <input type="text"  name="address" class="inputtt" value="<?php echo $row['address'];?>" placeholder="Enter address" readonly>
                        </div>
                        <div class="inputfff">
                        <input type="submit" class="submittt" name="edit" value="Edit Profile">
                        </div>       
                        <div class="inputfff">
                        <a href="logout.php"></a><input type="submit" class="submit222" name="logout" value="logout"></a>
                        </div>       
                    </div>
                </form>
            </div>
        </div>
        </body>
        </html>
<?php
    // $i++;}
    //     }
        }else {
        header("location: login.php");
        exit();
    }
?>