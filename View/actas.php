<!-- HEADER -->

<?php
    include_once './base/header.php';
?>


<!-- CONTENT -->

  <div class="container mt-5 d-flex justify-content-end">

    <a href="/desarrollo_web_php/index.php" class="btn btn-primary">Agregar Acta</a>
  </div>

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

  
     <!-- Inicio Modal Editar -->
     <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Editar Acta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                <form id='formEdit' action="" method="post">
                  
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

            <input class="form-control mb-3" type="text" name="compromisos" placeholder="compromiso" required>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <input name="Editar" value="Editar" type="submit" data-bs-dismiss="modal" class="btn btn-primary">
                </div>
    <!-- Fin Modal Editar -->
    </form> 

    <script>
          
          function enviar(id){

            const n_acta = document.getElementById('table').childNodes[id].childNodes[9].childNodes[1].childNodes[1].getAttribute("href").split('=')[3];

            const formEdit = document.getElementById('formEdit');

// le agrega la ruta al action del formulario
            formEdit.setAttribute('action','/desarrollo_Web_php/ruteador.php?controller=actas&action=update&id='+n_acta);
            //console.log(id)
                      
            document.getElementsByName('tema')[0].value = document.getElementById('table').childNodes[id].childNodes[1].innerHTML;
            document.getElementsByName('citada_por')[0].value = document.getElementById('table').childNodes[id].childNodes[2].innerHTML;
            document.getElementsByName('hora_inicio')[0].value = document.getElementById('table').childNodes[id].childNodes[3].innerHTML;
            document.getElementsByName('hora_fin')[0].value = document.getElementById('table').childNodes[id].childNodes[4].innerHTML;
            document.getElementsByName('fecha')[0].value = document.getElementById('table').childNodes[id].childNodes[5].innerHTML;
            document.getElementsByName('presidente')[0].value = document.getElementById('table').childNodes[id].childNodes[6].innerHTML;
            document.getElementsByName('lugar')[0].value = document.getElementById('table').childNodes[id].childNodes[7].innerHTML;
            document.getElementsByName('compromisos')[0].value = document.getElementById('table').childNodes[id].childNodes[8].innerHTML;
            
          }

        </script>



<!-- FOOTER -->

<?php
    include_once './base/footer.php';
?>