<?php

class User{
    private $username;
    private $email;
    private $password;
    private $connected;
    private $connection;
    private $table = 'user';
    function __construct($connection){

        $this->connection = $connection;
    }
    function get($by = NULL,$search = NULL){
        $conn = $this->connection;
        $searchBy = ($by == NULL) ? "":"WHERE `$by`='$search'";
        $result = $conn->query("SELECT * FROM `$this->table` " . $searchBy);
        return $result->fetch();
    }
    function insert($name,$email,$password){
        $conn = $this->connection;
        
        if ($conn->query("INSERT INTO `$this->table` (`username`, `email`, `password`)
        VALUES ('$name', '$email',sha1('$password'))")){
            echo "Record user successfully";
        } else {
            echo "Error user record: " . $conn->error;
        }
        
    }
    function change($id,$type,$change){
        $conn = $this->connection;

        if ($conn->query("UPDATE `$this->table` SET `$type`='$change' WHERE `id`=$id")){
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    function session($id, $connection){
        $conn = $this->connection;

        if ($conn->query("UPDATE `$this->table` SET `connected`='$connection' WHERE `id`='$id'")){
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }

    }

}