<?php
    class User{
        // Connection
        private $conn;
        // Table
        private $db_table = "users";
        // Columns
        public $id;
        public $name;
        public $email;
        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }
        // GET ALL
        public function getUsers(){
            $sqlQuery = "SELECT id, name, email  FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }
        // CREATE
        public function createUser(){
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        name = :name, 
                        email = :email";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // bind data
            $stmt->bindParam(":name", $this->name);
            $stmt->bindParam(":email", $this->email);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
        //  single
        public function getSingleUser(){
            $sqlQuery = "SELECT
                        id, 
                        name, 
                        email 
                      FROM
                        ". $this->db_table ."
                    WHERE 
                       id = ?
                    LIMIT 0,1";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(1, $this->id);
            $stmt->execute();
            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->name = $dataRow['name'];
            $this->email = $dataRow['email'];
        }        
       
    }
?>