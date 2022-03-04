

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

            <input class="form-control mb-3" type="text" name="ordendia" placeholder="Orden del Dia" required>

            <input type="submit" name="btn" value="Enviar" class="btn btn-primary my-2">       
        </form>
    </div>

<!-- FOOTER -->

<?php include_once './View/base/footer.php';?>