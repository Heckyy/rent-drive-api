<?php
namespace controllers;
use DB;
use models\carModel;
require_once __DIR__ . "/../core/Database.php";
require_once __DIR__."/../models/carModel.php";
class car
{
    public  function cars()
    {
        $cars = new carModel();
        $datas = $cars->geData();
        if($datas !=NULL){
             $result=[
                "status"=>"success",
                "message"=>"Get Data Completed",
                "datas"=>$datas
            ];
        }else{
             $result=[
                "status"=>"success",
                "message"=>"Get Data Failed"

            ];
        }
        echo json_encode($result,JSON_PRETTY_PRINT);
    }
    public function store()
    {
        if($_SERVER['REQUEST_METHOD']==="POST"){
        $customer = $_POST['customer'];
        $uuid_car = $_POST['id_car'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $carModel = new carModel();
        $result = $carModel->storeData($customer,$uuid_car,$start_date,$end_date);
        if($result==true){
            $response = [
                "status"=>"success",
                "message"=>"Anda berhasil memasukan data!"
            ];
        }else{
            $response = [
                "status"=>"failed",
                "message"=>"Anda Gagal Memasukan Data!"
            ];
        }

        }else{
            $response=[
                "status"=>"403",
                "message"=>"Mehthod Not Allowed"
            ];

        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
    public function update($id)
    {
        echo "ini halaman update";
    }
    public function delete($id)
    {
        $id = $id;
        $deleteCar = new carModel();
        $result = $deleteCar->deleteData($id);

        if($result==true){
        $response = [
            "status" => 'success',
            "message" => "Anda Berhasil Menghapus Data!"
        ];
        }else{
            $response = [
                "status" => 'failed',
                "message" => "Anda Gagal Menghapus Data!"
            ];
        }
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
}