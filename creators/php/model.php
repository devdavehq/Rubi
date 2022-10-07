<?php

    session_start();
    class Database{

       public $conn;

        public function __construct()
        {
            try {
                $this->conn = new PDO('mysql:host=localhost; dbname=rubi', 'root', '');
                // echo 'db connected successfully';
            } catch (PDOException $e) {
                echo 'ERROR:'.$e->getMessage();
            }

            return $this->conn;
        }


        
       public function validateInputs($data)
       {
            $data = htmlspecialchars($data);
            $data = stripslashes($data);
            $data = trim($data);
            return $data;
       }





    }