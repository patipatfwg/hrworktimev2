<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
// database connection will be here
// include database and object files
include_once '../config/database.php';
include_once '../objects/Worktime.php';
 
// instantiate database and car object
$database = new Database();
$db = $database->getConnection();
 
// initialize object
$worktime = new Worktime($db);
 
// read car will be here
// query car
$stmt = $worktime->read();
$num = $stmt->rowCount();
 
// check if more than 0 record found
if($num>0){
 
    // car array
    $a_arr=array();
    $a_arr["records"]=array();
 
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
 
        $worktime_item=array(
            "employee_id" => $employee_id,
            "in_time" => $in_time,
            "out_time" => $out_time,
            "name_prefix_th" => $name_prefix_th,
            "first_name_th" => $first_name_th,
            "last_name_th" => $last_name_th
        );
 
        array_push($a_arr["records"], $worktime_item);
    }
 
    // set response code - 200 OK
    http_response_code(200);
 
    // show car data in json format
    echo json_encode($a_arr);

}else{
 
// no car found will be here

    // set response code - 404 Not found
    http_response_code(404);
 
    // tell the user no car found
    echo json_encode(
        array("message" => "Not found.")
    );
}
