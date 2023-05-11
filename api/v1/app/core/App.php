<?php

class App
{

    public $method = "index";
    public $controller = "car";
    public $params = [];
    public function __construct()
    {

        $url = $_GET['url'];

        // Explode url in to array
        $explode_url = explode("/", $url);


        // Get controller
        if ($explode_url[0]!=NULL){
            $this->controller = $explode_url[0];
            unset($explode_url[0]);
        }

//        require_once  __DIR__."/../controllers/car.php";
        require_once "app/controllers/car.php";


        $this->controller =  new \controllers\car();

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
