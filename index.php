<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Formulario Acta</title>
  </head>
  <body>
      <div class="container mt-5 d-flex justify-content-center align-items-center text-center">
        <form action="" method="POST" enctype="multipart/form-data">



        <h4 class="mb-3 ">Formulario Acta</h4>

        <input class="form-control mb-3" type="text" name="tema" placeholder="Tema" required>

        <input class="form-control mb-3" type="text" name="citada" placeholder="Citada por" required>

        <label for="">
            Hora Inicio
            <input class="form-control mb-3" type="time" name="hora_inicio"  required>
        </label>

        <label for="">
            Hora Fin
            <input class="form-control mb-3" type="time" name="hora_fin"  required>
        </label>
        
        <label for="">
            Fecha
            <input class="form-control mb-3" type="date" name="fecha" required>
        </label>

        <input class="form-control mb-3" type="text" name="presidente" placeholder="Presidente de la Reunion" required>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Agregar Participantes
        </button>
        
    </form>
    </div>
    
    <div class="container d-flex justify-content-center">

              
        <table class="table text-center">
            <thead class="table-dark">
            
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Contacto</th>
                    <th scope="col">Compromisos</th>
                    <th scope="col">Responsabilidades</th>
                </tr>
            </thead>
                <tbody>
                
            
                
                </tbody>
        </table>
            
           
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
       <form action="#" method="post">

       <input class="form-control mb-3" type="text" name="name" placeholder="Nombre" required>

        <input class="form-control mb-3" type="text" name="cargo" placeholder="Cargo" required>

        <input class="form-control mb-3" type="text" name="compromiso" placeholder="Compromiso" required>

        <input class="form-control mb-3" type="text" name="responsabilidad" placeholder="Responsabilidad" required>

     
</form>
    </div>
    

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <input name="salvar" value="Salvar" type="submit" onclick="peticion_ajax()" class="btn btn-primary">
    </div>

    <script>

        function peticion_ajax(){

            //console.log("funciona")

            name = document.getElementsByName("name")[0].value
            cargo = document.getElementsByName("cargo")[0].value
            compromiso = document.getElementsByName("compromiso")[0].value
            responsabilidad = document.getElementsByName("responsabilidad")[0].value
            
            /* peticion ajax */
            var formdata = new FormData();
            formdata.append("name", name);
            formdata.append("cargo", cargo);
            formdata.append("compromiso", compromiso);
            formdata.append("responsabilidad", responsabilidad);

            var requestOptions = {
            method: 'POST',
            body: formdata,
            redirect: 'follow'
            };

            fetch("/desarrollo_Web/model/participantes.php", requestOptions)
            .then(response => response.text())
            .then(result => console.log(result))
            .catch(error => console.log('error', error));
        }
    </script>



    </div>
  </div>
</div>

<!-- Fin Modal Agregar -->








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>


