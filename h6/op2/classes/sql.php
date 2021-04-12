<?php
    class Database {
        private $conn = "";
        private $stmt = "";
    
        public function __construct() {
            $db = "logins";
            $DB_HOST = "localhost";
            $DB_USERNAME = "root";
            $DB_PASSWORD = "kekvile";
            $DB_DATABASE = $db;
            $this->conn = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);
            if (mysqli_connect_errno()) {
                printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
            }
        }
    
        public function query($query) {
            $this->stmt = $query;
            return $this->conn->query($query);
        }
    
        public function getLastQuery() {
            return $this->stmt;
        }
    }
?>