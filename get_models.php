<?php
$selectedBrand = $_POST["brand"];
include('config.php');
// Construct SQL query to retrieve models for selected brand
$sql = "SELECT model FROM cars WHERE brand = '$selectedBrand'";

// Execute SQL query
$result = $conn->query($sql);

// Check if query returned any results
if ($result->num_rows > 0) {
    // Construct options for dropdown menu
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["model"] . "'>" . $row["model"] . "</option>";
    }
} else {
    // Return error message if no models found for selected brand
    echo "<option disabled selected>No models found</option>";
}

// Close database connection

?>
