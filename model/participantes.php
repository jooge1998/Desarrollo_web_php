<?php

include_once "crud.php";

$crud = new Crud();

$crud->create();

$cont = 1;
#recorre todos los datos en la base de datos
foreach ($crud->getAll() as $key => $value) {

    $datos = array(
        "name" =>  $value->NOMBRE,
        "cargo" => $value->CARGO,
        "contacto" => $value->CONTACTO,
        "compromiso" => $value->COMPROMISO,
        "responsabilidad" => $value->RESPONSABILIDADES,
);

$json = json_encode($datos);
    
}

echo $json;

/* print($_POST['name']);
print($_POST['cargo']);
print($_POST['contacto']);
print($_POST['compromiso']);
print($_POST['responsabilidad']); */
