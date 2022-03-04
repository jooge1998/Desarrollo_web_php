

<!-- HEADER -->

<?php include_once './base/header.php';?>


<!-- CONTENT -->

    <div class="container d-flex justify-content-center mt-5">


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

            
            <form action="/desarrollo_web_php/ruteador.php?controller=participantes&action=create" method="POST" enctype="multipart/form-data">

            <?php

                include_once "/xampp/htdocs/desarrollo_web_php/controller/ControllerParticipantes.php";

                $participantes = new ControllerParticipantes();

                $participantes->Read();
                    
            ?>
            </tbody>

                
        </table>
    </div>
    
    <div class="d-flex justify-content-center mt-5">

        <input type="submit" name="btn" value="Enviar" class="btn btn-primary my-2">  
    </div>
</form>
<!-- FOOTER -->

<?php include_once './base/footer.php';?>