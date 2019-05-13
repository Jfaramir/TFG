<?php
include ('misFunciones.php');



$mysqli = conectaBBDD();

$consulta = $mysqli->query("select * from users ");
?>
<html>

    <form style="padding: 15%; padding-top: 5%">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nombre del Grupo</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
            <br><br>
            <button class="btn btn-info " data-toggle="modal" data-target="#exampleModal" onclick="agregaModal()">Agregar Usuario </button>
            <div id="cajaAñadirUsuario" class>
                
                
            </div>
         
            </div>
        
   
</form>
    <!--Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    
    


<script>
    function agregaModal(){
        
    }

</script>   
</html>


