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
            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
            <div id="cajaAñadirUsuario" class>
                <a onclick="">agregar usuario +</a>
                
            </div>
         
            </div>
        
   
</form>


<script>

</script>   
</html>


