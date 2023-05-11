<?php

class Controller
{
    public function view($view, ?array $data)
    {
        require_once __DIR__ . "/../views/" . $view . ".php";
    }
    public function model(string $model)
    {
        require_once __DIR__ .  "/../models/" . $model . ".php";
    }
}
