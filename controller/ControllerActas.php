
<?php

class ControllerActas{

#crea un nuevo cliente
public function Create(){
    
    require_once  ("/xampp/htdocs/desarrollo_Web/Model/actas.php");

    $actas = new Actas();

    #verifica si el boton agregar con el name salvar fue presionado
    if(isset($_POST['salvar'])){
        #llama al metodo create
        $clientes->create();

        header('location: /dasboard/View/Clientes.php');
    }

}

public function Delete(){

    require_once  ("/xampp/htdocs/dasboard/Model/Clientes.php");

    $clientes = new Clientes();

    #verifica si hay una solicitud de tipo de get
    if(isset($_GET['id'])){
        #llama al metodo delete delete
        $clientes->delete($_GET['id']);

        header('location: /dasboard/View/Clientes.php');
    }
}

public function Read(){
    require_once  ("/xampp/htdocs/dasboard/Model/Clientes.php");

    $clientes = new Clientes();

  

    $cont = 1;
    #recorre todos los datos en la base de datos
    foreach ($clientes->getAll() as $key => $value) {
        
        $datos = array("name" => $value->NOMBRE,
                    "address"=> $value->DIRECCION,
                    "email" => $value->EMAIL,
                "cel" => $value->CEL,
            "id" =>$value->ID);

        $json = json_encode($datos);

        echo "<tr>";
        echo  "<th scope='row'>".$cont."</th>";
        echo  "<td >" . $value->NOMBRE . "</td>";
        echo  "<td >" . $value->DIRECCION . "</td>";
        echo  "<td >" . $value->EMAIL . "</td>";
        echo  "<td >" . $value->CEL . "</td>";
        echo  "<td>
        <div class='d-flex justify-content-center'>
        <a href='/dasboard/View/Login.php?controller=Cliente&action=delete&id=$value->ID' class='btn btn-danger mr-1'>ELIMINAR</a> 
         
        <a class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#staticBackdrop1' onclick='enviar( $json)'> EDITAR</a>
        </div>
        </td>";
        echo "</tr>";
        $cont++;

       
    }
}


public function Update(){

    require_once  ("/xampp/htdocs/dasboard/Model/Clientes.php");

    $clientes = new Clientes();

    #verifica si hay una solicitud de tipo de get
    if(isset($_POST['editar'])){
        #llama al metodo delete delete
        $clientes->update($_GET['id']);

        header('location: /dasboard/View/Clientes.php');
    }
    
}

}