
<?php

    class Database {
        private $host = "localhost";

        private $dsn = "mysql:host=localhost;dbname=cocheradbultimate";
        private $db_name = "cocheradbultimate";
        private $username = "root";
        private $password = "";
        public $conn;
    
        public function getConnection() {
            $this->conn = null;
            try {
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
                $this->conn->exec("set names utf8");
            } catch(PDOException $exception) {
                echo "Error de conexión: " . $exception->getMessage();
            }
            return $this->conn;
        }
    }
    
    ?>
    