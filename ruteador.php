<?php


if(isset($_GET['controller']) && isset($_GET['action'])){

    $controller = ucfirst($_GET['controller']);
    $action = ucfirst($_GET['action']);

    $raiz = __DIR__;

    include_once("/xampp/htdocs/desarrollo_Web_php/controller/Controller".$controller . ".php");

    $objController = "Controller" . $controller;

    $controllador = new $objController();

    $controllador->$action();

}else {
    echo "no";
}

