<?php
    class Book {
        private $connection;
        private $tableName = 'livros';
        public $conn;
        public $name;
        public $date;

        public function __construct($db) {
            $this->conn = $db;
        }

        function create() {
            $query = "INSERT INTO $this->tableName SET name=:name, date=:date";
            $stmt = $this->conn->prepare($query);

            $this->name=htmlspecialchars(strip_tags($this->name));
            $this->date=htmlspecialchars(strip_tags($this->date));

            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':date', $this->date);

            if($stmt->execute()){
                return true;
            }

            return false;
        }

        function read() {
            $query = "SELECT * FROM $this->tableName ORDER BY id DESC";
            $stmt = $this->conn->prepare($query);

            $stmt->execute();

            return $stmt;
        }

    }
?>
