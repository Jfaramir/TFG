<?php
include ('misFunciones.php');



$mysqli = conectaBBDD();

$consultaUsuarios = $mysqli->query("select * from users ");
$numUsuarios = $consultaUsuarios->num_rows;


$listaUsuarios = array();

for ($i = 0; $i < $consultaUsuarios; $i++) {
    
    $r = $consultaUsuarios->fetch_array(); //leo una fila del resultado de la query
    $listaGrupos[$i][0] = $r['id'];
    $listaGrupos[$i][1] = $r['nombre'];
    $listaGrupos[$i][2] = $r['imagen'];
    $listaGrupos[$i][3] = $r['id_admin'];

    
}
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
            <label for="exampleFormControlInput1">Nombre del Grupo</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" >
        </div>

        <br><br>
        <button id="botonModal" onclick="abreModal()">Agregar usuario</button>






        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                        <p>Some text in the modal.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>


    </div>




    <script>
        
           function abreModal() {

                $("#myModal").modal("show");

                //appending modal background inside the blue div
                $('.modal-backdrop').appendTo('.blue');

                //remove the padding right and modal-open class from the body tag which bootstrap adds when a modal is shown
                $('body').removeClass("modal-open");
                $('body').css("padding-right", "");
            }
            function cargaUsuarios(){
           var listaUsuarios= <?php echo json_encode($listaUsuarios) ?>;
            var numUsuarios = <?php echo $numUsuarios ?>;    
            }

        


    </script>   
</html>


