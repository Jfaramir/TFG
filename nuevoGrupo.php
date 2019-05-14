<?php

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
        <div id="myModal" class="modal fade bg-dark" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <input id="cajabusqueda" class="form-control"  placeholder="Search" aria-label="Search" onkeyup="cargaUsuarios()" style="margin-left: 5%">

                    </div>
                    <div class="modal-body" id="usuarios">
                        
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
           cargaUsuarios();
        }
     
    
    function  cargaUsuarios(){
          var _param = $('#cajabusqueda').val();
          console.log(_param);
          $('#usuarios').load('buscaUsuarios.php',{
          param: _param
          
        
          });    
        }
       




    </script>   
</html>


