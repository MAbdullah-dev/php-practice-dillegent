<?php
class Database {
    private $conn;

    public function __construct($servername, $username, $password, $db_name) {
        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function executeQuery($query) {
        try {
            $stmt = $this->conn->query($query);
            return $stmt;
        } catch(PDOException $e) {
            echo "Query execution failed: " . $e->getMessage();
            return false;
        }
    }
}

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "laracast";

// Create a new instance of the Database class
$database = new Database($servername, $username, $password, $db_name);
?>
