<?php
class Worktime{
 
    // database connection and table name
    private $conn;
    private $table_name = "worktime";
 
    // object properties
    public $id;
    public $employee_id;
    public $in_time;
    public $out_time;

    public $name_prefix_th;
    public $first_name_th;
    public $last_name_th;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read products
    function read(){
    
        // select all query
        //$query = "SELECT * FROM hrservices.worktime INNER JOIN hrservices.employee ON employee_id = employee_id Limit 50";
        $query = "SELECT * FROM worktime Limit 50";
        //$query = "SELECT * FROM hrservices.worktime INNER JOIN hrservices.employee ON worktime.employee_id = employee.employee_id";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }

}
?>
