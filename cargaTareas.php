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
        <div class="p-2" id="nombreGrupo">
            <?php echo $nombre ?>
        </div>
        <div class="ml-auto p-2">
            <button  class="btn btn-dark border border-white rounded" onclick="cargaConfiguracion()">Configuracion</button>
        </div>
    </div>
    <div class="" style="margin-top: 2%">
    </div>
    <div id="cajaTareas" class="  " >
          <div  class=" border border-bottom border-white rounded " >
        <a class=" align-content-lg-start ">Tarea</a> <button class="btn btn-dark border border-white rounded  bg-dark" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            añadir
        </button>
          </div>
        <div class="collapse" id="collapseExample">
            <div class="card card-body bg-dark ">
                   <div class="col">
                       <input  class="form-control" id="nombreTarea" style="height: 3px; width: 100px;float: left"  placeholder="Nueva Tarea">
                       <button class="btn btn-dark border border-white rounded" onclick="nuevaTarea()" >añadir </button>
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
            for (i = 0; i < numTareas; i++) {
                $("#cajaTareas").append(' <a id="" href="#" onclick="contenidoTarea(' + listaTareas[i][0] + ')" class="list-group-item bg-dark" >' + listaTareas[i][1] + '</a>');
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
          var nombreGrupo  = $('#nombreGrupo').val();
            $('#collapseExample').collapse('hide');
            $('#tareas').load('nuevaTarea.php',{
                 titulo:_titulo,
                 id: _id,
                 nombre: nombreGrupo
                 
             });
        }

        muestra();


    </script>