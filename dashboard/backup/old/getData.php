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

    if($_GET['in_date']==''){
        $indate = date("Y-m-d");
        $outdate = date("Y-m-d");
        $in_date = $indate." 00:00:00";
        $out_date = date("Y-m-d")." 23:59:59";
    }
    else if($_GET['out_date']!=''){
        $indate =$_GET['in_date'];
        $outdate =$_GET['out_date'];
        $in_date = $indate." 00:00:00";
        $out_date = $outdate." 23:59:59";
    }else if($_GET['out_date']==''){
        $in_date = $indate." 00:00:00";
        $out_date = $outdate." 23:59:59";
    }

    $sql = "SELECT employee.name_prefix_th,employee.first_name_th,employee.last_name_th,worktime.employee_id,worktime.in_time,worktime.out_time FROM hrservices.worktime INNER JOIN hrservices.employee ON worktime.employee_id = employee.id WHERE worktime.in_time >= '$in_date' AND worktime.out_time <= '$out_date' LIMIT 20";
    //echo $sql;
    $result = $conn->query($sql);
// 
// 
// 
    if ($result->num_rows > 0) {

        $resultArray = array();

        while($row = $result->fetch_assoc()) {
            
            array_push($resultArray,$row);

            // $indate = date_create($row["in_time"]);
            // $outdate = date_create($row["out_time"]);
            // echo"<tr>";   
            // echo "<td class='text-center'> " .$row["employee_id"]. " </<td><td> " . $row["name_prefix_th"].$row["first_name_th"]." ".$row["last_name_th"]. " </td><td class='text-center'> " .date_format($indate, 'd/m/Y'). " </td><td class='text-center'>".date_format($indate, 'H.i')."   น.</td><td class='text-center'> " .date_format($outdate, 'd/m/Y'). "</td><td class='text-center'>".date_format($outdate, 'H.i')." น.</td>";
            // echo"</tr>";
            
        }
        
    } else {

        $status = 0;

    }
    
    echo json_encode($resultArray);

    $conn->close();



?>