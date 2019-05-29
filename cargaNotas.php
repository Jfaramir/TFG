<?php
$idTarea = $_POST['idTarea'];
?>

<html>

    <!--aqui se van a cargar las notas -->
    <div id="cajaNotas" style="float: left">  

    </div>
    <!--aqui se van a cargar el calendario -->
    <div id="cajaCalendario"> 
        
    </div>

    <div id="cajaCosa">


    </div>









    <script>

        var _idTarea = <?php $idTarea ?>
//funcion   que carga las notas el la caja html
        function cargaNotas() {
            ('#cajaNotas').load('notas.php', {
                idTarea: _idTarea
            });
        }
        
    
    
    
    
    
    
    
    
    
    
    
   
    
    function cargaCalendario() {
            ('#cajaCalendario').load('calendario.php', {
                idTarea: _idTarea
            });
        }

     
    </script>   
</html>



