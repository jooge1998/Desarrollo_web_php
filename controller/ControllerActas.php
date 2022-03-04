
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

        header('location: /desarrollo_Web_php/index.php');
    }

}

public function Delete(){

    require_once  ("/xampp/htdocs/desarrollo_Web_php/Model/actas.php");

    $actas = new Actas();

    #verifica si hay una solicitud de tipo de get
    if(isset($_GET['id'])){
        #llama al metodo delete delete
        $actas->delete($_GET['id']);

        header('location: /desarrollo_Web_php/index.php');
    }
}

public function Read(){
    require_once  ("/xampp/htdocs/desarrollo_Web_php/Model/actas.php");

    $actas = new Actas();

    $i = 1;
    #recorre todos los datos en la base de datos
    
    foreach ($actas->getAll() as $key => $value) {

      echo 
      "<tr><td>" . $i . "</td>"
      . "<td>" . $value->TEMA . "</td>"
      . "<td>" . $value->CITADA_POR . "</td>"
      . "<td>" . $value->HORA_INICIO . "</td>"
      . "<td>" . $value->HORA_FIN . "</td>"
      . "<td>" . $value->FECHA . "</td>"
      . "<td>" . $value->PRESIDENTE . "</td>"
      . "<td>" . $value->LUGAR . "</td>"
      . "<td>" . $value->ORDEN_DIA . "</td>" 
      . "<td>
       <div class='d-flex justify-content-center'>

      <a href='/desarrollo_web_php/ruteador.php?controller=actas&action=delete&id=$value->N_ACTA' class='btn btn-danger mx-2'>ELIMINAR</a> 

      <a href='/desarrollo_web_php/ruteador.php?controller=actas&action=update&id=$value->N_ACTA' class='btn btn-primary mx-2' > EDITAR</a>

      <a href='/desarrollo_web_php/ruteador.php?controller=actas&action=viewRead&id=$value->N_ACTA' 
      class='btn btn-success'>Ver</a> 
    
      </div>
      </td></tr>";
      $i++;
  }
}



public function ViewRead(){
    require_once  ("/xampp/htdocs/desarrollo_Web_php/Model/actas.php");
    require_once  ("/xampp/htdocs/desarrollo_Web_php/Model/participantes.php");

    $actas = new Actas();

    $participantes = new Participantes();

    require_once  ("/xampp/htdocs/desarrollo_Web_php/View/Viewactas.php");

}


public function Update(){

    require_once  ("/xampp/htdocs/desarrollo_Web_php/Model/actas.php");

    $actas = new Actas();

    #verifica si hay una solicitud de tipo de get
    if(isset($_POST['Editar'])){
        #llama al metodo delete delete
        $actas->update($_GET['id']);

        header('location: /desarrollo_Web_php/index.php');
    }else{
        
        $id = $_GET['id'];

       require_once "/xampp/htdocs/desarrollo_Web_php/View/actas.php";

    }
    
}

}