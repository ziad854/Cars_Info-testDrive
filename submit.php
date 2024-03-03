<?php
// Include database configuration
require_once 'config.php';

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
    $errors = [];
    if (empty($brand)) {
        $errors[] = 'Brand is required';
    }
    if (empty($model)) {
        $errors[] = 'Model is required';
    }
    if (empty($date)) {
        $errors[] = 'Date is required';
    }
    if (empty($name)) {
        $errors[] = 'Name is required';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format';
    }
    if (empty($phone)) {
        $errors[] = 'Phone number is required';
    } elseif (!preg_match('/^\+?\d{7,}$/', $phone)) {
        $errors[] = 'Invalid phone number format';
    }

    // Insert user data into database if no errors
    if (empty($errors)) {
        $query = "INSERT INTO test_drive_requests (name, email, phone, brand, model, date) 
                  VALUES ('$name', '$email', '$phone', '$brand', '$model', '$date')";
        if (mysqli_query($conn, $query)) {
            echo "<p>Your test drive request has been submitted successfully!</p>";
        } else {
            echo "<p>Sorry, something went wrong. Please try again later.</p>";
        }
    } else {
        // Display error messages if any
        echo '<ul>';
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo '</ul>';
    }
}

// Close database connection
mysqli_close($conn);
?>
