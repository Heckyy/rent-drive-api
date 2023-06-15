<?php
use DB;
use models\carModel;
require_once __DIR__ . "/../core/Database.php";
require_once __DIR__."/../models/carModel.php";
require_once __DIR__."/../models/transactionModel.php";
class transaction{
    public function transaction(){
        $username = $_POST['username'];
        $transactionObj = new \models\transaction();
        $result = $transactionObj->getData($username);
        if($_SERVER['REQUEST_METHOD']=="POST"){
            if($result !=NULL){
               $response = $result;
            }else{
                 $response=[
                    "data"=>"null"
                    ];
            }
        }else{
            $response = [
                "status"=>"Access Denied",
                "message"=>"Method Not Allowed"
            ];
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
    public function store(){
        if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_POST['name'];
        $carId = $_POST['carId'];
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];
        $status = "Booked";
        $data = [
            "name"=>$name,
            "carId"=>$carId,
            "startDate"=>$startDate,
            "endDate"=>$endDate,
            "status"=>$status,
        ];
        $transactionObj =  new \models\transaction();
        $result = $transactionObj->storeTransaction($data);
        if($result==true){
            $response = [
                "status"=>"success",
                "message"=>"Anda Berhasil Melakukan Booking!"
            ];
        }else{
            $response = [
                "status"=>"failed",
                "message"=>"Anda Gagal Melakukan Booking!"
            ];
        }
        }else{
            $response = [
                "status" => "failed",
                "message"=>"method not allowed"
            ];
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
    public function delete(){
        $params =explode("/",$_GET['url']);
        $idTransaction = $params[2];
        $objTransaction = new \models\transaction();
        if ($objTransaction->deleteData($idTransaction)==true){
            $response = [
                "status"=>"Success",
                "message"=>"Anda Berhasil Menghapus Transaksi {$idTransaction}! "
            ];
        }else{
            $response = [
                "status"=>"Failed",
                "message"=>"Anda Gagal Menghapus Transaksi {$idTransaction}! "
            ];
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
    public function select(){
        $url = explode("/",$_GET['url']);
        $idTransaction = $url['2'];
        $objTransaction = new \models\transaction();
        $result = $objTransaction->selectData($idTransaction);
        echo json_encode($result,JSON_PRETTY_PRINT);
    }

    public function edit(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $idTransaction = $_POST['idTransaction'];
            $name = $_POST['name'];
            $carId = $_POST['carId'];
            $startDate = $_POST['startDate'];
            $endDate = $_POST['endDate'];
            $data =[
                "idTransaction"=>$idTransaction,
                "name"=>$name,
                "carId"=>$carId,
                "startDate"=>$startDate,
                "endDate"=>$endDate,
            ];
            $objTransaction = new \models\transaction();
            $result = $objTransaction->updateData($data);
            if($result == true){
                $response = [
                    "status"=>"success",
                    "message"=>"Anda Berhasil Update Booking!"
                ];
            }else{
                $response = [
                    "status"=>"failed",
                    "message"=>"Anda Gaga; Update Booking!"
                ];
            }

        }else{
            $response=[
                "status"=>"failed",
                "message"=>"method not allowed"
            ];
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}