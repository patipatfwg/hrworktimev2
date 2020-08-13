<?php
class Database{
 
    // specify your own database credentials
    private $host = "52.163.82.249:1178";
    private $db_name = "hrservices";
    private $username = "promptadm";
    private $password = "chee#Mai5";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>
