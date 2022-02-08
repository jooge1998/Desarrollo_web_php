<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <div class="container mt-5 d-flex justify-content-end">

    <a href="index.php" class="btn btn-primary">Agregar Acta</a>
  </div>

  <div class="container d-flex justify-content-center my-5">

    <table class="table text-center">
        <thead class="table-dark">

            <tr>
                <th scope="col">TEMA</th>
                <th scope="col">CITADA POR</th>
                <th scope="col">HORA INICIO</th>
                <th scope="col">HORA FIN</th>
                <th scope="col">FECHA</th>
                <th scope="col">PRESIDENTE</th>
                <th scope="col">COMPROMISOS</th>
                <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody id="table">

    <?php

        include_once "./model/actas.php";

        $crud = new Actas();

        foreach ($crud->getAll() as $key => $value) {

          echo "<tr>";
          echo  "<td >" . $value->TEMA . "</td>";
          echo  "<td >" . $value->CITADA_POR . "</td>";
          echo  "<td >" . $value->HORA_INICIO . "</td>";
          echo  "<td >" . $value->HORA_FIN . "</td>";
          echo  "<td >" . $value->FECHA . "</td>";
          echo  "<td >" . $value->PRESIDENTE . "</td>";
          echo  "<td >" . $value->COMPROMISOS . "</td>";

          echo  "<td>
          <div class='d-flex justify-content-center'>

          <a href='model/participantes.php?id=$value->N_ACTA' class='btn btn-danger mx-2'>ELIMINAR</a> 

          <a class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#staticBackdrop1'> EDITAR</a>

          </div>
          </td>";
          echo "</tr>";
      }

            
        ?>

        </tbody>
    </table>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>