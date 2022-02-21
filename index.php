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

            <input class="form-control mb-3" type="text" name="compromisos" placeholder="compromiso" required>

            <input type="submit" name="btn" value="Enviar" class="btn btn-primary my-2" disabled="disabled">       
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

                <!-- codigo javascript -->

                <script>

                    var array = []
                    var i = 1;

                    function peticion_ajax() {

                        name = document.getElementsByName("name")[0].value
                        cargo = document.getElementsByName("cargo")[0].value
                        contacto = document.getElementsByName("contacto")[0].value

                        //guarda los datos en un json
                        var datos = {
                            "name": name,
                            "cargo": cargo,
                            "contacto": contacto,
                        }

                        // agg los datos a un array
                        array.push(datos)

                        console.log(array)

                        agg_datos_tabla(datos)

                        //elimina el atributo disable del boton enviar
                        document.getElementsByName('btn')[0].removeAttribute("disabled")

                        //document.getElementsByName('participantes')[0].value = JSON.stringify(array)

                        limpiar_campos()
                        /* peticion ajax */

                        /*   var formdata = new FormData();
                        formdata.append("name", name);
                        formdata.append("cargo", cargo);
                        formdata.append("contacto", contacto);
                        formdata.append("compromiso", compromiso);
                        formdata.append("responsabilidad", responsabilidad);

                        var requestOptions = {
                        method: 'POST',
                        body: formdata,
                        redirect: 'follow'
                        };

                        fetch("/desarrollo_Web/model/participantes.php", requestOptions)
                        .then(response => response.text())
                        .then(function(result) {

                            console.log(result)  
                        } )
                        .catch(error => console.error('error', error));
                    } */
                        }


                    // agrega los datos ingresados en el modal a la tabla
                    function agg_datos_tabla(datos) {

                        var fila = "<tr><td>" + i + "</td>" +
                            "<td>" + datos["name"] + "</td>" +
                            "<td>" + datos["cargo"] + "</td>" +
                            "<td>" + datos["contacto"] + "</td>" +
                            "<td>" + 
                            
                            "<div class='d-flex justify-content-center'> "+

                                "<input  class='btn btn-danger ' value='ELIMINAR' onclick='delete_dato("+(i=i-1)+")'>"+

                                "<input class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#staticBackdrop1' value='EDITAR'> "+

                            "</div>"
                            + "</td></tr>";


                        // crea un element html tipo tr
                        var tr = document.createElement("TR");

                        //le agrega contenido al elemento tr
                        tr.innerHTML = fila;

                        //lo inserta en la el tbody de la tabla
                        document.getElementById('table').appendChild(tr);
                        // aumenta el contador
                        i++;

                    }

                    function delete_dato(index){
                        console.log('funciona')
                        //array.shift()
                        array.splice(index,1)
                        document.getElementById('table').deleteRow(index-1)
                    }

                    //limpia los inputs de los formularios
                    function limpiar_campos() {
                        name = document.getElementsByName("name")[0].value = ""
                        cargo = document.getElementsByName("cargo")[0].value = ""
                        contacto = document.getElementsByName("contacto")[0].value = ""
                    }
                </script>

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
        


    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>