<?php

include_once "actas.php";

$crud = new Actas();


if(isset($_GET['editar']) and isset($_GET['id']) ){

    $crud->update($_GET['id']);
    header('Location: ../actas.php');
}

if(isset($_GET['create']) and isset($_GET['id']) ){
    $crud->create();
    header('Location: ../actas.php');
} 

 if(isset($_GET['action']) == 'delete' and isset($_GET['id'])){

    echo "delete";
    $crud->delete($_GET['id']);
    header('Location: ../actas.php');

}












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
