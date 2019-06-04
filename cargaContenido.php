<?php
$idTarea = $_POST['idTarea'];
?>

<html>
    <div class="btn-group" role="group" aria-label="Basic example" style="margin-left: 40%; margin-bottom: 2%">
  <button type="button" class="btn btn-secondary" onclick="cargaContenido(1);">Calendario</button>
  <button type="button" class="btn btn-secondary" onclick="cargaContenido(2);">Notas</button>
  <button type="button" class="btn btn-secondary">Archivos</button>
    </div>
  
    <!--aqui se van a cargar el calendario -->
    <div id="cajaCalendario"> 
        
    </div>

   









    <script>
        
           
          function cargaContenido(condicion){
              if(condicion === 1){
                   $('#cajaCalendario').load('calendario.php');

              }
             if(condicion ===2){
                  $('#cajaCalendario').load('notas.php');
                 
             }
             if(condicion === 3){
                 
             }
          } 
       cargaContenido(1);
           
        
        
    
    
    
    
    
    
    
    
    
    
    
   

     
    </script>   
</html>


