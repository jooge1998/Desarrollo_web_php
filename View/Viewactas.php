<?php

/* base de datos */

include_once('/xampp/htdocs/desarrollo_web_php/database/database.php');


echo " <style>

.col , .col-1{
    border: 1px solid black;
}
</style>";

include_once './View/base/header.php';

?>

   
<!-- CONTENT -->


  <div class="container my-5">

    <div class="row text-center" style="background-color: gray;">
        <div class="col py-2">

        ACTA DE REUNIÓN DE TRABAJO
        </div>

    </div>

    <?php  foreach ($actas->getById($_GET['id']) as $key => $value){ ?>    

    <div class="row " >
        <div class="col py-2">
        Temas: 
        <?php echo $value->TEMA ?>
        </div>
        <div class="col py-2">

        N Acta: <?php echo $value->N_ACTA ?>

        </div>

    </div>

    <div class="row ">
        <div class="col py-2">

        Citada por: <?php echo $value->CITADA_POR ?>
        </div>
        <div class="col py-2">

        Fecha:  <?php echo $value->FECHA ?>
        </div>
        <div class="col py-2">

        Hora inicio:  <?php echo $value->HORA_INICIO ?>
        </div>
        <div class="col py-2">

        Hora Fin: <?php echo $value->HORA_FIN ?>
        </div>

    </div>

    <div class="row " >
        <div class="col py-2">
        Presidente de la reunión: <?php echo $value->PRESIDENTE ?>
        </div>
        <div class="col py-2">
        Lugar: <?php echo $value->LUGAR ?>
        </div>

    </div>

    <!-- 2 PARTE -->

    <div class="row mt-4 text-center">
        <div class="col py-2" style="background-color: gray;">PARTICIPANTES</div>

    </div>

    <div class="row ">
        <div class="col-1 py-2" >N</div>
        <div class="col py-2" >NOMBRE</div>
        <div class="col py-2" >CARGO</div>
        <div class="col py-2" >CONTACTO</div>
        <div class="col py-2" >COMPROMISO</div>
        <div class="col py-2" >RESPONSABILIDADES</div>

    </div>

    <div class="row">
        <div class="col-1 py-2" >1</div>
        <div class="col py-2" >1</div>
        <div class="col py-2" >1</div>
        <div class="col py-2" >1</div>
        <div class="col py-2" >1</div>
        <div class="col py-2" >1</div>

    </div>

    <div class="row ">
        <div class="col-1 py-2">2</div>
        <div class="col py-2">1</div>
        <div class="col py-2">1</div>
        <div class="col py-2">1</div>
        <div class="col py-2">1</div>
        <div class="col py-2">1</div>

    </div>

    <div class="row ">
        <div class="col-1 py-2" >3</div>
        <div class="col py-2" >1</div>
        <div class="col py-2" >1</div>
        <div class="col py-2" >1</div>
        <div class="col py-2" >1</div>
        <div class="col py-2" >1</div>

    </div>

    <div class="row ">
        <div class="col-1 py-2" >4</div>
        <div class="col py-2" >1</div>
        <div class="col py-2" >1</div>
        <div class="col py-2" >1</div>
        <div class="col py-2" >1</div>
        <div class="col py-2" >1</div>

    </div>

    <div class="row ">
        <div class="col-1 py-2" >5</div>
        <div class="col py-2" >1</div>
        <div class="col py-2" >1</div>
        <div class="col py-2" >1</div>
        <div class="col py-2" >1</div>
        <div class="col py-2" >1</div>

    </div>


    <!-- 3 PARTE -->


    <div class="row mt-4 text-center">
        <div class="col py-2" style="background-color: gray">ORDEN DEL DIA</div>
    </div>

    <div class="row ">
        <div class="col-1 py-2" >1</div>
        <div class="col py-2" >1</div>
    </div>
    <div class="row ">
        <div class="col-1 py-2" >2</div>
        <div class="col py-2" >1</div>
    </div>
    <div class="row ">
        <div class="col-1 py-2" >3</div>
        <div class="col py-2" >1</div>
    </div>
    <div class="row">
        <div class="col-1  py-2" >4</div>
        <div class="col py-2" >1</div>
    </div>
    <div class="row">
        <div class="col-1 py-2" >5</div>
        <div class="col py-2" >1</div>
    </div>

  </div>

  <?php } ?>


<!-- footer -->

<?php
include_once './View/base/footer.php';

?>