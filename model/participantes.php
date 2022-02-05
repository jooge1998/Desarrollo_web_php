<?php

include_once "crud.php";

$crud = new Crud();

$crud->create();

$crud->create();


$cont = 1;
#recorre todos los datos en la base de datos
foreach ($crud->getAll() as $key => $value) {
    
    echo "<tr>";
    echo  "<th scope='row'>".$cont."</th>";
    echo  "<td >" . $value->NOMBRE . "</td>";
    echo  "<td >" . $value->CARGO . "</td>";
    echo  "<td >" . $value->CONTACTO . "</td>";
    echo  "<td >" . $value->COMPROMISO . "</td>";
    echo  "<td >" . $value->RESPONSABILIDADES . "</td>";
    echo "</tr>";
    $cont++;

   
}


/* print($_POST['name']);
print($_POST['cargo']);
print($_POST['contacto']);
print($_POST['compromiso']);
print($_POST['responsabilidad']); */
