<!-- HEADER -->

<?php
    include_once './View/base/header.php';
?>

    <!-- CONTENT -->


    <div class="container mt-3 d-flex justify-content-end">
        <a href="/desarrollo_web_php/View/actas.php" class="btn btn-primary">Ver Acta</a>
    </div>


    <div class="container mt-3 d-flex justify-content-center align-items-center text-center">
        
    <?php  foreach ($actas->getById($id) as $key => $value){ ?>

        <form action="/desarrollo_web_php/ruteador.php?controller=actas&action=update&id=<?php  echo $value->N_ACTA?>" method="POST" enctype="multipart/form-data">

            <h4 class="mb-3 ">Formulario Editar Acta</h4>


            <input class="form-control mb-3" type="text" name="tema"
             placeholder="Tema" value="<?php echo $value->TEMA ?>" required>

            <input class="form-control mb-3" type="text" name="citada" placeholder="Citada por" 
            value="<?php echo $value->CITADA_POR ?>" required>

            <label for="">
                Hora Inicio
                <input class="form-control mb-3" type="time" name="hora_inicio" value="<?php echo $value->HORA_INICIO ?>" required>
            </label>

            <label for="">
                Hora Fin
                <input class="form-control mb-3" type="time" name="hora_fin" value="<?php echo $value->HORA_FIN ?>" required>
            </label>

            <label for="">
                Fecha
                <input class="form-control mb-3" type="date" name="fecha" value="<?php echo $value->FECHA ?>" required>
            </label>

            <input class="form-control mb-3" type="text" name="presidente" placeholder="Presidente de la Reunion"  value="<?php echo $value->PRESIDENTE ?>" required>

            <input class="form-control mb-3" type="text" name="lugar" placeholder="Lugar" value="<?php echo $value->LUGAR ?>" required>

            <input class="form-control mb-3" type="text" name="ordendia" placeholder="Orden del Dia" value="<?php echo $value->ORDEN_DIA ?>" required>

            <input type="submit" name="Editar" value="Editar" class="btn btn-primary my-2">       
        </form>

        <?php } ?>
    </div>
<!-- FOOTER -->

<?php
    include_once './View/base/footer.php';
?>