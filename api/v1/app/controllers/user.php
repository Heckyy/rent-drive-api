<?php

namespace controllers;
require_once  __DIR__."/../core/Database.php";
require_once __DIR__."/../models/userModel.php";
class user
{

    public function login(){
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $username= $_POST['username'];
            $password= $_POST['password'];
            $login = new \models\user();
            $response = $login->login($username,$password);
            if ($response ==true){
                $result=[
                    "status"=>"success",
                    "message"=>"login success"

                ];
            }else{
                $result=[
                    "status"=>"failed",
                    "message"=>"Username Atau Password Yang Anda Masukan Salah"
                ];
            }
        }else{
            $result = [
                "status"=>"login failed",
                "message"=>"method not allowed"
            ];
        }
        echo json_encode($result,JSON_PRETTY_PRINT);
    }

    public function user(){
        $username = $_POST['username'];
        $db = new \DB();
        $query= "SELECT * from customer where username='{$username}'";
        $getUser = $db->selectAll($query);
        $resultUser = mysqli_fetch_assoc($getUser);
        echo json_encode($resultUser, JSON_PRETTY_PRINT);
    }
    public function register(){
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $idCard = $_POST['idCard'];
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $birthDate = $_POST['birthDate'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $data =[
                "idCard"=>$idCard,
                "firstName"=>$firstName,
                "lastName"=>$lastName,
                "birthDate"=>$birthDate,
                "address"=>$address,
                "city"=>$city,
                "username"=>$username,
                "password"=>$password,
            ];

            $objRegister= new \models\user();
            $result=$objRegister->register($data);
            if($result == true){
                $response = [
                    "status"=>"success",
                    "message"=>"Anda Berhasil Mendaftar"
                ];
            }else{
                $response = [
                    "status"=>"failed",
                    "message"=>"Anda Gagal Mendafta"
                ];
            }

        }else{
            $response = [
                "status"=>"failed",
                "message"=>"Method Not Allowed"
            ];
        }

        echo json_encode($response,JSON_PRETTY_PRINT);


    }

}