<?php

$servername = "54.169.97.57";
$username = "fwg";
$password = "123456";

// Create connection
$conn = new mysqli($servername, $username, $password,"bus");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$name  = $_POST["name"]; 
$sql = "SELECT  car.car_title,car_license,brand.brand_title FROM car INNER JOIN brand ON car.brand_id = brand.brand_id WHERE car_title='$name'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "brand_title : " . $row["brand_title"] ." ". $row["car_title"]. " | car_license : " . $row["car_license"]. "<br>";
    }
} else {
    echo "0 results";
}

?>