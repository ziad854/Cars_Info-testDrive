<?php
session_start();


if (isset($_SESSION['username']) && isset($_SESSION['password'])){
// Include database configuration
require_once 'config.php';
$errors = array('brand' => '', 'model' => '', 'date' => '','name' => '','email' => '','phone' => '');
$suc='';
// Check if form submitted
if (isset($_POST['submit'])) {
    // Get form data and sanitize
    $brand = filter_var($_POST['brand'], FILTER_SANITIZE_STRING);
    $model = filter_var($_POST['model'], FILTER_SANITIZE_STRING);
    $date = filter_var($_POST['date'], FILTER_SANITIZE_STRING);
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);

    // Validate form data
    if (empty($brand)) {
        $errors['brand'] = 'Brand is required';
    }
    if (empty($model)) {
        $errors['model'] = 'Model is required';
    }
    if (empty($date)) {
        $errors['date'] = 'Date is required';
    }
    if (empty($name)) {
        $errors['name'] = 'Name is required';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email format';
    }
    if (empty($phone)) {
        $errors['phone'] = 'Phone number is required';
    } elseif (!preg_match('/^\+?\d{7,}$/', $phone)) {
        $errors['phone'] = 'Invalid phone number format';
    }
    // Insert user data into database if no errors
    if (!array_filter($errors)) {
        $query = "INSERT INTO test_drive_requests (name, email, phone, brand, model, date) 
                  VALUES ('$name', '$email', '$phone', '$brand', '$model', '$date')";
        if (mysqli_query($conn, $query)) {
           $suc= "<p>Your test drive request has been submitted successfully!</br>we will send you a message with information</p>";
        } else {
            $suc= "<p>Sorry, something went wrong. Please try again later.</p>";
        }
    } 
}
    // else {
    //     echo '<ul>';
    //     foreach ($errors as $error) {
    //         echo "<li>$error</li>";
    //     }
    //     echo '</ul>';
    // }       // Display error messages if any
 


// Close database connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
    <title>TEST-DRIVE FORM</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <!-- Compiled and minified CSS --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="style/materialize/css/materialize.min.css" rel="stylesheet">
    <link href="style/materialize/css/materialize.css" rel="stylesheet">
   
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="style/pr.css">
    <style>
        body {
            background-color: #211e1e;
}

.card {
    background-color: rgba(173, 172, 172, 0.479);
    border-radius: 15px;
    width: 900px;
    margin:  40px  auto ;
    margin-top: 50px;
}
.btn{
    background-color:#a2a6a6;
}
.btn:hover{
    background-color:#e1e6e5;
}

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
            i.fa.fa-home {
  height: 27px;
  width: 28px;
}

.datepicker-calendar-container .datepicker-table td.is-today {
  background-color:#fff;
}


.datepicker-calendar-container {
  background-color: #ffffff;
}

.datepicker-container, .datepicker-container .datepicker-date-display, .datepicker-container .datepicker-date-display .datepicker-year-display, .datepicker-container .datepicker-date-display .datepicker-month-display, .datepicker-table td.is-today, .datepicker-table td.is-selected {
  color: #080707;
}
    </style>
</head>
<body>
<nav>
        <ul>
            <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        </ul>
    </nav>
    <div class="container white-text" style="">
        <div class="card rounded">
            <div class="card-content">
                <h2>TEST-DRIVE FORM</h2>
                <form method="post" action="dependent_select.php">
                    <div class="input-field">
                        <select  name="brand" id="brand_select">
                            <option value="" class="white-text" disabled selected>Select Brand</option>
                            <option value="audi">audi</option>
                            <option value="jeep">jeep</option>
                            <option value="mercedes">mercedes</option>
                            <option value="chevrolet">chevrolet</option>
                            <option value="fiat">fiat</option>
                            <option value="nissan">Nissan</option>
                        </select>
                        <label>Brand</label>
                        <div class="red-text"><?php echo $errors['brand']; ?></div>
                    </div>

                    <div class="input-field">
                        <select name="model" id="model_select">
                            <option value="" disabled selected>Select Model</option>
                        </select>
                        <label>Model</label>
                        <div class="red-text"><?php echo $errors['model']; ?></div>
                    </div>

                    <div class="input-field">
                        <input type="text" name="date" class="datepicker">
                        <label>Date</label>
                        <div class="red-text"><?php echo $errors['date']; ?></div>
                    </div>

                    <div class="input-field">
                        <input type="text" name="name" class="validate">
                        <label>Name</label>
                        <div class="red-text"><?php echo $errors['name']; ?></div>
                    </div>

                    <div class="input-field">
                        <input type="email" name="email" class="validate">
                        <label>Email</label>
                        <div class="red-text"><?php echo $errors['email']; ?></div>
                    </div>

                    <div class="input-field">
                        <input type="text" name="phone" class="validate">
                        <label>Phone</label>
                        <div class="red-text"><?php echo $errors['phone']; ?></div>
                    </div>


                    <button type="submit" name="submit" value="submit" class="waves-effect waves-light btn ">Submit</button>
                    <?php 
                    echo $suc;?>
                    

                </form>
            </div>
        </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.datepicker').datepicker({
            yearRange: 1
        });
            $('select').formSelect();
            $('#brand_select').change(function(){
                var brand = $(this).val();
                $.ajax({
                    url:"get_models.php",
                    method:"POST",
                    data:{brand:brand},
                    success:function(data){
                        $('#model_select').html(data);
                        $('select').formSelect();
                    }
                });
            });
        });
    </script>

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
