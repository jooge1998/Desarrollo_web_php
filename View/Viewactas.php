<?php

ob_start();

include_once('/xampp/htdocs/desarrollo_web_php/database/database.php');

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="\Desarrollo_web_php\View\css\bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 -->
    <title>Hello, world!</title>

    <style>

        .col , .col-1{
            border: 1px solid black;
        }
    </style>
  </head>
  <body>
   


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




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>





<?php

$html = ob_get_clean();
echo $html;


require_once '../libreria/dompdf/autoload.inc.php';

// reference the Dompdf namespace
/* use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();


$options = $dompdf->getOptions();
$options->set(array('isRemoteEnable'=> true));
$dompdf->setOptions($options);


$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
#$dompdf->setPaper('A4', 'landscape');
$dompdf->setPaper('letter');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("archivo.pdf",array('Attachment'=>false)); */