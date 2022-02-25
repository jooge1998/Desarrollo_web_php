

<!-- HEADER -->

<?php include_once './View/base/header.php';?>


<!-- CONTENT -->


    <div class="container mt-3 d-flex justify-content-end">
        <a href="/desarrollo_web_php/View/actas.php" class="btn btn-primary">Ver Acta</a>
    </div>


    <div class="container mt-3 d-flex justify-content-center align-items-center text-center">
        <form action="/desarrollo_web_php/ruteador.php?controller=actas&action=create" method="POST" enctype="multipart/form-data">

            <h4 class="mb-3 ">Formulario Acta</h4>

            <input class="form-control mb-3" type="text" name="tema" placeholder="Tema" required>

            <input class="form-control mb-3" type="text" name="citada" placeholder="Citada por" required>

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

            <input type="submit" name="btn" value="Enviar" class="btn btn-primary my-2">       
        </form>
    </div>


<!-- tabla -->

    <div class="container d-flex justify-content-center">


        <table class="table text-center">
            <thead class="table-dark">

                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Contacto</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody id="table">
            <?php

                include_once "/xampp/htdocs/desarrollo_web_php/controller/ControllerParticipantes.php";

                $participantes = new ControllerParticipantes();

                $participantes->Read();
                    
            ?>

            </tbody>
        </table>
    </div>

      <!-- Button trigger modal -->

      <div class="d-flex justify-content-center my-2">
      <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Agregar Participantes
            </button>
</div>
      

 

    <!-- Inicio Modal Agregar -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Nuevo Participante</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                  
                    <input class="form-control mb-3" type="text" name="name" placeholder="Nombre" required>

                    <input class="form-control mb-3" type="text" name="cargo" placeholder="Cargo" required>

                    <input class="form-control mb-3" type="text" name="contacto" placeholder="Contacto" required>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <input name="salvar" value="Salvar" type="submit" onclick="peticion_ajax()" data-bs-dismiss="modal" class="btn btn-primary">
                </div>

                </form>

            </div>


        </div>
    </div>

    <!-- Fin Modal Agregar -->

    <!-- Inicio Modal Editar -->
    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Editar Participante</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                  
                    <input class="form-control mb-3" type="text" name="name" placeholder="Nombre" required>

                    <input class="form-control mb-3" type="text" name="cargo" placeholder="Cargo" required>

                    <input class="form-control mb-3" type="text" name="contacto" placeholder="Contacto" required>
               </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <input name="Editar" value="Editar" type="submit" onclick="editar()" data-bs-dismiss="modal" class="btn btn-primary">
                </div>
    <!-- Fin Modal Editar -->

    <script>
        check = document.getElementsByTagName('id')


    </script>


<!-- FOOTER -->

<?php include_once './View/base/footer.php';?>