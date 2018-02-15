<?php 

    Class Car{
        static public function find(){
            $server = 'localhost';
            $user = 'root';
            $pass = 'root';
            $db = 'phpcrud';
            $sql_conn = new mysqli($server, $user, $pass, $db);
            if($sql_conn->connect_error){
                $sql_conn->close();
                die('Connection Failed: ' . $sql_conn->connect_error);
            }else{
                $query = "SELECT * FROM cars;";
                $results = $sql_conn->query($query);
                return $results;
            }
        }
        static public function create($car, $owner){
            $server = 'localhost';
            $user = 'root';
            $pass = 'root';
            $db = 'phpcrud';
            $sql_conn = new mysqli($server, $user, $pass, $db);
            if($sql_conn->connect_error){
                $sql_conn->close();
                die('Connection Failed: ' . $sql_conn->connect_error);
            }else{
                $query = "INSERT INTO cars (car, owner) VALUES ('" . $car . "','" . $owner . "');";
                $sql_conn->query($query);
            }

        }
    }
?>