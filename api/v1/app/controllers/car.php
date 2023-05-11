<?php

namespace controllers;

use DB;
use models\carModel;

require_once __DIR__ . "/../core/Database.php";
require_once __DIR__."/../models/carModel.php";


class car
{

    public  function index()
    {
//        new DB();
//        $response = [
//            "status"=>"success",
//            "message"=>"Anda Berhasil"
//        ];
//        echo json_encode($response,JSON_PRETTY_PRINT);
    }

    public function store()
    {
        $customer = $_POST['customer'];
        $uuid_car = $_POST['uuid_car'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $created_date = $_POST['created_date'];
        $updated_date = $_POST['updated_date'];
        $carModel = new carModel();
        $result = $carModel->storeData($customer,$uuid_car,$start_date,$end_date,$created_date,$updated_date);
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
        echo json_encode($response,JSON_PRETTY_PRINT);

    }
    public function update($id)
    {
        echo "ini halaman update";
    }
    public function delete($id)
    {
        $response = [
            "status" => 'success',
            "message" => "delete is success"
        ];
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
}
