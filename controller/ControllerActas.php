
<?php

class ControllerActas{

#crea un nuevo cliente
public function Create(){
    
    require_once  ("/xampp/htdocs/desarrollo_Web_php/Model/actas.php");

    $actas = new Actas();

    #verifica si el boton agregar con el name salvar fue presionado
    if(isset($_POST['btn'])){
        #llama al metodo create
        $actas->create();

        header('location: /desarrollo_Web_php/View/actas.php');
    }

}

public function Delete(){

    require_once  ("/xampp/htdocs/desarrollo_Web_php/Model/actas.php");

    $actas = new Actas();

    #verifica si hay una solicitud de tipo de get
    if(isset($_GET['id'])){
        #llama al metodo delete delete
        $actas->delete($_GET['id']);

        header('location: /desarrollo_Web_php/View/actas.php');
    }
}

public function Read(){
    require_once  ("/xampp/htdocs/desarrollo_Web_php/Model/actas.php");

    $actas = new Actas();

    $i = 1;
    #recorre todos los datos en la base de datos
    
    foreach ($actas->getAll() as $key => $value) {

      echo "<tr>";
      echo  "<td >
      <a href='/desarrollo_web_php/ruteador.php?controller=actas&action=viewRead&id=$value->N_ACTA'' class='btn btn-success'>v</a> 
      </td>";
      echo  "<td >" . $value->TEMA . "</td>";
      echo  "<td >" . $value->CITADA_POR . "</td>";
      echo  "<td >" . $value->HORA_INICIO . "</td>";
      echo  "<td >" . $value->HORA_FIN . "</td>";
      echo  "<td >" . $value->FECHA . "</td>";
      echo  "<td >" . $value->PRESIDENTE . "</td>";
      echo  "<td >" . $value->LUGAR . "</td>";
      echo  "<td >" . $value->COMPROMISOS . "</td>";

      echo  "<td>
      <div class='d-flex justify-content-center'>

      <a href='/desarrollo_web_php/ruteador.php?controller=actas&action=delete&id=$value->N_ACTA' class='btn btn-danger mx-2'>ELIMINAR</a> 

      <a class='btn btn-primary' onclick='enviar($i)' data-bs-toggle='modal' data-bs-target='#staticBackdrop'> EDITAR</a>

      </div>
      </td>";
      echo "</tr>";
      $i++;
  }
}



public function ViewRead(){
    require_once  ("/xampp/htdocs/desarrollo_Web_php/Model/actas.php");
    #header('location: /desarrollo_Web_php/View/Viewactas.php');

    $actas = new Actas();

    require_once  ("/xampp/htdocs/desarrollo_Web_php/View/Viewactas.php");

}


public function Update(){

    require_once  ("/xampp/htdocs/desarrollo_Web_php/Model/actas.php");

    $actas = new Actas();

    #verifica si hay una solicitud de tipo de get
    if(isset($_POST['Editar'])){
        #llama al metodo delete delete
        $actas->update($_GET['id']);

        header('location: /desarrollo_Web_php/View/actas.php');
    }
    
}

}