<?php

class DB
{
    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $database = "rent_drive";

    public $conn;

public function  __construct()
{
    try {
        $this->conn = mysqli_connect($this->host,$this->username,$this->password,$this->database);


    }catch (Exception $e){
        echo $e->getMessage();
    }
}

public function selectAll($query){
    $result = mysqli_query($this->conn,$query);
    return $result;
}
public function selectWhere($query){
    $result = mysqli_query($this->conn,$query);
    return $result;
}
public  function delete($query){
    $result = mysqli_query($this->conn,$query);
    return $result;
}

public function update($query){
    $result = mysqli_query($this->conn,$query);
    return $result;
}
function insert($query){

    try {
        $result = mysqli_query($this->conn,$query);
    }catch (Exception $exception){
        $result = $exception->getMessage();
    }
    return $result;

}
}
