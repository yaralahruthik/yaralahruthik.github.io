<?php
define("SERVERNAME", "45.127.101.117");
define("DBNAME", "sunny");
define("UNAME", "ccms");
define("PASSWORD", "ghmc@789*$#$");

class MyConn {
public $conn;

    function connect() {
        try {
            $this->conn = new PDO("mysql:host=" . SERVERNAME . ";dbname=" . DBNAME, UNAME, PASSWORD);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo 'Connected';
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    function disconnect() {
        try {
            $this->conn = null; //Closes connection
            // echo 'DisConnected';
        } catch (PDOException $ex) {
            //file_put_contents("log/dberror.log", "Date: " . date('M j Y - G:i:s') . " ---- Error: " . $e->getMessage().PHP_EOL, FILE_APPEND);
            die($ex->getMessage());
        }
    }

}

?>