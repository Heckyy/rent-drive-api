<?php

class App
{

    public $method = "index";
    public $controller = "car";
    public $params = [];
    public function __construct()
    {

        $url = $_GET['url'];
//        var_dump($url);
//        die();

        // Explode url in to array
        $explode_url = explode("/", $url);


        // Get controller
        if ($explode_url[0]!=NULL){
            $this->controller = $explode_url[0];
            unset($explode_url[0]);
        }

//        require_once  __DIR__."/../controllers/car.php";
        require_once "app/controllers/user.php";
        require_once "app/controllers/car.php";
        require_once "app/controllers/transaction.php";
        require_once "app/controllers/payment.php";



        if($this->controller=="car"){
            $this->controller = new \controllers\car();
        }else if ($this->controller=="user"){
            $this->controller = new \controllers\user();
        }else if ($this->controller=="transaction"){
            $this->controller = new transaction();
        }else{
            $this->controller = new \controllers\payment();
        }


        if($explode_url[1]!=NULL){
            $this->method = $explode_url[1];
            unset($explode_url[1]);
        }
        if(!empty($explode_url)){
            $this->params = array_values($explode_url);
        }

            call_user_func_array([$this->controller, $this->method], $this->params);

        }

}
