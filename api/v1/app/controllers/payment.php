<?php

namespace controllers;
require_once __DIR__."/../models/paymentModel.php";

class payment
{

    public  function info(){
        $idTransaction = $_POST['idTransaction'];
        $objPayment= new \models\payment();
         echo json_encode($objPayment->getInfo($idTransaction),128);
    }

    public function get(){
        $username = $_POST['username'];
        $objPayment = new \models\payment();
        $result  = $objPayment->getId($username);
        echo json_encode($result,128);
    }

    public function payment(){
        $idTransaction = $_POST['idTransaction'];
        $objPayment = new \models\payment();
        if ($objPayment->payment($idTransaction) == true){
            $response = [
                "status"=>"success",
                "message"=>"Anda Berhasil Membayar Transaksi " . $idTransaction
            ];
        }else{
            $response = [
                "status"=>"success",
                "message"=>"Anda Gagal Transaksi " . $idTransaction
            ];
        }
        echo json_encode($response,128);
    }
}