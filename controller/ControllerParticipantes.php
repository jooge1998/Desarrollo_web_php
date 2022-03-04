
<?php

class ControllerParticipantes{

#crea un nuevo cliente
public function Create(){
    
    require_once  ("/xampp/htdocs/desarrollo_Web_php/Model/participantes.php");

    $participantes = new Participantes();

    #verifica si el boton agregar con el name salvar fue presionado
    if(isset($_POST['btn'])){
        #llama al metodo create
        $participantes->create();

        header('location: /desarrollo_Web_php/View/participantes.php');
    }

}

public function Delete(){

    require_once  ("/xampp/htdocs/desarrollo_Web_php/Model/participantes.php");

    $participantes = new Participantes();

    #verifica si hay una solicitud de tipo de get
    if(isset($_GET['id'])){
        #llama al metodo delete delete
        $participantes->delete($_GET['id']);

        header('location: /desarrollo_Web_php/View/participantes.php');
    }
}

public function Read(){
    require_once  ("/xampp/htdocs/desarrollo_Web_php/Model/participantes.php");

    $participantes = new Participantes();

    #recorre todos los datos en la base de datos
    foreach ($participantes->getAll($id) as $key => $value) {

       
      echo  "<tr><td>
      <input type='checkbox' name='usuario_id[]' value='$value->USUARIO_ID'>
       </td>";
      echo  "<td >" . $value->NOMBRE . "</td>";
      echo  "<td >" . $value->CARGO . "</td>";
      echo  "<td >" . $value->CONTACTO . "</td>";
      echo  "<td>
      <div class='d-flex justify-content-center'>

      <a href='/desarrollo_web_php/ruteador.php?controller=participantes&action=delete&id=$value->USUARIO_ID' class='btn btn-danger mx-2'>ELIMINAR</a> 

      <a class='btn btn-primary'  data-bs-toggle='modal' data-bs-target='#staticBackdrop'> EDITAR</a>



      </div>
      </td>";
      echo "</tr>";
  }
}


public function Update(){

    require_once  ("/xampp/htdocs/desarrollo_Web_php/Model/participantes.php");

    $participantes = new Participantes();

    #verifica si hay una solicitud de tipo de get
    if(isset($_POST['Editar'])){
        #llama al metodo delete delete
        $participantes->update($_GET['id']);

        header('location: /desarrollo_Web_php/View/participantes.php');
    }
    
}

}