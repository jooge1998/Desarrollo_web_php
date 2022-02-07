<?php

include_once "crud.php";

$crud = new Crud();

$crud->create();

header('Location: ../actas.php');




/* print($_POST['tema'] . "</br>");
print($_POST['citada']. "</br>");
print($_POST['hora_inicio']. "</br>");
print($_POST['hora_fin']. "</br>");
print($_POST['fecha']. "</br>");
print($_POST['presidente']. "</br>");
print($_POST['participantes']. "</br>"); */
    

/* print($_POST['name']);
print($_POST['cargo']);
print($_POST['contacto']);
print($_POST['compromiso']);
print($_POST['responsabilidad']); */
