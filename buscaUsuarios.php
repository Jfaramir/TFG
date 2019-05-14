<?php
include ('misFunciones.php');


$param = $_POST['param'];
$mysqli = conectaBBDD();
if ($param == '') {
    $busquedaUsuarios = $mysqli->query("select * from users");
} else {
    $busquedaUsuarios = $mysqli->query("select * from users where first_name like '%$param%'");
}
$numUsuarios = $busquedaUsuarios->num_rows;
$listaUsuarios = array();
for ($i = 0; $i < $numUsuarios; $i++) {

    $r = $busquedaUsuarios->fetch_array();  
    $listaUsuarios[$i][0] = $r['id'];
    $listaUsuarios[$i][1] = $r['oauth_provider'];
    $listaUsuarios[$i][2] = $r['oauth_uid'];
    $listaUsuarios[$i][3] = $r['first_name'];
    $listaUsuarios[$i][4] = $r['last_name'];
    $listaUsuarios[$i][5] = $r['email'];
    $listaUsuarios[$i][6] = $r['gender'];
    $listaUsuarios[$i][7] = $r['locale'];
    $listaUsuarios[$i][7] = $r['picture'];
    $listaUsuarios[$i][7] = $r['link'];}
?>
<html>
    <div id="usuariosbusca">

    </div>




    <script>
        var listaUsuarios = <?php echo json_encode($listaUsuarios) ?>;
        var numUsuarios = <?php echo $numUsuarios ?>;
        for (i = 0; i < numUsuarios; i++) {
            $("#usuariosbusca").append(' <a id="" class="list-group-item list-group-item-action bg-dark " onclick="añadeUsuario(' + listaUsuarios[i][0] + ')">' + listaUsuarios[i][3] + '</a>');
        }
        function añadeUsuario() {

        }

    </script>
</html>

