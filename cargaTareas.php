<?php
include ('misFunciones.php');



$mysqli = conectaBBDD();


$id = $_POST['id'];
$nombre = $_POST['nombre'];


$resultado = $mysqli->query("SELECT * FROM tareas where id_grupo = $id order by id DESC   ");

//select * from grupos inner join  (select id_grupo from grupo_usuario where id_usuario = (select id from users where email = '$email') ) aux on (grupos.id = aux.id_grupo)
$numTareas = $resultado->num_rows;


$listaTareas = array();

for ($i = 0; $i < $numTareas; $i++) {

    $r = $resultado->fetch_array(); //leo una fila del resultado de la query
    $listaTareas[$i][0] = $r['id'];
    $listaTareas[$i][1] = $r['texto_tarea'];
    $listaTareas[$i][2] = $r['nombre'];
    $listaTareas[$i][3] = $r['id_grupo'];
}
?>
<div>
    <div id="cajaTituloGrupo"class="border border-white rounded d-flex flex-row" style="padding: 1%; border: 2px; margin-top: 1%"> 
        <div class="p-2" 
             <label id="nombreGrupo"> <?php echo $nombre ?> </label>
        </div>
        <div class="ml-auto p-2">
            <button  class="btn btn-dark border border-white rounded" onclick="cargaConfiguracion()">Configuracion</button>
        </div>
    </div>
    <div class="" style="margin-top: 2%">
    </div>
 
    <div id="cajaTareas" class=" list-group" >
           <div  class=" border border-bottom border-white rounded " >
        <button class="btn btn-outline-success border  bg-dark" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            nueva tarea
        </button>
    </div>

        <div class="collapse" id="collapseExample">
            <div class="card card-body bg-dark ">
                <div class="col">
                    <input  class="form-control" id="nombreTarea"type="text" style="height: 3px; width: 100px;float: left"  placeholder="Nueva Tarea">
                    <button class="btn btn-outline-success" onclick="nuevaTarea()" >añadir </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        var listaTareas = <?php echo json_encode($listaTareas) ?>;
        var numTareas = <?php echo $numTareas ?>;
        //id_grupo
        var _id = <?php echo $id ?>;


        function muestra() {
            //  <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="#">Dropdown link</a> <a class="dropdown-item" href="#">Dropdown link</a> </div>
            for (i = 0; i < numTareas; i++) {
                $("#cajaTareas").append(' <a id=""  onclick="contenidoTarea(' + listaTareas[i][0] + ')" class="list-group-item bg-dark" >' + listaTareas[i][1] + ' <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">\n\
    \n\'<a class="dropdown-item" href="#">Dropdown link</a><a class="dropdown-item" href="#">Dropdown link</a></div>  </a>');
            }


        }
        function cargaConfiguracion() {
            $('#cajaTareas').load('configuracionGrupos.php', {
                id: _id
            });
        }

        function contenidoTarea(_idTarea) {
            $("#tareas").load('cargaContenido.php', {
                idTarea: _idTarea
            });

        }
        function nuevaTarea() {
            var _titulo = $('#nombreTarea').val();
            var nombreGrupo = $('#nombreGrupo').text();
            $('#collapseExample').collapse('hide');
                    console.log("nombreGrupo"+nombreGrupo);

            
            $('#tareas').load('nuevaTarea.php', {
                titulo: _titulo,
                id: _id,
                nombre: nombreGrupo

            });
        }

        muestra();


    </script>