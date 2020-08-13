<?php

    $servername = base64_decode("NTIuMTYzLjgyLjI0OToxMTc4");
    $username = base64_decode("cHJvbXB0YWRt");
    $password = base64_decode("Y2hlZSNNYWk1");
    $dbname = base64_decode("aHJzZXJ2aWNlcw==");

    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error."<hr>");
    } 

    if(isset($_GET['in_date']) && isset($_GET['out_date'])){
        $in_date = $_GET['in_date'];
        $out_date = $_GET['out_date'];
    }else{
        $in_date = '';
        $out_date = '';
    }

    if($in_date==''){
        $indate = date("Y-m-d");
        $outdate = date("Y-m-d");
        $in_date = $indate." 00:00:00";
        $out_date = date("Y-m-d")." 23:59:59";
    }
    else if($out_date!=''){
        $indate =$_GET['in_date'];
        $outdate =$_GET['out_date'];
        $in_date = $indate." 00:00:00";
        $out_date = $outdate." 23:59:59";
    }else if($out_date==''){
        $in_date = $indate." 00:00:00";
        $out_date = $outdate." 23:59:59";
    }

    $sql = "SELECT employee.name_prefix_th,employee.first_name_th,employee.last_name_th,worktime.employee_id,worktime.in_time,worktime.out_time FROM hrservices.worktime INNER JOIN hrservices.employee ON worktime.employee_id = employee.id WHERE worktime.in_time >= '$in_date' AND worktime.out_time <= '$out_date'";
    $result = $conn->query($sql);
// 
// 
// 
    if ($result->num_rows > 0) {

        $resultArray = array();

        while($row = $result->fetch_assoc()) {
            
            array_push($resultArray,$row);
     
        }    

    } else {

        $status = 0;

    }
    echo json_encode($resultArray);
    $conn->close();

            // $indate = date_create($row["in_time"]);
            // $outdate = date_create($row["out_time"]);
            // echo"<tr>";   
            // echo "<td class='text-center'> " .$row["employee_id"]. " </<td><td> " . $row["name_prefix_th"].$row["first_name_th"]." ".$row["last_name_th"]. " </td><td class='text-center'> " .date_format($indate, 'd/m/Y'). " </td><td class='text-center'>".date_format($indate, 'H.i')."   น.</td><td class='text-center'> " .date_format($outdate, 'd/m/Y'). "</td><td class='text-center'>".date_format($outdate, 'H.i')." น.</td>";
            // echo"</tr>";

?>