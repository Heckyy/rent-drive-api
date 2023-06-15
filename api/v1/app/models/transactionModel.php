<?php
namespace models;
use mysql_xdevapi\Exception;

require_once  __DIR__."/../core/Database.php";
class transaction{

    public function getData($data){
//        !SELECT tb_transaction.id_transaction,tb_transaction.id_customer,tb_transaction.id_car,tb_transaction.start_date,tb_transaction.end_date,tb_transaction.total_bill,tb_transaction.status,car.car_name,car.car_merk,car.number_registration,car.number_machine,car.number_chasis,car.price_date FROM `tb_transaction` JOIN car ON tb_transaction.id_car = car.id_car where id_customer='{$data}';
        $db = new \DB();
//        Get Name from customer
        $query_name = "SELECT * from customer where username = '{$data}'";
        $resultName =mysqli_fetch_assoc($db->insert($query_name));
        $firstName = $resultName['first_name'];
        $lastName = $resultName['last_name'];
        $fullName = $firstName . " ".$lastName;
        $query = "SELECT tb_transaction.id_transaction,tb_transaction.id_customer,tb_transaction.id_car,tb_transaction.start_date,tb_transaction.end_date,tb_transaction.total_bill,tb_transaction.status,car.car_name,car.car_merk,car.number_registration,car.number_machine,car.number_chasis,car.price_date,tb_transaction.status FROM `tb_transaction` JOIN car ON tb_transaction.id_car = car.id_car where id_customer='{$fullName}'";
        $results = $db->selectAll($query);
        if(mysqli_num_rows($results)>0){
        foreach ($results as $result)[
            $datas[]=[
                "idTransaction"=>$result['id_transaction'],
                "idCustomer"=>$result['id_customer'],
                "idCar"=>$result['id_car'],
                "startDate"=>$result['start_date'],
                "endDate"=>$result['end_date'],
                "totalBill"=>$result['total_bill'],
                "carName"=>$result['car_name'],
                "carMerk"=>$result['car_merk'],
                "numberRegistration"=>$result['number_registration'],
                "numberMachine"=>$result['number_machine'],
                "numberChasis"=>$result['number_chasis'],
                "priceDate"=>$result['price_date'],
                "status"=>$result['status']
            ]
        ];
        return $datas;
        }else{
            return null;
        }
    }

    public function storeTransaction(array $datas){

        $idTranscation = uniqid();
        $carId = $datas['carId'];
        $name = $datas['name'];
        $startDate1 = $datas['startDate'];
        $endDate2 = $datas['endDate'];
        $status = $datas['status'];
       $db = new \DB();
//       Get price per date car
        $queryCar ="SELECT price_date from car where id_car ='{$carId}'";
        $resultCar = mysqli_fetch_assoc($db->selectAll($queryCar));
//        get how long the day
        $startDate = new \DateTime($datas['startDate']);
        $endDate = new \DateTime($datas['endDate']);
        $intervalDate = $startDate->diff($endDate);
        $resultDate = $intervalDate->days+1;
        if($resultDate == 0 ){
            $totalBill = $resultCar['price_date'];
        }else{
        $totalBill =$resultDate * $resultCar['price_date'];
        }
        $queryStore = "INSERT INTO tb_transaction SET id_transaction='{$idTranscation}',id_customer='{$name}',start_date='{$startDate1}',end_date='{$endDate2}',total_bill='{$totalBill}',status='{$status}',id_car='{$carId}'";
        try {
            $db->insert($queryStore);
            return true;
        }catch (Exception $e){
            return $e->getMessage();
        }

}

        public  function deleteData($data){
        $db = new \DB();
        $query = "DELETE FROM tb_transaction where id_transaction='{$data}'";
        if($db->delete($query)){
        return true;
        }else{
            return false;
        }
    }

    public function selectData($id){
        $db = new \DB();
        $query = "SELECT * FROM tb_transaction where id_transaction = '{$id}'";
        $result= mysqli_fetch_assoc($db->selectAll($query));
        return $result;
    }

    public  function updateData(array $datas):bool{

        $carId = $datas['carId'];
        $name = $datas['name'];
        $startDate1 = $datas['startDate'];
        $endDate2 = $datas['endDate'];
        $status = $datas['status'];
        $idTransaction = $datas['idTransaction'];
        $db = new \DB();
//       Get price per date car
        $queryCar ="SELECT price_date from car where id_car ='{$carId}'";
        $resultCar = mysqli_fetch_assoc($db->selectAll($queryCar));
//        get how long the day
        $startDate = new \DateTime($datas['startDate']);
        $endDate = new \DateTime($datas['endDate']);
        $intervalDate = $startDate->diff($endDate);
        $resultDate = $intervalDate->days+1;
        if($resultDate == 0 ){
            $totalBill = $resultCar['price_date'];
        }else{
            $totalBill =$resultDate * $resultCar['price_date'];
        }

        $queryUpdate = "UPDATE tb_transaction SET id_car ='{$carId}',total_bill='{$totalBill}',start_date='{$startDate1}',end_date='{$endDate2}' WHERE id_transaction='{$idTransaction}'";
         if($db->update($queryUpdate)==true){
             $result = true;
         }else{
             $result = false;
         }
    return $result;


    }
}