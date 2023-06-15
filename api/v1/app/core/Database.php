<?php

class DB
{
    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $database = "rent_api";

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
public  function delete($query):bool{
    $result = mysqli_query($this->conn,$query);
    if(mysqli_affected_rows($this->conn)){
    return true;
    }else{
        return false;
    }
}

public function update($query){

    try {
    $result = mysqli_query($this->conn,$query);
    return $result;
    }catch (Exception $e){
       return $e->getMessage();
    }
}
function insert($query){

    try {
        $result = mysqli_query($this->conn,$query);
    }catch (Exception $exception){
        $result = $exception->getMessage();
    }
//
    return $result;

}
}
