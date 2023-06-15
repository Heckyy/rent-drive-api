<?php

namespace models;
require_once  __DIR__."/../core/Database.php";


class payment
{
    public function getInfo($idTransaction){

        $idTransaction = $idTransaction;
        $querySelect ="SELECT tb_transaction.id_transaction,tb_transaction.id_customer,tb_transaction.total_bill FROM `tb_transaction` JOIN car ON tb_transaction.id_car = car.id_car where id_transaction='{$idTransaction}'";
        $db = new \DB();
        return mysqli_fetch_assoc($db->selectAll($querySelect));
    }

    public function getId($username){
        $db = new \DB();
        $queryCustomer = "SELECT first_name,last_name from customer where username='{$username}'";
        $resultCustomer = mysqli_fetch_assoc($db->selectAll($queryCustomer));
        $fullname = $resultCustomer['first_name'] . " ".$resultCustomer['last_name'];
        $queryTransaction = "SELECT id_transaction FROM `tb_transaction`  WHERE id_customer = '{$fullname}' and status !='Paid'";
        $results = $db->selectAll($queryTransaction);
        foreach ($results as $result){
            $datas[]=[
               "id" => $result['id_transaction']
            ];
        }
        return $datas;

    }

    public function payment($idTransaction){
        $idTransaction = $idTransaction;
        $db = new \DB();
        $queryUpdate = "UPDATE tb_transaction SET status='Paid' where id_transaction='{$idTransaction}'";
        try {
            $db->update($queryUpdate);
            return true;
        }catch (\Exception $e){
            return $e->getMessage();
        }

    }

}