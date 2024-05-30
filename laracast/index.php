<?php
session_start();

require_once './router/Router.php';

use \router\Routers;

$routers = new Routers();

$routes=require('./routes.php');

$url = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];



$routers->route($url,$method);





















// class Database {
//     private $conn;

//     public function __construct($servername, $username, $password, $db_name) {
//         try {
//             $this->conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
//             $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         } catch(PDOException $e) {
//             echo "Connection failed: " . $e->getMessage();
//         }
//     }

//     public function executeQuery($query) {
//         try {
//             $stmt = $this->conn->query($query);
//             return $stmt;
//         } catch(PDOException $e) {
//             echo "Query execution failed: " . $e->getMessage();
//             return false;
//         }
//     }
// }

// // Example usage:
// $servername = "localhost";
// $username = "root";
// $password = "";
// $db_name = "laracast";

// // Create a new instance of the Database class
// $database = new Database($servername, $username, $password, $db_name);

// // Example query
// // dd($_GET);
// // $id=$_GET['uri'];
// $query = "SELECT * FROM `laracasts note app`";
// $stmt = $database->executeQuery($query);

// if ($stmt) {
//     while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//         print_r($row); // Display data or perform further operations
//     }
// } else {
//     echo "Query failed";
// }





//  class person{
//     public $name;
//     public $age;

//     public function breathe()
//     {
//         echo $this->name. "is breathing";
//     }
//  }
//  $person=new person();
//  $person->name="john doe";

//  $person->age=20;

// $person->breathe();

