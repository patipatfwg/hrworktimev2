<?php
$servername = "52.163.82.249:1178";
$username = "promptadm";
$password = "chee#Mai5";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."<hr>");
} 

$sql = "SELECT * FROM hrservices.worktime Limit 10";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {

        $indate = date_create($row["in_time"]);
        $outdate = date_create($row["out_time"]);
        
        
        // echo"<tr>";   
        // echo "<td> " . $row["employee_id"]. " </td><td> " .date_format($indate, 'd/m/Y'). " </td><td>".date_format($indate, 'H.i')."   น.</td><td> " .date_format($outdate, 'd/m/Y'). "</td><td>".date_format($outdate, 'H.i')." น.</td>";
        // echo"</tr>";

        $myObj->employee = $row["employee_id"];
        $myObj->in_time = $row["in_time"];
        $myObj->out_time = $row["out_time"];

        $myJSON = json_encode($myObj);
    }
    echo $myJSON;
    
} else {
    echo "ไม่มีรายการ";
}
$conn->close();
?>