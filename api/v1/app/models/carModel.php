<?php

namespace models;
require_once  __DIR__."/../core/Database.php";

class carModel
{

    public function geData(){
        $db = new \DB();

    }

    public function storeData(string $customer_id,string $uuid_car,string $start_date,string $end_date)
    {
        $db = new \DB();

//
        $query = "INSERT INTO transaction SET id_customer='{$customer_id}',id_car= '{$uuid_car}',start_date='{$start_date}',end_date='{$end_date}',id_transaction='asdasd3r322222'";
//        $query = "INSERT INTO transaction SET uuid_customer='".$customer_id."'";

        try {
            $result = $db->insert($query);

        }catch (\Exception $e){
            $result = $e->getMessage();
        }
        return $result;
    }

    public  function  deleteData($id):bool{

        $db = new \DB();
        $query = "DELETE from transaction WHERE id_transaction='{$id}'";
        $result = $db->delete($query);
        return $result;

    }

}