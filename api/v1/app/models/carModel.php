<?php

namespace models;
require_once  __DIR__."/../core/Database.php";

class carModel
{

    public function geData(){
        $db = new \DB();

    }

    public function storeData(string $customer_id,string $uuid_car,string $start_date,string $end_date,string $created_date,string $updated_date)
    {
        $db = new \DB();

//
        $query = "INSERT INTO transaction SET uuid_customer='{$customer_id}',uuid_car= '{$uuid_car}',start_date='{$start_date}',end_date='{$end_date}',uuid_transaction='asdasd3r322'";
//        $query = "INSERT INTO transaction SET uuid_customer='".$customer_id."'";

        try {
            $result = $db->insert($query);

        }catch (\Exception $e){
            $result = $e->getMessage();
        }
        return $result;


    }

}