

<!-- HEADER -->

<?php include_once './View/base/header.php';?>

<!-- CONTENT -->

  <div class="container mt-5 d-flex justify-content-end">

    <a href="/desarrollo_web_php/index.php" data-bs-toggle='modal' data-bs-target='#staticBackdrop'
     class="btn btn-primary">Agregar Acta</a>
  </div>
  
  <h1 class="text-center display-4">Actas</h1>

  <div class="container-fluid d-flex justify-content-center my-5">


    <table class="table text-center">
        <thead class="table-dark">

            <tr>
                <th scope="col">N</th>
                <th scope="col">TEMA</th>
                <th scope="col">CITADA POR</th>
                <th scope="col">HORA INICIO</th>
                <th scope="col">HORA FIN</th>
                <th scope="col">FECHA</th>
                <th scope="col">PRESIDENTE</th>
                <th scope="col">LUGAR</th>
                <th scope="col">COMPROMISOS</th>
                <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody id="table">

    <?php

        include_once "/xampp/htdocs/desarrollo_web_php/controller/ControllerActas.php";

        $actas = new ControllerActas();

        $actas->Read();
            
        ?>

        </tbody>
    </table>
    </div>

  
     <!-- Inicio Modal Agregar -->
     <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Crear Acta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                <form action="/desarrollo_Web_php/ruteador.php?controller=actas&action=create" method="post">
                  
                    <input class="form-control mb-3" type="text" name="tema" placeholder="Tema" required>

                    <input class="form-control mb-3" type="text" name="citada_por" placeholder="citada por" required>

                    <label for="">
                Hora Inicio
                <input class="form-control mb-3" type="time" name="hora_inicio" required>
            </label>

            <label for="">
                Hora Fin
                <input class="form-control mb-3" type="time" name="hora_fin" required>
            </label>

            <label for="">
                Fecha
                <input class="form-control mb-3" type="date" name="fecha" required>
            </label>

            <input class="form-control mb-3" type="text" name="presidente" placeholder="Presidente de la Reunion" required>

            <input class="form-control mb-3" type="text" name="lugar" placeholder="Lugar" required>

            <input class="form-control mb-3" type="text" name="ordendia" placeholder="Orden del Dia" required>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <input name="btn" value="Guardar" type="submit" data-bs-dismiss="modal" class="btn btn-primary">
                </div>
    <!-- Fin Modal Editar -->
    </form> 


<!-- FOOTER -->

<?php include_once './View/base/footer.php';?>