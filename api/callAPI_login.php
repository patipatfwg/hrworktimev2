<?php


date_default_timezone_set("Asia/Bangkok");
header('Content-Type: application/json');

$servername = base64_decode("ZnJlZXdpbGxtZGMubG9naW50by5tZTo1Njg2MA==");
$username =   base64_decode("ZndnaHI===");
$password =   base64_decode("ZndnQG1kYzA0MTEx");
$dbname =     base64_decode("ZndnX2hy");

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."<hr>");
}

$tmp_username = $_REQUEST['username'];

$tmp_password = base64_encode($_REQUEST['password']);

$sql = "SELECT * FROM user WHERE username = '$tmp_username' AND password = '$tmp_password'";

$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    $tmp_status = 'hr';
    $data = array(
        "code"=>200,
        "status"=>$tmp_status
    );
}
else
{
    $data = ["code"=>404];
}



echo json_encode($data);