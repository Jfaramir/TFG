<?php
include 'misFunciones.php';

$texto_tarea = $_POST['texto_tarea'];
$nombre_ = $_POST['nombre'];

$resultado = $mysqli->query("INSERT INTO tareas (id, $texto_tarea, $nombre_, id_grupo)");
?>


<style>


    .blue
    {

        position:relative;// so that .modal & .modal-backdrop gets positioned relative to it
    }


    .modal, .modal-backdrop {
        position: absolute !important;
    }
    .modal-backdrop{
        opacity: 0 !important;
    }

</style>
<html>

    <div class="blue "id="formulario"style="padding: 15%; padding-top: 5%;height: 100%">

        <div class="">
            <label for="exampleFormControlInput1">Titulo de la tarea</label>
            <input type="text" class="form-control" id="caja_NuevaTarea" >
        </div>
        <br><br>
        <button id="botonModal" onclick="abreModal()">Agregar Tarea</button>
        
        <span id="alertas" class="label "></span>




        <!-- Modal -->
        <div id="myModal" class="modal fade bg-dark" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content" >
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body" id="nuevaTarea" style="height: 200px">     
                    </div>

                </div>

            </div>
        </div>




</html>
<script>

    function abreModal() {

        $("#myModal").modal("show");

        //appending modal background inside the blue div
        $('.modal-backdrop').appendTo('.blue');

        //remove the padding right and modal-open class from the body tag which bootstrap adds when a modal is shown
        $('body').removeClass("modal-open");
        $('body').css("padding-right", "");

    }

    function annadeTarea() {



    }
</script>
