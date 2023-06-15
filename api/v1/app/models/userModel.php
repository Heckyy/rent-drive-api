<?php

namespace models;
require_once __DIR__ . "/../core/Database.php";


class user
{
    public function login(string $username,string $password){
    // get data user from table customer
        $passwordHash = md5($password);
        $db= new \DB();
        $query = "SELECT * FROM customer where username='{$username}' and password = '{$passwordHash}'";
        $result = mysqli_fetch_assoc($db->selectAll($query));
        return  $result;
    }

    public function register(array $datas):bool{
        $idCustomer = uniqid();
        $idCard = $datas['idCard'];
        $firstName = $datas['firstName'];
        $lastName = $datas['lastName'];
        $birthDate = $datas['birthDate'];
        $address = $datas['address'];
        $city = $datas['city'];
        $username = $datas['username'];
        $password = $datas['password'];
        $passwordHash = md5($password);

        $db = new \DB();
        $queryInsert= "INSERT INTO customer SET id_customer ='{$idCustomer}',id_card='{$idCard}',first_name='{$firstName}',last_name='{$lastName}',birth_date='{$birthDate}',address='{$address}',city='{$city}',username='{$username}', password='{$passwordHash}'";
        try {
            $db->insert($queryInsert);
            $response = true;
        }catch (\Exception $e){
            return $e->getMessage();
            $response = false;
        }
return $response;

    }

}